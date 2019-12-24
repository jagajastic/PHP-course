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

$query = "SELECT first_name, last_name, pen_name FROM Authors ORDER BY first_name";
$resultObj = $connection->query($query);

if ($resultObj->num_rows > 0) {

    while ($singleRowFromQuery = $resultObj->fetch_assoc()) {
        echo "Author: " . $singleRowFromQuery['first_name'] . PHP_EOL;
    }
}
// $connection->query($query);
$resultObj->close();
$connection->close();