<?php

$letters = ['a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j'];

$result = array_slice($letters, 3);
print_r($result);

$result = array_slice($letters,0,3);
print_r($result);

$result = array_slice($letters, -3,5);
print_r($result);
