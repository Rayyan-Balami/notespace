<?php
//THIS PERFORMS THE CONNECTDB FUNCTIONALITY.

//db details
$dbHost = 'localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'notespace';
$tableName = 'users';

//Connect and select the database
$conn = mysqli_connect($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>