<?php
$servername = "localhost:3306";
$username = "pavlovsl_pavlovsl";
$password = "1e9kk!1T";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>