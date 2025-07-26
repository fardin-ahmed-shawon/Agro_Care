    <style>
        :root {
            --primary: #2E7D32;
            --primary-light: #4CAF50;
            --primary-dark: #1B5E20;
            --accent: #FF9800;
            --white: #FFFFFF;
            --light-bg: #F8F9FA;
            --border-color: #E0E0E0;
            --text-dark: #263238;
            --text-medium: #455A64;
            --text-light: #90A4AE;
            --error: #D32F2F;
            --success: #388E3C;
            --warning: #FFA000;
            --info: #1976D2;
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

        /* Header Styles */
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
            max-width: 1200px;
            margin: 0 auto;
            width: 90%;
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
            color: var(--text-dark);
            font-weight: 500;
            transition: all 0.3s;
            text-decoration: none;
            font-size: 1rem;
            padding: 5px 0;
        }
        
        .nav-links a:hover, .nav-links a.active {
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
        
        .mobile-menu {
            display: none;
            font-size: 1.5rem;
            cursor: pointer;
            color: var(--text-dark);
        }

        /* Login Container */
        .login-container {
            display: flex;
            width: 100%;
            min-height: calc(100vh - 70px);
        }

        /* Left Side - Branding */
        .login-branding {
            flex: 1;
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            color: var(--white);
            padding: 60px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            position: relative;
            overflow: hidden;
        }

        .branding-background {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('https://images.unsplash.com/photo-1500382017468-9049fed747ef?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') center/cover no-repeat;
            opacity: 0.15;
        }

        .brand-logo {
            display: flex;
            align-items: center;
            margin-bottom: 40px;
            z-index: 2;
        }

        .brand-logo i {
            font-size: 2.5rem;
            margin-right: 15px;
        }

        .brand-logo h1 {
            font-size: 2rem;
            font-weight: 700;
        }

        .brand-logo span {
            color: var(--accent);
        }

        .branding-content {
            max-width: 500px;
            text-align: center;
            z-index: 2;
        }

        .branding-content h2 {
            font-size: 2.2rem;
            margin-bottom: 20px;
            font-weight: 600;
        }

        .branding-content p {
            font-size: 1.1rem;
            opacity: 0.9;
            margin-bottom: 30px;
        }

        .brand-features {
            text-align: left;
            margin-top: 40px;
        }

        .feature-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 20px;
            background-color: rgba(255, 255, 255, 0.1);
            padding: 15px;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .feature-item:hover {
            background-color: rgba(255, 255, 255, 0.2);
            transform: translateX(5px);
        }

        .feature-icon {
            background-color: rgba(255, 255, 255, 0.2);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 15px;
            flex-shrink: 0;
        }

        /* Right Side - Login Form */
        .login-form-container {
            width: 500px;
            background-color: var(--white);
            padding: 80px 60px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            box-shadow: -5px 0 30px rgba(0, 0, 0, 0.05);
            z-index: 1;
        }

        .form-header {
            margin-bottom: 40px;
        }

        .form-header h2 {
            font-size: 1.8rem;
            color: var(--text-dark);
            margin-bottom: 10px;
            font-weight: 600;
        }

        .form-header p {
            color: var(--text-light);
        }

        .login-form {
            width: 100%;
        }

        .form-group {
            margin-bottom: 25px;
            position: relative;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: var(--text-dark);
            font-size: 0.95rem;
        }

        .input-wrapper {
            position: relative;
        }

        .form-control {
            width: 100%;
            padding: 14px 45px 14px 15px;
            border: 1px solid var(--border-color);
            border-radius: 6px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background-color: var(--light-bg);
        }

        .form-control:focus {
            border-color: var(--primary);
            outline: none;
            box-shadow: 0 0 0 3px rgba(46, 125, 50, 0.2);
            background-color: var(--white);
        }

        .password-toggle {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-light);
            cursor: pointer;
            transition: color 0.3s;
        }

        .password-toggle:hover {
            color: var(--primary);
        }

        .form-options {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 25px;
            font-size: 0.9rem;
        }

        .remember-me {
            display: flex;
            align-items: center;
        }

        .remember-me input {
            margin-right: 8px;
            accent-color: var(--primary);
            cursor: pointer;
        }

        .remember-me label {
            cursor: pointer;
        }

        .forgot-password {
            color: var(--primary);
            text-decoration: none;
            transition: all 0.3s;
        }

        .forgot-password:hover {
            text-decoration: underline;
        }

        .btn {
            width: 100%;
            padding: 14px;
            background-color: var(--primary);
            color: var(--white);
            border: none;
            border-radius: 6px;
            font-size: 1rem;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            overflow: hidden;
        }

        .btn:hover {
            background-color: var(--primary-dark);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(46, 125, 50, 0.3);
        }

        .btn:active {
            transform: translateY(0);
        }

        .btn .spinner {
            display: none;
            width: 20px;
            height: 20px;
            border: 3px solid rgba(255, 255, 255, 0.3);
            border-radius: 50%;
            border-top-color: white;
            animation: spin 1s ease-in-out infinite;
            margin-right: 8px;
        }

        .btn.loading .spinner {
            display: block;
        }

        .btn.loading span {
            visibility: hidden;
        }

        .divider {
            position: relative;
            margin: 25px 0;
            text-align: center;
            color: var(--text-light);
            font-size: 0.9rem;
        }

        .divider::before {
            content: "";
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            height: 1px;
            background-color: var(--border-color);
            z-index: -1;
        }

        .divider span {
            background-color: var(--white);
            padding: 0 15px;
        }

        .social-login {
            display: flex;
            justify-content: center;
            gap: 15px;
            margin-bottom: 30px;
        }

        .social-btn {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--white);
            font-size: 1.2rem;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }

        .social-btn.google {
            background-color: #DB4437;
        }

        .social-btn.facebook {
            background-color: #3B5998;
        }

        .social-btn.twitter {
            background-color: #1DA1F2;
        }

        .social-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .register-link {
            text-align: center;
            font-size: 0.95rem;
            color: var(--text-light);
        }

        .register-link a {
            color: var(--primary);
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s;
        }

        .register-link a:hover {
            text-decoration: underline;
        }

        /* Form Validation */
        .error-message {
            color: var(--error);
            font-size: 0.85rem;
            margin-top: 5px;
            display: none;
        }

        .form-group.error .error-message {
            display: block;
        }

        .form-group.error .form-control {
            border-color: var(--error);
        }

        .form-group.success .form-control {
            border-color: var(--success);
        }

        /* Alert Messages */
        .alert {
            padding: 15px;
            border-radius: 6px;
            margin-bottom: 20px;
            display: flex;
            align-items: center;
            display: none;
        }

        .alert i {
            margin-right: 10px;
            font-size: 1.2rem;
        }

        .alert-success {
            background-color: rgba(56, 142, 60, 0.1);
            color: var(--success);
            border-left: 4px solid var(--success);
        }

        .alert-error {
            background-color: rgba(211, 47, 47, 0.1);
            color: var(--error);
            border-left: 4px solid var(--error);
        }

        .alert-warning {
            background-color: rgba(255, 160, 0, 0.1);
            color: var(--warning);
            border-left: 4px solid var(--warning);
        }

        .alert-info {
            background-color: rgba(25, 118, 210, 0.1);
            color: var(--info);
            border-left: 4px solid var(--info);
        }

        /* Security Tips */
        .security-tips {
            margin-top: 30px;
            padding: 20px;
            background-color: var(--light-bg);
            border-radius: 8px;
            border-left: 4px solid var(--primary);
        }

        .security-tips h3 {
            color: var(--primary);
            margin-bottom: 15px;
            font-size: 1.1rem;
            display: flex;
            align-items: center;
        }

        .security-tips h3 i {
            margin-right: 10px;
        }

        .security-tips ul {
            list-style: none;
        }

        .security-tips li {
            margin-bottom: 10px;
            position: relative;
            padding-left: 25px;
        }

        .security-tips li::before {
            content: '\f058';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            position: absolute;
            left: 0;
            color: var(--primary);
        }

        /* Responsive Design */
        @media (max-width: 1200px) {
            .login-branding {
                padding: 40px;
            }
            
            .login-form-container {
                width: 450px;
                padding: 60px 40px;
            }
        }

        @media (max-width: 992px) {
            .login-container {
                flex-direction: column;
            }
            
            .login-branding {
                padding: 40px 20px;
                text-align: center;
            }
            
            .brand-features {
                display: none;
            }
            
            .login-form-container {
                width: 100%;
                max-width: 600px;
                margin: 0 auto;
                border-radius: 0;
                padding: 50px 40px;
            }
        }

        @media (max-width: 1170px) {
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
        }

        @media (max-width: 576px) {
            .login-form-container {
                padding: 40px 25px;
            }
            
            .form-header h2 {
                font-size: 1.5rem;
            }
            
            .form-options {
                flex-direction: column;
                align-items: flex-start;
                gap: 15px;
            }
        }

        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes spin {
            to { transform: rotate(360deg); }
        }

        .login-form-container {
            animation: fadeIn 0.6s ease-out forwards;
        }

        .brand-logo, .branding-content h2, .branding-content p, .feature-item {
            opacity: 0;
            transform: translateY(20px);
        }

        .brand-logo {
            animation: fadeIn 0.6s ease-out 0.2s forwards;
        }

        .branding-content h2 {
            animation: fadeIn 0.6s ease-out 0.3s forwards;
        }

        .branding-content p {
            animation: fadeIn 0.6s ease-out 0.4s forwards;
        }

        .feature-item:nth-child(1) {
            animation: fadeIn 0.6s ease-out 0.5s forwards;
        }
        .feature-item:nth-child(2) {
            animation: fadeIn 0.6s ease-out 0.6s forwards;
        }
        .feature-item:nth-child(3) {
            animation: fadeIn 0.6s ease-out 0.7s forwards;
        }

        /* Ripple effect for buttons */
        .ripple {
            position: absolute;
            border-radius: 50%;
            background-color: rgba(255, 255, 255, 0.7);
            transform: scale(0);
            animation: ripple 0.6s linear;
            pointer-events: none;
        }

        @keyframes ripple {
            to {
                transform: scale(4);
                opacity: 0;
            }
        }
    </style>