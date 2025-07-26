<?php
$current_page = basename($_SERVER['PHP_SELF']); // Get the current page name
$page_title = 'Farmers | Admin Panel';  // Set the page title
?>
<?php require 'header.php'; ?>

<!-----------=====================------------->
<!--========== Start Main Content ===========-->
<!-----------=====================------------->
        <div class="content-area">
            <div class="page-header">
                <h2></h2>
                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li>Farmers</li>
                </ul>
            </div>

            <!---==================--->
            <!-- Start Body Content -->
            <!---==================--->

            <!-- All Farmers Card -->
            <div class="card">
                <div class="card-header">
                    <h3>All Farmers</h3>

                    <div class="card-actions">

                        <!-- Start Search Box -->
                        <div style="display: flex; align-items: center;">
                            <input type="text" id="farmerSearchInput" placeholder="Search farmer id, name, phone, location..." style="width: 300px; padding: 6px 10px; border: 1px solid #ccc;">
                            <button id="farmerSearchBtn" style="background-color: green; color: white; border: none; padding: 6px 12px; border: 1px solid green; cursor: pointer; margin-left: 0;">
                                Search
                            </button>
                            <a href=""><button><i class="fas fa-sync-alt"></i></button></a>
                        </div>
                        <!-- End Search Box -->


                        
                        <!-- <button><i class="fas fa-ellipsis-v"></i></button> -->
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th>Farmer ID</th>
                                    <th>Full Name</th>
                                    <th>Phone</th>
                                    <th>Location</th>
                                    <th>Farm Type</th>
                                    <th>Farm Size</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <?php
                                        echo get_all_farmers('
                                        <tr>
                                            <td>##ID#</td>
                                            <td>#FIRST_NAME# #LAST_NAME#</td>
                                            <td>#PHONE#</td>
                                            <td>#LOCATION#</td>
                                            <td>#FARM_TYPE#</td>
                                            <td>#FARM_SIZE#</td>
                                            <td><span class="status active">Active</span></td>
                                            <td>
                                                <a href="edit-farmer.php?id=#ID#"><i class="fas fa-edit"></i></a>
                                            </td>
                                            <!--<td>
                                                <button class="action-btn"><i class="fas fa-edit"></i></button>
                                            </td>-->
                                        </tr>');
                                    ?>
                            </tbody>
                        </table>
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

<script>
document.getElementById('farmerSearchBtn').addEventListener('click', function () {
    const keyword = document.getElementById('farmerSearchInput').value;

    fetch('ajax/search_farmers.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: 'keyword=' + encodeURIComponent(keyword)
    })
    .then(res => res.text())
    .then(data => {
        document.querySelector('tbody').innerHTML = data;
    });
});
</script>

<!-- Footer -->
<?php require 'footer.php'; ?> 