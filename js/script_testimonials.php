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

        // Video Modal Functionality
        const videoCards = document.querySelectorAll('.video-card');
        const modal = document.getElementById('videoModal');
        const closeModal = document.querySelector('.close-modal');
        const ytplayer = document.getElementById('ytplayer');
        
        videoCards.forEach(card => {
            card.addEventListener('click', function() {
                const videoId = this.getAttribute('data-video-id');
                ytplayer.src = `https://www.youtube.com/embed/${videoId}?autoplay=1&rel=0`;
                modal.classList.add('show');
                document.body.style.overflow = 'hidden';
            });
        });
        
        closeModal.addEventListener('click', function() {
            modal.classList.remove('show');
            ytplayer.src = '';
            document.body.style.overflow = 'auto';
        });
        
        window.addEventListener('click', function(e) {
            if (e.target === modal) {
                modal.classList.remove('show');
                ytplayer.src = '';
                document.body.style.overflow = 'auto';
            }
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });

        // Animation on scroll for testimonial cards
        function animateOnScroll() {
            const testimonialCards = document.querySelectorAll('.testimonial-card, .video-card, .stat-item');
            const windowHeight = window.innerHeight;
            
            testimonialCards.forEach(card => {
                const cardPosition = card.getBoundingClientRect().top;
                const animationPoint = windowHeight - 100;
                
                if (cardPosition < animationPoint) {
                    card.style.opacity = '1';
                    card.style.transform = 'translateY(0)';
                }
            });
        }

        // Initialize elements with animation properties
        document.addEventListener('DOMContentLoaded', function() {
            const animatedElements = document.querySelectorAll('.testimonial-card, .video-card, .stat-item');
            
            animatedElements.forEach(element => {
                element.style.opacity = '0';
                element.style.transform = 'translateY(20px)';
                element.style.transition = 'all 0.6s ease';
            });
            
            // Trigger initial animation check
            animateOnScroll();
        });

        // Add scroll event listener
        window.addEventListener('scroll', animateOnScroll);
    </script>