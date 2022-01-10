<?php

date_default_timezone_set('Europe/Bucharest');

$date = strtotime('25th December 2021');

$daysTillChristmas = ($date - time())/60/60/24;

echo "Santa Claus is coming in " . ceil($daysTillChristmas) . " days!!!";
