<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmer Testimonials | AgroFarm - Modern Agricultural Solutions</title>
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

        /* Testimonials Hero */
        .testimonials-hero {
            background: linear-gradient(135deg, rgba(46, 125, 50, 0.9), rgba(27, 94, 32, 0.9)), 
                        url('https://images.unsplash.com/photo-1523741543316-beb7fc7023d8?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            padding: 120px 0;
            text-align: center;
            color: white;
        }
        
        .testimonials-hero h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            font-weight: 700;
            line-height: 1.3;
        }
        
        .testimonials-hero p {
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
            transition: color 0.3s;
        }
        
        .breadcrumb a:hover {
            color: white;
            text-decoration: underline;
        }

        /* Written Testimonials */
        .written-testimonials {
            padding: 100px 0;
            background-color: white;
        }
        
        .testimonials-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
        }
        
        .testimonial-card {
            background-color: white;
            padding: 40px 30px;
            border-radius: 8px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            position: relative;
            transition: transform 0.3s ease;
            border: 1px solid rgba(0,0,0,0.05);
        }
        
        .testimonial-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.1);
        }
        
        .testimonial-card:before {
            content: '"';
            position: absolute;
            top: 20px;
            left: 30px;
            font-size: 5rem;
            color: rgba(46, 125, 50, 0.1);
            font-family: serif;
            line-height: 1;
            z-index: 0;
        }
        
        .rating {
            color: var(--accent);
            margin-bottom: 20px;
            font-size: 1.1rem;
        }
        
        .testimonial-content {
            margin-bottom: 25px;
            color: var(--text);
            position: relative;
            z-index: 1;
            font-style: italic;
            line-height: 1.8;
        }
        
        .testimonial-author {
            display: flex;
            align-items: center;
            margin-top: 30px;
        }
        
        .author-img {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 20px;
            border: 3px solid var(--light-gray);
        }
        
        .author-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .author-info h4 {
            color: var(--dark);
            margin-bottom: 5px;
            font-weight: 600;
        }
        
        .author-info p {
            color: var(--primary);
            font-size: 0.9rem;
        }
        
        .testimonial-meta {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
            font-size: 0.85rem;
            color: var(--text-light);
        }

        /* Video Testimonials */
        .video-testimonials {
            padding: 100px 0;
            background-color: var(--light-gray);
            position: relative;
        }
        
        .video-testimonials:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100px;
            background: white;
            clip-path: polygon(0 0, 100% 0, 100% 50%, 0 100%);
        }
        
        .video-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 30px;
        }
        
        .video-card {
            position: relative;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            transition: transform 0.3s ease;
            background-color: white;
        }
        
        .video-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.1);
        }
        
        .video-thumbnail {
            position: relative;
            padding-bottom: 56.25%; /* 16:9 Aspect Ratio */
            height: 0;
            overflow: hidden;
        }
        
        .video-thumbnail img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .video-card:hover .video-thumbnail img {
            transform: scale(1.05);
        }
        
        .play-button {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 70px;
            height: 70px;
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--primary);
            font-size: 1.8rem;
            cursor: pointer;
            transition: all 0.3s ease;
            z-index: 2;
        }
        
        .play-button:hover {
            background-color: var(--primary);
            color: white;
            transform: translate(-50%, -50%) scale(1.1);
        }
        
        .play-button:after {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.4);
            border-radius: 50%;
            animation: pulse 2s infinite;
            z-index: -1;
        }
        
        @keyframes pulse {
            0% {
                transform: scale(0.8);
                opacity: 0.7;
            }
            70% {
                transform: scale(1.3);
                opacity: 0;
            }
            100% {
                transform: scale(0.8);
                opacity: 0;
            }
        }
        
        .video-info {
            padding: 25px;
        }
        
        .video-info h3 {
            color: var(--dark);
            margin-bottom: 10px;
            font-weight: 600;
        }
        
        .video-info p {
            color: var(--text-light);
            font-size: 0.95rem;
        }

        /* Stats Section */
        .testimonial-stats {
            padding: 100px 0;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            text-align: center;
        }
        
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 30px;
        }
        
        .stat-item {
            padding: 30px;
            background-color: rgba(255,255,255,0.1);
            border-radius: 8px;
            transition: transform 0.3s ease;
        }
        
        .stat-item:hover {
            transform: translateY(-10px);
            background-color: rgba(255,255,255,0.15);
        }
        
        .stat-number {
            font-size: 3rem;
            font-weight: 700;
            margin-bottom: 10px;
        }
        
        .stat-label {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        /* CTA Section */
        .testimonial-cta {
            padding: 100px 0;
            background-color: white;
            text-align: center;
        }
        
        .testimonial-cta h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: var(--dark);
        }
        
        .testimonial-cta p {
            color: var(--text-light);
            margin-bottom: 30px;
            max-width: 700px;
            margin-left: auto;
            margin-right: auto;
            font-size: 1.1rem;
        }
        
        .cta-buttons {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
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
        
        .copyright {
            text-align: center;
            padding-top: 30px;
            border-top: 1px solid rgba(255,255,255,0.1);
            color: #bbb;
            font-size: 0.9rem;
        }

        /* Modal for Video */
        .modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            z-index: 2000;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .modal.show {
            display: flex;
            opacity: 1;
        }
        
        .modal-content {
            width: 80%;
            max-width: 900px;
            position: relative;
        }
        
        .close-modal {
            position: absolute;
            top: -40px;
            right: 0;
            color: var(--white);
            font-size: 2rem;
            cursor: pointer;
            transition: var(--transition);
        }
        
        .close-modal:hover {
            color: var(--primary-light);
        }
        
        .video-container {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
        }
        
        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
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
            
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .testimonials-hero h1 {
                font-size: 2.5rem;
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
            
            .cta-buttons {
                flex-direction: column;
                align-items: center;
            }
        }
        
        @media (max-width: 576px) {
            .footer-grid {
                grid-template-columns: 1fr;
            }
            
            .stats-grid {
                grid-template-columns: 1fr;
                gap: 20px;
            }
            
            .testimonials-hero h1 {
                font-size: 2rem;
            }
            
            .section-title {
                font-size: 1.8rem;
            }
            
            .section-subtitle {
                font-size: 1rem;
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
                    <li><a href="testimonials.html" class="active">Testimonials</a></li>
                    <li><a href="contact.html">Contact</a></li>
                    <li><a href="login.html">Login</a></li>
					<li><a href="register.html">Register</a></li>
                </ul>
                <div class="mobile-menu">
                    <i class="fas fa-bars"></i>
                </div>
            </nav>
        </div>
    </header>

    <!-- Testimonials Hero -->
    <section class="testimonials-hero">
        <div class="container">
            <h1>Farmer Success Stories</h1>
            <p>Hear directly from farmers who have transformed their agricultural businesses with AgroFarm's innovative solutions</p>
            
            <ul class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li>Testimonials</li>
            </ul>
        </div>
    </section>

    <!-- Written Testimonials -->
    <section class="written-testimonials">
        <div class="container">
            <h2 class="section-title">What Farmers Say</h2>
            <p class="section-subtitle">Real experiences from our farming community across Bangladesh</p>
            
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="testimonial-content">
                        <p>AgroFarm has completely transformed my rice farming business. Their marketplace connected me with reliable buyers who pay fair prices, and their training programs taught me modern techniques that increased my yield by 40% in just one season.</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-img">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Rahim Mia">
                        </div>
                        <div class="author-info">
                            <h4>Rahim Mia</h4>
                            <p>Rice Farmer, Bogura</p>
                        </div>
                    </div>
                    <div class="testimonial-meta">
                        <span><i class="far fa-calendar-alt"></i> June 15, 2023</span>
                        <span><i class="fas fa-tag"></i> Marketplace, Training</span>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="testimonial-content">
                        <p>As a woman farmer, I faced many challenges accessing resources. AgroFarm's microloan program helped me expand my vegetable farm, and their women's empowerment training gave me the confidence to grow my business. I've tripled my income in two years.</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-img">
                            <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Ayesha Begum">
                        </div>
                        <div class="author-info">
                            <h4>Ayesha Begum</h4>
                            <p>Vegetable Farmer, Jessore</p>
                        </div>
                    </div>
                    <div class="testimonial-meta">
                        <span><i class="far fa-calendar-alt"></i> May 2, 2023</span>
                        <span><i class="fas fa-tag"></i> Financial Services</span>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <div class="testimonial-content">
                        <p>The equipment rental service saved me thousands in upfront costs. I can now use modern machinery when I need it without the burden of ownership. AgroFarm's weather alerts have also been invaluable for protecting my fruit crops.</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-img">
                            <img src="https://randomuser.me/api/portraits/men/75.jpg" alt="Jamal Uddin">
                        </div>
                        <div class="author-info">
                            <h4>Jamal Uddin</h4>
                            <p>Fruit Farmer, Rajshahi</p>
                        </div>
                    </div>
                    <div class="testimonial-meta">
                        <span><i class="far fa-calendar-alt"></i> April 18, 2023</span>
                        <span><i class="fas fa-tag"></i> Equipment Rental</span>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="testimonial-content">
                        <p>AgroFarm's mobile app makes it so easy to manage my farm. I can check prices, connect with buyers, and even get expert advice all from my phone. It's like having an agricultural expert in my pocket!</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-img">
                            <img src="https://randomuser.me/api/portraits/men/22.jpg" alt="Karim Uddin">
                        </div>
                        <div class="author-info">
                            <h4>Karim Uddin</h4>
                            <p>Dairy Farmer, Rangpur</p>
                        </div>
                    </div>
                    <div class="testimonial-meta">
                        <span><i class="far fa-calendar-alt"></i> March 5, 2023</span>
                        <span><i class="fas fa-tag"></i> Mobile Technology</span>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <div class="testimonial-content">
                        <p>After joining AgroFarm's cooperative program, our village has seen remarkable changes. We now get better prices by selling collectively, and the shared equipment program has reduced our costs significantly.</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-img">
                            <img src="https://randomuser.me/api/portraits/men/65.jpg" alt="Abdul Malek">
                        </div>
                        <div class="author-info">
                            <h4>Abdul Malek</h4>
                            <p>Community Leader, Khulna</p>
                        </div>
                    </div>
                    <div class="testimonial-meta">
                        <span><i class="far fa-calendar-alt"></i> February 12, 2023</span>
                        <span><i class="fas fa-tag"></i> Community Program</span>
                    </div>
                </div>
                
                <div class="testimonial-card">
                    <div class="rating">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="testimonial-content">
                        <p>The soil testing service helped me understand exactly what my land needed. I optimized my fertilizer use and saw a 25% increase in production while spending less on inputs. AgroFarm's scientific approach is game-changing.</p>
                    </div>
                    <div class="testimonial-author">
                        <div class="author-img">
                            <img src="https://randomuser.me/api/portraits/women/33.jpg" alt="Fatema Begum">
                        </div>
                        <div class="author-info">
                            <h4>Fatema Begum</h4>
                            <p>Tea Farmer, Sylhet</p>
                        </div>
                    </div>
                    <div class="testimonial-meta">
                        <span><i class="far fa-calendar-alt"></i> January 8, 2023</span>
                        <span><i class="fas fa-tag"></i> Soil Testing</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Video Testimonials -->
    <section class="video-testimonials">
        <div class="container">
            <h2 class="section-title">Video Testimonials</h2>
            <p class="section-subtitle">Watch inspiring stories from our farming community</p>
            
            <div class="video-grid">
                <div class="video-card" data-video-id="dQw4w9WgXcQ">
                    <div class="video-thumbnail">
                        <img src="https://images.unsplash.com/photo-1585011650347-c59dbef5a823?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Farmer testimonial">
                        <div class="play-button">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>
                    <div class="video-info">
                        <h3>Rahim's Transformation</h3>
                        <p>From subsistence farming to commercial success</p>
                    </div>
                </div>
                
                <div class="video-card" data-video-id="dQw4w9WgXcQ">
                    <div class="video-thumbnail">
                        <img src="https://images.unsplash.com/photo-1523741543316-beb7fc7023d8?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Farmer testimonial">
                        <div class="play-button">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>
                    <div class="video-info">
                        <h3>Women in Agriculture</h3>
                        <p>Ayesha's journey to financial independence</p>
                    </div>
                </div>
                
                <div class="video-card" data-video-id="dQw4w9WgXcQ">
                    <div class="video-thumbnail">
                        <img src="https://images.unsplash.com/photo-1500382017468-9049fed747ef?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Farmer testimonial">
                        <div class="play-button">
                            <i class="fas fa-play"></i>
                        </div>
                    </div>
                    <div class="video-info">
                        <h3>Community Success</h3>
                        <p>How AgroFarm transformed an entire village</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="testimonial-stats">
        <div class="container">
            <h2 class="section-title">Our Impact Through Farmers' Eyes</h2>
            <p class="section-subtitle" style="color: rgba(255,255,255,0.8);">The numbers behind our farmers' success stories</p>
            
            <div class="stats-grid">
                <div class="stat-item">
                    <div class="stat-number">10,000+</div>
                    <div class="stat-label">Satisfied Farmers</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">40%</div>
                    <div class="stat-label">Average Yield Increase</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">120%</div>
                    <div class="stat-label">Average Income Growth</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">4.8/5</div>
                    <div class="stat-label">Average Rating</div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="testimonial-cta">
        <div class="container">
            <h2>Ready to Write Your Success Story?</h2>
            <p>Join thousands of Bangladeshi farmers who are increasing their yields, income, and sustainability with AgroFarm's innovative solutions.</p>
            <div class="cta-buttons">
                <a href="contact.html" class="btn">Get Started Today</a>
                <a href="tel:+8801234567890" class="btn btn-outline">Call Our Experts</a>
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

    <!-- Video Modal -->
    <div class="modal" id="videoModal">
        <div class="modal-content">
            <span class="close-modal">&times;</span>
            <div class="video-container">
                <iframe id="ytplayer" width="560" height="315" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
    </div>

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
</body>
</html>