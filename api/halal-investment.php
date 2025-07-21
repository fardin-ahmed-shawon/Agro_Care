<?php
require_once 'config.php';

// Set a custom error handler to return JSON for errors
set_exception_handler(function ($exception) {
    $response = array(
        "success" => false,
        "message" => $exception->getMessage()
    );
    echo json_encode($response);
    exit();
});

$action = $_GET['action'] ?? '';

if ($action === '') {
    echo json_encode(["success" => false, "message" => "No action specified."]);
    exit();
}


////////////////////////////////////////////////////////////////////////////////////
// Handle 'submit-investment' action
////////////////////////////////////////////////////////////////////////////////////
if ($action === 'submit-investment') {

    $first_name     = sanitize_input($_POST['first_name'] ?? '');
    $last_name      = sanitize_input($_POST['last_name'] ?? '');
    $email_address  = filter_var(trim($_POST['email_address'] ?? ''), FILTER_SANITIZE_EMAIL);
    $phone          = sanitize_input($_POST['phone'] ?? '');
    $address        = sanitize_input($_POST['address'] ?? '');
    $city           = sanitize_input($_POST['city'] ?? '');
    $country        = sanitize_input($_POST['country'] ?? 'Bangladesh');
    $investment_model   = sanitize_input($_POST['investment_model'] ?? '');
    $investment_amount  = filter_var($_POST['investment_amount'] ?? '', FILTER_SANITIZE_NUMBER_INT);
    $investment_duration = sanitize_input($_POST['investment_duration'] ?? '');
    $sharia_agreement = isset($_POST['sharia_agreement']);
    $terms_agreement  = isset($_POST['terms_agreement']);

    // Required field validation
    if (
        empty($first_name) || empty($last_name) || empty($phone) ||
        empty($investment_model) || empty($investment_amount) || empty($investment_duration) ||
        !$sharia_agreement || !$terms_agreement
    ) {
        echo json_encode(["success" => false, "message" => "Please fill in all required fields."]);
        exit();
    }

    // Email validation (optional field)
    if (!empty($email_address) && !filter_var($email_address, FILTER_VALIDATE_EMAIL)) {
        echo json_encode(["success" => false, "message" => "Invalid email address."]);
        exit();
    }

    // Investment amount validation
    if ($investment_amount < 50000) {
        echo json_encode(["success" => false, "message" => "Minimum investment is 50,000 BDT."]);
        exit();
    }

    // Check for duplicate phone number
    $check = $conn->prepare("SELECT id FROM halal_investment WHERE phone = ?");
    $check->bind_param("s", $phone);
    $check->execute();
    $check->store_result();
    if ($check->num_rows > 0) {
        echo json_encode(["success" => false, "message" => "This phone number is already registered."]);
        exit();
    }

    // Insert new investment
    $stmt = $conn->prepare("INSERT INTO halal_investment 
        (first_name, last_name, email_address, phone, address, city, country, investment_model, investment_amount, investment_duration)
        VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param(
        "ssssssssss",
        $first_name,
        $last_name,
        $email_address,
        $phone,
        $address,
        $city,
        $country,
        $investment_model,
        $investment_amount,
        $investment_duration
    );

    if ($stmt->execute()) {
        echo json_encode(["success" => true, "message" => "Your investment application has been submitted successfully."]);
    } else {
        echo json_encode(["success" => false, "message" => "Submission failed. Please try again later."]);
    }

    exit();
}

////////////////////////////////////////////////////////////////////////////////////
// Invalid action fallback
////////////////////////////////////////////////////////////////////////////////////
else {
    echo json_encode(["success" => false, "message" => "Invalid action specified."]);
    exit();
}
