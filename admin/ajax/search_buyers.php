<?php
include '../../database/dbConnection.php';
include '../../functions.php'; // Ensure this has get_buyer_details()

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $keyword = mysqli_real_escape_string($conn, $_POST['keyword']);

    $sql = "SELECT * FROM buyers 
            WHERE id LIKE '%$keyword%'
               OR first_name LIKE '%$keyword%'
               OR last_name LIKE '%$keyword%'
               OR phone LIKE '%$keyword%'
               OR business_location LIKE '%$keyword%'
               OR buyer_type LIKE '%$keyword%'
               OR company LIKE '%$keyword%'
            ORDER BY id DESC";

    $result = mysqli_query($conn, $sql);

    $output = '';

    if ($result && mysqli_num_rows($result) > 0) {
        $style = '
        <tr>
            <td>##ID#</td>
            <td>#FIRST_NAME# #LAST_NAME#</td>
            <td>#PHONE#</td>
            <td>#BUSINESS_LOCATION#</td>
            <td>#BUYER_TYPE#</td>
            <td>#COMPANY#</td>
            <td><span class="status active">Active</span></td>
            <td><a href="edit-buyer.php?id=#ID#"><i class="fas fa-edit"></i></a></td>
        </tr>';

        while ($row = $result->fetch_assoc()) {
            $row_html = $style;
            $row_html = str_replace('#ID#', htmlspecialchars($row['id']), $row_html);
            $row_html = str_replace('#FIRST_NAME#', htmlspecialchars($row['first_name']), $row_html);
            $row_html = str_replace('#LAST_NAME#', htmlspecialchars($row['last_name']), $row_html);
            $row_html = str_replace('#PHONE#', htmlspecialchars($row['phone']), $row_html);
            $row_html = str_replace('#BUSINESS_LOCATION#', htmlspecialchars($row['business_location']), $row_html);
            $row_html = str_replace('#BUYER_TYPE#', htmlspecialchars($row['buyer_type']), $row_html);
            $row_html = str_replace('#COMPANY#', htmlspecialchars($row['company']), $row_html);

            $output .= $row_html;
        }
    } else {
        $output = '<tr><td colspan="8" style="text-align:center;">No buyers found</td></tr>';
    }

    echo $output;
}
?>