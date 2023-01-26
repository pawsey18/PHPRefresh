<?php
$hostname = "localhost";
$username = "root";
$password = "root";
$dbName = "simpleblog";

// Create connection 
$conn = new mysqli($hostname, $username, $password, $dbName);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: $conn->connect_error");
}
