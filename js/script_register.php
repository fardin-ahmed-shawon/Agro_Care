    <script>
        // Mobile Menu Toggle
        document.querySelector('.mobile-menu').addEventListener('click', function() {
            document.querySelector('.nav-links').classList.toggle('active');
            this.querySelector('i').classList.toggle('fa-times');
            this.querySelector('i').classList.toggle('fa-bars');
        });

        // Show the selected form
        function showForm(formType) {
            // Update tabs
            document.querySelectorAll('.tab-btn').forEach(btn => {
                btn.classList.remove('active');
            });
            
            if (formType === 'farmer') {
                document.querySelector('.tab-btn:first-child').classList.add('active');
                document.getElementById('farmer-form').classList.add('active');
                document.getElementById('buyer-form').classList.remove('active');
            } else {
                document.querySelector('.tab-btn:last-child').classList.add('active');
                document.getElementById('buyer-form').classList.add('active');
                document.getElementById('farmer-form').classList.remove('active');
            }
        }

        // Toggle password visibility
        function togglePassword(inputId, icon) {
            const input = document.getElementById(inputId);
            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            } else {
                input.type = 'password';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            }
        }

        // Form validation
        function validateForm(formType) {
            let isValid = true;
            const prefix = formType === 'farmer' ? 'farmer-' : 'buyer-';
            
            // Validate name
            const name = document.getElementById(prefix + 'name').value.trim();
            if (name === '') {
                showError(prefix + 'name-error', 'Please enter your full name');
                isValid = false;
            } else {
                hideError(prefix + 'name-error');
            }
            
            // Validate email
            const email = document.getElementById(prefix + 'email').value.trim();
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                showError(prefix + 'email-error', 'Please enter a valid email address');
                isValid = false;
            } else {
                hideError(prefix + 'email-error');
            }
            
            // Validate phone
            const phone = document.getElementById(prefix + 'phone').value.trim();
            const phoneRegex = /^\+?\d{10,15}$/;
            if (!phoneRegex.test(phone)) {
                showError(prefix + 'phone-error', 'Please enter a valid phone number');
                isValid = false;
            } else {
                hideError(prefix + 'phone-error');
            }
            
            // Validate location
            const location = document.getElementById(prefix + 'location').value;
            if (location === '' || location === null) {
                showError(prefix + 'location-error', 'Please select your location');
                isValid = false;
            } else {
                hideError(prefix + 'location-error');
            }
            
            // Validate password
            const password = document.getElementById(prefix + 'password').value;
            if (password.length < 8) {
                showError(prefix + 'password-error', 'Password must be at least 8 characters');
                isValid = false;
            } else {
                hideError(prefix + 'password-error');
            }
            
            // Validate confirm password
            const confirmPassword = document.getElementById(prefix + 'confirm-password').value;
            if (confirmPassword !== password) {
                showError(prefix + 'confirm-password-error', 'Passwords do not match');
                isValid = false;
            } else {
                hideError(prefix + 'confirm-password-error');
            }
            
            // Validate terms
            if (!document.getElementById(prefix + 'terms').checked) {
                showError(prefix + 'terms-error', 'You must accept the terms');
                isValid = false;
            } else {
                hideError(prefix + 'terms-error');
            }
            
            // Additional validation for farmer form
            if (formType === 'farmer') {
                const farmType = document.getElementById('farm-type').value;
                if (!farmType) {
                    showError('farm-type-error', 'Please select your farm type');
                    isValid = false;
                } else {
                    hideError('farm-type-error');
                }
            }
            
            // Additional validation for buyer form
            if (formType === 'buyer') {
                const buyerType = document.getElementById('buyer-type').value;
                if (!buyerType) {
                    showError('buyer-type-error', 'Please select your buyer type');
                    isValid = false;
                } else {
                    hideError('buyer-type-error');
                }
            }
            
            return isValid;
        }
        
        function showError(id, message) {
            const errorElement = document.getElementById(id);
            errorElement.textContent = message;
            errorElement.style.display = 'block';
            const inputId = id.replace('-error', '');
            document.getElementById(inputId).classList.add('error');
        }
        
        function hideError(id) {
            document.getElementById(id).style.display = 'none';
            const inputId = id.replace('-error', '');
            document.getElementById(inputId).classList.remove('error');
        }

        // Form Submission with loading state
        document.getElementById('farmerRegistrationForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            if (!validateForm('farmer')) return;
            
            // Show loading state
            const submitBtn = document.getElementById('farmer-submit-btn');
            const spinner = document.getElementById('farmer-spinner');
            submitBtn.disabled = true;
            spinner.style.display = 'block';
            
            // Simulate API call
            setTimeout(() => {
                // Hide loading state
                submitBtn.disabled = false;
                spinner.style.display = 'none';
                
                // Show success message
                document.getElementById('farmer-success').style.display = 'block';
                this.style.display = 'none';
                
                // In a real app, you would send this data to your server
                // window.location.href = 'farmer-dashboard.html';
            }, 2000);
        });

        document.getElementById('buyerRegistrationForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            if (!validateForm('buyer')) return;
            
            // Show loading state
            const submitBtn = document.getElementById('buyer-submit-btn');
            const spinner = document.getElementById('buyer-spinner');
            submitBtn.disabled = true;
            spinner.style.display = 'block';
            
            // Simulate API call
            setTimeout(() => {
                // Hide loading state
                submitBtn.disabled = false;
                spinner.style.display = 'none';
                
                // Show success message
                document.getElementById('buyer-success').style.display = 'block';
                this.style.display = 'none';
                
                // In a real app, you would send this data to your server
                // window.location.href = 'buyer-dashboard.html';
            }, 2000);
        });

        // Real-time validation
        document.querySelectorAll('input, select').forEach(element => {
            element.addEventListener('input', function() {
                const id = this.id;
                if (id.includes('farmer-')) {
                    validateField('farmer', id);
                } else if (id.includes('buyer-')) {
                    validateField('buyer', id);
                }
            });
        });

        function validateField(formType, fieldId) {
            const prefix = formType === 'farmer' ? 'farmer-' : 'buyer-';
            
            if (fieldId === prefix + 'name') {
                const value = document.getElementById(fieldId).value.trim();
                if (value === '') {
                    showError(fieldId + '-error', 'Please enter your full name');
                } else {
                    hideError(fieldId + '-error');
                }
            } else if (fieldId === prefix + 'email') {
                const value = document.getElementById(fieldId).value.trim();
                const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                if (!emailRegex.test(value)) {
                    showError(fieldId + '-error', 'Please enter a valid email address');
                } else {
                    hideError(fieldId + '-error');
                }
            } else if (fieldId === prefix + 'phone') {
                const value = document.getElementById(fieldId).value.trim();
                const phoneRegex = /^\+?\d{10,15}$/;
                if (!phoneRegex.test(value)) {
                    showError(fieldId + '-error', 'Please enter a valid phone number');
                } else {
                    hideError(fieldId + '-error');
                }
            } else if (fieldId === prefix + 'location') {
                const value = document.getElementById(fieldId).value;
                if (value === '' || value === null) {
                    showError(fieldId + '-error', 'Please select your location');
                } else {
                    hideError(fieldId + '-error');
                }
            } else if (fieldId === prefix + 'password') {
                const value = document.getElementById(fieldId).value;
                if (value.length < 8) {
                    showError(fieldId + '-error', 'Password must be at least 8 characters');
                } else {
                    hideError(fieldId + '-error');
                    // Check if confirm password matches
                    const confirmPassword = document.getElementById(prefix + 'confirm-password').value;
                    if (confirmPassword && confirmPassword !== value) {
                        showError(prefix + 'confirm-password-error', 'Passwords do not match');
                    } else {
                        hideError(prefix + 'confirm-password-error');
                    }
                }
            } else if (fieldId === prefix + 'confirm-password') {
                const value = document.getElementById(fieldId).value;
                const password = document.getElementById(prefix + 'password').value;
                if (value !== password) {
                    showError(fieldId + '-error', 'Passwords do not match');
                } else {
                    hideError(fieldId + '-error');
                }
            } else if (fieldId === 'farm-type' || fieldId === 'buyer-type') {
                const value = document.getElementById(fieldId).value;
                if (!value) {
                    showError(fieldId + '-error', `Please select your ${fieldId.replace('-', ' ')}`);
                } else {
                    hideError(fieldId + '-error');
                }
            }
        }

        // Initialize form validation on page load
        document.addEventListener('DOMContentLoaded', function() {
            // Validate all fields when they lose focus
            document.querySelectorAll('input, select').forEach(element => {
                element.addEventListener('blur', function() {
                    const id = this.id;
                    if (id.includes('farmer-')) {
                        validateField('farmer', id);
                    } else if (id.includes('buyer-')) {
                        validateField('buyer', id);
                    }
                });
            });
        });
    </script>