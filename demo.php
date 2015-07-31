<?php
require "Geocoding.class.php";

$ak = '这里填写你的百度AK';
$longitude = 113.327782;
$latitude = 23.137202;

$result = Geocoding::getAddressComponent($ak, $longitude, $latitude, Geocoding::NO_POIS);

echo '<pre>';
print_r($result);
echo '</pre>';
?>