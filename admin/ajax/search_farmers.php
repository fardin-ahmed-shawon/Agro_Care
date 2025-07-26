<?php
include '../../database/dbConnection.php';
include '../../functions.php'; // where get_all_farmers() is

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $keyword = mysqli_real_escape_string($conn, $_POST['keyword']);

    $sql = "SELECT * FROM farmers 
            WHERE id LIKE '%$keyword%'
               OR first_name LIKE '%$keyword%'
               OR last_name LIKE '%$keyword%'
               OR phone LIKE '%$keyword%'
               OR location LIKE '%$keyword%'
            ORDER BY id DESC";

    $result = mysqli_query($conn, $sql);

    $output = '';

    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = $result->fetch_assoc()) {
            $farmers_html = '
                <tr>
                    <td>#' . htmlspecialchars($row['id']) . '</td>
                    <td>' . htmlspecialchars($row['first_name']) . ' ' . htmlspecialchars($row['last_name']) . '</td>
                    <td>' . htmlspecialchars($row['phone']) . '</td>
                    <td>' . htmlspecialchars($row['location']) . '</td>
                    <td>' . htmlspecialchars($row['farm_type']) . '</td>
                    <td>' . htmlspecialchars($row['farm_size']) . '</td>
                    <td><span class="status active">Active</span></td>
                    <td>
                        <a href="edit-farmer.php?id=' . htmlspecialchars($row['id']) . '"><i class="fas fa-edit"></i></a>
                    </td>
                </tr>';
            $output .= $farmers_html;
        }
    } else {
        $output = '<tr><td colspan="8" style="text-align:center;">No farmers found</td></tr>';
    }

    echo $output;
}
?>