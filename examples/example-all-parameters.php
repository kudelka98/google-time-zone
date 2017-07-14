<?php

/**
 * This section includes a sample query that demonstrate features of the API.
 * The code below query performs a time zone request for Github's server (San Francisco, California, United States). The timestamp is set to March 8th, 2012.
 *
 * @author    Ivan Melgrati
 * @copyright 2016
 * @package   GoogleMapsTimeZone
 * @author    Ivan Melgrati
 * @version   v1.2.0 stable
 */

require_once('../src/GoogleMapsTimeZone.php');

/**
 * All queries require an API key from Google.
 * @link https://developers.google.com/maps/documentation/timezone/get-api-key
 */
define('API_KEY', 'AIzaSyBrG3fhQcIy01AH5iTf1W1ZnS9r7l5Z-6w');

// Create GoogleMapsTimeZone object with default properties.
$timezone_object = new GoogleMapsTimeZone();

// Set Google API key.
$timezone_object->setApiKey(API_KEY);

// Set XML as query return format.
$timezone_object->setFormat($timezone_object::FORMAT_XML);

// Set Spanish as query return language.
// Check https://developers.google.com/maps/faq#languagesupport for a list of supported languages
$timezone_object->setLanguage('es');

// Set latitude (Mexico City International Airport).
$timezone_object->setLatitude(19.4360812);

// Set longitude (Mexico City International Airport).
$timezone_object->setLongitude(-99.074097);

// Set Timestamp (server-side current time).
$timezone_object->setTimestamp(time());

// Perform query
$timezone_data = $timezone_object->queryTimeZone();

echo '<pre>';
print_r($timezone_data);
echo '</pre>';

// Set XML as query return format.
$timezone_object->setFormat($timezone_object::FORMAT_JSON);
// Set Arabic as query return language.
// Checkhttps://developers.google.com/maps/faq#languagesupport for a list of supported languages
$timezone_object->setLanguage('ar');

// Perform query.
$timezone_data = $timezone_object->queryTimeZone();

echo '<pre>';
var_dump($timezone_data);
echo '</pre>';
