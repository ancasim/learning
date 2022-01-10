<?php

if(isset($_POST['submit'])){
    $creditCard = $_POST['card'];
    //turn creditCard into an array
    $digits = str_split($creditCard);
    //reverse the array
    $digits = array_reverse($digits);
    $oddSum = 0; //used to add the digits from odd positions
    $evenSum = 0; //used to add the digits from even positions
    //Take each of the odd position digits and add them. Since our array keys start from 0, the odd positions translate into even keys
    foreach ($digits as $key => $value) {
        if($key % 2 == 0){
            $oddSum +=$value;
        }else{
            //Take each of the even position digits and multiply by 2. Since our array keys start from 0, the even positions translate into odd keys
            $value *= 2;
            if($value > 9){
                $value -= 9;
            }
            $evenSum += $value;
        }
    }
    $digitsSum = $oddSum + $evenSum;
    if($digitsSum % 10 == 0){
        echo "Your credit card ending in " . substr($creditCard, 12, 4) . " is valid.";
    }else{
        echo "Your credit card ending in " . substr($creditCard, 12, 4) . " is invalid.";
    }
}