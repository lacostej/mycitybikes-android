package com.mycitybikes.android.model;

public class BikeStationStatus {
	private String description;
	private double longitude;
	private double latitude;
	private boolean online;
	private int readyBikes;
	private int emptyLocks;
	
	public void setDescription(String description) {
		this.description = description;
	}

	public void setLongitude(double longitude) {
		this.longitude = longitude;
	}

	public void setLatitude(double latitude) {
		this.latitude = latitude;
	}

	public void setOnline(boolean online) {
		this.online = online;
	}

	public void setReadyBikes(int readyBikes) {
		this.readyBikes = readyBikes;
	}

	public void setEmptyLocks(int emptyLocks) {
		this.emptyLocks = emptyLocks;
	}

	public String getDescription() {
		return description;
	}

	public double getLongitude() {
		return longitude;
	}

	public double getLatitude() {
		return latitude;
	}

	public boolean isOnline() {
		return online;
	}

	public int getReadyBikes() {
		return readyBikes;
	}

	public int getEmptyLocks() {
		return emptyLocks;
	}

	@Override
	public String toString() {
		StringBuilder builder = new StringBuilder();
		builder.append("online=").append(online);
		builder.append(", readyBikes=").append(readyBikes);
		builder.append(", emptyLocks=").append(emptyLocks);
		builder.append(", description=").append(description);
		builder.append(", longitude=").append(longitude);
		builder.append(", latitude=").append(latitude);
		return builder.toString();
	}
  
}
