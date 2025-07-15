<?php
include 'database/dbConnection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $page_title ?></title>
    
    <!-- Site Link -->
    <base href="<?php echo $site_link; ?>">
    
    <!-- Favicon -->
    <link rel="icon" href="" type="image/x-icon">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">


    <?php
        if ($current_page == 'index.php') {

            require 'css/style.php';

        } else if( $current_page == 'halal_investment.php') {

            require 'css/style_halal_investment.php';

        } else if ($current_page == 'services.php') {

            require 'css/style_services.php';

        } else if ($current_page == 'about.php') {

            require 'css/style_about.php';
            
        } else if ($current_page == 'testimonials.php') {

            require 'css/style_testimonials.php';

        } else if ($current_page == 'contact.php') {

            require 'css/style_contact.php';

        } else if ($current_page == 'login.php') {

            require 'css/style_login.php';

        } else if ($current_page == 'register.php') {

            require 'css/style_register.php';

        }
    ?>

</head>
<body>
    <!-- Header (Navbar) -->
    <header>
        <div class="container">
            <nav class="navbar">
                <a href="index.php" class="logo"><i class="fas fa-leaf"></i>Agro<span>Care</span></a>
                <ul class="nav-links">
                    <li><a href="index.php" class="<?= $current_page == 'index.php' ? 'active' : '' ?>">Home</a></li>

					<li><a href="halal_investment.php" class="<?= $current_page == 'halal_investment.php' ? 'active' : '' ?>">Halal Investment</a></li>

                    <li><a href="services.php" class="<?= $current_page == 'services.php' ? 'active' : '' ?>">Services</a></li>

                    <li><a href="about.php" class="<?= $current_page == 'about.php' ? 'active' : '' ?>">About</a></li>

                    <li><a href="testimonials.php" class="<?= $current_page == 'testimonials.php' ? 'active' : '' ?>">Testimonials</a></li>

                    <li><a href="contact.php" class="<?= $current_page == 'contact.php' ? 'active' : '' ?>">Contact</a></li>

                    <li><a href="login.php" class="<?= $current_page == 'login.php' ? 'active' : '' ?>">Login</a></li>

                    <li><a href="register.php" class="<?= $current_page == 'register.php' ? 'active' : '' ?>">Register</a></li>
                </ul>
                <div class="mobile-menu">
                    <i class="fas fa-bars"></i>
                </div>
            </nav>
        </div>
    </header>
    <!-- End Header (Navbar) -->