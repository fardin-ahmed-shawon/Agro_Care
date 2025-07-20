<?php
$current_page = basename($_SERVER['PHP_SELF']); // Get the current page name
$page_title = 'AgroCare | Register';  // Set the page title
?>
<!-- Header -->
<?php require 'header.php'; ?>

<!-----------=====================------------->
<!--========== Start Main Content ===========-->
<!-----------=====================------------->
<div class="main-area">

    <!-- Registration Container -->
    <div class="container">
        <div class="registration-container">
            <!-- Registration Tabs -->
            <div class="registration-tabs">
                <button class="tab-btn active" onclick="showForm('farmer')">
                    <i class="fas fa-tractor"></i> Farmer Registration
                </button>
                <button class="tab-btn buyer" onclick="showForm('buyer')">
                    <i class="fas fa-shopping-basket"></i> Buyer Registration
                </button>
            </div>

            <!-- Farmer Registration Form -->
            <div class="form-container">
                <div class="form-section active" id="farmer-form">
                    <div class="form-header">
                        <h2>Join as a Farmer</h2>
                        <p>Connect directly with buyers and grow your farming business</p>
                    </div>

                    <form id="farmerRegistrationForm" enctype="multipart/form-data">
                        <div class="form-grid">
                            <div class="form-group">
                                <label for="farmer-name">Full Name</label>
                                <input name="full_name" type="text" id="farmer-name" class="form-control" placeholder="Your full name" required>
                                <div class="error-message" id="farmer-name-error">Please enter your full name</div>
                            </div>
                            <div class="form-group">
                                <label for="farmer-email">Email Address</label>
                                <input name="email_address" type="email" id="farmer-email" class="form-control" placeholder="your@email.com" required>
                                <div class="error-message" id="farmer-email-error">Please enter a valid email address</div>
                            </div>
                            <div class="form-group">
                                <label for="farmer-phone">Phone Number</label>
                                <input name="phone" type="tel" id="farmer-phone" class="form-control" placeholder="+880 1234 567890" required>
                                <div class="error-message" id="farmer-phone-error">Please enter a valid phone number</div>
                            </div>
                            <div class="form-group">
                                <label for="farmer-location">Location</label>
                                <select name="location" id="farmer-location" class="form-control" required>
                                    <option value="" disabled selected>Select your location</option>
                                    <option value="dhaka">Dhaka</option>
                                    <option value="chittagong">Chittagong</option>
                                    <option value="khulna">Khulna</option>
                                    <option value="rajshahi">Rajshahi</option>
                                    <option value="sylhet">Sylhet</option>
                                    <option value="barisal">Barisal</option>
                                    <option value="rangpur">Rangpur</option>
                                    <option value="mymensingh">Mymensingh</option>
                                </select>
                                <div class="error-message" id="farmer-location-error">Please select your location</div>
                            </div>
                            <div class="form-group">
                                <label for="farm-type">Farm Type</label>
                                <select name="farm_type" id="farm-type" class="form-control" required>
                                    <option value="" disabled selected>Select farm type</option>
                                    <option value="crop">Crop Production</option>
                                    <option value="livestock">Livestock</option>
                                    <option value="poultry">Poultry</option>
                                    <option value="dairy">Dairy</option>
                                    <option value="mixed">Mixed Farming</option>
                                    <option value="aquaculture">Aquaculture</option>
                                    <option value="horticulture">Horticulture</option>
                                </select>
                                <div class="error-message" id="farm-type-error">Please select your farm type</div>
                            </div>
                            <div class="form-group">
                                <label for="farm-size">Farm Size (acres)</label>
                                <input name="farm_size" type="number" id="farm-size" class="form-control" placeholder="10" min="0" step="0.1">
                            </div>
                            <div class="form-group full-width">
                                <label for="farmer-password">Create Password</label>
                                <input name="password" type="password" id="farmer-password" class="form-control" placeholder="••••••••" required minlength="8">
                                <i class="fas fa-eye-slash password-toggle" onclick="togglePassword('farmer-password', this)"></i>
                                <div class="error-message" id="farmer-password-error">Password must be at least 8 characters</div>
                            </div>
                            <div class="form-group full-width">
                                <label for="farmer-confirm-password">Confirm Password</label>
                                <input name="confirm_password" type="password" id="farmer-confirm-password" class="form-control" placeholder="••••••••" required minlength="8">
                                <i class="fas fa-eye-slash password-toggle" onclick="togglePassword('farmer-confirm-password', this)"></i>
                                <div class="error-message" id="farmer-confirm-password-error">Passwords do not match</div>
                            </div>
                            <div class="form-group full-width">
                                <input type="checkbox" id="farmer-terms" required>
                                <label for="farmer-terms">I agree to the <a href="#" style="color: var(--primary);">Terms of Service</a> and <a href="#" style="color: var(--primary);">Privacy Policy</a></label>
                                <div class="error-message" id="farmer-terms-error">You must accept the terms</div>
                            </div>
                        </div>

                        <div class="form-actions">
                            <button type="submit" class="btn-form btn-primary" id="farmer-submit-btn">
                                <div class="spinner" id="farmer-spinner"></div>
                                <i class="fas fa-user-plus"></i> Register as Farmer
                            </button>
                        </div>
                    </form>
                    
                    <div class="success-message" id="farmer-success">
                        <i class="fas fa-check-circle"></i>
                        <h3>Registration Successful!</h3>
                        <p>Welcome to AgroFarm. Your account has been created successfully.</p>
                        <p>We've sent a verification email to your address. Please verify to complete your registration.</p>
                        <!-- <a href="" class="btn btn-accent" style="margin-top: 15px;">Go to Dashboard</a> -->
                    </div>
                </div>

                <!-- Buyer Registration Form -->
                <div class="form-section buyer" id="buyer-form">
                    <div class="form-header">
                        <h2>Join as a Buyer</h2>
                        <p>Access quality farm products directly from producers</p>
                    </div>

                    <form id="buyerRegistrationForm" enctype="multipart/form-data">
                        <div class="form-grid">
                            <div class="form-group">
                                <label for="buyer-name">Full Name</label>
                                <input name="full_name" type="text" id="buyer-name" class="form-control" placeholder="Your full name" required>
                                <div class="error-message" id="buyer-name-error">Please enter your full name</div>
                            </div>
                            <div class="form-group">
                                <label for="buyer-email">Email Address</label>
                                <input name="email_address" type="email" id="buyer-email" class="form-control" placeholder="your@email.com" required>
                                <div class="error-message" id="buyer-email-error">Please enter a valid email address</div>
                            </div>
                            <div class="form-group">
                                <label for="buyer-phone">Phone Number</label>
                                <input name="phone" type="tel" id="buyer-phone" class="form-control" placeholder="+880 1234 567890" required>
                                <div class="error-message" id="buyer-phone-error">Please enter a valid phone number</div>
                            </div>
                            <div class="form-group">
                                <label for="buyer-company">Company/Organization</label>
                                <input name="company" type="text" id="buyer-company" class="form-control" placeholder="(Optional)">
                            </div>
                            <div class="form-group">
                                <label for="buyer-type">Buyer Type</label>
                                <select name="buyer_type" id="buyer-type" class="form-control" required>
                                    <option value="" disabled selected>Select buyer type</option>
                                    <option value="retailer">Retailer</option>
                                    <option value="wholesaler">Wholesaler</option>
                                    <option value="processor">Food Processor</option>
                                    <option value="exporter">Exporter</option>
                                    <option value="restaurant">Restaurant/Hotel</option>
                                    <option value="supermarket">Supermarket Chain</option>
                                    <option value="individual">Individual Buyer</option>
                                </select>
                                <div class="error-message" id="buyer-type-error">Please select your buyer type</div>
                            </div>
                            <div class="form-group">
                                <label for="buyer-location">Business Location</label>
                                <select name="business_location" id="buyer-location" class="form-control" required>
                                    <option value="" disabled selected>Select your location</option>
                                    <option value="dhaka">Dhaka</option>
                                    <option value="chittagong">Chittagong</option>
                                    <option value="khulna">Khulna</option>
                                    <option value="rajshahi">Rajshahi</option>
                                    <option value="sylhet">Sylhet</option>
                                    <option value="barisal">Barisal</option>
                                    <option value="rangpur">Rangpur</option>
                                    <option value="mymensingh">Mymensingh</option>
                                </select>
                                <div class="error-message" id="buyer-location-error">Please select your business location</div>
                            </div>
                            <div class="form-group full-width">
                                <label for="buyer-password">Create Password</label>
                                <input name="password" type="password" id="buyer-password" class="form-control" placeholder="••••••••" required minlength="8">
                                <i class="fas fa-eye-slash password-toggle" onclick="togglePassword('buyer-password', this)"></i>
                                <div class="error-message" id="buyer-password-error">Password must be at least 8 characters</div>
                            </div>
                            <div class="form-group full-width">
                                <label for="buyer-confirm-password">Confirm Password</label>
                                <input name="confirm_password" type="password" id="buyer-confirm-password" class="form-control" placeholder="••••••••" required minlength="8">
                                <i class="fas fa-eye-slash password-toggle" onclick="togglePassword('buyer-confirm-password', this)"></i>
                                <div class="error-message" id="buyer-confirm-password-error">Passwords do not match</div>
                            </div>
                            <div class="form-group full-width">
                                <input type="checkbox" id="buyer-terms" required>
                                <label for="buyer-terms">I agree to the <a href="#" style="color: var(--buyer-color);">Terms of Service</a> and <a href="#" style="color: var(--buyer-color);">Privacy Policy</a></label>
                                <div class="error-message" id="buyer-terms-error">You must accept the terms</div>
                            </div>
                        </div>

                        <div class="form-actions">
                            <button type="submit" class="btn-form btn-buyer" id="buyer-submit-btn">
                                <div class="spinner" id="buyer-spinner"></div>
                                <i class="fas fa-user-tie"></i> Register as Buyer
                            </button>
                        </div>
                    </form>
                    
                    <div class="success-message" id="buyer-success">
                        <i class="fas fa-check-circle"></i>
                        <h3>Registration Successful!</h3>
                        <p>Welcome to AgroFarm. Your account has been created successfully.</p>
                        <p>We've sent a verification email to your address. Please verify to complete your registration.</p>
                        <!-- <a href="" class="btn btn-accent" style="margin-top: 15px;">Go to Dashboard</a> -->
                    </div>
                </div>
            </div>

            <!-- Benefits Section -->
            <div class="benefits-section">
                <div class="benefits-card">
                    <h3><i class="fas fa-tractor"></i> Farmer Benefits</h3>
                    <ul class="benefits-list">
                        <li>Direct access to verified buyers and fair market prices</li>
                        <li>Comprehensive farming resources and training programs</li>
                        <li>Equipment rental network with discounted rates</li>
                        <li>Personalized weather and market alerts</li>
                        <li>Financial services including microloans and insurance</li>
                        <li>Community support and knowledge sharing</li>
                    </ul>
                </div>
                <div class="benefits-card buyer">
                    <h3><i class="fas fa-shopping-basket"></i> Buyer Benefits</h3>
                    <ul class="benefits-list">
                        <li>Direct connection with verified farmers and producers</li>
                        <li>Quality products at competitive source prices</li>
                        <li>Reliable supply chain with traceability features</li>
                        <li>Bulk ordering with flexible delivery options</li>
                        <li>Quality assurance and certification details</li>
                        <li>Seasonal product availability calendar</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>
<!-----------=====================------------->
<!----========= End Main Content ============--> 
<!-----------=====================------------->

<!-- Farmer Registration -->
<script>
    document.getElementById('farmerRegistrationForm').addEventListener('submit', async function(e) {
        e.preventDefault(); // Prevent page reload

        const form = e.target;
        const submitBtn = document.getElementById('farmer-submit-btn');
        const spinner = document.getElementById('farmer-spinner');

        // Show loading
        submitBtn.disabled = true;
        spinner.style.display = 'inline-block';

        // Collect form data
        const formData = new FormData(form);

        try {
            const response = await fetch('api/farmers.php?action=add-farmer', {
                method: 'POST',
                headers: {
                    'API-Key': 'AGRPRJCT-API-KEY-744334674564HFHSSQYB71'
                },
                body: formData
            });

            const data = await response.json();

            if (data.success) {
                Swal.fire({
                    icon: 'success',
                    title: 'Registration Successful!',
                    text: 'A new farmer account has been created successfully.',
                    confirmButtonColor: '#3085d6'
                }).then(() => {
                    form.reset();
                    form.style.display = 'none';
                    document.getElementById('farmer-success').style.display = 'block';
                });
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: data.message || 'Something went wrong. Please try again.',
                    confirmButtonColor: '#d33'
                });
            }
        } catch (error) {
            console.error('Registration error:', error);
            Swal.fire({
                icon: 'error',
                title: 'Request Failed',
                text: 'An error occurred while processing your request.',
                confirmButtonColor: '#d33'
            });
        } finally {
            spinner.style.display = 'none';
            submitBtn.disabled = false;
        }
    });
</script>

<!-- Buyer Registration -->
<script>
    document.getElementById('buyerRegistrationForm').addEventListener('submit', async function(e) {
        e.preventDefault(); // Prevent page reload

        const form = e.target;
        const submitBtn = document.getElementById('buyer-submit-btn');
        const spinner = document.getElementById('buyer-spinner');

        // Show loading
        submitBtn.disabled = true;
        spinner.style.display = 'inline-block';

        // Collect form data
        const formData = new FormData(form);

        try {
            const response = await fetch('api/buyers.php?action=add-buyer', {
                method: 'POST',
                headers: {
                    'API-Key': 'AGRPRJCT-API-KEY-744334674564HFHSSQYB71'
                },
                body: formData
            });

            const data = await response.json();

            if (data.success) {
                Swal.fire({
                    icon: 'success',
                    title: 'Registration Successful!',
                    text: 'A new buyer account has been created successfully.',
                    confirmButtonColor: '#3085d6'
                }).then(() => {
                    form.reset();
                    form.style.display = 'none';
                    document.getElementById('buyer-success').style.display = 'block';
                });
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: data.message || 'Something went wrong. Please try again.',
                    confirmButtonColor: '#d33'
                });
            }
        } catch (error) {
            console.error('Registration error:', error);
            Swal.fire({
                icon: 'error',
                title: 'Request Failed',
                text: 'An error occurred while processing your request.',
                confirmButtonColor: '#d33'
            });
        } finally {
            spinner.style.display = 'none';
            submitBtn.disabled = false;
        }
    });
</script>

<!-- Footer -->
<?php require 'footer.php'; ?>