<?php

require_once("../facetly_api.php");
$facetly = new facetly_api;
$api_server = "http://sg2.facetly.com/1";
$api_path = "report/trend";
$api_method = "POST";
$api_data = array(
  "key" => "zuakz7ok",
  "secret" => "dmzmyfsapjhknutrtunvjesnunbae6ej",
  "fromdate"=> -30,
  "todate" => 0,
  "query" => "",
  "size" => 5,
  "field" => "keyword_token",
);

$facetly->setServer($api_server);
$api_output = $facetly->call($api_path, $api_data, $api_method);
$return = json_decode($api_output);

print_r($return);

