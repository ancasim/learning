<?php

if(isset($_POST['submit'])){
    $userText = $_POST['userInput'];
    $userTextArray = explode(' ',$userText);
    $replaceWith = "****";
    $badWords = ['firstword','secondword'];
    $userText = str_replace($badWords, $replaceWith, $userTextArray);
    $userText = implode(' ', $userText);
    echo $userText;
}