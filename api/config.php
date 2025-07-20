<?php
    header('Content-Type: application/json');

    // Load custom .env loader
    require_once __DIR__ . '/../env_loader.php';

    // DB & function includes
    require_once __DIR__ . '/../database/dbConnection.php';
    require_once __DIR__ . '/../functions.php';

    // Read API key from headers
    $headers = getallheaders();
    $api_key = $headers['API-Key'] ?? '';

    // Validate
    if ($api_key !== $_ENV['API_KEY']) {
        echo json_encode([
            "success" => false,
            "message" => "Invalid API key."
        ]);
        exit();
    }
?>