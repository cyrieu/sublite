<?php
	function geocodeJSON($string, $attempts=0) {
		$string = str_replace (" ", "+", urlencode($string));
		$details_url = "http://maps.googleapis.com/maps/api/geocode/json?address=".$string."&sensor=false";

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $details_url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$response = json_decode(curl_exec($ch), true);
		curl_close($ch);

		// If Status Code is ZERO_RESULTS, OVER_QUERY_LIMIT, REQUEST_DENIED or INVALID_REQUEST
		if ($response['status'] != 'OK') {
			if ($response['status'] == 'OVER_QUERY_LIMIT' && $attempts < 3) {
				sleep(2);
				return geocodeJSON($string, $attempts + 1);
			}
			return null;
		}
		return $response;
	}
	function geocode($string) {
		if (($response = geocodeJSON($string)) == null) {
			return null;
		}

		$geometry = $response['results'][0]['geometry'];

		$longitude = $geometry['location']['lat'];
		$latitude = $geometry['location']['lng'];

		$array = array(
			'latitude' => $geometry['location']['lat'],
			'longitude' => $geometry['location']['lng'],
			'location_type' => $geometry['location_type'],
		);

		return $array;
	}
	function getCity($string) {
		if (($response = geocodeJSON($string)) == null) {
			return null;
		}
		
		$address_components = $response['results'][0]['address_components'];
		
		$city = null;
		$state = null;
		foreach ($address_components as $c) {
			if (in_array("locality", $c['types'])) {
				$city = $c['short_name'];
			}
			if (in_array("administrative_area_level_1", $c['types'])) {
				$state = $c['short_name'];
			}
		}
		
		if ($city == null or $state == null)
			return null;
		return "$city, $state";
	}
	// distance between coords
	function distance($lat1, $lon1, $lat2, $lon2) {
		$theta = $lon1 - $lon2;
		$dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
		$dist = acos($dist);
		$dist = rad2deg($dist);
		$miles = $dist * 60 * 1.1515;
		return $miles;
	}
	// approx mi to coord degrees
	function distanceDeg($mi) {
		$km = $mi * 0.621371;
		return (1 / 110.54) * $km;
	}
?>