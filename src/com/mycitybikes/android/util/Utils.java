package com.mycitybikes.android.util;

import java.io.BufferedReader;
import java.io.IOException;
import java.io.InputStreamReader;

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

}
