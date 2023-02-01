<?php
$hostName = 'localhost';
$username = 'root';
$pw = 'root';
$dbName = 'simpleblog';

$conn = mysqli_connect($hostName, $username, $pw, $dbName);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo 'connected!';
