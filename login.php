<?php
$current_page = basename($_SERVER['PHP_SELF']); // Get the current page name
$page_title = 'FarmerCare | Secure Login';  // Set the page title
?>
<!-- Header -->
<?php require 'header.php'; ?>

<!-----------=====================------------->
<!--========== Start Main Content ===========-->
<!-----------=====================------------->
<div class="main-area">

    <!-- Login Container -->
    <div class="login-container">
        <!-- Branding Section -->
        <div class="login-branding">
            <div class="branding-background"></div>
            
            <div class="brand-logo">
                <i class="fas fa-leaf"></i>
                <h1>Agro<span>Care</span></h1>
            </div>
            
            <div class="branding-content">
                <h2>Transforming Agriculture Through Innovation</h2>
                <p>Access your dashboard to manage your farming operations, connect with buyers, and access modern agricultural solutions.</p>
            </div>
            
            <div class="brand-features">
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div>
                        <h4>Real-time Analytics</h4>
                        <p>Monitor your farm's performance with live data</p>
                    </div>
                </div>
                
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <div>
                        <h4>Market Access</h4>
                        <p>Connect directly with buyers and suppliers</p>
                    </div>
                </div>
                
                <div class="feature-item">
                    <div class="feature-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <div>
                        <h4>Secure Platform</h4>
                        <p>Enterprise-grade security for your data</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Login Form Section -->
        <div class="login-form-container">
            <div class="form-header">
                <h2>Welcome Back</h2>
                <p>Sign in to continue to your AgroCare dashboard</p>
            </div>
            
            <!-- Alert Messages -->
            <div class="alert alert-info" id="infoAlert">
                <i class="fas fa-info-circle"></i>
                <span>For demo purposes, you can use any valid email and password (min 8 chars)</span>
            </div>
            
            <div class="alert alert-error" id="errorAlert">
                <i class="fas fa-exclamation-circle"></i>
                <span id="errorMessage">Invalid email or password</span>
            </div>
            
            <div class="alert alert-success" id="successAlert">
                <i class="fas fa-check-circle"></i>
                <span>Login successful! Redirecting to dashboard...</span>
            </div>
            
            <form class="login-form" id="loginForm">
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <div class="input-wrapper">
                        <input type="email" id="email" class="form-control" placeholder="Enter your email" required>
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="error-message">Please enter a valid email address</div>
                </div>
                
                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="input-wrapper">
                        <input type="password" id="password" class="form-control" placeholder="Enter your password" required minlength="8">
                        <i class="fas fa-eye password-toggle" id="togglePassword"></i>
                    </div>
                    <div class="error-message">Password must be at least 8 characters</div>
                </div>
                
                <div class="form-options">
                    <div class="remember-me">
                        <input type="checkbox" id="remember">
                        <label for="remember">Remember me</label>
                    </div>
                    <a href="forgot-password.html" class="forgot-password">Forgot password?</a>
                </div>
                
                <button type="submit" class="btn" id="loginBtn">
                    <div class="spinner"></div>
                    <span>Sign In</span>
                </button>
                
                <div class="divider">
                    <span>OR CONTINUE WITH</span>
                </div>
                
                <div class="social-login">
                    <button type="button" class="social-btn google">
                        <i class="fab fa-google"></i>
                    </button>
                    <button type="button" class="social-btn facebook">
                        <i class="fab fa-facebook-f"></i>
                    </button>
                    <button type="button" class="social-btn twitter">
                        <i class="fab fa-twitter"></i>
                    </button>
                </div>
                
                <div class="register-link">
                    Don't have an account? <a href="register.html" id="createAccountLink">Create account</a>
                </div>
            </form>
            
            <!-- Security Tips -->
            <div class="security-tips">
                <h3><i class="fas fa-shield-alt"></i> Security Tips</h3>
                <ul>
                    <li>Never share your password with anyone</li>
                    <li>Use a strong, unique password for your account</li>
                    <li>Log out after each session, especially on shared devices</li>
                    <li>Enable two-factor authentication for added security</li>
                </ul>
            </div>
        </div>
    </div>

</div>
<!-----------=====================------------->
<!----========= End Main Content ============--> 
<!-----------=====================------------->

<!-- Footer -->
<?php require 'footer.php'; ?>