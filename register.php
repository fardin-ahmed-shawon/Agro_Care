<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AgroCare | Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #2E7D32;
            --primary-light: #4CAF50;
            --primary-dark: #1B5E20;
            --accent: #FF9800;
            --buyer-color: #2196F3;
            --white: #FFFFFF;
            --light-bg: #F8F9FA;
            --border-color: #E0E0E0;
            --text-dark: #263238;
            --text-medium: #455A64;
            --text-light: #90A4AE;
            --error-color: #f44336;
            --success-color: #4CAF50;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: var(--light-bg);
            color: var(--text-medium);
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* Header */
        header {
            background-color: white;
            box-shadow: 0 2px 15px rgba(0,0,0,0.08);
            padding: 15px 0;
            position: sticky;
            top: 0;
            width: 100%;
            z-index: 100;
        }
        
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .logo {
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--primary);
            text-decoration: none;
            display: flex;
            align-items: center;
        }
        
        .logo span {
            color: var(--accent);
        }
        
        .logo i {
            margin-right: 10px;
            font-size: 1.5rem;
        }

        .nav-links {
            display: flex;
            list-style: none;
            align-items: center;
        }

        .nav-links li {
            margin-left: 25px;
        }

        .nav-links a {
            color: var(--text-dark);
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
            position: relative;
        }

        .nav-links a:hover {
            color: var(--primary);
        }

        .nav-links a.active::after {
            content: '';
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: var(--primary);
        }

        .btn {
            padding: 10px 20px;
            border-radius: 6px;
            font-weight: 500;
            text-decoration: none;
            transition: all 0.3s;
        }

        .btn-accent {
            background-color: var(--accent);
            color: white;
        }

        .btn-accent:hover {
            background-color: #F57C00;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(245, 124, 0, 0.3);
        }

        .btn-outline {
            border: 2px solid var(--primary);
            color: var(--primary);
            background: transparent;
        }

        .btn-outline:hover {
            background-color: var(--primary);
            color: white;
        }

        .mobile-menu {
            display: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: var(--text-dark);
        }

        /* Registration Container */
        .registration-container {
            margin: 40px auto;
        }

        /* Registration Tabs */
        .registration-tabs {
            display: flex;
            justify-content: center;
            margin-bottom: 40px;
            border-bottom: 1px solid var(--border-color);
        }

        .tab-btn {
            padding: 15px 40px;
            font-size: 1.1rem;
            font-weight: 500;
            background: none;
            border: none;
            cursor: pointer;
            position: relative;
            color: var(--text-light);
            transition: all 0.3s;
        }

        .tab-btn.active {
            color: var(--text-dark);
            font-weight: 600;
        }

        .tab-btn.active::after {
            content: '';
            position: absolute;
            bottom: -1px;
            left: 0;
            width: 100%;
            height: 3px;
            background-color: var(--primary);
        }

        .tab-btn.buyer.active::after {
            background-color: var(--buyer-color);
        }

        /* Form Container */
        .form-container {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            padding: 40px;
            max-width: 800px;
            margin: 0 auto;
            position: relative;
        }

        .form-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .form-header h2 {
            font-size: 1.8rem;
            color: var(--primary-dark);
            margin-bottom: 10px;
        }

        .form-header p {
            color: var(--text-light);
        }

        .buyer .form-header h2 {
            color: var(--buyer-color);
        }

        /* Form Grid */
        .form-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 20px;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
            position: relative;
        }

        .form-group.full-width {
            grid-column: span 2;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--text-dark);
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid var(--border-color);
            border-radius: 6px;
            font-size: 1rem;
            transition: all 0.3s;
        }

        .form-control:focus {
            border-color: var(--primary);
            outline: none;
            box-shadow: 0 0 0 3px rgba(46, 125, 50, 0.2);
        }

        .buyer .form-control:focus {
            border-color: var(--buyer-color);
            box-shadow: 0 0 0 3px rgba(33, 150, 243, 0.2);
        }

        select.form-control {
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%234CAF50' viewBox='0 0 16 16'%3E%3Cpath d='M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: right 15px center;
            background-size: 12px;
        }

        .buyer select.form-control {
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%232196F3' viewBox='0 0 16 16'%3E%3Cpath d='M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/%3E%3C/svg%3E");
        }

        /* Password toggle */
        .password-toggle {
            position: absolute;
            right: 15px;
            top: 38px;
            cursor: pointer;
            color: var(--text-light);
        }

        .password-toggle:hover {
            color: var(--primary);
        }

        .buyer .password-toggle:hover {
            color: var(--buyer-color);
        }

        /* Error messages */
        .error-message {
            color: var(--error-color);
            font-size: 0.8rem;
            margin-top: 5px;
            display: none;
        }

        .form-control.error {
            border-color: var(--error-color);
        }

        /* Form Actions */
        .form-actions {
            display: flex;
            justify-content: center;
            margin-top: 30px;
        }

        .btn-form {
            padding: 12px 30px;
            border-radius: 6px;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .btn-form i {
            margin-right: 8px;
        }

        .btn-primary {
            background-color: var(--primary);
            color: white;
        }

        .btn-primary:hover {
            background-color: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(46, 125, 50, 0.3);
        }

        .btn-buyer {
            background-color: var(--buyer-color);
            color: white;
        }

        .btn-buyer:hover {
            background-color: #1976D2;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(25, 118, 210, 0.3);
        }

        /* Loading spinner */
        .spinner {
            display: none;
            width: 20px;
            height: 20px;
            border: 3px solid rgba(255,255,255,0.3);
            border-radius: 50%;
            border-top-color: white;
            animation: spin 1s ease-in-out infinite;
            margin-right: 8px;
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        /* Success message */
        .success-message {
            display: none;
            text-align: center;
            padding: 20px;
            background-color: rgba(76, 175, 80, 0.1);
            border-radius: 8px;
            margin-top: 20px;
            color: var(--success-color);
        }

        .success-message i {
            font-size: 2.5rem;
            margin-bottom: 15px;
            display: block;
        }

        .success-message h3 {
            margin-bottom: 10px;
        }

        /* Form Sections */
        .form-section {
            display: none;
        }

        .form-section.active {
            display: block;
            animation: fadeIn 0.5s ease-out;
        }

        /* Benefits Section */
        .benefits-section {
            margin-top: 40px;
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
        }

        .benefits-card {
            background-color: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
            border-top: 4px solid var(--primary);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .benefits-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }

        .benefits-card.buyer {
            border-top-color: var(--buyer-color);
        }

        .benefits-card h3 {
            font-size: 1.3rem;
            margin-bottom: 20px;
            color: var(--primary-dark);
            display: flex;
            align-items: center;
        }

        .benefits-card.buyer h3 {
            color: var(--buyer-color);
        }

        .benefits-card h3 i {
            margin-right: 10px;
        }

        .benefits-list {
            list-style: none;
        }

        .benefits-list li {
            margin-bottom: 15px;
            display: flex;
            align-items: flex-start;
            position: relative;
            padding-left: 25px;
        }

        .benefits-list li::before {
            content: '';
            position: absolute;
            left: 0;
            top: 7px;
            width: 12px;
            height: 12px;
            background-color: var(--primary);
            border-radius: 50%;
        }

        .benefits-card.buyer .benefits-list li::before {
            background-color: var(--buyer-color);
        }

        /* Footer */
        footer {
            background-color: var(--text-dark);
            color: white;
            padding: 50px 0 20px;
            margin-top: 60px;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
        }

        .footer-logo {
            font-size: 1.5rem;
            margin-bottom: 20px;
            display: inline-block;
        }

        .footer-links {
            display: flex;
            gap: 40px;
        }

        .footer-column h4 {
            margin-bottom: 20px;
            font-size: 1.1rem;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-column h4::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 40px;
            height: 2px;
            background-color: var(--primary);
        }

        .footer-column ul {
            list-style: none;
        }

        .footer-column ul li {
            margin-bottom: 10px;
        }

        .footer-column ul li a {
            color: var(--text-light);
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-column ul li a:hover {
            color: white;
        }

        .footer-bottom {
            text-align: center;
            margin-top: 40px;
            padding-top: 20px;
            border-top: 1px solid rgba(255,255,255,0.1);
            color: var(--text-light);
            font-size: 0.9rem;
        }

        /* Social Links */
        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .social-links a {
            color: white;
            background-color: rgba(255,255,255,0.1);
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s;
        }

        .social-links a:hover {
            background-color: var(--primary);
            transform: translateY(-3px);
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        /* Responsive Design */
        @media (max-width: 992px) {
            .nav-links {
                display: none;
                position: absolute;
                top: 80px;
                left: 0;
                width: 100%;
                background-color: white;
                flex-direction: column;
                padding: 20px;
                box-shadow: 0 10px 20px rgba(0,0,0,0.1);
            }

            .nav-links.active {
                display: flex;
            }

            .nav-links li {
                margin: 15px 0;
            }

            .mobile-menu {
                display: block;
            }
        }

        @media (max-width: 768px) {
            .form-grid {
                grid-template-columns: 1fr;
            }

            .form-group.full-width {
                grid-column: span 1;
            }

            .benefits-section {
                grid-template-columns: 1fr;
            }

            .footer-content {
                flex-direction: column;
            }

            .footer-links {
                flex-direction: column;
                gap: 30px;
                margin-top: 30px;
            }
        }

        @media (max-width: 576px) {
            .registration-tabs {
                flex-direction: column;
                border-bottom: none;
            }

            .tab-btn {
                border-bottom: 1px solid var(--border-color);
                text-align: center;
            }

            .tab-btn.active::after {
                display: none;
            }

            .form-container {
                padding: 30px 20px;
            }

            .btn-form {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <nav class="navbar">
                <a href="index.html" class="logo"><i class="fas fa-leaf"></i>Agro<span>Care</span></a>
                <ul class="nav-links">
                    <li><a href="index.html">Home</a></li>
					<li><a href="halal investment.html">Halal Investment</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="testimonials.html">Testimonials</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="register.html" class="active">Register</a></li>
                </ul>
                <div class="mobile-menu">
                    <i class="fas fa-bars"></i>
                </div>
            </nav>
        </div>
    </header>

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

                    <form id="farmerRegistrationForm">
                        <div class="form-grid">
                            <div class="form-group">
                                <label for="farmer-name">Full Name</label>
                                <input type="text" id="farmer-name" class="form-control" placeholder="Your full name" required>
                                <div class="error-message" id="farmer-name-error">Please enter your full name</div>
                            </div>
                            <div class="form-group">
                                <label for="farmer-email">Email Address</label>
                                <input type="email" id="farmer-email" class="form-control" placeholder="your@email.com" required>
                                <div class="error-message" id="farmer-email-error">Please enter a valid email address</div>
                            </div>
                            <div class="form-group">
                                <label for="farmer-phone">Phone Number</label>
                                <input type="tel" id="farmer-phone" class="form-control" placeholder="+880 1234 567890" required>
                                <div class="error-message" id="farmer-phone-error">Please enter a valid phone number</div>
                            </div>
                            <div class="form-group">
                                <label for="farmer-location">Location</label>
                                <select id="farmer-location" class="form-control" required>
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
                                <select id="farm-type" class="form-control" required>
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
                                <input type="number" id="farm-size" class="form-control" placeholder="10" min="0" step="0.1">
                            </div>
                            <div class="form-group full-width">
                                <label for="farmer-password">Create Password</label>
                                <input type="password" id="farmer-password" class="form-control" placeholder="••••••••" required minlength="8">
                                <i class="fas fa-eye-slash password-toggle" onclick="togglePassword('farmer-password', this)"></i>
                                <div class="error-message" id="farmer-password-error">Password must be at least 8 characters</div>
                            </div>
                            <div class="form-group full-width">
                                <label for="farmer-confirm-password">Confirm Password</label>
                                <input type="password" id="farmer-confirm-password" class="form-control" placeholder="••••••••" required minlength="8">
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
                        <a href="farmer-dashboard.html" class="btn btn-accent" style="margin-top: 15px;">Go to Dashboard</a>
                    </div>
                </div>

                <!-- Buyer Registration Form -->
                <div class="form-section buyer" id="buyer-form">
                    <div class="form-header">
                        <h2>Join as a Buyer</h2>
                        <p>Access quality farm products directly from producers</p>
                    </div>

                    <form id="buyerRegistrationForm">
                        <div class="form-grid">
                            <div class="form-group">
                                <label for="buyer-name">Full Name</label>
                                <input type="text" id="buyer-name" class="form-control" placeholder="Your full name" required>
                                <div class="error-message" id="buyer-name-error">Please enter your full name</div>
                            </div>
                            <div class="form-group">
                                <label for="buyer-email">Email Address</label>
                                <input type="email" id="buyer-email" class="form-control" placeholder="your@email.com" required>
                                <div class="error-message" id="buyer-email-error">Please enter a valid email address</div>
                            </div>
                            <div class="form-group">
                                <label for="buyer-phone">Phone Number</label>
                                <input type="tel" id="buyer-phone" class="form-control" placeholder="+880 1234 567890" required>
                                <div class="error-message" id="buyer-phone-error">Please enter a valid phone number</div>
                            </div>
                            <div class="form-group">
                                <label for="buyer-company">Company/Organization</label>
                                <input type="text" id="buyer-company" class="form-control" placeholder="(Optional)">
                            </div>
                            <div class="form-group">
                                <label for="buyer-type">Buyer Type</label>
                                <select id="buyer-type" class="form-control" required>
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
                                <select id="buyer-location" class="form-control" required>
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
                                <input type="password" id="buyer-password" class="form-control" placeholder="••••••••" required minlength="8">
                                <i class="fas fa-eye-slash password-toggle" onclick="togglePassword('buyer-password', this)"></i>
                                <div class="error-message" id="buyer-password-error">Password must be at least 8 characters</div>
                            </div>
                            <div class="form-group full-width">
                                <label for="buyer-confirm-password">Confirm Password</label>
                                <input type="password" id="buyer-confirm-password" class="form-control" placeholder="••••••••" required minlength="8">
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
                        <a href="buyer-dashboard.html" class="btn btn-accent" style="margin-top: 15px;">Go to Dashboard</a>
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

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div>
                    <a href="index.html" class="logo footer-logo"><i class="fas fa-leaf"></i>Agro<span>Care</span></a>
                    <p>Empowering farmers and buyers through direct connections and innovative solutions.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="footer-links">
                    <div class="footer-column">
                        <h4>Quick Links</h4>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><a href="services.html">Services</a></li>
                            <li><a href="about.html">About Us</a></li>
                            <li><a href="testimonials.html">Testimonials</a></li>
                            <li><a href="contact.html">Contact</a></li>
                        </ul>
                    </div>
                    <div class="footer-column">
                        <h4>Resources</h4>
                        <ul>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">FAQs</a></li>
                            <li><a href="#">Help Center</a></li>
                            <li><a href="#">Pricing</a></li>
                            <li><a href="#">Farmers Market</a></li>
                        </ul>
                    </div>
                    <div class="footer-column">
                        <h4>Legal</h4>
                        <ul>
                            <li><a href="#">Terms of Service</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Cookie Policy</a></li>
                            <li><a href="#">GDPR Compliance</a></li>
                        </ul>
                    </div>
                    <div class="footer-column">
                        <h4>Contact Us</h4>
                        <ul>
                            <li><i class="fas fa-map-marker-alt"></i> 123 Farm Road, Agriculture City</li>
                            <li><i class="fas fa-phone"></i> +1 (123) 456-7890</li>
                            <li><i class="fas fa-envelope"></i> info@agrocare.com</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2023 AgroCare. All rights reserved. | Designed with <i class="fas fa-heart" style="color: #ff5252;"></i> for farmers</p>
            </div>
        </div>
    </footer>

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
</body>
</html>