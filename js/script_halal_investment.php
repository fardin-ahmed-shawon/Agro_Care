    <script>
        // Mobile Menu Toggle
        document.querySelector('.mobile-menu').addEventListener('click', function() {
            document.querySelector('.nav-links').classList.toggle('active');
        });

        // FAQ Accordion
        const faqQuestions = document.querySelectorAll('.faq-question');
        faqQuestions.forEach(question => {
            question.addEventListener('click', () => {
                const item = question.parentNode;
                item.classList.toggle('active');
                
                // Close other open items
                faqQuestions.forEach(q => {
                    if (q !== question) {
                        q.parentNode.classList.remove('active');
                    }
                });
            });
        });

        // Form Submission
        // document.getElementById('halalInvestmentForm').addEventListener('submit', function(e) {
        //     e.preventDefault();
        //     alert('Thank you for your investment interest! Our advisor will contact you shortly.');
        //     this.reset();
        // });

        // Smooth Scrolling for Anchor Links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    </script>