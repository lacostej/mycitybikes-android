package com.mycitybikes.android;

import com.google.android.maps.GeoPoint;
import com.mycitybikes.android.model.City;

public class Constants {

	public static final String TAG = "MyCityBikes";

	public static final City CITY_OSLO = new City("Oslo", "Norway", new GeoPoint(59913820,10738741));  
    public static final City CITY_PARIS = new City("Paris", "France", new GeoPoint(59332789,18064487));  
    public static final City CITY_STOCKHOLM = new City("Stockholm", "Sweeden", new GeoPoint(48856667,2350987));  
    public static final City CITY_BARCELONA = new City("Barcelona", "Spain", new GeoPoint(41387918,2169918));  
    public static final City CITY_WASHINGTON_DC = new City("Washington DC", "USA", new GeoPoint(38892091,-77024055));  
}
