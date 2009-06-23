package com.mycitybikes.android;

import java.io.InputStream;
import java.util.List;

import javax.xml.parsers.DocumentBuilder;
import javax.xml.parsers.DocumentBuilderFactory;

import org.w3c.dom.Document;
import org.w3c.dom.Element;
import org.w3c.dom.NamedNodeMap;
import org.w3c.dom.Node;
import org.w3c.dom.NodeList;

import android.content.Context;
import android.util.Log;

import com.mycitybikes.android.model.City;
import com.mycitybikes.android.model.StationInfoBuilder;
import com.mycitybikes.android.model.StationLocation;
import com.mycitybikes.android.model.StationStatus;
import com.mycitybikes.android.util.Utils;

public class JCDecaux {
	public static void loadParisBikeLocations(Context context,
			List<StationLocation> stationLocations) {
		try {
			InputStream is = Utils.readContent(
					"http://www.velib.paris.fr/service/carto", 5000);
			loadParisBikeLocations(is, stationLocations, Constants.CITY_PARIS);
		} catch (Exception e) {
			Log.e(Constants.TAG,
					"Failed to load Paris bike station locations: "
							+ e.getMessage(), e);
		}
	}

	static void loadParisBikeLocations(InputStream is,
			List<StationLocation> stationLocations, City city) {

		DocumentBuilderFactory dbf = DocumentBuilderFactory.newInstance();
		DocumentBuilder db;
		Document dom;
		try {
			db = dbf.newDocumentBuilder();
			dom = db.parse(is);
		} catch (Exception e) {
			throw new IllegalStateException("Unexpected parsing issue.", e);
		}

		NodeList markers;
		markers = dom.getElementsByTagName("marker");
		for (int j = 0; j < markers.getLength(); j++) {
			Node markerNode = markers.item(j);
			/*
			 * if (!"marker".equals(markerNode.getNodeName())) { throw new
			 * IllegalArgumentException("Unexpected XML:" +
			 * markerNode.getNodeName()); }
			 */

			Integer id = null;
			String description = null;
			Double latitude = null;
			Double longitude = null;

			// FIXME refactor model as to attach status to station
			StationStatus bikeStationStatus = new StationStatus();

			NamedNodeMap markerAttributes = markerNode.getAttributes();
			Node n;
			// markerAttributes.getNamedItem("name");

			n = markerAttributes.getNamedItem("number");
			id = new Integer(n.getNodeValue());

			n = markerAttributes.getNamedItem("address");
			// description = child.getNodeValue();

			n = markerAttributes.getNamedItem("fullAddress");
			description = n.getNodeValue();

			n = markerAttributes.getNamedItem("lat");
			latitude = new Double(n.getNodeValue());

			n = markerAttributes.getNamedItem("lng");
			longitude = new Double(n.getNodeValue());

			n = markerAttributes.getNamedItem("open");
			bikeStationStatus.setOnline("1".equals(n.getNodeValue()));

			// markerAttributes.getNamedItem("bonus");

			final StationLocation stationLocation = new StationLocation(id,
					city, description, longitude, latitude);

			stationLocation.setStationInfoBuilder(new StationInfoBuilder() {

				@Override
				public String buildStationInfo() {
					return JCDecaux.getStationInfo(stationLocation);
				}

			});
			stationLocations.add(stationLocation);
			Log.v(Constants.TAG, "loaded stationLocation: " + stationLocation);
		}
	}

	static StationStatus readBikeStationStatus(int id) {
		try {
			InputStream is = Utils.readContent(
					"http://www.velib.paris.fr/service/stationdetails/" + id,
					5000);
			return parseStatus(is);
		} catch (RuntimeException e) {
			Log.e(Constants.TAG,
					"Failed to load Paris bike station locations: "
							+ e.getMessage());
			throw e;
		}
	}

	static StationStatus parseStatus(InputStream is) {
		DocumentBuilderFactory dbf = DocumentBuilderFactory.newInstance();
		DocumentBuilder db;
		Document dom;
		try {
			db = dbf.newDocumentBuilder();
			dom = db.parse(is);
		} catch (Exception e) {
			throw new IllegalStateException("Unexpected parsing issue.", e);
		}

		Node stationNode = dom.getDocumentElement();
		if (!"station".equals(stationNode.getNodeName())) {
			throw new IllegalArgumentException("Unexpected XML:"
					+ stationNode.getNodeName());
		}
		StationStatus bikeStationStatus = new StationStatus();
		NodeList stationChildren = stationNode.getChildNodes();
		for (int i = 0; i < stationChildren.getLength(); i++) {
			Node child = stationChildren.item(i);
			if (child.getNodeType() != Element.ELEMENT_NODE) {
				continue;
			}
			if ("available".equals(child.getNodeName())) {
				if (child.getFirstChild() == null) {
					// system offline
					bikeStationStatus.setOnline(false);
					break;
				}
				bikeStationStatus.setOnline(true);
			}
			if ("available".equals(child.getNodeName())) {
				bikeStationStatus.setReadyBikes(new Integer((child
						.getFirstChild().getNodeValue())));
			} else if ("free".equals(child.getNodeName())) {
				bikeStationStatus.setEmptyLocks(new Integer(child
						.getFirstChild().getNodeValue()));

				// FIXME treat total and ticket
			} else if ("total".equals(child.getNodeName())) {
			} else if ("ticket".equals(child.getNodeName())) {
			} else {
				throw new IllegalArgumentException(
						"Unexpected format of the XML station status "
								+ child.getNodeName());
			}
		}
		return bikeStationStatus;
	}

	// FIXME refactor this code with ClearChannel
	public static String getStationInfo(StationLocation stationLocation) {
		if (stationLocation.getCity().equals("Paris")) {
			return getParisStationInfo(stationLocation);
		} else {
			throw new IllegalStateException("" + stationLocation);
		}
	}

	public static String getParisStationInfo(StationLocation stationLocation) {
		int stationIndex = stationLocation.getId();
		String result;
		try {
			StationStatus status = readBikeStationStatus(stationIndex);
			if (!status.isOnline()) {
				result = stationLocation.getDescription()
						+ "\n\n(no station information)";
			} else {
				result = stationLocation.getDescription() + "\n\n"
						+ status.getReadyBikes() + " bike(s)\n"
						+ status.getEmptyLocks() + " slot(s)";
			}
		} catch (Exception e) {
			result = "Error: station information not available";
		}
		return result;
	}

}
