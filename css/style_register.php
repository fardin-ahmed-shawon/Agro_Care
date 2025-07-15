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