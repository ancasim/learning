<?php

$suits = ["clubs", "diamonds", "hearts", "spades"];
$cards = ["Ace", 2, 3, 4, 5, 6, 7, 8, 9, 10, "Jack", "Queen", "King"];
$randomSuite = array_rand($suits);

$randomCard = array_rand($cards);

echo "The randomly selected card is the " . $cards[$randomCard] . " of " . $suits[$randomSuite] . ".";