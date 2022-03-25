<?php
include_once('Audi.php');
include_once('Bmw.php');

$audi = new Audi();
echo "New Audi car: ";
echo "<br>";
$audi->setColor();
$audi->setAutomaticGear();
echo "color: " . $audi->color;
echo "<br>";
echo "badge color: " . $audi->badgeColor;
echo "<br>";
echo "automatic gear: " . ($audi->automaticGear ? 'yes' : 'no');
echo "<br>";
echo "<br>";
$bmw = new Bmw();
echo "New BMW car: ";
echo "<br>";
$bmw->setColor();
$bmw->setAutomaticGear();
echo "color: " . $bmw->color;
echo "<br>";
echo "automatic gear: " . ($bmw->automaticGear ? 'yes' : 'no');
echo "<br>";