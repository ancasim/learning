<?php

$months = array(
    "January" => 31,
    "February" => "28 days, if leap year 29",
    "March" => 31,
    "April" => 30,
    "May" => 31,
    "June" => 30,
    "July" => 31,
    "August" => 31,
    "September" => 30,
    "October" => 31,
    "November" => 30,
    "December" => 31
);

function makeOption($arr)
{
    foreach ($arr as $k => $v) {
        echo '<option value="' . $k . '">' . strtoupper($k) . '</option>';
    }
}

function makeSelect($arr)
{
    echo '<form action="chooseAMonth2.php" method="POST" >';
    echo "Please choose a month <br>";
    echo '<select name="months">';
    makeOption($arr);
    echo '</select>';
    echo '<input type="submit" name="submit" value="Show" >';
    echo '</form>';
}

makeSelect($months);
if (isset($_POST['submit'])) {
    $selectedMonth = $_POST['months'];
    foreach ($months as $month => $days) {
        if ($selectedMonth == $month) {
            echo "The month of " . $selectedMonth . " has " . $days . " days.";
        }
    }
}
