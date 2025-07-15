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