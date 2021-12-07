<?php

date_default_timezone_set('Europe/Bucharest');

echo date('l jS F Y') . '<br/>';

echo "Today is " . date('l') . '<br/>';

echo date('l d F, Y') . '<br/>';

echo date('Y/m/d') . '<br/>';

echo date('l jS F Y, g:i A') . '<br/>';

//leap year test
$isLeapYear = date('L');
if ($isLeapYear == 1){
    echo date('Y') . " is a leap year";
}else {
    echo date('Y') . " is not a leap year";
}
