<?php
// Database configuration
$servername = "localhost";
$username = ""; // 
$password = ""; // 
$dbname = "soccer"; 


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$siteName = "foot baller"; 
$siteDescription = "Enter your description here";
?>
