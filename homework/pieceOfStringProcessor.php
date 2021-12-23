<?php

if (isset($_POST['submit'])) {
    $sentence = $_POST['initialString'];
    if ($_POST['spaces'] == 'yes'){
        $result = strlen($sentence);
        echo "There are " . $result . " characters in the string \"" . $sentence . "\"";
    } else {
        $result = preg_match_all('/[^ ]/', $sentence);
        echo "There are " . $result . " characters in the string \"" . $sentence . "\"";
    }
}