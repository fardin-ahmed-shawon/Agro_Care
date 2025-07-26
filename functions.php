<?php
// All the functions related to this project will be defined here


// input sanitization  
function sanitize_input($data) {
    return htmlspecialchars(strip_tags(trim($data)));
}


// Count table rows
function countTableRows($conn, $tableName, $alias) {
    $sql = "SELECT COUNT(*) AS $alias FROM $tableName";
    $result = $conn->query($sql);

    if ($result) {
        $row = $result->fetch_assoc();
        return $row[$alias];
    } else {
        return false; // error case
    }
}


// Fetch specific farmer
function get_farmer_details($id = '', $style = '') {
    global $conn;

	$sql = "SELECT * FROM farmers WHERE id = '$id'";

	$result = mysqli_query($conn, $sql);

	$output = '';

	while ($row = $result->fetch_assoc()) {
		$farmers_html = $style;

		$farmers_html = str_replace('#ID#', $row['id'], $farmers_html);
		$farmers_html = str_replace('#FIRST_NAME#', $row['first_name'], $farmers_html);
        $farmers_html = str_replace('#LAST_NAME#', $row['last_name'], $farmers_html);
        $farmers_html = str_replace('#EMAIL#', $row['email_address'], $farmers_html);
		$farmers_html = str_replace('#PHONE#', $row['phone'], $farmers_html);
        $farmers_html = str_replace('#LOCATION#', $row['location'], $farmers_html);
        $farmers_html = str_replace('#FARM_TYPE#', $row['farm_type'], $farmers_html);
		$farmers_html = str_replace('#FARM_SIZE#', $row['farm_size'], $farmers_html);

		$output .= $farmers_html;
	}
	return $output;
}


// Fetch all farmers
function get_all_farmers($style = '') {
    global $conn;

	$sql = "SELECT * FROM farmers ORDER BY id DESC";

	$result = mysqli_query($conn, $sql);

	$output = '';

	while ($row = $result->fetch_assoc()) {
		$farmers_html = $style;

		$farmers_html = str_replace('#ID#', $row['id'], $farmers_html);
		$farmers_html = str_replace('#FIRST_NAME#', $row['first_name'], $farmers_html);
        $farmers_html = str_replace('#LAST_NAME#', $row['last_name'], $farmers_html);
        $farmers_html = str_replace('#EMAIL#', $row['email_address'], $farmers_html);
		$farmers_html = str_replace('#PHONE#', $row['phone'], $farmers_html);
        $farmers_html = str_replace('#LOCATION#', $row['location'], $farmers_html);
        $farmers_html = str_replace('#FARM_TYPE#', $row['farm_type'], $farmers_html);
		$farmers_html = str_replace('#FARM_SIZE#', $row['farm_size'], $farmers_html);

		$output .= $farmers_html;
	}
	return $output;
}

function get_buyer_details($id = '', $style = '') {
    global $conn;

	$sql = "SELECT * FROM buyers WHERE id = '$id'";

	$result = mysqli_query($conn, $sql);

	$output = '';

	while ($row = $result->fetch_assoc()) {
		$buyers_html = $style;

		$buyers_html = str_replace('#ID#', $row['id'], $buyers_html);
        $buyers_html = str_replace('#FIRST_NAME#', $row['first_name'], $buyers_html);
        $buyers_html = str_replace('#LAST_NAME#', $row['last_name'], $buyers_html);
        $buyers_html = str_replace('#EMAIL#', $row['email_address'], $buyers_html);
		$buyers_html = str_replace('#PHONE#', $row['phone'], $buyers_html);
        $buyers_html = str_replace('#COMPANY#', $row['company'], $buyers_html);
        $buyers_html = str_replace('#BUYER_TYPE#', $row['buyer_type'], $buyers_html);
        $buyers_html = str_replace('#BUSINESS_LOCATION#', $row['business_location'], $buyers_html);

		$output .= $buyers_html;
	}
	return $output; 
}

// Fetch all buyers
function get_all_buyers($style = '') {
    global $conn;

	$sql = "SELECT * FROM buyers ORDER BY id DESC";

	$result = mysqli_query($conn, $sql);

	$output = '';

	while ($row = $result->fetch_assoc()) {
		$buyers_html = $style;

		$buyers_html = str_replace('#ID#', $row['id'], $buyers_html);
        $buyers_html = str_replace('#FIRST_NAME#', $row['first_name'], $buyers_html);
        $buyers_html = str_replace('#LAST_NAME#', $row['last_name'], $buyers_html);
        $buyers_html = str_replace('#EMAIL#', $row['email_address'], $buyers_html);
		$buyers_html = str_replace('#PHONE#', $row['phone'], $buyers_html);
        $buyers_html = str_replace('#COMPANY#', $row['company'], $buyers_html);
        $buyers_html = str_replace('#BUYER_TYPE#', $row['buyer_type'], $buyers_html);
        $buyers_html = str_replace('#BUSINESS_LOCATION#', $row['business_location'], $buyers_html);

		$output .= $buyers_html;
	}
	return $output; 
}


?>