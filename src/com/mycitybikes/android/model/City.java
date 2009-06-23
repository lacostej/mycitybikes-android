package com.mycitybikes.android.model;

import com.google.android.maps.GeoPoint;

public class City {
    private final String name;
    private final String country;
    private final GeoPoint location;

    public City(String name, String country, GeoPoint location) {
        this.name = name;
        this.country = country;
        this.location = location;
    }

    public String getName() {
        return name;
    }

    public String getCountry() {
        return country;
    }

    public GeoPoint getLocation() {
        return location;
    }
    
    @Override
    public String toString() {
        return new String(name + "," + country + "[" + location + "]");
    }
    
}
