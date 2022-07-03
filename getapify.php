<?php
$start = microtime(true);
//127.0.0.11
//198.98.57.180
//186.174.45.227
//205.185.125.58
// IP address 
$userIP = '205.185.125.58'; 
// API end URL 
$apiURL = 'https://ipapi.co/205.185.125.58/json/'; 
// Create a new cURL resource with URL 
$ch = curl_init($apiURL); 
// Return response instead of outputting 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Execute API request 
$apiResponse = curl_exec($ch); 
// Close cURL resource 
curl_close($ch); 
// Retrieve IP data from API response 
$ipData = json_decode($apiResponse, true);
$end = microtime(true);
$time = $end-$start;
echo "<br/>execute time {$time}".$number;
echo $ipData;
var_dump("<pre>",$ipData,"</pre>");
echo "<pre>",print_r($ipData),"</pre>";
?>
