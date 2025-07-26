<?php
session_start();
$servername = "localhost";

//--------------------------------------------------------------------

// For local development ---------------------------------------------

$site_link = 'http://localhost/test/Agro_Care/';
$username = "root";
$password = "";
$database_name = "agro_care";

// For production -----------------------------------------------------

// $site_link = "https://farmercare.asia/";
// $username = "farmerca2";
// $password = "KYi86UsrX5e1[[";
// $database_name = "farmerca2_agro_care";

//---------------------------------------------------------------------

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>