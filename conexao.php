<?php
// Create a connection to the database
$servername = "localhost"; //LOBODELL\SQLEXPRESS
$username = "root";  //LOBODELL\mathe
$password = "1234";
$dbname = "ola"; //Locadora

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>