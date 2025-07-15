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