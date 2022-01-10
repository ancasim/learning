<?php

if (isset($_POST['submit'])){
    $isbn = $_POST['isbn'];
    $sum = 0;
    $i = 1;
    $digits = str_split($isbn);
    foreach ($digits as $digit){
        $sum += $digit * $i;
        $i++;
    }
    if($sum % 11 == 0){
        echo $isbn . " is a valid ISBN";
    }else{
        echo $isbn . " is an invalid ISBN";
    }

}