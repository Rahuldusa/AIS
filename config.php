<?php

$servername = "localhost"; // assuming MySQL is on the same server
$username = "root";
$password = "";
$dbname = "AIS";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Now $conn is the mysqli connection object, and you can use it for database queries.

?>
