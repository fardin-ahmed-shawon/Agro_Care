<?php
require_once 'config.php';

// Error handler
set_exception_handler(function ($exception) {
    echo json_encode([
        "success" => false,
        "message" => $exception->getMessage()
    ]);
    exit();
});

$action = $_GET['action'] ?? '';

if ($action == '') {
    echo json_encode([
        "success" => false,
        "message" => "No action specified!"
    ]);
    exit();
}

// ==================== ADD BUYER ====================
if ($action == 'add-buyer') {
    $full_name     = sanitize_input($_POST['full_name'] ?? '');
    $email_address = filter_var(trim($_POST['email_address'] ?? ''), FILTER_SANITIZE_EMAIL);
    $phone         = sanitize_input($_POST['phone'] ?? '');
    $company       = sanitize_input($_POST['company'] ?? '');
    $buyer_type    = sanitize_input($_POST['buyer_type'] ?? '');
    $business_location = sanitize_input($_POST['business_location'] ?? '');
    $password      = trim($_POST['password'] ?? '');
    $confirm_password = trim($_POST['confirm_password'] ?? '');

    if (empty($full_name) || empty($phone) || empty($password) || empty($confirm_password)) {
        echo json_encode(["success" => false, "message" => "Fill up the required fields."]);
        exit();
    }

    $stmt = $conn->prepare("SELECT id FROM buyers WHERE phone = ?");
    $stmt->bind_param("s", $phone);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
        echo json_encode(["success" => false, "message" => "A buyer with this phone number already exists!"]);
        exit();
    }

    if ($password !== $confirm_password) {
        echo json_encode(["success" => false, "message" => "Password and Confirm Password do not match."]);
        exit();
    }

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO buyers (full_name, email_address, phone, company, buyer_type, business_location, password) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $full_name, $email_address, $phone, $company, $buyer_type, $business_location, $hashed_password);

    if ($stmt->execute()) {
        echo json_encode(["success" => true, "message" => "Buyer registration successful."]);
    } else {
        echo json_encode(["success" => false, "message" => "Registration failed."]);
    }
    exit();
}

// ==================== UPDATE BUYER ====================
else if ($action == 'update-buyer') {
    $buyer_id      = filter_var($_POST['buyer_id'] ?? '', FILTER_SANITIZE_NUMBER_INT);
    $full_name     = sanitize_input($_POST['full_name'] ?? '');
    $email_address = filter_var(trim($_POST['email_address'] ?? ''), FILTER_SANITIZE_EMAIL);
    $phone         = sanitize_input($_POST['phone'] ?? '');
    $company       = sanitize_input($_POST['company'] ?? '');
    $buyer_type    = sanitize_input($_POST['buyer_type'] ?? '');
    $business_location = sanitize_input($_POST['business_location'] ?? '');

    if (empty($buyer_id) || empty($full_name) || empty($phone)) {
        echo json_encode(["success" => false, "message" => "Fill up the required fields."]);
        exit();
    }

    $stmt = $conn->prepare("SELECT id FROM buyers WHERE phone = ? AND id != ?");
    $stmt->bind_param("si", $phone, $buyer_id);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
        echo json_encode(["success" => false, "message" => "This phone is already used by another buyer."]);
        exit();
    }

    $stmt = $conn->prepare("UPDATE buyers SET full_name = ?, email_address = ?, phone = ?, company = ?, buyer_type = ?, business_location = ? WHERE id = ?");
    $stmt->bind_param("ssssssi", $full_name, $email_address, $phone, $company, $buyer_type, $business_location, $buyer_id);

    if ($stmt->execute()) {
        echo json_encode(["success" => true, "message" => "Buyer successfully updated"]);
    } else {
        echo json_encode(["success" => false, "message" => "Update failed."]);
    }
    exit();
}

// ==================== DELETE BUYER ====================
else if ($action == 'delete-buyer') {
    $buyer_id = filter_var($_POST['buyer_id'] ?? '', FILTER_SANITIZE_NUMBER_INT);

    if (empty($buyer_id)) {
        echo json_encode(["success" => false, "message" => "Buyer ID is required."]);
        exit();
    }

    $stmt = $conn->prepare("DELETE FROM buyers WHERE id = ?");
    $stmt->bind_param("i", $buyer_id);

    if ($stmt->execute()) {
        echo json_encode(["success" => true, "message" => "Buyer successfully deleted"]);
    } else {
        echo json_encode(["success" => false, "message" => "Failed to delete buyer."]);
    }
    exit();
}

// ==================== GET SINGLE BUYER ====================
else if ($action == 'get-buyer') {
    $buyer_id = filter_var($_POST['buyer_id'] ?? '', FILTER_SANITIZE_NUMBER_INT);

    if (empty($buyer_id)) {
        echo json_encode(["success" => false, "message" => "Buyer ID is required."]);
        exit();
    }

    $stmt = $conn->prepare("SELECT full_name, email_address, phone, company, buyer_type, business_location FROM buyers WHERE id = ?");
    $stmt->bind_param("i", $buyer_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) {
        $data = $result->fetch_assoc();
        echo json_encode([
            "success" => true,
            "message" => "Buyer data successfully fetched",
            "data" => $data
        ]);
    } else {
        echo json_encode(["success" => false, "message" => "Buyer not found."]);
    }
    exit();
}

// ==================== GET ALL BUYERS ====================
else if ($action == 'get-all-buyers') {
    if (!isset($_SESSION['admin'])) {
        echo json_encode(["success" => false, "message" => "Unauthorized access!"]);
        exit();
    }

    $sql = "SELECT id, full_name, email_address, phone, company, buyer_type, business_location, created_at FROM buyers";
    $result = $conn->query($sql);

    if ($result) {
        $buyers = [];
        while ($row = $result->fetch_assoc()) {
            $buyers[] = $row;
        }

        echo json_encode([
            "success" => true,
            "message" => "All buyer data successfully fetched",
            "data" => $buyers
        ]);
    } else {
        echo json_encode(["success" => false, "message" => "Failed to fetch buyer data."]);
    }
    exit();
}

// ==================== INVALID ACTION ====================
else {
    echo json_encode(["success" => false, "message" => "Invalid action specified!"]);
    exit();
}
?>
