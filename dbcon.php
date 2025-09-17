<?php
$host = "localhost"; // or 127.0.0.1
$user = "root";      // default XAMPP/WAMP user
$pass = "";          // leave blank if no password
$db   = "ics_portal";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>
