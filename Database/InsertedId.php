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

$query = "INSERT INTO Authors (first_name, last_name, pen_name) values('Authur Ignatius Conan', 'Doyle', 'Sir Arthur Ignatius Conan')";

$connection->query($query);

echo "Newly Created Author Id: " . $connection->insert_id;

$connection->close();