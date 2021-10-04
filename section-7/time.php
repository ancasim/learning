<?php

$date = strtotime('next monday');

$seconds = $date - time();

//$minutes = $seconds / 60;

//$hours = $minutes /60;

//$days = $hours /24;

$days = ($date - time())/60/60/24;

echo ceil($days);

 ?>
