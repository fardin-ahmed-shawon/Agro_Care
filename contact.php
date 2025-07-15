<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | AgroFarm - Modern Agricultural Solutions</title>
    <meta name="description" content="Get in touch with AgroFarm for agricultural support, services, and partnership opportunities in Bangladesh">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        /* CSS Reset & Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        
        :root {
            --primary: #2E7D32;
            --primary-light: #4CAF50;
            --secondary: #1B5E20;
            --accent: #FF9800;
            --accent-dark: #F57C00;
            --dark: #263238;
            --dark-light: #37474F;
            --light: #f5f5f5;
            --light-gray: #eceff1;
            --text: #455A64;
            --text-light: #607D8B;
            --transition: all 0.3s ease;
            --shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        body {
            color: var(--text);
            line-height: 1.7;
            background-color: var(--light);
        }
        
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }
        
        section {
            padding: 100px 0;
        }
        
        .btn {
            display: inline-block;
            padding: 12px 30px;
            background-color: var(--primary);
            color: white;
            border-radius: 4px;
            font-weight: 500;
            text-decoration: none;
            transition: var(--transition);
            border: none;
            cursor: pointer;
            font-size: 1rem;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        .btn:hover {
            background-color: var(--secondary);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }
        
        .btn-accent {
            background-color: var(--accent);
        }
        
        .btn-accent:hover {
            background-color: var(--accent-dark);
        }
        
        .btn-outline {
            background-color: transparent;
            border: 2px solid var(--primary);
            color: var(--primary);
        }
        
        .btn-outline:hover {
            background-color: var(--primary);
            color: white;
        }
        
        .section-title {
            text-align: center;
            margin-bottom: 20px;
            color: var(--dark);
            font-size: 2.5rem;
            font-weight: 600;
            position: relative;
        }
        
        .section-title:after {
            content: '';
            display: block;
            width: 80px;
            height: 4px;
            background: var(--primary);
            margin: 15px auto 30px;
            border-radius: 2px;
        }
        
        .section-subtitle {
            text-align: center;
            max-width: 700px;
            margin: 0 auto 50px;
            color: var(--text-light);
            font-size: 1.1rem;
            line-height: 1.8;
        }

        /* Header */
        header {
            background-color: white;
            box-shadow: var(--shadow);
            position: sticky;
            top: 0;
            z-index: 1000;
            transition: var(--transition);
        }
        
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
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
        }
        
        .nav-links li {
            margin-left: 30px;
            position: relative;
        }
        
        .nav-links a {
            color: var(--dark);
            font-weight: 500;
            transition: var(--transition);
            text-decoration: none;
            padding: 5px 0;
        }
        
        .nav-links a:hover, 
        .nav-links a.active {
            color: var(--primary);
        }
        
        .nav-links a.active:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: var(--primary);
        }
        
        .mobile-menu {
            display: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: var(--dark);
        }

        /* Contact Hero */
        .contact-hero {
            background: linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), 
                        url('https://images.unsplash.com/photo-1523741543316-beb7fc7023d8?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            padding: 150px 0;
            text-align: center;
            color: white;
        }
        
        .contact-hero h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            font-weight: 700;
            line-height: 1.3;
        }
        
        .contact-hero p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            opacity: 0.9;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }
        
        .breadcrumb {
            display: flex;
            justify-content: center;
            list-style: none;
            margin-top: 20px;
            font-size: 0.9rem;
        }
        
        .breadcrumb li {
            margin: 0 10px;
            position: relative;
        }
        
        .breadcrumb li:after {
            content: '/';
            position: absolute;
            right: -12px;
            color: rgba(255,255,255,0.5);
        }
        
        .breadcrumb li:last-child:after {
            display: none;
        }
        
        .breadcrumb a {
            color: var(--primary-light);
            text-decoration: none;
            transition: var(--transition);
        }
        
        .breadcrumb a:hover {
            color: white;
            text-decoration: underline;
        }

        /* Contact Section */
        .contact-section {
            padding: 100px 0;
            background-color: white;
        }
        
        .contact-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 50px;
            align-items: center;
        }
        
        .contact-info {
            margin-bottom: 40px;
        }
        
        .contact-info h3 {
            font-size: 1.5rem;
            margin-bottom: 20px;
            color: var(--dark);
            position: relative;
            padding-bottom: 10px;
        }
        
        .contact-info h3:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 3px;
            background-color: var(--primary);
        }
        
        .contact-details {
            list-style: none;
        }
        
        .contact-details li {
            margin-bottom: 20px;
            display: flex;
            align-items: flex-start;
        }
        
        .contact-details i {
            color: var(--primary);
            font-size: 1.2rem;
            margin-right: 15px;
            margin-top: 3px;
        }
        
        .contact-details a {
            color: var(--text);
            text-decoration: none;
            transition: var(--transition);
        }
        
        .contact-details a:hover {
            color: var(--primary);
        }
        
        .contact-form {
            background-color: var(--light-gray);
            padding: 40px;
            border-radius: 8px;
            box-shadow: var(--shadow);
        }
        
        .form-group {
            margin-bottom: 25px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--dark);
        }
        
        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1rem;
            transition: var(--transition);
        }
        
        .form-control:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(46, 125, 50, 0.2);
        }
        
        textarea.form-control {
            min-height: 150px;
            resize: vertical;
        }
        
        .form-submit {
            text-align: center;
        }
        
        /* Map Section */
        .map-section {
            padding: 0 0 100px;
        }
        
        .map-container {
            height: 500px;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: var(--shadow);
        }
        
        .map-container iframe {
            width: 100%;
            height: 100%;
            border: none;
        }

        /* FAQ Section */
        .faq-section {
            padding: 100px 0;
            background-color: var(--light-gray);
        }
        
        .faq-container {
            max-width: 800px;
            margin: 0 auto;
        }
        
        .faq-item {
            margin-bottom: 20px;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: var(--shadow);
            background-color: white;
        }
        
        .faq-question {
            padding: 20px;
            background-color: var(--primary);
            color: white;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: var(--transition);
        }
        
        .faq-question:hover {
            background-color: var(--secondary);
        }
        
        .faq-question i {
            transition: var(--transition);
        }
        
        .faq-answer {
            padding: 0 20px;
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.3s ease;
        }
        
        .faq-answer-content {
            padding: 20px 0;
        }
        
        .faq-item.active .faq-question i {
            transform: rotate(180deg);
        }

        /* Footer */
        footer {
            background-color: var(--dark);
            color: white;
            padding: 80px 0 30px;
            position: relative;
        }
        
        footer:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 10px;
            background: linear-gradient(90deg, var(--primary), var(--accent));
        }
        
        .footer-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 40px;
            margin-bottom: 50px;
        }
        
        .footer-col h3 {
            margin-bottom: 25px;
            font-size: 1.3rem;
            font-weight: 600;
            position: relative;
            padding-bottom: 10px;
        }
        
        .footer-col h3:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 2px;
            background-color: var(--primary);
        }
        
        .footer-col p {
            color: #bbb;
            margin-bottom: 20px;
            line-height: 1.8;
        }
        
        .footer-col ul {
            list-style: none;
        }
        
        .footer-col ul li {
            margin-bottom: 12px;
        }
        
        .footer-col ul li a {
            color: #bbb;
            transition: var(--transition);
            text-decoration: none;
            display: block;
            padding: 5px 0;
        }
        
        .footer-col ul li a:hover {
            color: white;
            transform: translateX(5px);
        }
        
        .footer-col ul li a i {
            margin-right: 8px;
            color: var(--primary);
        }
        
        .footer-social {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }
        
        .footer-social a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background-color: rgba(255,255,255,0.1);
            border-radius: 50%;
            color: white;
            transition: var(--transition);
        }
        
        .footer-social a:hover {
            background-color: var(--primary);
            transform: translateY(-5px);
        }
        
        .copyright {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255,255,255,0.1);
            color: #bbb;
            font-size: 0.9rem;
        }

        /* Responsive Styles */
        @media (max-width: 1200px) {
            .section-title {
                font-size: 2.2rem;
            }
        }
        
        @media (max-width: 992px) {
            .footer-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .contact-hero h1 {
                font-size: 2.5rem;
            }
            
            .map-container {
                height: 400px;
            }
        }
        
        @media (max-width: 768px) {
            .nav-links {
                display: none;
                position: absolute;
                top: 70px;
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
            
            .section-title {
                font-size: 2rem;
            }
            
            .contact-container {
                grid-template-columns: 1fr;
            }
            
            .map-container {
                height: 350px;
            }
        }
        
        @media (max-width: 576px) {
            .footer-grid {
                grid-template-columns: 1fr;
            }
            
            .contact-hero h1 {
                font-size: 2rem;
            }
            
            .section-title {
                font-size: 1.8rem;
            }
            
            .section-subtitle {
                font-size: 1rem;
            }
            
            .contact-form {
                padding: 25px;
            }
            
            .map-container {
                height: 300px;
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
                    <li><a href="contact.html" class="active">Contact</a></li>
                    <li><a href="login.html">Login</a></li>
					<li><a href="register.html">Register</a></li>
                </ul>
                <div class="mobile-menu">
                    <i class="fas fa-bars"></i>
                </div>
            </nav>
        </div>
    </header>

    <!-- Contact Hero -->
    <section class="contact-hero">
        <div class="container">
            <h1>Get In Touch With Us</h1>
            <p>Have questions about our agricultural services? Our team is ready to help you grow your farming business</p>
            
            <ul class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li>Contact</li>
            </ul>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">
            <div class="contact-container">
                <div class="contact-content">
                    <h2 class="section-title">Contact Information</h2>
                    <p class="section-subtitle">We're here to help and answer any questions you might have about our agricultural services</p>
                    
                    <div class="contact-info">
                        <h3>Headquarters</h3>
                        <ul class="contact-details">
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <div>
                                    <strong>Address:</strong> 
                                    <p>123 Agricultural Road, Farmville, Bangladesh</p>
                                </div>
                            </li>
                            <li>
                                <i class="fas fa-phone-alt"></i>
                                <div>
                                    <strong>Phone:</strong> 
                                    <p><a href="tel:+8801234567890">+880 1234 567890</a></p>
                                </div>
                            </li>
                            <li>
                                <i class="fas fa-envelope"></i>
                                <div>
                                    <strong>Email:</strong> 
                                    <p><a href="mailto:info@agrofarm.com">info@agrofarm.com</a></p>
                                </div>
                            </li>
                            <li>
                                <i class="fas fa-clock"></i>
                                <div>
                                    <strong>Working Hours:</strong> 
                                    <p>Monday - Friday: 9AM - 6PM</p>
                                    <p>Saturday: 10AM - 4PM</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="contact-info">
                        <h3>Regional Offices</h3>
                        <ul class="contact-details">
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <div>
                                    <strong>Dhaka Office:</strong> 
                                    <p>456 Farm Tower, Motijheel, Dhaka</p>
                                    <p><a href="tel:+880987654321">+880 9876 54321</a></p>
                                </div>
                            </li>
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <div>
                                    <strong>Chittagong Office:</strong> 
                                    <p>789 Agri Plaza, Agrabad, Chittagong</p>
                                    <p><a href="tel:+880987654322">+880 9876 54322</a></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="contact-form">
                    <h3>Send Us a Message</h3>
                    <form id="contactForm">
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" id="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <select id="subject" class="form-control" required>
                                <option value="">Select a subject</option>
                                <option value="general">General Inquiry</option>
                                <option value="services">Services Information</option>
                                <option value="partnership">Partnership Opportunity</option>
                                <option value="support">Technical Support</option>
                                <option value="feedback">Feedback/Suggestion</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message">Your Message</label>
                            <textarea id="message" class="form-control" required></textarea>
                        </div>
                        <div class="form-submit">
                            <button type="submit" class="btn">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section">
        <div class="container">
            <h2 class="section-title">Our Location</h2>
            <p class="section-subtitle">Visit our headquarters or regional offices across Bangladesh</p>
            
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.837240932881!2d90.40665931543146!3d23.79086839322472!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c70b72f1b8b1%3A0xfc87a1bc6699ed26!2sDhaka!5e0!3m2!1sen!2sbd!4v1620000000000!5m2!1sen!2sbd" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <h2 class="section-title">Frequently Asked Questions</h2>
            <p class="section-subtitle">Find answers to common questions about our agricultural services</p>
            
            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <span>How can I join AgroFarm as a farmer?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            <p>Joining AgroFarm is simple! You can register through our website, mobile app, or by visiting any of our regional offices. Our team will guide you through the registration process and help you get started with our services.</p>
                        </div>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <span>What financial services do you offer to farmers?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            <p>We offer a range of financial services including agricultural loans with competitive interest rates, crop insurance, and investment opportunities. Our financial products are specifically designed to meet the needs of farmers at different scales.</p>
                        </div>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <span>How does your marketplace benefit farmers?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            <p>Our digital marketplace connects farmers directly with buyers, eliminating middlemen and ensuring fair prices. Farmers can list their produce, negotiate prices, and arrange delivery through our platform, often securing better deals than traditional markets.</p>
                        </div>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <span>What training programs do you offer?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            <p>We provide comprehensive training programs covering modern farming techniques, sustainable practices, financial literacy, and technology adoption. Our programs include workshops, field demonstrations, and online courses tailored to different crops and regions.</p>
                        </div>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <span>How can I access your equipment rental service?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            <p>Our equipment rental service is available through our mobile app or by contacting our local offices. We maintain a network of modern farming equipment that members can rent at affordable rates, reducing capital expenses for small and medium farmers.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
                <p>&copy; 2023 AgroFarm. All Rights Reserved. | <a href="#" style="color: var(--primary-light);">Privacy Policy</a> | <a href="#" style="color: var(--primary-light);">Terms of Service</a></p>
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

        // Close mobile menu when clicking a link
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', function() {
                document.querySelector('.nav-links').classList.remove('active');
                document.querySelector('.mobile-menu i').classList.remove('fa-times');
                document.querySelector('.mobile-menu i').classList.add('fa-bars');
            });
        });

        // FAQ Accordion
        document.querySelectorAll('.faq-question').forEach(question => {
            question.addEventListener('click', () => {
                const item = question.parentElement;
                item.classList.toggle('active');
                
                const answer = item.querySelector('.faq-answer');
                if (item.classList.contains('active')) {
                    answer.style.maxHeight = answer.scrollHeight + 'px';
                } else {
                    answer.style.maxHeight = '0';
                }
            });
        });

        // Form Submission
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Form validation would go here
            alert('Thank you for your message! We will get back to you soon.');
            this.reset();
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
    </script>
</body>
</html>