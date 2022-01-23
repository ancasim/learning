<?php

function rectangle($width, $height){
    $area = $width * $height;
    echo "A rectangle of length " . $height . " and width " . $width . " has an area of " . $area . ".";
}

rectangle(2,3);