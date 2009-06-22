package com.mycitybikes.android;

import java.util.ArrayList;
import java.util.Collections;
import java.util.List;

import android.content.Context;
import android.graphics.drawable.Drawable;
import android.location.Location;
import android.location.LocationListener;
import android.location.LocationManager;
import android.location.LocationProvider;
import android.os.Bundle;
import android.util.Log;
import android.view.Menu;
import android.view.MenuItem;
import android.view.SubMenu;

import com.google.android.maps.GeoPoint;
import com.google.android.maps.MapActivity;
import com.google.android.maps.MapController;
import com.google.android.maps.Overlay;
import com.mycitybikes.android.model.BikeStationStatus;
import com.mycitybikes.android.model.StationLocation;
import com.mycitybikes.android.util.AndroidUtils;
import com.mycitybikes.android.view.MapLocationItemizedOverlay;
import com.mycitybikes.android.view.MapWithLocationsView;

/*
 * TODO
 * * menu button
 * ** settings
 * * selection of network provider (GPS vs ) ?
 */

public class MyCityBikesActivity extends MapActivity implements
		LocationListener {

	private MapWithLocationsView mapView;
	private Location myLocation;

	private MapController mc;
	private LocationManager locationManager;
	private List<StationLocation> stationLocations = new ArrayList<StationLocation>();

	private Drawable meMarker;
	private Drawable stationsMarker;
	private Drawable highlightMarker;

	/** Called when the activity is first created. */
	@Override
	public void onCreate(Bundle savedInstanceState) {
		super.onCreate(savedInstanceState);
		setContentView(R.layout.main);

		mapView = (MapWithLocationsView) findViewById(R.id.mapView);
		mapView.setBuiltInZoomControls(true);

		meMarker = mapView.getResources().getDrawable(R.drawable.marker_orange);
		stationsMarker = mapView.getResources().getDrawable(
				R.drawable.marker_blue);
		highlightMarker = mapView.getResources().getDrawable(
				R.drawable.marker_green);

		// refresh current location
		locationManager = (LocationManager) getSystemService(Context.LOCATION_SERVICE);
		// LocationProvider locationProvider =
		// locationManager.getProvider(LocationManager.NETWORK_PROVIDER);
		// Location lastLocation =
		// locationManager.getLastKnownLocation(LocationManager.NETWORK_PROVIDER);
		mc = mapView.getController();

		String providerName = LocationManager.GPS_PROVIDER;
		try {
			locationManager.setTestProviderStatus(providerName,
					LocationProvider.AVAILABLE, null, System
							.currentTimeMillis());
			locationManager.setTestProviderEnabled(providerName, true);
		} catch (Exception e) {
			Log.e(Constants.TAG, "Failed to enable TestProvider "
					+ e.getMessage(), e);
		}
		try {
			Log.v(Constants.TAG, "requestLocationUpdates() ");
			locationManager.requestLocationUpdates(providerName, 60000, 20,
					this);
		} catch (Exception e) {
			Log.e(Constants.TAG, "Failed to requestLocationUpdates() from "
					+ providerName + ": " + e.getMessage(), e);
		}
		providerName = LocationManager.NETWORK_PROVIDER;
		try {
			Log.v(Constants.TAG, "requestLocationUpdates() ");
			locationManager.requestLocationUpdates(providerName, 60000, 20,
					this);
		} catch (Exception e) {
			Log.e(Constants.TAG, "Failed to requestLocationUpdates() from "
					+ providerName + ": " + e.getMessage(), e);
		}
		
		//Debug.startMethodTracing("myCityBikes", 32*1024*1024);

		ClearChannel.loadOsloBikeLocations(getApplicationContext(),
				stationLocations);

		ClearChannel.loadWashingtonBikeLocations(getApplicationContext(),
				stationLocations);
		
		ClearChannel.loadStockholmBikeLocations(getApplicationContext(),
				stationLocations);

		// Disabled until we find a way to speed up things. 1000+ overlay items don't cut it...
		/*
		ClearChannel.loadBarcelonaBikeLocations(getApplicationContext(), stationLocations);
		JCDecaux.loadParisBikeLocations(getApplicationContext(),
				stationLocations);
				*/
		//Debug.stopMethodTracing();
	}

	private void zoomToEarthLevel() {
		mc.setZoom(1);
		// mapView.invalidate();
	}
	
	private void animateMapToMyLocation() {
		GeoPoint point = animateToLocation(myLocation);

		mc.setZoom(15); // FIXME consider auto-adapting zoom level based on
						// distance
		// to closest bike station. Or using user prefs

		// ---Add a location marker---
		MapLocationItemizedOverlay mapOverlay = new MapLocationItemizedOverlay(
				mapView, meMarker, stationsMarker, highlightMarker, point,
				stationLocations);

		List<Overlay> listOfOverlays = mapView.getOverlays();
		listOfOverlays.clear();
		listOfOverlays.add(mapOverlay);

		mapView.invalidate();
	}

	private GeoPoint animateToLocation(Location location) {
		Log.v(Constants.TAG, "animate to " + location);
		GeoPoint point = AndroidUtils.buildGeoPoint(location.getLatitude(),
				location.getLongitude());
		mc.animateTo(point);
		return point;
	}

	private static final int MENU_GO_TO_MY_LOCATION = 1;
	private static final int MENU_GO_TO_CITY = 2;
	private static final int MENU_GO_TO_DIRECTION = 3;
	private static final int MENU_GO_TO_EARTH = 4;

	private static final int MENU_CLOSEST_STATION_WITH_BIKE = 3;
	private static final int MENU_CLOSEST_STATION_WITH_SLOT = 4;

	private static final int GO_TO_MENU_GROUP = 1;
	private static final int MAP_MODE_MENU_GROUP = 2;

	private static final int MENU_MAP_MODE_MAP = 1;
	private static final int MENU_MAP_MODE_SATELLITE = 2;
	private static final int MENU_MAP_MODE_TRAFFIC = 3;
	private static final int MENU_MAP_MODE_STREET = 4;

	@Override
	public boolean onCreateOptionsMenu(Menu menu) {
		super.onCreateOptionsMenu(menu);
		MenuItem item;
		SubMenu subMenu;

		
		subMenu = menu.addSubMenu("Go to");

		item = subMenu.add(GO_TO_MENU_GROUP, MENU_GO_TO_MY_LOCATION, Menu.NONE, "My Location");
		item.setIcon(meMarker);
		
		// FIXME implement
		// item = subMenu.add(GO_TO_MENU_GROUP, MENU_GO_TO_CITY, Menu.NONE, "City");
		//item = subMenu.add(GO_TO_MENU_GROUP, MENU_GO_TO_DIRECTION, Menu.NONE, "Direction");
		item = subMenu.add(GO_TO_MENU_GROUP, MENU_GO_TO_EARTH, Menu.NONE, "Earth View");
		
		subMenu = menu.addSubMenu("Map Mode");
		item = subMenu.add(MAP_MODE_MENU_GROUP, MENU_MAP_MODE_MAP, Menu.NONE,
				"Map");
		item.setChecked(!mapView.isSatellite() && !mapView.isTraffic()
				&& !mapView.isStreetView());
		item = subMenu.add(MAP_MODE_MENU_GROUP, MENU_MAP_MODE_SATELLITE,
				Menu.NONE, "Satellite");
		item.setChecked(mapView.isSatellite());
		item = subMenu.add(MAP_MODE_MENU_GROUP, MENU_MAP_MODE_TRAFFIC,
				Menu.NONE, "Traffic");
		item.setChecked(mapView.isTraffic());
		item = subMenu.add(MAP_MODE_MENU_GROUP, MENU_MAP_MODE_STREET,
				Menu.NONE, "Street View");
		item.setChecked(mapView.isStreetView());
		subMenu.setGroupCheckable(MAP_MODE_MENU_GROUP, true, true);

		menu.add(Menu.NONE, MENU_CLOSEST_STATION_WITH_BIKE, Menu.NONE,
				"Closest Bike");
		menu.add(Menu.NONE, MENU_CLOSEST_STATION_WITH_SLOT, Menu.NONE,
				"Closest Slot");

		// menu.add(Menu.NONE, MENU_SATELLITE_SWITCH, Menu.NONE, "Settings");
		// menu.add(Menu.NONE, MENU_SATELLITE_SWITCH, Menu.NONE, "Quit");
		return true;
	}

	static enum FindStationCriteria {
		ReadyBike, FreeSlot
	}

	@Override
	public boolean onOptionsItemSelected(MenuItem item) {
		switch (item.getGroupId()) {
		case 0:
			switch (item.getItemId()) {
			case MENU_CLOSEST_STATION_WITH_BIKE:
				findClosestStation(FindStationCriteria.ReadyBike);
				return true;
			case MENU_CLOSEST_STATION_WITH_SLOT:
				findClosestStation(FindStationCriteria.FreeSlot);
				return true;
			}
			break;
		case GO_TO_MENU_GROUP:
			switch (item.getItemId()) {
				case MENU_GO_TO_MY_LOCATION:
					if (myLocation == null) {
						// FIXME myLocation not yet populated. We should consider
						// ask the user to retry re-populating
						return true;
					}
					mc.setZoom(15);
					animateToLocation(myLocation);
					return true;
				case MENU_GO_TO_CITY:
					return true;
				case MENU_GO_TO_DIRECTION:
					return true;
				case MENU_GO_TO_EARTH:
					zoomToEarthLevel();
					return true;
			}
			
		case MAP_MODE_MENU_GROUP:
			item.setChecked(true);
			switch (item.getItemId()) {
			case MENU_MAP_MODE_MAP:
				mapView.setSatellite(false);
				mapView.setStreetView(false);
				mapView.setTraffic(false);
				return true;
			case MENU_MAP_MODE_SATELLITE:
				mapView.setSatellite(true);
				// mapView.setTraffic(false);
				return true;
			case MENU_MAP_MODE_TRAFFIC:
				mapView.setSatellite(false);
				mapView.setTraffic(true);
				return true;
			case MENU_MAP_MODE_STREET:
				mapView.setSatellite(false);
				mapView.setStreetView(true);
				return true;
			}
		}
		return false;
	}

	private static class LocationAndDistance implements
			Comparable<LocationAndDistance> {
		private StationLocation stationLocation;
		// private Location location;
		private float distanceInMeters;

		public LocationAndDistance(StationLocation stationLocation/*
																 * , Location
																 * location
																 */,
				float distanceInMeters) {
			this.stationLocation = stationLocation;
			// this.location = location;
			this.distanceInMeters = distanceInMeters;
		}

		public int compareTo(LocationAndDistance another) {
			return (int) (this.distanceInMeters - another.distanceInMeters);
		}

		public int getStationIndex() {
			return stationLocation.getId();
		}

	}

	public void findClosestStation(FindStationCriteria criteria) {
		// FIXME do we want to provide closest station from currently centered
		// point
		// ?
		/*
		 * GeoPoint point = mapView.getMapCenter(); Location center = new
		 * Location(Constants.TAG); center.setLatitude(point.getLatitudeE6() /
		 * 1E6); center.setLongitude(point.getLongitudeE6() / 1E6);
		 */
		Location center = this.myLocation;

		List<LocationAndDistance> sortedStationLocations = new ArrayList<LocationAndDistance>();
		for (StationLocation l : stationLocations) {
			Location loc = new Location(Constants.TAG);
			loc.setLatitude(l.getLatitude());
			loc.setLongitude(l.getLongitude());
			sortedStationLocations.add(new LocationAndDistance(l/* , loc */,
					center.distanceTo(loc)));
		}
		Collections.sort(sortedStationLocations);

		// find first matching station
		StationLocation foundStation = null;
		for (LocationAndDistance lad : sortedStationLocations) {
			try {
				BikeStationStatus status = ClearChannel
						.readBikeStationStatus(lad.getStationIndex());
				if ((criteria == FindStationCriteria.ReadyBike && status
						.getReadyBikes() > 0)
						|| (criteria == FindStationCriteria.FreeSlot && status
								.getEmptyLocks() > 0)) {
					Log.v(Constants.TAG, "Found station:"
							+ status.getDescription());
					foundStation = lad.stationLocation;
					break;
				}
			} catch (Exception e) {
				// FIXME find a way to display the fact that some nearer
				// stations don't
				// have status information available
				continue;
			}
		}

		if (foundStation != null) {
			MapLocationItemizedOverlay overlay = ((MapLocationItemizedOverlay) mapView
					.getOverlays().get(0));
			String prefix = criteria == FindStationCriteria.ReadyBike ? "station with closest bike:\n"
					: "station with closest free slot:\n";

			overlay.actUponTapLocation(overlay.findOverlayIndex(foundStation
					.getId()), prefix);
		}
	}

	@Override
	protected boolean isRouteDisplayed() {
		return false;
	}

	public void onLocationChanged(Location location) {
		this.myLocation = location;
		animateMapToMyLocation();
		locationManager.removeUpdates(this);
	}

	public void onProviderDisabled(String provider) {
	}

	public void onProviderEnabled(String provider) {
	}

	public void onStatusChanged(String provider, int status, Bundle extras) {
	}
}