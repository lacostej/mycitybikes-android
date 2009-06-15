package com.mycitybikes.android.view;

import android.content.Context;
import android.util.AttributeSet;

import com.google.android.maps.MapView;

public class MapWithLocationsView extends MapView {

	// private MapLocationOverlay overlay;

	// Known latitude/longitude coordinates that we'll be using.
	// private List<MapLocation> mapLocations;

	public MapWithLocationsView(Context context, AttributeSet attrs, int defStyle) {

		super(context, attrs, defStyle);

		init();
	}

	public MapWithLocationsView(Context context, AttributeSet attrs) {

		super(context, attrs);

		init();
	}

	public MapWithLocationsView(Context context, String apiKey) {
		super(context, apiKey);

		init();
	}

	private void init() {
	}
	
  
}
