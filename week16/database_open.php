<?php
$servername = "sql102.infinityfree.com";
$username = "if0_38661968";
$password = "jay02Lariba21";
$dbname = "if0_38661968_database_week16";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


?>