<?php

$multiCity = array(
    array("City", "Country", "Continent"),
    array("Tokyo", "Japan", "Asia"),
    array("Mexico City", "Mexico", "North America"),
    array("New York City", "USA", "North America"),
    array("Mumbai", "India", "Asia"),
    array("Seoul", "Korea", "Asia"),
    array("Shanghai", "China", "Asia"),
    array("Lagos", "Nigeria", "Africa"),
    array("Buenos Aires", "Argentina", "South America"),
    array("Cairo", "Egypt", "Africa"),
    array("London", "England", "Europe")
);
?>

    <!DOCTYPE html>
    <html lang="en" xmlns="http://www.w3.org/1999/html">
    <head>
        <meta charset="UTF-8">
        <title>Cities around the world</title>
        <style>
            td, th {
                width: 8em;
                border: 1px solid black;
                padding-left: 4px;
            }

            th {
                text-align: center;
            }

            table {
                border-collapse: collapse;
                border: 1px solid black;
            }
        </style>
    </head>
<body>
<table>
    <thead>
    <tr>
        <th>
            <?php
            echo $multiCity[0][0] . "</th>\n<th>";
            echo $multiCity[0][1] . "</th>\n<th>";
            echo $multiCity[0][2] . "</th>\n";
            ?>
        </th>
    </tr>
    </thead>
<?php
$arraySize = count($multiCity);
for ($i = 1; $i <= $arraySize - 1; $i++) {
    echo "<tr>\n";
    foreach ($multiCity[$i] as $value) {
        echo "<td>" . $value . "</td>\n";
    }
    echo "</tr>\n";
}
?>