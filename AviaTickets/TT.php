<?php
    header( 'Content-Type: text/html; charset=utf-8');
    echo("<h4> Total = <!h4>");

    $config = array (
        "token" => "3ddd617e-7361-4ab4-b5c5-0fde95d179d0",
    );

    $url = "https://api.rasp.yandex.net/v3.0/search/?apikey=3ddd617e-7361-4ab4-b5c5-0fde95d179d0&format=json&from=c146&to=c213&lang=ru_RU&page=1&date=2019-06-02&transport_types=plane";
    $content = file_get_contents($url);
    $jsonResult = json_decode($content);
    echo $jsonResult->pagination->total;
    echo count($jsonResult->interval_segments);
    echo count($jsonResult->)
?>