<?php

$cities = ["London", "Paris", "Amsterdam", "New York", "Berlin", "Brisbane"];
//sort cities alphabetically
asort($cities);
foreach ($cities as $city){
    echo $city . ' ';
}
//display cities as an ordered list
echo "<ol>";
foreach($cities as $city){
    echo "<li>" . $city . "</li>";
}
echo '</ol>';

//add new cities

array_push($cities, "Sydney", "Helsinki", "Beijing", "Dublin", "Rome");
asort($cities);
echo "<ol>";
foreach($cities as $city){
    echo "<li>" . $city . "</li>";
}
echo "<ol>";
