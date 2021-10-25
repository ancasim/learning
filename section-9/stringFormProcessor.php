<?php

$sentence = $_POST['stringToCalculate'];
if (isset($_POST['submit'])) {
    if ($_POST['spaces'] == 'yes') {
        $result = strlen($sentence);
        echo "There are " . $result . " characters (spaces included) in the string " . $sentence . "<br/> <br/>";
    } else {
        $noSpaces = preg_match_all('/[^ ]/', $sentence);
        echo "There are " . $noSpaces . " characters (spaces excluded) in the string " . $sentence;
    }
}