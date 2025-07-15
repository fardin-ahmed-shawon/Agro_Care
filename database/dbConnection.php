<?php
session_start();
$servername = "localhost";

//--------------------------------------------------------------------

// For local development ---------------------------------------------

$site_link = 'http://localhost/test/Agro_Care/';
$username = "root";
$password = "";
$database_name = "";

// For production -----------------------------------------------------

// $site_link = "";
// $username = "";
// $password = "";
// $database_name = "";

//---------------------------------------------------------------------

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>