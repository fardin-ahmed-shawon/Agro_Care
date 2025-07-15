    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <h3>AgroFarm</h3>
                    <p>Empowering Bangladesh's farmers through innovative technology and sustainable agricultural solutions since 2018.</p>
                    <div class="footer-social">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="footer-col">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="index.html"><i class="fas fa-chevron-right"></i> Home</a></li>
                        <li><a href="services.html"><i class="fas fa-chevron-right"></i> Services</a></li>
                        <li><a href="about.html"><i class="fas fa-chevron-right"></i> About Us</a></li>
                        <li><a href="testimonials.html"><i class="fas fa-chevron-right"></i> Testimonials</a></li>
                        <li><a href="contact.html"><i class="fas fa-chevron-right"></i> Contact</a></li>
                        <li><a href="register.html"><i class="fas fa-chevron-right"></i> Register</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Services</h3>
                    <ul>
                        <li><a href="services.html"><i class="fas fa-chevron-right"></i> Market Access</a></li>
                        <li><a href="services.html"><i class="fas fa-chevron-right"></i> Financial Services</a></li>
                        <li><a href="services.html"><i class="fas fa-chevron-right"></i> Training Programs</a></li>
                        <li><a href="services.html"><i class="fas fa-chevron-right"></i> Equipment Rental</a></li>
                        <li><a href="services.html"><i class="fas fa-chevron-right"></i> Weather Alerts</a></li>
                    </ul>
                </div>
                <div class="footer-col">
                    <h3>Contact Us</h3>
                    <ul>
                        <li><a href="#"><i class="fas fa-map-marker-alt"></i> 123 Agricultural Road, Farmville, Bangladesh</a></li>
                        <li><a href="tel:+8801234567890"><i class="fas fa-phone-alt"></i> +880 1234 567890</a></li>
                        <li><a href="mailto:info@agrofarm.com"><i class="fas fa-envelope"></i> info@agrofarm.com</a></li>
                        <li><a href="#"><i class="fas fa-clock"></i> Mon-Fri: 9AM-6PM</a></li>
                        <li><a href="#"><i class="fas fa-clock"></i> Sat: 10AM-4PM</a></li>
                    </ul>
                </div>
            </div>
            <div class="copyright">
                <p>&copy; 2023 AgroFarm. All Rights Reserved. | <a href="#" style="color: var(--primary);">Privacy Policy</a> | <a href="#" style="color: var(--primary);">Terms of Service</a></p>
            </div>
        </div>
    </footer>

    <?php
        if ($current_page == 'index.php') {

            require 'js/script.php';

        } else if ($current_page == 'halal_investment.php') {

            require 'js/script_halal_investment.php';

        } else if ($current_page == 'services.php') {

            require 'js/script_services.php';

        } else if ($current_page == 'about.php') {

            require 'js/script_about.php';
            
        }
    ?>
</body>
</html>