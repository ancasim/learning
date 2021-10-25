<?php

$cities = ['London', 'Paris', 'Amsterdam', 'New York'];

$lastCity = array_pop($cities);

echo $lastCity;

echo '\n';

print_r($cities);

$firstCity = array_shift($cities);

echo $firstCity;

print_r($cities);
