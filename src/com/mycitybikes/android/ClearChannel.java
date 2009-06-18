package com.mycitybikes.android;

import java.io.IOException;
import java.io.InputStream;
import java.io.UnsupportedEncodingException;
import java.util.List;

import javax.xml.parsers.DocumentBuilder;
import javax.xml.parsers.DocumentBuilderFactory;

import org.apache.http.HttpResponse;
import org.apache.http.client.HttpClient;
import org.apache.http.client.methods.HttpGet;
import org.apache.http.impl.client.DefaultHttpClient;
import org.apache.http.params.BasicHttpParams;
import org.apache.http.params.HttpConnectionParams;
import org.apache.http.params.HttpParams;
import org.w3c.dom.Document;
import org.w3c.dom.Element;
import org.w3c.dom.Node;
import org.w3c.dom.NodeList;

import android.content.Context;
import android.content.res.AssetManager;
import android.util.Log;

import com.mycitybikes.android.model.BikeStationStatus;
import com.mycitybikes.android.model.StationLocation;
import com.mycitybikes.android.util.Utils;

/**
 * Class to perform ClearChannel specific bike station operations. We only support Oslo so
 * far.
 * 
 * @author jerome
 */
public class ClearChannel {

	public static void loadOsloBikeLocations(Context context, List<StationLocation> stationLocations) {
		try {
			AssetManager assets = context.getAssets();
			InputStream is = assets.open("oslo2.xml");
			loadStationLocationsAsset(is, stationLocations, "Oslo", "Norway");

		} catch (Exception e) {
			Log.e(Constants.TAG, "Failed to load Oslo bike station locations: " + e.getMessage());
			e.printStackTrace();
		}
	}

	public static void loadStockholmBikeLocations(Context context, List<StationLocation> stationLocations) {
		try {
			AssetManager assets = context.getAssets();
			InputStream is = assets.open("stockholm.xml");
			loadStationLocationsAsset(is, stationLocations, "Stockholm", "Sweeden");

		} catch (Exception e) {
			Log.e(Constants.TAG, "Failed to load Oslo bike station locations: " + e.getMessage());
			e.printStackTrace();
		}
	}

	static void loadStationLocationsAsset(InputStream is, List<StationLocation> stationLocations, String city, String country) throws IOException {
        DocumentBuilderFactory dbf = DocumentBuilderFactory.newInstance();
        DocumentBuilder db;
        Document dom;
		try {
			db = dbf.newDocumentBuilder();
	        dom = db.parse(is);
		} catch (Exception e) {
			throw new IllegalStateException("Unexpected parsing issue.", e);
		}
    
    Node stationsNode = dom.getFirstChild();
    if (!"stations".equals(stationsNode.getNodeName())) {
    	throw new IllegalArgumentException("Unexpected XML:" + stationsNode.getNodeName());
    }
    Integer id = null;
    String description= null;
    Double latitude = null;
    Double longitude = null;
    NodeList stationsChildren = stationsNode.getChildNodes();
    for (int i = 0; i < stationsChildren.getLength(); i++) {
    	Node stationNode = stationsChildren.item(i);
    	if (stationNode.getNodeType() != Element.ELEMENT_NODE) {
    		 continue;
    	}
    	if (!"station".equals(stationNode.getNodeName())) {
      	throw new IllegalArgumentException("Unexpected XML:" + stationNode.getNodeName());
    	}
      NodeList stationChildren = stationNode.getChildNodes();
      for (int j = 0; j < stationChildren.getLength(); j++) {
        Node child = stationChildren.item(j);
      	if (child.getNodeType() != Element.ELEMENT_NODE) {
     		  continue;
     	  }
	    	if ("description".equals(child.getNodeName())) {
	    		description = child.getFirstChild().getNodeValue().trim();
	    	} else if ("longitude".equals(child.getNodeName())) {
	    		longitude = new Double(child.getFirstChild().getNodeValue());
	    	} else if ("latitude".equals(child.getNodeName())) {
	    		latitude = new Double(child.getFirstChild().getNodeValue());
	    	} else if ("id".equals(child.getNodeName())) {
	    		id = new Integer(child.getFirstChild().getNodeValue());
	    	} else {
	    		throw new IllegalArgumentException("Unexpected format of the XML station status " + child.getNodeName());
	    	}
      }

    	final StationLocation stationLocation = new StationLocation(id, city, country, description, longitude, latitude);
			stationLocations.add(stationLocation);
			Log.v(Constants.TAG, "loaded stationLocation: " + stationLocation);
    }
	}
	
	public static BikeStationStatus readBikeStationStatus(String httpUrl) {
		try {
			HttpParams params = new BasicHttpParams();
			HttpConnectionParams.setConnectionTimeout(params, 5000);
			HttpClient httpclient = new DefaultHttpClient(params);

			HttpGet httpGet = new HttpGet(httpUrl);
			HttpResponse response = httpclient.execute(httpGet);
			return parseStatus(response.getEntity().getContent());
			// listener.newWikiItems(wi);
		} catch (Exception e) {
			throw new RuntimeException("Unable to read/parse status information", e);
		}
	}

	static BikeStationStatus parseStatus(InputStream content) throws IOException {
		String s = Utils.parseISToString(content);
		s = s.substring(s.indexOf("<string"));

		int start = s.indexOf(">") + 1;
		int end = s.indexOf("</", start);
		String encodedContent = s.substring(start, end);
		String decodedContent = decode(encodedContent);
		
		Log.v(Constants.TAG, "decodedContent: " + decodedContent);

		InputStream is;
		try {
			is = new java.io.ByteArrayInputStream(decodedContent.getBytes("UTF-8"));
		} catch (UnsupportedEncodingException e) {
			throw new IllegalStateException("Unexpected issue.", e);
		}

		return parseBikeStationStatusDOM(is);
	}

	/*
	private static BikeStationStatus parseBikeStationStatusXstream(InputStream is) {
		XStream xstream = new XStream(new DomDriver());
		xstream.alias("station", BikeStationStatus.class);
		xstream.aliasAttribute(BikeStationStatus.class, "readyBikes", "ready_bikes");
		xstream.aliasAttribute(BikeStationStatus.class, "emptyLocks", "empty_locks");
		// xstream.addImplicitCollection(WikiItems.class, "entries");

		BikeStationStatus bikeStationStatus = (BikeStationStatus) xstream.fromXML(is);
		return bikeStationStatus;
	}
	*/

	private static BikeStationStatus parseBikeStationStatusDOM(InputStream is) {
    DocumentBuilderFactory dbf = DocumentBuilderFactory.newInstance();
    DocumentBuilder db;
    Document dom;
		try {
			db = dbf.newDocumentBuilder();
	    dom = db.parse(is);
		} catch (Exception e) {
			throw new IllegalStateException("Unexpected parsing issue.", e);
		}
    
    Node stationNode = dom.getFirstChild();
    if (!"station".equals(stationNode.getNodeName())) {
    	throw new IllegalArgumentException("Unexpected XML:" + stationNode.getNodeName());
    }
		BikeStationStatus bikeStationStatus = new BikeStationStatus();
    NodeList stationChildren = stationNode.getChildNodes();
    for (int i = 0; i < stationChildren.getLength(); i++) {
    	Node child = stationChildren.item(i);
    	if ("description".equals(child.getNodeName())) {
    		String description = child.getFirstChild().getNodeValue();
    		int splitIndex = description.indexOf('-'); 
    		if (splitIndex != -1) {
    			description = description.substring(splitIndex + 1); 
    		}
    		bikeStationStatus.setDescription(description);
    	} else if ("longitute"/*sic...*/.equals(child.getNodeName())) {
    		bikeStationStatus.setLongitude(new Double(child.getFirstChild().getNodeValue()));
    	} else if ("latitude".equals(child.getNodeName())) {
    		bikeStationStatus.setLatitude(new Double(child.getFirstChild().getNodeValue()));
    	} else if ("online".equals(child.getNodeName())) {
    		bikeStationStatus.setOnline("1".equals(child.getFirstChild().getNodeValue()));
    	} else if ("empty_locks".equals(child.getNodeName())) {
    		bikeStationStatus.setEmptyLocks(new Integer(child.getFirstChild().getNodeValue()));
    	} else if ("ready_bikes".equals(child.getNodeName())) {
    		bikeStationStatus.setReadyBikes(new Integer(child.getFirstChild().getNodeValue()));
    	} else {
    		throw new IllegalArgumentException("Unexpected format of the XML station status " + child.getNodeName());
    	}
    }

		return bikeStationStatus;
	}
	
	public static String getStationInfo(StationLocation stationLocation) {
	    if (stationLocation.getCity().equals("Oslo")) {
	    	return getOsloStationInfo(stationLocation.getId());
	    } else if (stationLocation.getCity().equals("Stockholm")) {
	    	return stationLocation.getDescription() + "\n\n(no live data for Stockholm)";
	    } else {
	    	throw new IllegalStateException("" + stationLocation);
	    }
	}

	public static String getOsloStationInfo(int stationIndex) {
		String result;
		try {
			BikeStationStatus status = readBikeStationStatus(stationIndex);
			if (!status.isOnline()) {
				result = status.getDescription() + "\n\n(no station information)";
			} else {
			  result = status.getDescription() + "\n\n" + status.getReadyBikes() + " bike(s)\n" + status.getEmptyLocks() + " slot(s)";
			}
		} catch (Exception e) {
			result = "Error: station information not available";
		}
		return result;
	}

	public static BikeStationStatus readBikeStationStatus(int stationId) {
		return ClearChannel.readBikeStationStatus("http://smartbikeportal.clearchannel.no/public/mobapp/maq.asmx/getRack?id=" + stationId);
	}

	private static String decode(String content) {
		content = content.replaceAll("&lt;", "<");
		content = content.replaceAll("&gt;", ">");
		return content;
	}

}
