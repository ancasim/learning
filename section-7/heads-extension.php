<?php

$heads = 0;
$tails = 0;

for ($i = 1; $i <= 100; $i++){
  $number = rand (1,2);
  if ($number == 1){
    echo "Heads, I win!\n";
    $heads++;
  } else {
    echo "Tails, you win!\n";
    $tails++;
  }
}
echo "There were " . $heads . " heads and " . $tails . "tails";
 ?>
