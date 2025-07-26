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


////////////////////////////////////////////////////////////////////////////////////
// Start 'count-users' action
////////////////////////////////////////////////////////////////////////////////////
if ($action === 'count-users') {
    $sql_buyers = "SELECT COUNT(*) AS total_buyers FROM buyers";
    $sql_farmers = "SELECT COUNT(*) AS total_farmers FROM farmers";

    $result_buyers = $conn->query($sql_buyers);
    $result_farmers = $conn->query($sql_farmers);

    if ($result_buyers && $result_farmers) {
        $row_buyers = $result_buyers->fetch_assoc();
        $row_farmers = $result_farmers->fetch_assoc();

        $total_users = $row_buyers['total_buyers'] + $row_farmers['total_farmers'];

        $response = array(
            "success" => true,
            "message" => "Total users (buyers + farmers) counted successfully",
            "total_buyers" => $row_buyers['total_buyers'],
            "total_farmers" => $row_farmers['total_farmers'],
            "total_users" => $total_users
        );
    } else {
        $response = array(
            "success" => false,
            "message" => "Failed to count users"
        );
    }

    echo json_encode($response);
    exit();
}
////////////////////////////////////////////////////////////////////////////////////
// End 'count-users' action
////////////////////////////////////////////////////////////////////////////////////




////////////////////////////////////////////////////////////////////////////////////
// Start 'count-farmers' action
////////////////////////////////////////////////////////////////////////////////////
if ($action === 'count-farmers') {
    $sql = "SELECT COUNT(*) AS total_farmers FROM farmers";
    $result = $conn->query($sql);

    if ($result) {
        $row = $result->fetch_assoc();
        $response = array(
            "success" => true,
            "message" => "Total farmers counted successfully",
            "total_farmers" => $row['total_farmers']
        );
    } else {
        $response = array(
            "success" => false,
            "message" => "Failed to count farmers"
        );
    }

    echo json_encode($response);
    exit();
}
////////////////////////////////////////////////////////////////////////////////////
// End 'count-farmers' action
////////////////////////////////////////////////////////////////////////////////////



////////////////////////////////////////////////////////////////////////////////////
// Start 'count-buyers' action
////////////////////////////////////////////////////////////////////////////////////
if ($action === 'count-buyers') {
    $sql = "SELECT COUNT(*) AS total_buyers FROM buyers";
    $result = $conn->query($sql);

    if ($result) {
        $row = $result->fetch_assoc();
        $response = array(
            "success" => true,
            "message" => "Total buyers counted successfully",
            "total_buyers" => $row['total_buyers']
        );
    } else {
        $response = array(
            "success" => false,
            "message" => "Failed to count buyers"
        );
    }

    echo json_encode($response);
    exit();
}
////////////////////////////////////////////////////////////////////////////////////
// End 'count-buyers' action
////////////////////////////////////////////////////////////////////////////////////


// Handle wrong/invalid action
else {
    $response = array(
        "success" => false,
        "message" => "Invalid action specified!"
    );
    echo json_encode($response);
    exit();
}