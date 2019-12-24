<?php

$dbPassword = "PHPFundamentals";
$dbUserName = "PHPFundamentals";
$dbServer = "localhost";
$dbName = "PHPFundamentals";

$connection = new mysqli($dbServer, $dbUserName, $dbPassword, $dbName, "8889");

// print_r($connection);

if ($connection) {
    exit("Database connection failed. Reason: " . $connection->connect_error);
}