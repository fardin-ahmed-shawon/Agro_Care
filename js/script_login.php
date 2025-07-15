    <script>
        // Password toggle visibility
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');
        
        togglePassword.addEventListener('click', function() {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            this.classList.toggle('fa-eye-slash');
            this.classList.toggle('fa-eye');
        });

        // Form elements
        const loginForm = document.getElementById('loginForm');
        const emailInput = document.getElementById('email');
        const passwordInput = document.getElementById('password');
        const rememberCheckbox = document.getElementById('remember');
        const loginBtn = document.getElementById('loginBtn');
        
        // Alert elements
        const infoAlert = document.getElementById('infoAlert');
        const errorAlert = document.getElementById('errorAlert');
        const errorMessage = document.getElementById('errorMessage');
        const successAlert = document.getElementById('successAlert');
        
        // Show info alert on page load
        window.addEventListener('DOMContentLoaded', () => {
            infoAlert.style.display = 'flex';
            setTimeout(() => {
                infoAlert.style.display = 'none';
            }, 5000);
        });

        // Form validation and submission
        loginForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Reset alerts
            errorAlert.style.display = 'none';
            successAlert.style.display = 'none';
            
            // Reset error states
            document.querySelectorAll('.form-group').forEach(group => {
                group.classList.remove('error', 'success');
            });
            
            let isValid = true;
            
            // Email validation
            if (!validateEmail(emailInput.value)) {
                emailInput.parentElement.parentElement.classList.add('error');
                isValid = false;
            } else {
                emailInput.parentElement.parentElement.classList.add('success');
            }
            
            // Password validation
            if (passwordInput.value.length < 8) {
                passwordInput.parentElement.parentElement.classList.add('error');
                isValid = false;
            } else {
                passwordInput.parentElement.parentElement.classList.add('success');
            }
            
            if (!isValid) {
                errorMessage.textContent = 'Please correct the errors in the form';
                errorAlert.style.display = 'flex';
                return;
            }
            
            // Show loading state
            loginBtn.classList.add('loading');
            loginBtn.disabled = true;
            
            // Simulate API call
            setTimeout(() => {
                // Hide loading state
                loginBtn.classList.remove('loading');
                loginBtn.disabled = false;
                
                // Show success message
                successAlert.style.display = 'flex';
                
                // In a real application, you would redirect to dashboard here
                // For demo, we'll just show the success message
                // window.location.href = 'dashboard.html';
            }, 2000);
        });
        
        // Create ripple effect on button click
        loginBtn.addEventListener('click', function(e) {
            const rect = this.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            
            const ripple = document.createElement('span');
            ripple.classList.add('ripple');
            ripple.style.left = `${x}px`;
            ripple.style.top = `${y}px`;
            
            this.appendChild(ripple);
            
            setTimeout(() => {
                ripple.remove();
            }, 600);
        });
        
        // Create account link functionality
        document.getElementById('createAccountLink').addEventListener('click', function(e) {
            e.preventDefault();
            window.location.href = 'register.html';
        });

        // Mobile menu toggle
        document.querySelector('.mobile-menu').addEventListener('click', function() {
            document.querySelector('.nav-links').classList.toggle('active');
            this.querySelector('i').classList.toggle('fa-times');
            this.querySelector('i').classList.toggle('fa-bars');
        });

        // Email validation function
        function validateEmail(email) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(String(email).toLowerCase());
        }

        // Social login buttons functionality
        document.querySelectorAll('.social-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                let service = '';
                if (this.classList.contains('google')) service = 'Google';
                if (this.classList.contains('facebook')) service = 'Facebook';
                if (this.classList.contains('twitter')) service = 'Twitter';
                
                errorMessage.textContent = `${service} login would be implemented in a production environment`;
                errorAlert.style.display = 'flex';
            });
        });
    </script>