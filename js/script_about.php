    <script>
        // Mobile Menu Toggle
        document.querySelector('.mobile-menu').addEventListener('click', function() {
            document.querySelector('.nav-links').classList.toggle('active');
            this.querySelector('i').classList.toggle('fa-times');
            this.querySelector('i').classList.toggle('fa-bars');
        });

        // Close mobile menu when clicking a link
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', function() {
                document.querySelector('.nav-links').classList.remove('active');
                document.querySelector('.mobile-menu i').classList.remove('fa-times');
                document.querySelector('.mobile-menu i').classList.add('fa-bars');
            });
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Animation on scroll
        window.addEventListener('scroll', function() {
            const scrollPosition = window.scrollY;
            
            // Add parallax effect to hero section
            if (document.querySelector('.about-hero')) {
                document.querySelector('.about-hero').style.backgroundPositionY = -scrollPosition * 0.5 + 'px';
            }
        });
    </script>