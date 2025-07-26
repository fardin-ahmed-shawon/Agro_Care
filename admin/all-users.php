<?php
$current_page = basename($_SERVER['PHP_SELF']); // Get the current page name
$page_title = 'Users | Admin Panel';  // Set the page title
?>
<?php require 'header.php'; ?>

<!-----------=====================------------->
<!--========== Start Main Content ===========-->
<!-----------=====================------------->
        <div class="content-area">
            <div class="page-header">
                <h2>Users</h2>
                <ul class="breadcrumb">
                    <li><a href="index.php">Home</a></li>
                    <li>Users</li>
                </ul>
            </div>

            <!---==================--->
            <!-- Start Body Content -->
            <!---==================--->



            <!---================--->
            <!-- End Body Content -->
            <!---================--->

        </div>
<!-----------=====================------------->
<!----========= End Main Content ============--> 
<!-----------=====================------------->

<!-- Footer -->
<?php require 'footer.php'; ?> 