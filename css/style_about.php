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
        .about-hero {
            background: linear-gradient(135deg, rgba(46, 125, 50, 0.9), rgba(27, 94, 32, 0.9)), 
                        url('https://images.unsplash.com/photo-1500382017468-9049fed747ef?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            padding: 150px 0;
            text-align: center;
            color: white;
        }
        
        .about-hero h1 {
            font-size: 3rem;
            margin-bottom: 20px;
            font-weight: 700;
            text-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        .about-hero p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto 30px;
            opacity: 0.9;
        }
        
        .breadcrumb {
            display: flex;
            justify-content: center;
            margin-top: 30px;
            font-size: 0.9rem;
        }
        
        .breadcrumb a {
            color: white;
            text-decoration: none;
            opacity: 0.8;
            transition: opacity 0.3s;
        }
        
        .breadcrumb a:hover {
            opacity: 1;
        }
        
        .breadcrumb span {
            margin: 0 10px;
            opacity: 0.6;
        }

        /* About Content */
        .about-content {
            padding: 100px 0;
            background-color: white;
        }
        
        .about-flex {
            display: flex;
            align-items: center;
            gap: 60px;
        }
        
        .about-text {
            flex: 1;
        }
        
        .about-text h2 {
            color: var(--dark);
            margin-bottom: 25px;
            font-size: 2rem;
            font-weight: 600;
            line-height: 1.3;
        }
        
        .about-text p {
            margin-bottom: 25px;
            color: var(--text-light);
        }
        
        .about-image {
            flex: 1;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 15px 40px rgba(0,0,0,0.1);
            transition: transform 0.5s ease;
        }
        
        .about-image:hover {
            transform: translateY(-10px);
        }
        
        .about-image img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.5s ease;
        }
        
        .about-image:hover img {
            transform: scale(1.05);
        }

        /* Mission/Vision */
        .mission-vision {
            padding: 100px 0;
            background-color: var(--light-gray);
        }
        
        .mv-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 40px;
        }
        
        .mv-card {
            background: white;
            padding: 50px 40px;
            border-radius: 8px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.05);
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .mv-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 40px rgba(0,0,0,0.1);
        }
        
        .mv-card:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 5px;
            height: 100%;
            background-color: var(--primary);
        }
        
        .mv-icon {
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
        
        .mv-card h3 {
            font-size: 1.5rem;
            margin-bottom: 20px;
            color: var(--dark);
        }
        
        .mv-card p {
            color: var(--text-light);
        }

        /* Values Section */
        .values-section {
            padding: 100px 0;
            background-color: white;
        }
        
        .values-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }
        
        .value-card {
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
            transition: transform 0.3s ease;
            text-align: center;
            border-top: 4px solid var(--primary);
        }
        
        .value-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }
        
        .value-icon {
            font-size: 2.5rem;
            color: var(--primary);
            margin-bottom: 20px;
        }
        
        .value-card h3 {
            font-size: 1.3rem;
            margin-bottom: 15px;
            color: var(--dark);
        }
        
        .value-card p {
            color: var(--text-light);
            font-size: 0.95rem;
        }

        /* Team Section */
        .team-section {
            padding: 100px 0;
            background-color: var(--light-gray);
        }
        
        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 40px;
        }
        
        .team-member {
            text-align: center;
            background-color: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.05);
            transition: transform 0.3s ease;
        }
        
        .team-member:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
        }
        
        .member-photo {
            width: 180px;
            height: 180px;
            margin: 0 auto 25px;
            border-radius: 50%;
            overflow: hidden;
            border: 5px solid var(--light);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .member-photo img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .team-member:hover .member-photo img {
            transform: scale(1.1);
        }
        
        .team-member h3 {
            font-size: 1.3rem;
            margin-bottom: 5px;
            color: var(--dark);
        }
        
        .team-member p {
            color: var(--primary);
            font-weight: 500;
            margin-bottom: 20px;
            font-size: 0.95rem;
        }
        
        .social-links {
            display: flex;
            justify-content: center;
            gap: 12px;
            margin-top: 20px;
        }
        
        .social-links a {
            width: 40px;
            height: 40px;
            background-color: var(--light);
            color: var(--dark);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }
        
        .social-links a:hover {
            background-color: var(--primary);
            color: white;
            transform: translateY(-3px);
        }

        /* Stats Section */
        .stats-section {
            padding: 100px 0;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            text-align: center;
            position: relative;
            overflow: hidden;
        }
        
        .stats-section:before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://www.transparenttextures.com/patterns/concrete-wall.png');
            opacity: 0.05;
        }
        
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 40px;
            position: relative;
        }
        
        .stat-item {
            padding: 30px;
            background-color: rgba(255,255,255,0.1);
            border-radius: 8px;
            backdrop-filter: blur(5px);
            transition: transform 0.3s ease;
        }
        
        .stat-item:hover {
            transform: translateY(-10px);
            background-color: rgba(255,255,255,0.15);
        }
        
        .stat-item h3 {
            font-size: 3rem;
            margin-bottom: 10px;
            font-weight: 700;
        }
        
        .stat-item p {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        /* CTA Section */
        .cta-section {
            padding: 100px 0;
            background-color: white;
            text-align: center;
        }
        
        .cta-content {
            max-width: 700px;
            margin: 0 auto;
        }
        
        .cta-content h2 {
            font-size: 2.2rem;
            margin-bottom: 20px;
            color: var(--dark);
        }
        
        .cta-content p {
            color: var(--text-light);
            margin-bottom: 30px;
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
            
            .mv-grid, .values-grid {
                grid-template-columns: 1fr;
            }
            
            .stats-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            
            .about-hero {
                padding: 120px 0;
            }
            
            .about-hero h1 {
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
            
            .about-flex {
                flex-direction: column;
            }
            
            .about-image {
                order: -1;
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
            
            .about-hero {
                padding: 100px 0;
            }
            
            .about-hero h1 {
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