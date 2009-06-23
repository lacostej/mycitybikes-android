package com.mycitybikes.android.model;

import com.google.android.maps.GeoPoint;
import com.mycitybikes.android.util.AndroidUtils;

public class StationLocation {

	private final GeoPoint location;
	private final String city;
	private final String country;
	private final String description;
	private final int id;
	private StationInfoBuilder stationInfoBuilder;

	public StationLocation(int id, String city, String country,
			String description, double longitude, double latitude) {
	    this(id, city, country, description, AndroidUtils.buildGeoPoint(latitude, longitude));
	}

    public StationLocation(int id, String city, String country,
            String description, GeoPoint geoPoint) {
        this.id = id;
        this.city = city;
        this.country = country;
        this.location = geoPoint;
        this.description = description;
    }
	
	public void setStationInfoBuilder(StationInfoBuilder stationInfoBuilder) {
		this.stationInfoBuilder = stationInfoBuilder;
	}

	public String getCity() {
		return city;
	}

	public String getCountry() {
		return country;
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
				+ " [" + country + "," + city + "-" + id + "]");
	}
}
