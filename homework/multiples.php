<?php

echo 'Multiples of 6 -- using FOR loop <br/>';
for($i = 1; $i <=60; $i++){
    if($i % 6 == 0){
        echo $i . '<br/>';
    }
}

echo '<br/>';

echo 'Multiples of 6 -- using WHILE loop <br/>';
$j = 1;
while($j <= 60){
    if($j % 6 == 0){
        echo $j . '<br/>';
    }
    $j++;
}

echo '<br/>';

for($k = 6; $k <=60; $k+=6){
    echo $k . '<br/>';
}



