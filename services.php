<?php
$current_page = basename($_SERVER['PHP_SELF']); // Get the current page name
$page_title = 'Our Services | FarmerCare - Complete Farming Solutions';  // Set the page title
?>
<!-- Header -->
<?php require 'header.php'; ?>

<!-----------=====================------------->
<!--========== Start Main Content ===========-->
<!-----------=====================------------->
<div class="main-area">

    <!-- Hero Section -->
    <section class="services-hero">
        <div class="container">
            <h1>Comprehensive Agricultural Services</h1>
            <p>Empowering Bangladeshi farmers with innovative solutions to increase productivity, profitability, and sustainability</p>
            <a href="#services" class="btn">Explore Our Services</a>
        </div>
    </section>

    <!-- Services Grid -->
    <section class="services-grid" id="services">
        <div class="container">
            <h2 class="section-title">Our Farming Solutions</h2>
            <p class="section-subtitle">Tailored services designed to address the unique challenges of modern agriculture in Bangladesh</p>
            
            <div class="services-container">
                <div class="service-card">
                    <div class="service-img">
                        <img src="images/tean in field.jpg" alt="Digital Marketplace">
                    </div>
                    <div class="service-content">
                        <h3>Digital Marketplace</h3>
                        <p>Connect directly with buyers and get fair prices for your produce through our transparent digital platform.</p>
                        <ul class="service-features">
                            <li>Real-time market price updates</li>
                            <li>Direct buyer connections</li>
                            <li>Secure digital payments</li>
                            <li>Quality certification services</li>
                            <li>Logistics coordination</li>
                        </ul>
                        <a href="contact.html" class="btn">Join Marketplace</a>
                    </div>
                </div>
                
                <div class="service-card">
                    <div class="service-img">
                        <img src="https://images.unsplash.com/photo-1552581234-26160f608093?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Agricultural Financing">
                    </div>
                    <div class="service-content">
                        <h3>Agricultural Financing</h3>
                        <p>Access credit and insurance products specifically designed for farming operations.</p>
                        <ul class="service-features">
                            <li>Low-interest seasonal crop loans</li>
                            <li>Equipment and infrastructure financing</li>
                            <li>Weather-indexed crop insurance</li>
                            <li>Harvest advance payments</li>
                            <li>Micro-savings programs</li>
                        </ul>
                        <a href="contact.html" class="btn">Apply Now</a>
                    </div>
                </div>
                
                <div class="service-card">
                    <div class="service-img">
                        <img src="https://images.unsplash.com/photo-1585011650347-c59dbef5a823?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Farmer Training">
                    </div>
                    <div class="service-content">
                        <h3>Farmer Training Programs</h3>
                        <p>Enhance your skills with our comprehensive agricultural education programs.</p>
                        <ul class="service-features">
                            <li>Seasonal crop management workshops</li>
                            <li>One-on-one expert consultations</li>
                            <li>Online learning portal with video tutorials</li>
                            <li>Field demonstration days</li>
                            <li>Certification programs</li>
                        </ul>
                        <a href="contact.html" class="btn">View Programs</a>
                    </div>
                </div>
                
                <div class="service-card">
                    <div class="service-img">
                        <img src="https://images.unsplash.com/photo-1520333789090-1afc82db536a?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Equipment Rental">
                    </div>
                    <div class="service-content">
                        <h3>Agri-input</h3>
                        <p>We serve high quality agricultural inputs without any burden.</p>
                        <ul class="service-features">
                            <li>Fertilizers & Soil Amendments</li>
                            <li>Seeds & Planting Materials</li>
                            <li>Agro Chemical</li>
                            <li>Vateranary medicine and premix</li>
                            <li>Food suplymentary for animals</li>
                        </ul>
                        <a href="contact.html" class="btn">Browse Equipment</a>
                    </div>
                </div>
                
                <div class="service-card">
                    <div class="service-img">
                        <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Smart Farming">
                    </div>
                    <div class="service-content">
                        <h3>Smart Farming Solutions</h3>
                        <p>Technology-driven tools to optimize your farming operations.</p>
                        <ul class="service-features">
                            <li>Hyperlocal weather forecasts</li>
                            <li>Pest and disease alerts</li>
                            <li>Soil health monitoring</li>
                            <li>Crop planning and management tools</li>
                            <li>Mobile advisory services</li>
                        </ul>
                        <a href="contact.html" class="btn">Explore Tools</a>
                    </div>
                </div>
                
                <div class="service-card">
                    <div class="service-img">
                        <img src="https://images.unsplash.com/photo-1434030216411-0b793f4b4173?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Farmer Community">
                    </div>
                    <div class="service-content">
                        <h3>Farmer Community Network</h3>
                        <p>Connect with fellow farmers to share knowledge and resources.</p>
                        <ul class="service-features">
                            <li>Local farmer cooperative groups</li>
                            <li>Expert Q&A forums</li>
                            <li>Success story sharing platform</li>
                            <li>Bulk input purchasing</li>
                            <li>Collective marketing opportunities</li>
                        </ul>
                        <a href="contact.html" class="btn">Join Community</a>
                    </div>
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

    <!-- Pricing Section -->
    <section class="pricing">
        <div class="container">
            <h2 class="section-title">Affordable Pricing Plans</h2>
            <p class="section-subtitle">Flexible options to suit farms of all sizes and budgets</p>
            
            <div class="pricing-grid">
                <div class="pricing-card">
                    <div class="pricing-header">
                        <h3>Basic Plan</h3>
                        <div class="price">৳50<span>/month</span></div>
                        <p>For small-scale farmers</p>
                    </div>
                    <div class="pricing-features">
                        <ul>
                            <li>Marketplace access</li>
                            <li>Basic weather alerts</li>
                            <li>Community forum</li>
                            <li>Email support</li>
                        </ul>
                        <a href="contact.html" class="btn btn-outline">Get Started</a>
                    </div>
                </div>
                
                <div class="pricing-card popular">
                    <div class="popular-badge">Most Popular</div>
                    <div class="pricing-header">
                        <h3>Standard Plan</h3>
                        <div class="price">৳100<span>/month</span></div>
                        <p>For medium-scale farmers</p>
                    </div>
                    <div class="pricing-features">
                        <ul>
                            <li>All Basic features</li>
                            <li>Premium marketplace</li>
                            <li>Advanced weather data</li>
                            <li>Training programs</li>
                            <li>Phone support</li>
                        </ul>
                        <a href="contact.html" class="btn">Get Started</a>
                    </div>
                </div>
                
                <div class="pricing-card">
                    <div class="pricing-header">
                        <h3>Enterprise Plan</h3>
                        <div class="price">৳<span>/month</span></div>
                        <p>For large-scale operations</p>
                    </div>
                    <div class="pricing-features">
                        <ul>
                            <li>All Standard features</li>
                            <li>Priority marketplace</li>
                            <li>Equipment discounts</li>
                            <li>Financial services</li>
                            <li>Dedicated account manager</li>
                        </ul>
                        <a href="contact.html" class="btn btn-outline">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq">
        <div class="container">
            <h2 class="section-title">Frequently Asked Questions</h2>
            <p class="section-subtitle">Find answers to common questions about our services</p>
            
            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <span>How do I sign up for FarmerCare services?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Signing up is simple! Click on any "Get Started" button on our website, fill out the registration form with your basic information, and our team will contact you to complete the verification process within 24 hours.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <span>What payment methods do you accept?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>We accept various payment methods including bKash, Nagad, bank transfers, and credit/debit cards. For marketplace transactions, we offer secure escrow payment services to protect both buyers and sellers.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <span>Are there any hidden fees?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>No, we believe in complete transparency. All fees are clearly stated during the signup process. The only additional charges would be for optional premium services that you explicitly choose to add to your plan.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <span>How quickly can I access financing?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>After submitting a complete application, most farmers receive approval within 3-5 business days. Emergency harvest advance payments can often be processed within 24 hours for qualified applicants.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <span>Do you offer services in rural areas?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Yes! We specifically designed our services to reach farmers across Bangladesh, including remote rural areas. Our mobile platform works even with basic internet connectivity, and we have field agents available in most regions.</p>
                    </div>
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
                <a href="contact.html" class="btn" style="background-color: white; color: var(--primary);">Get Started Today</a>
                <a href="tel:+8801234567890" class="btn btn-outline" style="border-color: white; color: white;">Call Our Experts</a>
            </div>
        </div>
    </section>

</div>
<!-----------=====================------------->
<!----========= End Main Content ============--> 
<!-----------=====================------------->

<!-- Footer -->
<?php require 'footer.php'; ?>

    