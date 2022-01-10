<?php

if (isset($_POST['submit'])) {
    $sentence = $_POST['initialString'];
    if ($_POST['spaces'] == 'yes') {
        $result = strlen($sentence);
        echo "There are " . $result . " characters (spaces included) in the string " . $sentence . "<br/> <br/>";
    } else {
        $result = preg_match_all('/[^ ]/', $sentence);
        echo "There are " . $result. " characters (spaces excluded) in the string " . $sentence;
    }
}