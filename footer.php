    <!-- Footer -->
    <?php
        if ($current_page == 'login.php') {

            // No footer available for login page

        } else if ($current_page == 'register.php') {

            // Different footer content for register page
            require 'register_footer_content.php';

        } else {

            // Common footer content
            require 'common_footer_content.php';

        }
    ?>
    

    <?php
        if ($current_page == 'index.php') {

            require 'js/script.php';

        } else if ($current_page == 'halal_investment.php') {

            require 'js/script_halal_investment.php';

        } else if ($current_page == 'services.php') {

            require 'js/script_services.php';

        } else if ($current_page == 'about.php') {

            require 'js/script_about.php';
            
        } else if ($current_page == 'testimonials.php') {

            require 'js/script_testimonials.php';

        } else if ($current_page == 'contact.php') {

            require 'js/script_contact.php';

        } else if ($current_page == 'login.php') {

            require 'js/script_login.php';

        } else if ($current_page == 'register.php') {

            require 'js/script_register.php';

        }
    ?>
</body>
</html>