<?php

// $url = "http://huoche.tuniu.com/yii.php?r=train/trainTicket/getTickets&primary%5BdepartureDate%5D=2017-06-23&primary%5BdepartureCityCode%5D=200&primary%5BdepartureCityName%5D=%E5%8C%97%E4%BA%AC&primary%5BarrivalCityCode%5D=2500&primary%5BarrivalCityName%5D=%E4%B8%8A%E6%B5%B7&start=0&limit=0";
// $val = $_GET["val"];
// $departureDate= $_GET["departureDate"];
$departureDate="2017-8-06";

$departureCityName= $_GET["departureCityName"];
$arrivalCityName= $_GET["arrivalCityName"];
// echo $departureCityName;

// $departureCityCode = $_GET["departureCityCode"];
// $arrivalCityCode = $_GET["arrivalCityCode"];

// $departureDate= $_GET["departureDate"];

// $url = "http://v.juhe.cn/toutiao/index?key=88cc376d6723b9cc8980a8c7de4b458a&type=" .$val.";
$url = "http://huoche.tuniu.com/yii.php?r=train/trainTicket/getTickets&primary%5BdepartureDate%5D=".$departureDate."&primary%5BdepartureCityName%5D=".$departureCityName."&primary%5BarrivalCityName%5D=".$arrivalCityName."&start=0&limit=0";
$ch = curl_init();
$timeout = 5;
curl_setopt ($ch, CURLOPT_URL, $url);
curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
$file_contents = curl_exec($ch);
curl_close($ch);
 
echo $file_contents;


?>