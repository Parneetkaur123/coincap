<?php
$ch = curl_init();
curl_setopt_array($ch,[CURLOPT_URL=>"https://api.coincap.io/v2/assets",CURLOPT_RETURNTRANSFER=>true]);

$response = curl_exec($ch);
$error = curl_error($ch);
curl_close($ch);
$response = json_decode($response,true);
?>