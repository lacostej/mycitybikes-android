package com.mycitybikes.android.model;

public class BikeStationStatus {
	private boolean online;
	private int readyBikes;
	private int emptyLocks;

	public void setOnline(boolean online) {
		this.online = online;
	}

	public void setReadyBikes(int readyBikes) {
		this.readyBikes = readyBikes;
	}

	public void setEmptyLocks(int emptyLocks) {
		this.emptyLocks = emptyLocks;
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
		return builder.toString();
	}

}
