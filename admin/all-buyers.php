<?php
$current_page = basename($_SERVER['PHP_SELF']); // Get the current page name
$page_title = 'Buyers | Admin Panel';  // Set the page title
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
                    <li>Buyers</li>
                </ul>
            </div>

            <!---==================--->
            <!-- Start Body Content -->
            <!---==================--->

            <!-- All Buyer Card -->
            <div class="card">
                <div class="card-header">
                    <h3>All Buyers</h3>

                    <div class="card-actions">

                        <!-- Start Search Box -->
                        <div style="display: flex; align-items: center;">
                            <input type="text" id="buyerSearchInput" placeholder="Search buyer id, name, phone, company, type, location..." style="width: 300px; padding: 6px 10px; border: 1px solid #ccc;">
                            <button id="buyerSearchBtn" style="background-color: green; color: white; border: none; padding: 6px 12px; border: 1px solid green; cursor: pointer; margin-left: 0;">
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
                                    <th>Buyer ID</th>
                                    <th>Full Name</th>
                                    <th>Phone</th>
                                    <th>Business Location</th>
                                    <th>Buyer Type</th>
                                    <th>Company</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <?php
                                        echo get_all_buyers('
                                        <tr>
                                            <td>##ID#</td>
                                            <td>#FIRST_NAME# #LAST_NAME#</td>
                                            <td>#PHONE#</td>
                                            <td>#BUSINESS_LOCATION#</td>
                                            <td>#BUYER_TYPE#</td>
                                            <td>#COMPANY#</td>
                                            <td><span class="status active">Active</span></td>
                                            <td>
                                                <a href="edit-buyer.php?id=#ID#"><i class="fas fa-edit"></i></a>
                                            </td>
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
document.getElementById('buyerSearchBtn').addEventListener('click', function () {
    const keyword = document.getElementById('buyerSearchInput').value;

    fetch('ajax/search_buyers.php', {
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