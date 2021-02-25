<?php
$servername = "localhost";
$username = "127.0.0.1";
$password = "";
    
// Create connection
$conn = new mysqli($servername, $username, $password,"test");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>