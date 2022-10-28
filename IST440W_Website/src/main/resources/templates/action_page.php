<?php
// Database configuration
$dbHost     = "blue-moon-whippets.cgcqol9kl31f.us-east-1.rds.amazonaws.com";
$dbUsername = "root";
$dbPassword = "watashi65";
$dbName     = "bmwhippets";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>

