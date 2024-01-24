<?php
$servername = "localhost";
$database = "etheral";
$username = "admindb";
$password = "admin123.123";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>