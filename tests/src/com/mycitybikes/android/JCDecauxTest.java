package com.mycitybikes.android;

import java.io.ByteArrayInputStream;
import java.io.IOException;
import java.io.InputStream;
import java.io.UnsupportedEncodingException;
import java.util.ArrayList;
import java.util.List;

import android.test.AndroidTestCase;
import android.util.Log;

import com.mycitybikes.android.JCDecaux;
import com.mycitybikes.android.model.BikeStationStatus;
import com.mycitybikes.android.model.StationLocation;

public class JCDecauxTest extends AndroidTestCase {

	/*
	 * private final String OSLO_CSV = "#index,lat,lng,id\n" +
	 * "0,59.92786125852981,10.709009170532226,1\n" +
	 * "1,59.92805479800621,10.708515644073486,2\n";
	 */

	private final String PARIS_CARTO_XML = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n"
			+ "<carto>\n"
			+ "  <markers>\n"
			+ "    <marker name=\"20020 - PYRENEES RENOUVIER\"\n"
			+ "            number=\"20020\"\n"
			+ "            address=\"183 RUE DES PYRENEES -\"\n"
			+ "            fullAddress=\"183 RUE DES PYRENEES - 75020 PARIS\"\n"
			+ "            lat=\"48.8610789316\"\n"
			+ "            lng=\"2.40036207675\"\n"
			+ "            open=\"1\"\n"
			+ "            bonus=\"1\" />\n"
			+ "    <marker name=\"20019 - DAVOUT SERPOLLET\"\n"
			+ "            number=\"20019\"\n"
			+ "            address=\"1 RUE SERPOLLET -\"\n"
			+ "            fullAddress=\"1 RUE SERPOLLET - 75020 PARIS\"\n"
			+ "            lat=\"48.8605974067\"\n"
			+ "            lng=\"2.40950128611\"\n"
			+ "            open=\"1\"\n"
			+ "            bonus=\"1\" />\n"
			+ "  </markers>\n"
			+ "  <arrondissements>\n"
			+ "    <arrondissement number=\"\"\n"
			+ "                    minLat=\"27.1409733745\"\n"
			+ "                    minLng=\"-3.40456062425\"\n"
			+ "                    maxLat=\"50.4549656869\"\n"
			+ "                    maxLng=\"2.45307201488\" />\n"
			+ "  </arrondissements>\n" + "</carto>\n";

	private final String PARIS_STATION_STATUS = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>"
			+ "<station>\n"
			+ "  <available>24</available>\n"
			+ "  <free>2</free>\n"
			+ "  <total>26</total>\n"
			+ "  <ticket>1</ticket>\n" + "</station>\n";

	private final String PARIS_OFFLINE_STATION_STATUS = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>"
			+ "<station>\n"
			+ "  <available/>\n"
			+ "  <free/>\n"
			+ "  <total/>\n" + "  <ticket/>\n" + "</station>\n";

	public void testLoadParisBikeLocations() throws IOException {
		List<StationLocation> bikeLocations = new ArrayList<StationLocation>();
		InputStream is = getStringInputStream(PARIS_CARTO_XML);
		JCDecaux.loadParisBikeLocations(is, bikeLocations, "Paris", "France");

		assertEquals(2, bikeLocations.size());
		assertEquals(20020, bikeLocations.get(0).getId());
		assertEquals(48.8610789316, bikeLocations.get(0).getLatitude());
		assertEquals(2.40036207675, bikeLocations.get(0).getLongitude());
		assertEquals("183 RUE DES PYRENEES - 75020 PARIS", bikeLocations.get(0)
				.getDescription());
	}

	private ByteArrayInputStream getStringInputStream(String string)
			throws UnsupportedEncodingException {
		return new ByteArrayInputStream(string.getBytes("UTF-8"));
	}

	public void testParseParisStatus() throws IOException {
		BikeStationStatus status = JCDecaux
				.parseStatus(getStringInputStream(PARIS_STATION_STATUS));
		assertEquals(true, status.isOnline());
		assertEquals(2, status.getEmptyLocks());
		assertEquals(24, status.getReadyBikes());
		// assertEquals(26, status.getTotalSlots());
	}

	public void testParseOfflineParisStatus() throws IOException {
		BikeStationStatus status = JCDecaux
				.parseStatus(getStringInputStream(PARIS_OFFLINE_STATION_STATUS));
		assertEquals(false, status.isOnline());
	}

	public void testFetchLiveParisStatus() {
		int id = 4027;
		BikeStationStatus status = JCDecaux.readBikeStationStatus(id);
		Log.i(Constants.TAG, "Fetch Paris status for station #" + id + ": "
				+ status.toString());
	}
}
