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

function option($key)
{
    echo '<option value="' . $key . '">' . strtoupper($key) . '</option>';
}

echo '<form action="chooseAMonth1_version2.php" method="POST" >';
echo "Please choose a month <br>";
echo '<select name="months">';
//populate the option element
foreach ($months as $key => $value) {
    option($key);
}
echo '</select>';
echo '<input type="submit" name="submit" value="Show" >';
echo '</form>';
if (isset($_POST['submit'])) {
    $selectedMonth = $_POST['months'];
    foreach ($months as $month => $days) {
        if ($selectedMonth == $month) {
            echo "The month of " . $selectedMonth . " has " . $days . " days.";
        }
    }
}
