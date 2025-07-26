<?php
$current_page = basename($_SERVER['PHP_SELF']); // Get the current page name
$page_title = 'FarmerCare | Admin Panel';  // Set the page title
?>
<?php require 'header.php'; ?>

<!-----------=====================------------->
<!--========== Start Main Content ===========-->
<!-----------=====================------------->
        <div class="content-area">
            <div class="page-header">
                <h2>Dashboard</h2>
                <ul class="breadcrumb">
                    <li><a href="#">Home</a></li>
                    <li>Dashboard</li>
                </ul>
            </div>

            <!---==================--->
            <!-- Start Body Content -->
            <!---=================--->

            <!-- Stats Cards -->
            <div class="stats-cards">
                <div class="stats-card">
                    <div class="stats-icon users">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="stats-info">
                        <h3>
                            <?php 
                                $farmers = countTableRows($conn, 'farmers', 'total');
                                $buyers = countTableRows($conn, 'buyers', 'total'); 
                                echo $farmers+$buyers;
                            ?>
                        </h3>
                        <p>Total Users</p>
                    </div>
                </div>
                <div class="stats-card">
                    <div class="stats-icon farmers">
                        <i class="fas fa-tractor"></i>
                    </div>
                    <div class="stats-info">
                        <h3>
                            <?php 
                                echo countTableRows($conn, 'farmers', 'total');
                            ?>
                        </h3>
                        <p>Farmers</p>
                    </div>
                </div>
                <div class="stats-card">
                    <div class="stats-icon buyers">
                        <i class="fas fa-shopping-basket"></i>
                    </div>
                    <div class="stats-info">
                        <h3>
                            <?php 
                                echo countTableRows($conn, 'buyers', 'total');
                            ?>
                        </h3>
                        <p>Buyers</p>
                    </div>
                </div>
                <div class="stats-card">
                    <div class="stats-icon products">
                        <i class="fas fa-shopping-cart"></i>
                    </div>
                    <div class="stats-info">
                        <h3>0</h3>
                        <p>Products</p>
                    </div>
                </div>
            </div>

            <!-- Recent Orders Card -->
            <!-- <div class="card">
                <div class="card-header">
                    <h3>Recent Orders</h3>
                    <div class="card-actions">
                        <button><i class="fas fa-sync-alt"></i></button>
                        <button><i class="fas fa-ellipsis-v"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th>Order ID</th>
                                    <th>Customer</th>
                                    <th>Date</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#ORD-2023-001</td>
                                    <td>John Smith</td>
                                    <td>2023-10-15</td>
                                    <td>$245.00</td>
                                    <td><span class="status active">Completed</span></td>
                                    <td>
                                        <button class="action-btn"><i class="fas fa-eye"></i></button>
                                        <button class="action-btn"><i class="fas fa-edit"></i></button>
                                        <button class="action-btn delete"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#ORD-2023-002</td>
                                    <td>Sarah Johnson</td>
                                    <td>2023-10-14</td>
                                    <td>$189.50</td>
                                    <td><span class="status pending">Processing</span></td>
                                    <td>
                                        <button class="action-btn"><i class="fas fa-eye"></i></button>
                                        <button class="action-btn"><i class="fas fa-edit"></i></button>
                                        <button class="action-btn delete"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#ORD-2023-003</td>
                                    <td>Michael Brown</td>
                                    <td>2023-10-13</td>
                                    <td>$320.75</td>
                                    <td><span class="status active">Completed</span></td>
                                    <td>
                                        <button class="action-btn"><i class="fas fa-eye"></i></button>
                                        <button class="action-btn"><i class="fas fa-edit"></i></button>
                                        <button class="action-btn delete"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#ORD-2023-004</td>
                                    <td>Emily Davis</td>
                                    <td>2023-10-12</td>
                                    <td>$145.20</td>
                                    <td><span class="status rejected">Cancelled</span></td>
                                    <td>
                                        <button class="action-btn"><i class="fas fa-eye"></i></button>
                                        <button class="action-btn"><i class="fas fa-edit"></i></button>
                                        <button class="action-btn delete"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>#ORD-2023-005</td>
                                    <td>Robert Wilson</td>
                                    <td>2023-10-11</td>
                                    <td>$275.90</td>
                                    <td><span class="status pending">Processing</span></td>
                                    <td>
                                        <button class="action-btn"><i class="fas fa-eye"></i></button>
                                        <button class="action-btn"><i class="fas fa-edit"></i></button>
                                        <button class="action-btn delete"><i class="fas fa-trash"></i></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> -->

            <!-- Recent Farmers and Recent Buyers Cards -->
            <div class="form-row">
                <div class="card">
                    <div class="card-header">
                        <h3>Recent Farmers</h3>
                        <div class="card-actions">
                            <button><i class="fas fa-sync-alt"></i></button>
                            <button><i class="fas fa-ellipsis-v"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive" style="max-height: 400px">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Location</th>
                                        <th>Farm Type</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        echo get_all_farmers('
                                        <tr>
                                            <td>#FIRST_NAME# #LAST_NAME#</td>
                                            <td>#LOCATION#</td>
                                            <td>#FARM_TYPE#</td>
                                            <td><span class="status active">Active</span></td>
                                            <td>
                                                <button class="action-btn"><i class="fas fa-eye"></i></button>
                                                <button class="action-btn"><i class="fas fa-edit"></i></button>
                                            </td>
                                        </tr>');
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h3>Recent Buyers</h3>
                        <div class="card-actions">
                            <button><i class="fas fa-sync-alt"></i></button>
                            <button><i class="fas fa-ellipsis-v"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive" style="max-height: 400px">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Company</th>
                                        <th>Type</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        echo get_all_buyers('
                                        <tr>
                                            <td>#FIRST_NAME# #LAST_NAME#</td>
                                            <td>#COMPANY#</td>
                                            <td>#BUYER_TYPE#</td>
                                            <td><span class="status active">Active</span></td>
                                            <td>
                                                <button class="action-btn"><i class="fas fa-eye"></i></button>
                                                <button class="action-btn"><i class="fas fa-edit"></i></button>
                                            </td>
                                        </tr>');
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!---================--->
            <!-- End Body Content -->
            <!---================--->

        </div>
<!-----------=====================------------->
<!----========= End Main Content ============--> 
<!-----------=====================------------->

<!-- Footer -->
<?php require 'footer.php'; ?> 
    