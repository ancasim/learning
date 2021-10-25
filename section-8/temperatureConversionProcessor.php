<?php

if (isset($_POST['submit_button'])) {
    $temperature = $_POST['temperature'];
    if ($_POST['degrees'] == 'Celsius') {
        $result = ($temperature * 9 / 5) + 32;
        echo 'The temperature is ' . $result . ' degrees Fahrenheit';
    } else {
        $result= ($temperature - 32) * 5 / 9;
        echo 'The temperature is ' . $result . ' degrees Celsius';
    }

}
