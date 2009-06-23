package com.mycitybikes.android.model;

import com.google.android.maps.GeoPoint;
import com.mycitybikes.android.util.AndroidUtils;

public class StationLocation {

	private final GeoPoint location;
	private final City city;
	private final String description;
	private final int id;
	private StationInfoBuilder stationInfoBuilder;

	public StationLocation(int id, City city,
			String description, double longitude, double latitude) {
	    this(id, city, description, AndroidUtils.buildGeoPoint(latitude, longitude));
	}

    public StationLocation(int id, City city,
            String description, GeoPoint geoPoint) {
        this.id = id;
        this.city = city;
        this.location = geoPoint;
        this.description = description;
    }
	
	public void setStationInfoBuilder(StationInfoBuilder stationInfoBuilder) {
		this.stationInfoBuilder = stationInfoBuilder;
	}

	public String getCity() {
		return city.getName();
	}

	public String getCountry() {
		return city.getCountry();
	}

	public GeoPoint getLocation() {
		return location;
	}

	public String getDescription() {
		return description;
	}

	public String getStationInfo() {
		return stationInfoBuilder.buildStationInfo();
	}

	public int getId() {
		return id;
	}

	@Override
	public String toString() {
		return new String("[" + location + "] " + description
				+ " [" + getCountry() + "," + getCity() + "-" + id + "]");
	}
}
