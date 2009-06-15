package com.mycitybikes.android.model;

public class StationLocation {

	private double longitude;
	private double latitude;
	private String city = "Oslo";
	private String country = "Norway";
	private String description;
	private int id;

	public StationLocation(double longitude, double latitude, int id) {
		this.longitude = longitude;
		this.latitude = latitude;
		this.id = id;
	}
	
	public StationLocation(int id, String description, double longitude, double latitude) {
		this.longitude = longitude;
		this.latitude = latitude;
		this.description = description;
		this.id = id;
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

	public int getId() {
		return id;
	}

	@Override
	public String toString() {
		return new String("[" + longitude + "," + latitude + "] " + description + " [" + country + "," + city + "-" + id + "]");
	}
}

