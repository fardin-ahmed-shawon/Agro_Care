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

    <!-- Bootstrap Bundle JS (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

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