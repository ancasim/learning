<?php

/*
 * SETTINGS!
 */
$databaseName = 'coffee_machine';
$databaseUser = 'root';
$databasePassword = '';

/*
 * CREATE THE DATABASE
 */
$pdoDatabase = new PDO('mysql:host=localhost:63342', $databaseUser, $databasePassword);
$pdoDatabase->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdoDatabase->exec('CREATE DATABASE IF NOT EXISTS coffee_machine');

/*
 * CREATE THE TABLE
 */
$pdo = new PDO('mysql:host=localhost:63342;dbname='.$databaseName, $databaseUser, $databasePassword);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

// initialize the table
$pdo->exec('DROP TABLE IF EXISTS recipe;');

$pdo->exec('CREATE TABLE `recipe` (
 `id` int(11) NOT NULL AUTO_INCREMENT,
 `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
 `coffee` int(4) NOT NULL,
 `sugar` int(4) NOT NULL,
 `milk` int(4) NOT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci');

/*
 * INSERT SOME DATA!
 */
$pdo->exec('INSERT INTO recipe
    (name, coffee, sugar, milk) VALUES
    ("espresso", 30, 10, 0)'
);
$pdo->exec('INSERT INTO recipe
    (name, coffee, sugar, milk) VALUES
    ("latte", 10, 20, 70)'
);
$pdo->exec('INSERT INTO recipe
    (name, coffee, sugar, milk) VALUES
    ("cappucino", 20, 10, 20)'
);

echo "Ding!\n";
