package com.mycitybikes.android.view;

import java.util.ArrayList;
import java.util.List;
import java.util.Locale;

import android.graphics.drawable.Drawable;
import android.location.Address;
import android.location.Geocoder;
import android.util.Log;
import android.widget.Toast;

import com.google.android.maps.GeoPoint;
import com.google.android.maps.ItemizedOverlay;
import com.google.android.maps.MapView;
import com.google.android.maps.OverlayItem;
import com.mycitybikes.android.ClearChannel;
import com.mycitybikes.android.Constants;
import com.mycitybikes.android.model.StationLocation;
import com.mycitybikes.android.util.AndroidUtils;

public class MapLocationItemizedOverlay extends ItemizedOverlay<OverlayItem> {

	private static final int CURRENT_POSITION_OVERLAY_INDEX = 0;
	private MapView mapView;
	private List<OverlayItem> mOverlays = new ArrayList<OverlayItem>();
	private Drawable meMarker;
	private Drawable highlightMarker;
	
	private GeoPoint currentPosition;
	private List<StationLocation> stationLocations;
	private int selectedOverlayIndex;
	
	private Toast lastText;

	public MapLocationItemizedOverlay(MapView mapView, Drawable meMarker, Drawable stationMarker, Drawable highlightMarker, GeoPoint currentPosition,
			List<StationLocation> bikeLocations) {
		super(boundCenterBottom(stationMarker));
		this.mapView = mapView;
		this.meMarker = meMarker;
		//this.stationMarker = boundCenterBottom(stationMarker);
		this.highlightMarker = boundCenterBottom(highlightMarker);
		this.currentPosition = currentPosition;
		this.stationLocations = bikeLocations;

		populate();
	}

	@Override
	protected OverlayItem createItem(int i) {
		OverlayItem item;
		if (i == CURRENT_POSITION_OVERLAY_INDEX) {
			item = new OverlayItem(currentPosition, "", "");
			item.setMarker(boundCenterBottom(meMarker));
		} else {
			final StationLocation l = this.stationLocations.get(i - 1);
			item = new OverlayItem(AndroidUtils.buildGeoPoint(l.getLatitude(), l.getLongitude()), "", "");
		}
		mOverlays.add(item);
		return item;
	}
	
	@Override
	public int size() {
		return 1 + stationLocations.size();
	}

	@Override
	protected boolean onTap(int index) {
		actUponTapLocation(index, "");

		return super.onTap(index);
	}

	public void actUponTapLocation(int overlayIndex, String prefixMessage) {
		// not sure if this is working well.
		final OverlayItem overlayItem = mOverlays.get(overlayIndex);
		Log.d(Constants.TAG, "tapping index " + overlayIndex + " " + overlayItem);
		mapView.getController().animateTo(overlayItem.getPoint());

		String text;
		if (overlayIndex == CURRENT_POSITION_OVERLAY_INDEX) {
			text = "Your current position.\n" + getFirstReversedGeocodedAddress(currentPosition);
		} else {
			StationLocation stationLocation = stationLocations.get(overlayIndex - 1);
			if (stationLocation.getCity().equals("Oslo") || stationLocation.getCity().equals("Stockholm")) {
				text = prefixMessage + ClearChannel.getStationInfo(stationLocation);
			} else {
				throw new IllegalStateException("Unsupported location " + stationLocation);
			}
		}
		Log.v(Constants.TAG, "onTapText:" + text);
		highlightSelectedOverlayItem(overlayIndex, overlayItem);

		if (lastText == null) {
			lastText = Toast.makeText(mapView.getContext(), text, Toast.LENGTH_LONG);
		} else {
			lastText.setText(text);
		}
		lastText.show();
		
  }

	private void highlightSelectedOverlayItem(final int overlayIndex, final OverlayItem overlayItem) {
		if (selectedOverlayIndex != CURRENT_POSITION_OVERLAY_INDEX) {
			mOverlays.get(selectedOverlayIndex).setMarker(null);
		}
		if (overlayIndex != CURRENT_POSITION_OVERLAY_INDEX) {
			overlayItem.setMarker(highlightMarker);
		}
		Log.v(Constants.TAG, "highlighted. view should be redrawn");
		selectedOverlayIndex = overlayIndex;
	}

	private String getFirstReversedGeocodedAddress(GeoPoint position) {

		Geocoder geoCoder = new Geocoder(mapView.getContext(), Locale.getDefault());

		String address = "";
		try {
			List<Address> addresses = geoCoder.getFromLocation(position.getLatitudeE6() / 1E6, position.getLongitudeE6() / 1E6, 1);

			if (addresses.size() > 0) {
				for (int i = 0; i < addresses.get(0).getMaxAddressLineIndex(); i++)
					address += addresses.get(0).getAddressLine(i) + "\n";
			}
		} catch (Exception e) {
			Log.e(Constants.TAG, "Unable to reverse geocode address for position " + position + ". " + e.getMessage(), e);
		}

		return address;
	}

	//FIXME we shouldn't have to expose this
	public int findOverlayIndex(int stationIndex) {
		for (int i = 0; i < stationLocations.size(); i++) {
			StationLocation stationLocation = stationLocations.get(i);
			if (stationLocation.getId() == stationIndex) {
				return i + 1;
			}
		}
		throw new IllegalArgumentException("station with index " + stationIndex + " doesn't exists as overlay item");
	}

}
