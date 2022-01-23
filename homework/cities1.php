<?php

$cityCountry = array(
    "Tokyo" => "Japan",
    "Mexico City" => "Mexico",
    "New York City" => "USA",
    "Mumbai" => "India",
    "Seoul" => "Korea",
    "Shanghai" => "China",
    "Lagos" => "Nigeria",
    "Buenos Aires" => "Argentina",
    "Cairo" => "Egypt",
    "London" => "England"
);
echo '<form action="cities1.php" method="POST">';
echo 'Please choose a city: <br>';
echo '<select name="cities">';
foreach ($cityCountry as $city => $country) {
    echo '<option value="' . $city . '">' . $city . '</option>';
}
echo '</select>';
echo '<input type="submit" name="submit" value="Show Country">';
echo "</form>";
if (isset($_POST['submit'])) {
    $selectedCity = $_POST['cities'];
    foreach ($cityCountry as $city => $country) {
        if ($selectedCity == $city) {
            echo $city . ' is in ' . $country;
        }
    }
}

