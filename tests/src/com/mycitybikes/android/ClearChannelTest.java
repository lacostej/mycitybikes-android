package com.mycitybikes.android;

import java.io.ByteArrayInputStream;
import java.io.IOException;
import java.io.InputStream;
import java.io.UnsupportedEncodingException;
import java.util.ArrayList;
import java.util.List;

import android.test.AndroidTestCase;
import android.util.Log;

import com.mycitybikes.android.model.BikeStationStatus;
import com.mycitybikes.android.model.GeoPosition;
import com.mycitybikes.android.model.StationLocation;

public class ClearChannelTest extends AndroidTestCase {

	/*
	 * private final String OSLO_CSV = "#index,lat,lng,id\n" +
	 * "0,59.92786125852981,10.709009170532226,1\n" +
	 * "1,59.92805479800621,10.708515644073486,2\n";
	 */

	private final String OSLO_XML = "<stations>\n"
			+ "<station><id>01</id><description>Middelthunsgate (vis-a-vis nr. 21, retning Kirkeveien)</description><longitude>10.709009170532226</longitude><latitude>59.92786125852981</latitude></station>\n"
			+ "<station><id>02</id><description>Middelthunsgate 28 (utenfor Frognerbadet)</description><longitude>10.708515644073486</longitude><latitude>59.92805479800621</latitude></station>\n"
			+ "<station><id>03</id><description>Prinsensgt. (Kirkegt.)   </description><longitude>10.74413537979126</longitude><latitude>59.91124491211972</latitude></station>\n"
			+ "</stations>\n";

	private final String OFFLINE_STATION_STATUS = "<?xml version=\"1.0\" encoding=\"utf-8\"?>"
			+ "<string xmlns=\"http://smartbikeportal.clearchannel.no/public/mobapp/\">"
			+ "&lt;station&gt;&lt;description&gt;67-Holtegt. 20 (krysset Uranienborgvn)&lt;/description&gt;"
			+ "&lt;longitute&gt;10.7209&lt;/longitute&gt;&lt;latitude&gt;59.92258&lt;/latitude&gt;&lt;/station&gt;</string>";

	private final String ONLINE_STATION_STATUS = "<?xml version=\"1.0\" encoding=\"utf-8\"?>"
			+ "<string xmlns=\"http://smartbikeportal.clearchannel.no/public/mobapp/\">"
			+ "&lt;station&gt;&lt;ready_bikes&gt;5&lt;/ready_bikes&gt;&lt;empty_locks&gt;7&lt;/empty_locks&gt;&lt;online&gt;1&lt;/online&gt;"
			+ "&lt;description&gt;10-Kirkeristen Øst (mot Storgt.)&lt;/description&gt;"
			+ "&lt;longitute&gt;10.74714&lt;/longitute&gt;&lt;latitude&gt;59.91313&lt;/latitude&gt;&lt;/station&gt;</string>";

	/*
	 * public void testLoadOsloBikeLocations() throws IOException {
	 * List<StationLocation> bikeLocations = new ArrayList<StationLocation>();
	 * InputStream is = getStringInputStream(OSLO_CSV);
	 * ClearChannel.loadOsloStationLocations(is, bikeLocations);
	 * 
	 * assertEquals("we skip comments and loaded proper locations", 2,
	 * bikeLocations.size()); assertEquals(1, bikeLocations.get(0).getId());
	 * assertEquals(59.92786125852981, bikeLocations.get(0).getLatitude());
	 * assertEquals(10.709009170532226, bikeLocations.get(0).getLongitude()); }
	 */

	public void testLoadOsloBikeLocations() throws IOException {
		List<StationLocation> bikeLocations = new ArrayList<StationLocation>();
		InputStream is = getStringInputStream(OSLO_XML);
		ClearChannel.loadStationLocationsAsset(is, bikeLocations, "Oslo",
				"Norway");

		assertEquals(3, bikeLocations.size());
		assertEquals(1, bikeLocations.get(0).getId());
		assertEquals(59.92786125852981, bikeLocations.get(0).getLatitude());
		assertEquals(10.709009170532226, bikeLocations.get(0).getLongitude());
		assertEquals("Middelthunsgate (vis-a-vis nr. 21, retning Kirkeveien)",
				bikeLocations.get(0).getDescription());

		assertEquals("trim works", "Prinsensgt. (Kirkegt.)", bikeLocations.get(
				2).getDescription());

	}

	private ByteArrayInputStream getStringInputStream(String string)
			throws UnsupportedEncodingException {
		return new ByteArrayInputStream(string.getBytes("UTF-8"));
	}

	public void testParseOfflineStatus() throws IOException {
		BikeStationStatus status = ClearChannel
				.parseStatus(getStringInputStream(OFFLINE_STATION_STATUS));
		assertEquals("Holtegt. 20 (krysset Uranienborgvn)", status
				.getDescription());
		assertEquals(false, status.isOnline());
		assertEquals(0, status.getEmptyLocks());
		assertEquals(0, status.getReadyBikes());
		assertEquals(59.92258, status.getLatitude());
		assertEquals(10.7209, status.getLongitude());
	}

	public void testParseOnlineStatus() throws IOException {
		BikeStationStatus status = ClearChannel
				.parseStatus(getStringInputStream(ONLINE_STATION_STATUS));
		assertEquals("Kirkeristen Øst (mot Storgt.)", status.getDescription());
		assertEquals(true, status.isOnline());
		assertEquals(7, status.getEmptyLocks());
		assertEquals(5, status.getReadyBikes());
		assertEquals(59.91313, status.getLatitude());
		assertEquals(10.74714, status.getLongitude());
	}

	public void testFetchLiveStatus() {
		int id = 10;
		BikeStationStatus status = ClearChannel.readBikeStationStatus(id);
		Log.i(Constants.TAG, "Fetch status for station #" + id + ": "
				+ status.toString());
	}
	
	public void testLoadBarcelonaBikeLocations_encoding() throws Exception {
		List<StationLocation> bikeLocations = new ArrayList<StationLocation>();

		InputStream is = getResource("tests/localizaciones_bclna_catalan.html");
		
		ClearChannel.loadBikeLocationsAndStatusFromKmlInPage(bikeLocations, is, "Barcelona", "Spain");
		
		assertTrue(bikeLocations.size() > 0);
		assertTrue(bikeLocations.get(5).getDescription().startsWith("Pg Lluís Companys"));
	}
	
	public void testExtractKMLFromHtml() throws Exception {
		InputStream is = getResource("tests/localizaciones_bclna_catalan.html");
		
		String kml = ClearChannel.extractKMLFromHtml(is);
		
		assertTrue(kml.startsWith("<?xml version=\"1.0\" encoding=\"UTF-8\"?><kml"));
		assertTrue(kml.endsWith("</kml>"));
	}
	
	public void testParseWashington() throws Exception {
		InputStream is = getResource("tests/washington_smartbike_locations.asp");
		
		List<StationLocation> stationLocations = new ArrayList<StationLocation>();

		ClearChannel.parseWashington(is, stationLocations, "Washington DC", "USA");
		
		assertEquals(10, stationLocations.size());
		
		assertEquals("Logan Circle\n14th St SW & Rhode Island Ave, NW\nWashington, DC 20005", stationLocations.get(0).getDescription());
		assertEquals(38.9083, stationLocations.get(0).getLatitude());
		assertEquals(-77.03188, stationLocations.get(0).getLongitude());
		assertEquals(1, stationLocations.get(0).getId());
	}

	public void testParseKMLCatalan() throws Exception {
		InputStream is = getResource("tests/kml_bcln_catalan.xml"); //
		
		List<StationLocation> stationLocations = new ArrayList<StationLocation>();

		// Debug.startMethodTracing("unitTest-myCityBikes");
		ClearChannel.parseKml(is, stationLocations, "Barcelona", "Spain");
		//Debug.stopMethodTracing();
		
		assertEquals(412, stationLocations.size());
	}
	
	public void testParseKmlCoordinatesWithDots() {
        GeoPosition parsed = ClearChannel.parseKmlCoordinates("2.183453,41.389044,13");
        
        assertEquals(2.183453, parsed.getLongitude());
        assertEquals(41.389044, parsed.getLatitude());
        assertEquals(13.0, parsed.getAltitude());
	}

	public void testParseKmlCoordinatesWithCommas() {
        GeoPosition parsed = ClearChannel.parseKmlCoordinates("2,180233,41,390956,13");
        
        assertEquals(2.180233, parsed.getLongitude());
        assertEquals(41.390956, parsed.getLatitude());
        assertEquals(13.0, parsed.getAltitude());
	}

	public void testParseKmlDescription() {
		String s = "<div style=\"margin:10px\"><div style=\"font:bold 11px verdana;color:#cf152c;margin-bottom:10px\">1 - EXPO. TORRE DEL AGUA</div><div style=\"text-align:right;float:left;font:bold 11px verdana\">Bicicletas<br />Aparcamientos</div><div style=\"margin-left:5px;float:left;font:bold 11px verdana;color:green\">16<br />8<br /></div></div>";
		String[] parsed = ClearChannel.parseKmlDescription(s);
		
		assertEquals("1", parsed[0]);
		assertEquals("EXPO. TORRE DEL AGUA", parsed[1]);
		assertEquals("16", parsed[2]);
		assertEquals("8", parsed[3]);
	}

	private InputStream getResource(String resourceName) throws IOException {
		InputStream resourceAsStream = getContext().getAssets().open(resourceName);
		if (resourceAsStream == null) {
			ClassLoader contextClassLoader = Thread.currentThread().getContextClassLoader();
			if (contextClassLoader != null) {
			    resourceAsStream = contextClassLoader.getResourceAsStream(resourceName);
			}
		}
		if (resourceAsStream == null) {
			resourceAsStream = getClass().getResourceAsStream(resourceName);
		}
		if (resourceAsStream == null) {
			throw new IllegalStateException("Couldn't find resource: " + resourceName);
		}
		return resourceAsStream;
	}
}
	