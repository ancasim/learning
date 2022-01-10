<?php

$temperatures = [32.3, 31.3, 28.2, 29.3, 29.7, 29.9, 28.7, 28.4, 30.5, 30.5, 31.7, 30.6, 29.4, 32.0, 36.2, 31.3, 32.8, 33.3, 32.9, 28.8, 30.8, 28.0, 25.9, 30.8, 32.4, 32.0, 31.3, 25.2, 29.1, 28.6, 30.6];
//average daily temperature in degrees C (rounded to 1 decimal place)
$averageTemp = round(array_sum($temperatures)/count($temperatures), 1) ;
echo "The average daily temperature is " . $averageTemp . " °C.";
asort($temperatures);
//the 5 lowest temperatures
echo "<br>";
$lowestTemp = array_slice($temperatures, 0, 5);
$lowestTemp = implode("°C ", $lowestTemp);
echo "The 5 lowest temperatures are: " . $lowestTemp . "°C ";
echo "<br>";
//the 5 highest temperatures
$highestTemp = array_slice($temperatures, 26, 5);
$highestTemp = implode("°C ", $highestTemp);
echo "The 5 highest temperatures are: " . $highestTemp . "°C ";