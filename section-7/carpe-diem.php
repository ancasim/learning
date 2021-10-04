<?php

date_default_timezone_set('Europe/Bucharest');

echo date('l jS F Y');

echo "\n \n";

echo "Today is " . date('l');

echo "\n \n";

echo date('l d F, Y');

echo "\n \n";

echo date('Y/m/d');

echo "\n \n";

echo date('l jS F Y, g:i A');

echo "\n \n";

//leap year test
$year = date('L');

if ($year == 1){
  echo date('Y') . " is a leap year";
}else {
  echo date('Y') . " is not a leap year";
}

 ?>
