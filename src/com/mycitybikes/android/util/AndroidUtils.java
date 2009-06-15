package com.mycitybikes.android.util;

import com.google.android.maps.GeoPoint;

public class AndroidUtils {

	public static GeoPoint buildGeoPoint(double latitude, double longitude) {
		return new GeoPoint((int) (latitude * 1E6), (int) (longitude * 1E6));
	}

}
