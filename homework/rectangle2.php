<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rectangle area calculator</title>
</head>
<body>
<form action="rectangle2.php" method="POST">
    <h4>Please enter the values of the length and width of your rectangle:</h4>
    <label for="width">Insert width</label>
    <input type="text" name="width" id="width" required>
    <label for="height">Insert height</label>
    <input type='text' name='height' id="height" required>
    <input type="submit" name="submit" value="Calculate area">
</form>
</body>
</html>
<?php

function rectangle($width, $height): float|int
{
    return $width * $height;
}

if (isset($_POST['submit'])) {
    $width = $_POST['width'];
    $height = $_POST['height'];
    echo "<br> A rectangle of width " . $width . " and height " . $height . " has an area of " . rectangle($width, $height) . ".";
}
?>



