<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbName = "assignment_tracker";

mysqli_report(MYSQLI_REPORT_STRICT | MYSQLI_REPORT_ALL);

try {
    $db = new mysqli($servername, $username, $password, $dbName);
} catch (mysqli_sql_exception $e) {
    $error = "Database error: ";
    $error .= $e->getMessage();
    include('view/error.php');
    exit();
}


// if ($conn->connect_errno) {
//     die("Connection failed: " . $conn->connect_error);
// }
