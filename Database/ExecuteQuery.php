<?php

$dbPassword = "PHPFundamentals";
$dbUserName = "PHPFundamentals";
$dbServer = "localhost";
$dbName = "PHPFundamentals";

$connection = mysqli_connect($dbServer, $dbUserName, $dbPassword, $dbName, "8889");

// print_r($connection);

if ($connection) {
    exit("Database connection failed. Reason: " . $connection->connect_error);
}

// $query = "DELETE FROM Authors WHERE id = 4";
// $query = "UODATE Authors SET pen_name='L.M. Montgomery' WHERE id = 2";
$query = "INSERT INTO Authors (first_name, last_name, pen_name) values('Authur Ignatius Conan', 'Doyle', 'Sir Arthur Ignatius Conan')";

$connection->query($query);

$connection->close();