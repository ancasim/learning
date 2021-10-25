<?php

/*if(empty($_POST['stringToCalculate'])){
    $error = 'Please enter a string';
    echo $error;
}
*/

if(isset($_POST['submit-button'])){
    $initialString = $_POST['stringToCalculate'];
    $result = strlen($initialString);
    echo $result;
}

