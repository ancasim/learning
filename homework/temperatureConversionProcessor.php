<?php

if (isset($_POST['submit'])) {
    $temperature = $_POST['temperature'];
    $convertedTemperature = $_POST['degrees'] == 'C' ? $temperature * 9 / 5 + 32 : ($temperature - 32) * 5 / 9;
    if($_POST['accuracy'] == '0'){
        echo "Converted temperature is " . (int)$convertedTemperature . " degrees";
    }elseif($_POST['accuracy'] == '1'){
        echo "Converted temperature is " . number_format($convertedTemperature,1) . " degrees";
    }else{
        echo "Converted temperature is " . number_format($convertedTemperature,2) . "degrees";
    }
}