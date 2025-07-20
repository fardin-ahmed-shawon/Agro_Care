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


//////////////////////////////////////////////////////////////////////////////////////
//////////////////////////// Handle the 'user-login' action ///////////////////////////
////////////////////////////////////////////////////////////////////////////////////
if ($action == 'user-login') {

    // Get the phone and password from POST data
    $phone = $_POST['phone'] ?? '';
    $password = $_POST['password'] ?? '';

    // Validate the phone and password
    if (empty($phone) || empty($password)) {
        $response = array(
            "success" => false,
            "message" => "You must provide both phone and password."
        );
        echo json_encode($response);
        exit();
    }

    // Fetch user by phone
    $stmt = $conn->prepare("SELECT * FROM users WHERE phone = ?");
    $stmt->bind_param("s", $phone);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) {
        $user = $result->fetch_assoc();

        // Verify the password
        if (password_verify($password, $user['password'])) {
            // Set session variables for the user
            $_SESSION['user_logged_in'] = true;
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_role'] = $user['role'];

            $response = array(
                "success" => true,
                "message" => "Login Successful.",
                "user" => array(
                    "id" => $user['id'],
                    "user_full_name" => $user['full_name'],
                    "user_phone" => $user['phone'],
                    "user_role" => $user['role']
                )
            );
        } else {
            $response = array(
                "success" => false,
                "message" => "Your password is incorrect!"
            );
        }
    } else {
        $response = array(
            "success" => false,
            "message" => "Invalid phone or password."
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