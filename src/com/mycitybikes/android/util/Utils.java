package com.mycitybikes.android.util;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStream;
import java.io.InputStreamReader;

import org.apache.http.HttpResponse;
import org.apache.http.client.HttpClient;
import org.apache.http.client.methods.HttpGet;
import org.apache.http.impl.client.DefaultHttpClient;
import org.apache.http.params.BasicHttpParams;
import org.apache.http.params.HttpConnectionParams;
import org.apache.http.params.HttpParams;

public class Utils {

	public static String parseISToString(java.io.InputStream is)
			throws IOException {
		BufferedReader reader = new BufferedReader(new InputStreamReader(is,
				"UTF-8"));
		StringBuilder sb = new StringBuilder();
		try {
			String line = null;
			while ((line = reader.readLine()) != null) {
				sb.append(line).append("\n");
			}
		} finally {
			try {
				is.close();
			} catch (Exception ex) {
			}
			try {
				reader.close();
			} catch (Exception ex) {
			}
		}
		return sb.toString();
	}

	public static InputStream readContent(String httpUrl, int timeout) {
		try {
			HttpParams params = new BasicHttpParams();
			HttpConnectionParams.setConnectionTimeout(params, timeout);
			HttpClient httpclient = new DefaultHttpClient(params);
	
			HttpGet httpGet = new HttpGet(httpUrl);
			HttpResponse response = httpclient.execute(httpGet);
			return response.getEntity().getContent();
		} catch (Exception e) {
			throw new RuntimeException(
					"Unable to read content from " + httpUrl, e);
		}
	}

}
