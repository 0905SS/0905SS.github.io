<?php
$servername = "sql12.freemysqlhosting.net";
$username = "sql12673000";
$password = "5rPEClR8f3";
$dbname = "crud";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
