<?php

/**
 * Connect to MYSQL
 */
$host = "localhost";
$username = "root";
$password = "";
$database = "native";

try {
    $connection = new PDO("mysql:host=$host;dbname=$database;", $username, $password);
} catch (PDOException $e) {
    return 'Failed to connect: ' . $e->getMessage();
}