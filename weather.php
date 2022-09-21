<?php

$tz = 'America/New_York';
$tz_obj = new DateTimeZone($tz);
$today = new DateTime("now", $tz_obj);
$today_formatted = $today->format("z-o-H");

$filename = "weather/$today_formatted.png";
if (is_file($filename)) {
    $file = fopen($filename, "r") or die("Image exists but cannot be opened!");
    echo fread($file, filesize($filename));

}

$curl = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL => "https://weather-embed.p.rapidapi.com/forecast/create",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "POST",
    CURLOPT_POSTFIELDS => "{\n    \"city\": \"Boston\",\n    \"country\": \"MA\"\n}",
    CURLOPT_HTTPHEADER => [
        "X-RapidAPI-Host: weather-embed.p.rapidapi.com",
        "X-RapidAPI-Key: 0fdce3b09bmsh8a70480fbaf5910p1035c4jsn6067f3444d41",
        "content-type: application/json",
        "x-rapidapi-forward-key: RapidAPI Application Key"
    ],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
    echo "cURL Error #:" . $err;
} else {
    $json = json_decode($response);
    $url = $json->url;
    $curl2 = curl_init();
    curl_setopt_array($curl2, [
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,

    ]);
    $imgdata = curl_exec($curl2);
    $err2 = curl_error($curl2);
    curl_close($curl2);
    if ($err2) {
        die("cURL Error!" . $err2);
    } else {
        $file = fopen($filename, "w") or die("Unable to open file for writing!");
        fwrite($file, $imgdata);
        echo $imgdata;
    }
}
