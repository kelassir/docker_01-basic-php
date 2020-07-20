<?php

$servername = "";
$username = "root";
$password = "root_secret***";
$database = "sirdb";
$portno = 33060;

// Create connection
$conn = new mysqli($servername, $username, $password, $database, $portno);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";

?>
