<?php
header('Content-Type: application/json');

// Include database connection file
require_once '../database/dbConnection.php';

// Include functions file
require_once '../functions.php';

// ------------------API authentication------------------

// Define the API key

define('API_KEY', 'AGRPRJCT-API-KEY-744334674564HFHSSQYB71');

// Validate API key

$headers = getallheaders();
$api_key = $headers['API-Key'] ?? '';

if ($api_key !== API_KEY) {
    $response = array(
        "success" => false,
        "message" => "Invalid API key."
    );
    echo json_encode($response);
    exit();
}

?>