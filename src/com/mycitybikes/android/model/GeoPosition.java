package com.mycitybikes.android.model;

/**
 * An immutable class that contains latitude,longitude and an optional altitude.
 *  
 * @author jerome
 */
public class GeoPosition {
	private final double lat;
	private final double lng;
	private final double alt;

	public GeoPosition(double lat, double lng) {
		this.lat = lat;
		this.lng = lng;
		this.alt = Double.NaN;
	}
    public GeoPosition(double lat, double lng, double alt) {
		this.lat = lat;
		this.lng = lng;
		this.alt = alt;
	}
	public double getLatitude() {
		return lat;
	}
	public double getLongitude() {
		return lng;
	}
	/**
	 * @return Double.NAN is not specified.
	 */
	public double getAltitude() {
		return alt;
	}
	
	public String toString() {
		return "[" + lat + "," + lng + "," + alt + "]";
	}
}
