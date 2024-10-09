<?php
// connection.php

// Define database connection parameters
$host = "localhost";  // Typically 'localhost'
$username = "root";  // Replace with your MySQL database username
$password = "";  // Replace with your MySQL database password
$dbname = "crime_shield";  // Replace with the name of your database

// Create the connection
$conn = mysqli_connect($host, $username, $password, $dbname);

// Check the connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// You can uncomment this for debugging purposes
// echo "Connected successfully";

?>
