<?php
require_once("../facetly_api.php");
$facetly = new facetly_api;
$api_server = "http://sg2.facetly.com/1";
$api_path = "search/product";
$api_method = "GET";
$api_data = array(
 "key" => "zuakz7ok",
 "limit" => 3,
 "searchtype" => 'html',
 "baseurl" => '/facetly/search-ajax.php',
 "query" => "acer",
);
 
$facetly->setServer($api_server);
$api_output = $facetly->call($api_path, $api_data, $api_method);
$return = json_decode($api_output);
 
print_r($return); 