<?php

$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL => "https://community-open-weather-map.p.rapidapi.com/weather?q=Rome%2C%20it&id=2172797&lang=en&units=metric",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    CURLOPT_HTTPHEADER => [
        "x-rapidapi-host: community-open-weather-map.p.rapidapi.com",
        "x-rapidapi-key: dead-key-was-in-use"
    ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    $response = json_decode($response, true);
}


