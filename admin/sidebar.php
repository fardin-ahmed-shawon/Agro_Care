    <!-- Sidebar -->
    <div class="sidebar">
        <div class="sidebar-header" style="border-bottom: 2px solid #56656cff; background: #263238;">
            <h3><img style="width: 150px" src="../images/far-logo.png" alt=""></h3>
            <div class="sidebar-collapse">
                <i class="fas fa-times"></i>
            </div>
        </div>
        <div class="sidebar-menu">
            <div class="menu-title">Main</div>
            <ul>
                <li><a href="index.php" class="<?= $current_page == 'index.php' ? 'active' : '' ?>"><i class="fas fa-tachometer-alt"></i> Dashboard</a></li>

                <!-- <li><a href="#"><i class="fas fa-chart-line"></i> Analytics</a></li> -->
            </ul>

            <div class="menu-title">Management</div>
            <ul>
                <li><a href="all-users.php" class="<?= $current_page == 'all-users.php' ? 'active' : '' ?>"><i class="fas fa-users"></i> Users</a></li>
                <li><a href="all-farmers.php" class="<?= $current_page == 'all-farmers.php' ? 'active' : '' ?>"><i class="fas fa-tractor"></i> Farmers</a></li>
                <li><a href="all-buyers.php" class="<?= $current_page == 'all-buyers.php' ? 'active' : '' ?>"><i class="fas fa-shopping-basket"></i> Buyers</a></li>

                <!-- <li><a href="#"><i class="fas fa-shopping-cart"></i> Products</a></li>
                <li><a href="#"><i class="fas fa-exchange-alt"></i> Transactions</a></li>
                <li><a href="#"><i class="fas fa-calendar-alt"></i> Orders</a></li> -->

            </ul>

            <!-- <div class="menu-title">Content</div>
            <ul>
                <li><a href="#"><i class="fas fa-newspaper"></i> Blog</a></li>
                <li><a href="#"><i class="fas fa-comments"></i> Testimonials</a></li>
                <li><a href="#"><i class="fas fa-question-circle"></i> FAQs</a></li>
            </ul>

            <div class="menu-title">Settings</div>
            <ul>
                <li><a href="#"><i class="fas fa-cog"></i> System Settings</a></li>
                <li><a href="#"><i class="fas fa-user-shield"></i> Admin Users</a></li>
                <li><a href="#"><i class="fas fa-history"></i> Audit Log</a></li>
            </ul> -->

            <ul>
                <li><a href="logout.php"><i class="fas fa-right-from-bracket"></i> Logout</a></li>
            </ul>

        </div>
    </div>