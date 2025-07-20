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


// Receive the action type
$action = $_GET['action'] ?? '';

// Check if the 'action' parameter is set in the URL
if ($action == '') {
    $response = array(
        "success" => false,
        "message" => "No action specified!"
    );
    echo json_encode($response);
    exit();
}


/////////////////////////////////////////////////////////////////////////////////////
//////////////////////////// Handle the 'add-farmer' action ////////////////////////
///////////////////////////////////////////////////////////////////////////////////
if ($action == 'add-farmer') {
    // Post data from the request
    $full_name     = sanitize_input($_POST['full_name']     ?? '');
    $email_address = filter_var(trim($_POST['email_address'] ?? ''), FILTER_SANITIZE_EMAIL);
    $phone         = sanitize_input($_POST['phone']         ?? '');
    $location      = sanitize_input($_POST['location']      ?? '');
    $farm_type     = sanitize_input($_POST['farm_type']     ?? '');
    $farm_size = filter_var($_POST['farm_size'] ?? '', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $password      = trim($_POST['password']      ?? '');
    $confirm_password = trim($_POST['confirm_password'] ?? '');


    // Validate required fields
    if (empty($full_name) || empty($phone) || empty($location) || empty($farm_type) || empty($farm_size) || empty($password) ||  empty($confirm_password)){
        $response = array(
            "success" => false,
            "message" => "Fill up the required fields."
        );
        echo json_encode($response);
        exit();
    }

    // Check if farmer already exists by phone
    $stmt = $conn->prepare("SELECT id FROM farmers WHERE phone = ?");
    $stmt->bind_param("s", $phone);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
        $response = array(
            "success" => false,
            "message" => "A farmer with this phone number already exists!"
        );
        echo json_encode($response);
        exit();
    }

    // Check if password and confirm_password match
    if ($password !== $confirm_password) {
        $response = array(
            "success" => false,
            "message" => "Password and Confirm Password do not match."
        );
        echo json_encode($response);
        exit();
    }

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Prepare and execute the SQL insert
    $stmt = $conn->prepare("INSERT INTO farmers (full_name, email_address, phone, location, farm_type, farm_size, password) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $full_name, $email_address, $phone, $location, $farm_type, $farm_size, $hashed_password);

    if ($stmt->execute()) {
        $response = array(
            "success" => true,
            "message" => "Farmer registration successful."
        );
    } else {
        $response = array(
            "success" => false,
            "message" => "Registration failed. Email might already exist."
        );
    }

    echo json_encode($response);
    exit();
}
////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////// END ///////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////



/////////////////////////////////////////////////////////////////////////////////////
//////////////////////////// Handle the 'update-farmer' action /////////////////////
///////////////////////////////////////////////////////////////////////////////////
else if ($action == 'update-farmer') {

    $farmer_id     = filter_var($_POST['farmer_id'] ?? '', FILTER_SANITIZE_NUMBER_INT);
    $full_name     = sanitize_input($_POST['full_name']     ?? '');
    $email_address = filter_var(trim($_POST['email_address'] ?? ''), FILTER_SANITIZE_EMAIL);
    $phone         = sanitize_input($_POST['phone']         ?? '');
    $location      = sanitize_input($_POST['location']      ?? '');
    $farm_type     = sanitize_input($_POST['farm_type']     ?? '');
    $farm_size = filter_var($_POST['farm_size'] ?? '', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);


    // Validate required fields
    if (empty($farmer_id) || empty($full_name) || empty($phone) || empty($location) || empty($farm_type) || empty($farm_size)){
        $response = array(
            "success" => false,
            "message" => "Fill up the required fields."
        );
        echo json_encode($response);
        exit();
    }

    // Check if phone is unique for other farmers (optional)
    $stmt = $conn->prepare("SELECT id FROM farmers WHERE phone = ? AND id != ?");
    $stmt->bind_param("si", $phone, $farmer_id);
    $stmt->execute();
    $stmt->store_result();
    if ($stmt->num_rows > 0) {
        $response = array(
            "success" => false,
            "message" => "This phone is already used by another farmer."
        );
        echo json_encode($response);
        exit();
    }

    // Prepare and execute the SQL update
    $stmt = $conn->prepare("UPDATE farmers SET full_name = ?, email_address = ?, phone = ?, location = ?, farm_type = ?, farm_size = ? WHERE id = ?");
    $stmt->bind_param("ssssssi", $full_name, $email_address, $phone, $location, $farm_type, $farm_size, $farmer_id);

    if ($stmt->execute()) {
        $response = array(
            "success" => true,
            "message" => "Farmer successfully updated"
        );
    } else {
        $response = array(
            "success" => false,
            "message" => "Update failed. Please try again."
        );
    }

    echo json_encode($response);
    exit();
}
////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////// END ///////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////



////////////////////////////////////////////////////////////////////////////////////
///////////////////////// Handle the 'delete-farmer' action /////////////////////////
//////////////////////////////////////////////////////////////////////////////////
else if ($action == 'delete-farmer') {

    $farmer_id = filter_var($_POST['farmer_id'] ?? '', FILTER_SANITIZE_NUMBER_INT);

    // Validate required fields
    if (empty($farmer_id)) {
        $response = array(
            "success" => false,
            "message" => "Farmer ID is required."
        );
        echo json_encode($response);
        exit();
    }

    // Prepare and execute the SQL statement to delete the farmer from the database
    $stmt = $conn->prepare("DELETE FROM farmers WHERE id = ?");
    $stmt->bind_param("i", $farmer_id);

    if ($stmt->execute()) {
        $response = array(
            "success" => true,
            "message" => "Farmer successfully deleted"
        );
    } else {
        $response = array(
            "success" => false,
            "message" => "Failed to delete farmer."
        );
    }

    echo json_encode($response);
    exit();
}
////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////// END ///////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////



////////////////////////////////////////////////////////////////////////////////////
///////////////////////// Handle the 'get-farmer' action /////////////////////////
//////////////////////////////////////////////////////////////////////////////////
else if ($action == 'get-farmer') {

    $farmer_id = filter_var($_POST['farmer_id'] ?? '', FILTER_SANITIZE_NUMBER_INT);

    // Validate required fields
    if (empty($farmer_id)) {
        $response = array(
            "success" => false,
            "message" => "Farmer ID is required."
        );
        echo json_encode($response);
        exit();
    }

    // Prepare and execute the SQL statement
    $stmt = $conn->prepare("SELECT full_name, email_address, phone, location, farm_type, farm_size FROM farmers WHERE id = ?");
    $stmt->bind_param("i", $farmer_id);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) {
        $data = $result->fetch_assoc();
        $response = array(
            "success" => true,
            "message" => "Farmer data successfully fetched",
            "data" => $data
        );
    } else {
        $response = array(
            "success" => false,
            "message" => "Farmer not found."
        );
    }

    echo json_encode($response);
    exit();
}
////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////// END ///////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////


////////////////////////////////////////////////////////////////////////////////////
/////////////////////// Handle the 'get-all-farmers' action ///////////////////////
//////////////////////////////////////////////////////////////////////////////////
else if ($action == 'get-all-farmers') {

    // Session check (assuming session-based auth)
    if (!isset($_SESSION['admin'])) {
        $response = array(
            "success" => false,
            "message" => "Unauthorized access!"
        );
        echo json_encode($response);
        exit();
    }

    // Prepare and execute the SQL statement to fetch all farmers
    $sql = "SELECT id, full_name, email_address, phone, location, farm_type, farm_size, created_at FROM farmers";
    $result = $conn->query($sql);

    if ($result) {
        $farmers = array();
        while ($row = $result->fetch_assoc()) {
            $farmers[] = $row;
        }

        $response = array(
            "success" => true,
            "message" => "All farmer data successfully fetched",
            "data" => $farmers
        );
    } else {
        $response = array(
            "success" => false,
            "message" => "Failed to fetch farmer data."
        );
    }

    echo json_encode($response);
    exit();
}

////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////// END ///////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////


// Handle wrong/invalid action
else {
    $response = array(
        "success" => false,
        "message" => "Invalid action specified!"
    );
    echo json_encode($response);
    exit();
}

?>