package com.mycitybikes.android.model;

public class StationLocation {

	private final double longitude;
	private final double latitude;
	private final String city;
	private final String country;
	private final String description;
	private final int id;
	private StationInfoBuilder stationInfoBuilder;

	public StationLocation(String city, String country, double longitude,
			double latitude, int id) {
		this(id, city, country, null, longitude, latitude);
	}

	public StationLocation(int id, String city, String country,
			String description, double longitude, double latitude) {
		this.id = id;
		this.city = city;
		this.country = country;
		this.longitude = longitude;
		this.latitude = latitude;
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

	public double getLongitude() {
		return longitude;
	}

	public double getLatitude() {
		return latitude;
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
		return new String("[" + longitude + "," + latitude + "] " + description
				+ " [" + country + "," + city + "-" + id + "]");
	}
}
