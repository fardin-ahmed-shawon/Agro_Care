<?php
$current_page = basename($_SERVER['PHP_SELF']); // Get the current page name
$page_title = 'AgroFarm - Modern Agricultural Solutions';  // Set the page title
?>
<!-- Header -->
<?php require 'header.php'; ?>

<!-----------=====================------------->
<!--========== Start Main Content ===========-->
<!-----------=====================------------->
<div class="main-area">

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>Transforming Agriculture Through Innovation</h1>
                <p>AgroFarm connects farmers with markets, financial services, and modern farming techniques to increase productivity and sustainability across Bangladesh.</p>
                <div class="hero-buttons">
                    <a href="register.html" class="btn">Register Now</a>
                    <a href="services.html" class="btn btn-outline">Explore Services</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="features">
        <div class="container">
            <h2 class="section-title">Why Choose AgroFarm</h2>
            <p class="section-subtitle">Comprehensive solutions designed specifically for Bangladeshi farmers</p>
            
            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Increased Profits</h3>
                    <p>Connect directly with buyers to eliminate middlemen and get better prices for your produce through our digital marketplace.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-hand-holding-usd"></i>
                    </div>
                    <h3>Financial Access</h3>
                    <p>Specialized agricultural loans, insurance products, and investment opportunities tailored for farming businesses.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>
                    <h3>Expert Training</h3>
                    <p>Learn modern farming techniques through our workshops, field demonstrations, and personalized advisory services.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-tractor"></i>
                    </div>
                    <h3>Equipment Sharing</h3>
                    <p>Affordable access to modern farming equipment through our rental network, reducing your capital expenses.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-cloud-sun-rain"></i>
                    </div>
                    <h3>Weather Intelligence</h3>
                    <p>Get localized weather forecasts and agricultural advisories to optimize your farming decisions.</p>
                </div>
                
                <div class="feature-card">
                    <div class="feature-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Community Support</h3>
                    <p>Join a network of thousands of farmers sharing knowledge and best practices across Bangladesh.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about">
        <div class="container">
            <div class="about-content">
                <div class="about-text">
                    <h2 class="section-title">Our Agricultural Revolution</h2>
                    <p>AgroFarm is a pioneering agricultural technology platform dedicated to transforming farming practices across Bangladesh. Founded in 2018, we bridge critical gaps between farmers, markets, and essential resources through cutting-edge solutions.</p>
                    
                    <ul class="about-list">
                        <li><i class="fas fa-check-circle"></i> <strong>10,000+ farmers</strong> empowered across 25 districts</li>
                        <li><i class="fas fa-check-circle"></i> <strong>$5M+</strong> in farmer transactions facilitated</li>
                        <li><i class="fas fa-check-circle"></i> <strong>95% satisfaction</strong> rate among our farming community</li>
                        <li><i class="fas fa-check-circle"></i> <strong>50+ partnerships</strong> with agricultural organizations</li>
                    </ul>
                    
                    <a href="register.html" class="btn">Join Us Today</a>
                </div>
                
                <div class="about-image">
                    <img src="https://images.unsplash.com/photo-1586771107445-d3ca888129ce?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="AgroFarm Team in Field">
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="services">
        <div class="container">
            <h2 class="section-title">Our Core Services</h2>
            <p class="section-subtitle">Comprehensive solutions designed to address every aspect of modern farming</p>
            
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-img">
                        <img src="https://images.unsplash.com/photo-1586771107445-d3ca888129ce?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Market Access">
                    </div>
                    <div class="service-content">
                        <h3>Digital Marketplace</h3>
                        <p>Our platform connects farmers directly with buyers, processors, and exporters to ensure fair prices and timely payments for your harvest.</p>
                        <a href="register.html" class="btn btn-outline">Get Started</a>
                    </div>
                </div>
                
                <div class="service-card">
                    <div class="service-img">
                        <img src="https://images.unsplash.com/photo-1552581234-26160f608093?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Financial Services">
                    </div>
                    <div class="service-content">
                        <h3>Financial Solutions</h3>
                        <p>Specialized agricultural loans, crop insurance, and investment opportunities designed specifically for farming operations.</p>
                        <a href="register.html" class="btn btn-outline">Get Started</a>
                    </div>
                </div>
                
                <div class="service-card">
                    <div class="service-img">
                        <img src="https://images.unsplash.com/photo-1585011650347-c59dbef5a823?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Training & Support">
                    </div>
                    <div class="service-content">
                        <h3>Training Programs</h3>
                        <p>Practical workshops and field demonstrations covering modern techniques, sustainable practices, and crop optimization.</p>
                        <a href="register.html" class="btn btn-outline">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials Section -->
    <section class="testimonials">
        <div class="container">
            <h2 class="section-title">Success Stories</h2>
            <p class="section-subtitle">Hear from farmers who have transformed their operations with AgroFarm</p>
            
            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p>Before AgroFarm, I struggled to find reliable buyers for my rice. Now I can sell my entire harvest before it's even ready through their marketplace, often at prices 20-30% higher than before.</p>
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
                </div>
                
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p>The training programs completely changed how I farm. I've doubled my vegetable production using the techniques I learned, and now I'm able to send my children to better schools.</p>
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
                </div>
                
                <div class="testimonial-card">
                    <div class="testimonial-content">
                        <p>AgroFarm's equipment rental service saved me thousands in upfront costs. I can now use modern machinery when I need it without the burden of ownership and maintenance.</p>
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
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats">
        <div class="container">
            <h2 class="section-title">Our Impact in Numbers</h2>
            <p class="section-subtitle" style="color: rgba(255,255,255,0.8);">Measuring our contribution to Bangladesh's agricultural sector</p>
            
            <div class="stats-grid">
                <div class="stat-item">
                    <h3>10,000+</h3>
                    <p>Farmers Empowered</p>
                </div>
                <div class="stat-item">
                    <h3>$5M+</h3>
                    <p>In Transactions</p>
                </div>
                <div class="stat-item">
                    <h3>25+</h3>
                    <p>Districts Covered</p>
                </div>
                <div class="stat-item">
                    <h3>95%</h3>
                    <p>Satisfaction Rate</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta">
        <div class="container">
            <div class="cta-content">
                <h2>Ready to Transform Your Farming Business?</h2>
                <p>Join thousands of Bangladeshi farmers who are increasing their yields, income, and sustainability with AgroFarm's innovative solutions.</p>
                <div class="cta-buttons">
                    <a href="register.html" class="btn">Register Now</a>
                    <a href="tel:+8801234567890" class="btn btn-outline" style="color: var(--primary); border-color: var(--primary);">Call Our Experts</a>
                </div>
            </div>
        </div>
    </section>

</div>
<!-----------=====================------------->
<!----========= End Main Content ============--> 
<!-----------=====================------------->

<!-- Footer -->
<?php require 'footer.php'; ?>
    
