<?php

$availableIngredients = array(
    "milk" => 20,
    "sugar" => 100,
    "coffee" => 50
);


if (isset($_POST['check'])) {
    $selectedIngredient = $_POST['ingredients'];
    foreach ($availableIngredients as $availableIngredient => $quantity) {
        if ($selectedIngredient == $availableIngredient) {
            echo "The quantity of " . $selectedIngredient . " is " . $quantity . " grams.";
        }
    }
}

$recipes = array(
    $espresso => array("milk" => 0, "sugar" => 10, "coffee" => 50),
    $latte => array("milk" => 50, "sugar" => 20, "coffee" => 30),
    $cappucinno => array("milk" => 30, "sugar" => 10, "coffee" => 20)
    );


function makeDrink(){

}