<?php
require_once("../facetly_api.php");
$facetly = new facetly_api;
$api_server = "http://sg2.facetly.com/1";
$api_path = "search/autocomplete";
$api_method = "GET";
$api_data = array(
 "key" => "zuakz7ok",
 "query" => "a",
);
 
$facetly->setServer($api_server);
$api_output = $facetly->call($api_path, $api_data, $api_method);
$return = json_decode($api_output);
 
print_r($return);