<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FarmerCare - Complete Farming Solutions</title>
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
        }
        
        body {
            color: var(--text);
            line-height: 1.7;
            background-color: #f9f9f9;
        }
        
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }
        
        .btn {
            display: inline-block;
            padding: 12px 30px;
            background-color: var(--primary);
            color: white;
            border-radius: 4px;
            font-weight: 500;
            text-decoration: none;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            font-size: 1rem;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        .btn:hover {
            background-color: var(--secondary);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0,0,0,0.15);
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
            padding-bottom: 15px;
        }
        
        .section-title:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background-color: var(--primary);
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
            box-shadow: 0 2px 15px rgba(0,0,0,0.08);
            position: sticky;
            top: 0;
            z-index: 1000;
            padding: 10px 0;
        }
        
        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 5px 0;
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
            transition: color 0.3s;
            text-decoration: none;
            font-size: 1rem;
            padding: 5px 0;
        }
        
        .nav-links a:hover, .nav-links a.active {
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

        /* Hero Section */
        .services-hero {
            background: linear-gradient(135deg, rgba(46, 125, 50, 0.9), rgba(27, 94, 32, 0.9)), 
                        url('https://images.unsplash.com/photo-1500382017468-9049fed747ef?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            padding: 150px 0;
            text-align: center;
            color: white;
        }
        
        .services-hero h1 {
            font-size: 3.2rem;
            margin-bottom: 20px;
            font-weight: 700;
            line-height: 1.3;
            text-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        .services-hero p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            opacity: 0.9;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
        }

        /* Services Grid */
        .services-grid {
            padding: 100px 0;
            background-color: white;
        }
        
        .services-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 40px;
        }
        
        .service-card {
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            transition: transform 0.3s ease;
            border-bottom: 4px solid transparent;
        }
        
        .service-card:hover {
            transform: translateY(-10px);
            border-bottom-color: var(--primary);
            box-shadow: 0 15px 40px rgba(0,0,0,0.1);
        }
        
        .service-img {
            height: 220px;
            overflow: hidden;
        }
        
        .service-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .service-card:hover .service-img img {
            transform: scale(1.1);
        }
        
        .service-content {
            padding: 30px;
        }
        
        .service-content h3 {
            color: var(--dark);
            margin-bottom: 15px;
            font-size: 1.4rem;
            font-weight: 600;
        }
        
        .service-content p {
            color: var(--text-light);
            margin-bottom: 20px;
        }
        
        .service-features {
            margin-bottom: 25px;
        }
        
        .service-features li {
            margin-bottom: 10px;
            position: relative;
            padding-left: 30px;
            color: var(--text-light);
        }
        
        .service-features li:before {
            content: "\f00c";
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            position: absolute;
            left: 0;
            color: var(--primary);
        }

        /* Video Section */
        .video-section {
            padding: 80px 0;
            background-color: var(--light);
        }
        
        .video-wrapper {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: center;
        }
        
        .video-container {
            position: relative;
            padding-bottom: 56.25%; /* 16:9 Aspect Ratio */
            height: 0;
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
        }
        
        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
        }
        
        .video-content {
            padding: 20px;
        }
        
        .video-content h3 {
            font-size: 1.8rem;
            margin-bottom: 20px;
            color: var(--dark);
        }
        
        .video-content p {
            color: var(--text-light);
            margin-bottom: 20px;
        }

        /* Blog Section */
        .blog-section {
            padding: 100px 0;
            background-color: var(--light-gray);
        }
        
        .blog-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 50px;
        }
        
        .blog-post {
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
            transition: all 0.3s ease;
        }
        
        .blog-post:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
        }
        
        .blog-image {
            position: relative;
            height: 200px;
            overflow: hidden;
        }
        
        .blog-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .blog-post:hover .blog-image img {
            transform: scale(1.05);
        }
        
        .blog-date {
            position: absolute;
            bottom: 15px;
            left: 15px;
            background-color: var(--primary);
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.8rem;
        }
        
        .blog-content {
            padding: 25px;
        }
        
        .blog-content h3 {
            margin-bottom: 15px;
            font-size: 1.2rem;
        }
        
        .blog-content h3 a {
            color: var(--dark);
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .blog-content h3 a:hover {
            color: var(--primary);
        }
        
        .read-more {
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
            display: inline-block;
            margin-top: 15px;
        }
        
        .read-more i {
            margin-left: 5px;
            transition: transform 0.3s;
        }
        
        .read-more:hover i {
            transform: translateX(5px);
        }
        
        .pagination {
            display: flex;
            justify-content: center;
            gap: 10px;
        }
        
        .pagination a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background-color: white;
            color: var(--text-light);
            text-decoration: none;
            transition: all 0.3s;
        }
        
        .pagination a:hover, .pagination a.active {
            background-color: var(--primary);
            color: white;
        }

        /* How It Works */
        .how-it-works {
            padding: 100px 0;
            background-color: var(--light-gray);
        }
        
        .steps-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }
        
        .step {
            text-align: center;
            padding: 40px 30px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            transition: transform 0.3s ease;
        }
        
        .step:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.1);
        }
        
        .step-icon {
            width: 80px;
            height: 80px;
            margin: 0 auto 25px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            box-shadow: 0 5px 15px rgba(46, 125, 50, 0.3);
        }
        
        .step h3 {
            color: var(--dark);
            margin-bottom: 15px;
            font-size: 1.3rem;
        }
        
        .step p {
            color: var(--text-light);
            font-size: 0.95rem;
        }

        /* Pricing Section */
        .pricing {
            padding: 100px 0;
            background-color: white;
        }
        
        .pricing-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }
        
        .pricing-card {
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            transition: transform 0.3s ease;
            border: 2px solid var(--light-gray);
        }
        
        .pricing-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.1);
            border-color: var(--primary);
        }
        
        .pricing-header {
            padding: 30px;
            text-align: center;
            background-color: var(--light-gray);
        }
        
        .pricing-card.popular .pricing-header {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
        }
        
        .pricing-header h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
            color: var(--dark);
        }
        
        .popular .pricing-header h3 {
            color: white;
        }
        
        .price {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 5px;
        }
        
        .popular .price {
            color: white;
        }
        
        .price span {
            font-size: 1rem;
            font-weight: normal;
        }
        
        .pricing-features {
            padding: 30px;
        }
        
        .pricing-features ul {
            list-style: none;
            margin-bottom: 30px;
        }
        
        .pricing-features li {
            margin-bottom: 15px;
            position: relative;
            padding-left: 30px;
            color: var(--text-light);
        }
        
        .pricing-features li:before {
            content: "\f00c";
            font-family: "Font Awesome 5 Free";
            font-weight: 900;
            position: absolute;
            left: 0;
            color: var(--primary);
        }
        
        .popular-badge {
            position: absolute;
            top: -15px;
            right: 20px;
            background-color: var(--accent);
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
        }

        /* CTA Section */
        .service-cta {
            padding: 100px 0;
            text-align: center;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            position: relative;
            overflow: hidden;
        }
        
        .service-cta:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://www.transparenttextures.com/patterns/concrete-wall.png');
            opacity: 0.05;
        }
        
        .service-cta h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            position: relative;
        }
        
        .service-cta p {
            max-width: 700px;
            margin: 0 auto 30px;
            font-size: 1.1rem;
            opacity: 0.9;
            position: relative;
        }
        
        .cta-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
            position: relative;
        }

        /* FAQ Section */
        .faq {
            padding: 100px 0;
            background-color: var(--light-gray);
        }
        
        .faq-container {
            max-width: 800px;
            margin: 0 auto;
        }
        
        .faq-item {
            margin-bottom: 15px;
            background-color: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0,0,0,0.05);
        }
        
        .faq-question {
            padding: 20px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            font-weight: 500;
            color: var(--dark);
            transition: all 0.3s ease;
        }
        
        .faq-question:hover {
            color: var(--primary);
        }
        
        .faq-question i {
            transition: transform 0.3s ease;
        }
        
        .faq-item.active .faq-question i {
            transform: rotate(180deg);
        }
        
        .faq-answer {
            padding: 0 30px;
            max-height: 0;
            overflow: hidden;
            transition: all 0.3s ease;
            color: var(--text-light);
        }
        
        .faq-item.active .faq-answer {
            padding: 0 30px 20px;
            max-height: 500px;
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
            transition: all 0.3s ease;
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
            transition: all 0.3s ease;
        }
        
        .footer-social a:hover {
            background-color: var(--primary);
            transform: translateY(-5px);
        }
        
        .newsletter {
            background-color: rgba(255,255,255,0.05);
            padding: 30px;
            border-radius: 8px;
            margin-top: 30px;
        }
        
        .newsletter h3 {
            margin-bottom: 15px;
            font-size: 1.3rem;
        }
        
        .newsletter-form {
            display: flex;
            gap: 10px;
        }
        
        .newsletter-form input {
            flex: 1;
            padding: 12px 15px;
            border: none;
            border-radius: 4px;
            font-size: 1rem;
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
            
            .services-hero h1 {
                font-size: 2.8rem;
            }
            
            .video-wrapper {
                grid-template-columns: 1fr;
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
            
            .services-hero h1 {
                font-size: 2.5rem;
            }
            
            .service-cta h2 {
                font-size: 2rem;
            }
            
            .newsletter-form {
                flex-direction: column;
            }
        }
        
        @media (max-width: 576px) {
            .footer-grid {
                grid-template-columns: 1fr;
            }
            
            .services-hero {
                padding: 100px 0;
            }
            
            .services-hero h1 {
                font-size: 2rem;
            }
            
            .section-title {
                font-size: 1.8rem;
            }
            
            .section-subtitle {
                font-size: 1rem;
            }
            
            .services-container {
                grid-template-columns: 1fr;
            }
            
            .cta-buttons {
                flex-direction: column;
                align-items: center;
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
                    <li><a href="index.html" >Home</a></li>
                    <li><a href="halal-investment.html">Halal Investment</a></li>
                    <li><a href="services.html">Services</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="testimonials.html">Testimonials</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="login.html">Login</a></li>
                    <li><a href="register.html">Register</a></li>
                    <li><a href="blog.html"class="active">Blog</a></li>
                </ul>
                <div class="mobile-menu">
                    <i class="fas fa-bars"></i>
                </div>
            </nav>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="services-hero">
        <div class="container">
            <h1>FarmerCare Blog</h1>
            <p>Discover the latest farming techniques, success stories, and agricultural innovations from Bangladesh and beyond.</p>
            <a href="#blog" class="btn btn-accent">Read Our Articles</a>
        </div>
    </section>

    <!-- Blog Section -->
    <section class="blog-section" id="blog">
        <div class="container">
            <h2 class="section-title">FarmerCare Blog</h2>
            <p class="section-subtitle">Latest news, tips, and insights for modern farmers</p>
            
            <div class="blog-grid">
                <!-- Blog Post 1 -->
                <article class="blog-post">
                    <div class="blog-image">
                        <img src="https://images.unsplash.com/photo-1586773860418-d37222d8fce3?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Sustainable Farming">
                        <div class="blog-date">June 15, 2023</div>
                    </div>
                    <div class="blog-content">
                        <h3><a href="single-post.html">Sustainable Farming Practices for Bangladesh</a></h3>
                        <p>Discover innovative techniques to improve yields while protecting the environment and conserving resources for future generations.</p>
                        <a href="single-post.html" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>
                
                <!-- Blog Post 2 -->
                <article class="blog-post">
                    <div class="blog-image">
                        <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Market Trends">
                        <div class="blog-date">May 28, 2023</div>
                    </div>
                    <div class="blog-content">
                        <h3><a href="single-post.html">2023 Agricultural Market Trends in Bangladesh</a></h3>
                        <p>Learn which crops are most profitable this season and how to position your farm for maximum returns.</p>
                        <a href="single-post.html" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>
                
                <!-- Blog Post 3 -->
                <article class="blog-post">
                    <div class="blog-image">
                        <img src="https://images.unsplash.com/photo-1523741543316-beb7fc7023d8?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Success Story">
                        <div class="blog-date">May 10, 2023</div>
                    </div>
                    <div class="blog-content">
                        <h3><a href="single-post.html">Farmer Success Story: From Struggle to Prosperity</a></h3>
                        <p>How one farmer in Rajshahi tripled his income using FarmerCare's digital marketplace and training programs.</p>
                        <a href="single-post.html" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>
                
                <!-- Blog Post 4 -->
                <article class="blog-post">
                    <div class="blog-image">
                        <img src="https://images.unsplash.com/photo-1516253593875-bd7ba052fbc8?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Organic Farming">
                        <div class="blog-date">April 22, 2023</div>
                    </div>
                    <div class="blog-content">
                        <h3><a href="single-post.html">Organic Farming: A Growing Trend in Bangladesh</a></h3>
                        <p>Explore how organic farming methods are gaining popularity and how you can transition your farm.</p>
                        <a href="single-post.html" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>
                
                <!-- Blog Post 5 -->
                <article class="blog-post">
                    <div class="blog-image">
                        <img src="https://images.unsplash.com/photo-1498837167922-ddd27525d352?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Crop Rotation">
                        <div class="blog-date">April 5, 2023</div>
                    </div>
                    <div class="blog-content">
                        <h3><a href="single-post.html">Maximizing Soil Health Through Crop Rotation</a></h3>
                        <p>Learn effective crop rotation strategies to maintain soil fertility and prevent pest buildup.</p>
                        <a href="single-post.html" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>
                
                <!-- Blog Post 6 -->
                <article class="blog-post">
                    <div class="blog-image">
                        <img src="https://images.unsplash.com/photo-1464226184884-fa280b87c399?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Irrigation">
                        <div class="blog-date">March 18, 2023</div>
                    </div>
                    <div class="blog-content">
                        <h3><a href="single-post.html">Smart Irrigation Solutions for Bangladeshi Farmers</a></h3>
                        <p>Discover water-saving irrigation techniques that can reduce costs and improve crop yields.</p>
                        <a href="single-post.html" class="read-more">Read More <i class="fas fa-arrow-right"></i></a>
                    </div>
                </article>
            </div>
            <div class="pagination">
                <a href="#" class="active">1</a>
                <a href="#">2</a>
                <a href="#">3</a>
                <a href="#"><i class="fas fa-chevron-right"></i></a>
            </div>
        </div>
    </section>

    <!-- Video Section -->
    <section class="video-section">
        <div class="container">
            <h2 class="section-title">Learn From Our Experts</h2>
            <p class="section-subtitle">Watch our latest videos on modern farming techniques and success stories</p>
            
            <div class="video-wrapper">
                <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/5Lge6tR5P7Y" title="Modern Farming Techniques" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="video-content">
                    <h3>Modern Farming Techniques in Bangladesh</h3>
                    <p>In this video, our agricultural expert Mohammad Ali shares innovative farming techniques that are transforming agriculture in Bangladesh. Learn about:</p>
                    <ul class="service-features">
                        <li>Water-efficient irrigation methods</li>
                        <li>Organic pest control solutions</li>
                        <li>High-yield crop varieties</li>
                        <li>Soil health improvement</li>
                        <li>Post-harvest management</li>
                    </ul>
                    <a href="https://www.youtube.com/channel/UCexample" class="btn" target="_blank">View More Videos</a>
                </div>
            </div>
			<div class="video-wrapper">
                <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/5Lge6tR5P7Y" title="Modern Farming Techniques" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div class="video-content">
                    <h3>Modern Farming Techniques in Bangladesh</h3>
                    <p>In this video, our agricultural expert Mohammad Ali shares innovative farming techniques that are transforming agriculture in Bangladesh. Learn about:</p>
                    <ul class="service-features">
                        <li>Water-efficient irrigation methods</li>
                        <li>Organic pest control solutions</li>
                        <li>High-yield crop varieties</li>
                        <li>Soil health improvement</li>
                        <li>Post-harvest management</li>
                    </ul>
                    <a href="https://www.youtube.com/channel/UCexample" class="btn" target="_blank">View More Videos</a>
                </div>
            </div>
        </div>
    </section>

    <!-- How It Works -->
    <section class="how-it-works">
        <div class="container">
            <h2 class="section-title">How Our Services Work</h2>
            <p class="section-subtitle">Simple steps to access FarmerCare's comprehensive agricultural solutions</p>
            
            <div class="steps-container">
                <div class="step">
                    <div class="step-icon">
                        <i class="fas fa-user-plus"></i>
                    </div>
                    <h3>Create Your Profile</h3>
                    <p>Register with basic information about your farm and agricultural activities.</p>
                </div>
                
                <div class="step">
                    <div class="step-icon">
                        <i class="fas fa-clipboard-list"></i>
                    </div>
                    <h3>Select Services</h3>
                    <p>Choose from our range of services that match your specific farming needs.</p>
                </div>
                
                <div class="step">
                    <div class="step-icon">
                        <i class="fas fa-check-circle"></i>
                    </div>
                    <h3>Get Verified</h3>
                    <p>Our team will quickly verify your details to activate your account.</p>
                </div>
                
                <div class="step">
                    <div class="step-icon">
                        <i class="fas fa-tractor"></i>
                    </div>
                    <h3>Start Using</h3>
                    <p>Access the services and begin transforming your farming operations.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="service-cta">
        <div class="container">
            <h2>Ready to Transform Your Farming Business?</h2>
            <p>Join thousands of Bangladeshi farmers who are increasing their yields, income, and sustainability with FarmerCare's innovative solutions.</p>
            <div class="cta-buttons">
                <a href="register.html" class="btn" style="background-color: white; color: var(--primary);">Register Now</a>
                <a href="contact.html" class="btn btn-outline" style="border-color: white; color: white;">Contact Us</a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-grid">
                <div class="footer-col">
                    <h3>FarmerCare</h3>
                    <p>Empowering Bangladesh's farmers through innovative technology and sustainable agricultural solutions.</p>
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
                        <li><a href="blog.html"><i class="fas fa-chevron-right"></i> Blog</a></li>
                        <li><a href="about.html"><i class="fas fa-chevron-right"></i> About Us</a></li>
                        <li><a href="contact.html"><i class="fas fa-chevron-right"></i> Contact</a></li>
                    </ul>
                </div>
                
                <div class="footer-col">
                    <h3>Our Services</h3>
                    <ul>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Digital Marketplace</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Agricultural Financing</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Farmer Training</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Equipment Rental</a></li>
                        <li><a href="#"><i class="fas fa-chevron-right"></i> Weather Alerts</a></li>
                    </ul>
                </div>
                
                <div class="footer-col">
                    <h3>Contact Us</h3>
                    <ul>
                        <li><a href="#"><i class="fas fa-map-marker-alt"></i> 123 Farmgate, Dhaka 1215, Bangladesh</a></li>
                        <li><a href="tel:+8801234567890"><i class="fas fa-phone-alt"></i> +880 1234 567890</a></li>
                        <li><a href="mailto:info@FarmerCare.com"><i class="fas fa-envelope"></i> info@FarmerCare.com</a></li>
                        <li><a href="#"><i class="fas fa-clock"></i> Mon-Sat: 9:00 AM - 6:00 PM</a></li>
                    </ul>
                </div>
            </div>
            
            <div class="newsletter">
                <h3>Subscribe to Our Newsletter</h3>
                <p>Get the latest farming tips, market updates, and service announcements directly to your inbox.</p>
                <form class="newsletter-form">
                    <input type="email" placeholder="Enter your email address" required>
                    <button type="submit" class="btn">Subscribe</button>
                </form>
            </div>
            
            <div class="copyright">
                <p>&copy; 2023 FarmerCare. All Rights Reserved. | Designed with <i class="fas fa-heart" style="color: #ff5252;"></i> for Bangladeshi Farmers</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile Menu Toggle
        const mobileMenuBtn = document.querySelector('.mobile-menu');
        const navLinks = document.querySelector('.nav-links');
        
        mobileMenuBtn.addEventListener('click', () => {
            navLinks.classList.toggle('active');
            mobileMenuBtn.innerHTML = navLinks.classList.contains('active') ? 
                '<i class="fas fa-times"></i>' : '<i class="fas fa-bars"></i>';
        });
        
        // FAQ Accordion
        const faqQuestions = document.querySelectorAll('.faq-question');
        
        faqQuestions.forEach(question => {
            question.addEventListener('click', () => {
                const item = question.parentNode;
                item.classList.toggle('active');
                
                // Close other open items
                faqQuestions.forEach(q => {
                    if (q !== question && q.parentNode.classList.contains('active')) {
                        q.parentNode.classList.remove('active');
                    }
                });
            });
        });
        
        // Smooth Scrolling for Anchor Links
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
                    
                    // Close mobile menu if open
                    if (navLinks.classList.contains('active')) {
                        navLinks.classList.remove('active');
                        mobileMenuBtn.innerHTML = '<i class="fas fa-bars"></i>';
                    }
                }
            });
        });
        
        // Sticky Header on Scroll
        window.addEventListener('scroll', () => {
            const header = document.querySelector('header');
            header.classList.toggle('sticky', window.scrollY > 50);
        });
        
        // Form submission handling
        document.querySelector('.newsletter-form').addEventListener('submit', function(e) {
            e.preventDefault();
            const email = this.querySelector('input').value;
            alert(`Thank you for subscribing with ${email}! You'll receive our newsletter soon.`);
            this.reset();
        });
        
        // Make all buttons with href work properly
        document.querySelectorAll('a.btn').forEach(button => {
            button.addEventListener('click', function(e) {
                if (this.getAttribute('href') === '#') {
                    e.preventDefault();
                    // You can add specific behavior for buttons with href="#"
                    alert('This button would navigate to its intended page if the link was properly set.');
                }
            });
        });
    </script>
</body>
</html>