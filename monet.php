<?php
// Database connection parameters
$host = "localhost";
$username = "mohammed.adel";
$password = "Ma18032002";
$database = "musical_instruments";

// Establishing a connection to MySQL
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the request is a POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get product details from the request
    $productId = $_POST['productId'];

// Close the database connection
$conn->close();
?>