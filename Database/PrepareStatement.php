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
$tempFirstName = 'Lucy Maud';
$query = "SELECT first_name, last_name, pen_name FROM Authors WHERE first_name = ?";
$statementObj = $connection->prepare($query);
$statementObj->bind_param("s", $tempFirstName);
$statementObj->execute();

$statementObj->bind_result($first_name, $last_name, $pen_name);
$statementObj->store_result();

// $resultObj = $connection->query($query);

if ($statementObj->num_rows > 0) {

    while ($statementObj->fetch()) {
        echo $first_name . " " . $last_name . " (" . $pen_name . ")" . PHP_EOL;
    }
}
// $connection->query($query);
$statementObj->close();
$connection->close(); 