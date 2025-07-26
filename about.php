<?php
$current_page = basename($_SERVER['PHP_SELF']); // Get the current page name
$page_title = 'About Us | FarmerCare - Empowering Farmers';  // Set the page title
?>
<!-- Header -->
<?php require 'header.php'; ?>

<!-----------=====================------------->
<!--========== Start Main Content ===========-->
<!-----------=====================------------->
<div class="main-area">

    <!-- Hero Section -->
    <section class="about-hero">
        <div class="container">
            <h1>Our Agricultural Journey</h1>
            <p>Transforming traditional farming through innovation, technology, and sustainable practices since 2018</p>
            <div class="breadcrumb">
                <a href="index.html">Home</a>
                <span>/</span>
                <a href="about.html">About Us</a>
            </div>
        </div>
    </section>

    <!-- About Content -->
    <section class="about-content">
        <div class="container">
            <div class="about-flex">
                <div class="about-text">
                    <h2>Empowering Bangladesh's Agricultural Future</h2>
                    <p>FarmerCare is a pioneering agricultural technology platform dedicated to revolutionizing farming practices across Bangladesh. Founded in 2018 by agricultural experts and tech innovators, we bridge critical gaps between farmers, markets, and essential resources through cutting-edge solutions.</p>
                    <p>Our comprehensive ecosystem combines deep agricultural knowledge with advanced technology to address the real challenges faced by farmers daily. We're committed to sustainable farming practices that increase productivity while protecting our environment for future generations.</p>
                    <p>From humble beginnings helping 50 local farmers sell their produce, we've grown into a national platform serving over 10,000 farmers across 25 districts, facilitating millions in agricultural transactions annually.</p>
                    <div class="cta-buttons">
                        <a href="services.html" class="btn">Our Services</a>
                        <a href="contact.html" class="btn btn-outline">Contact Us</a>
                    </div>
                </div>
                <div class="about-image">
                    <img src="images/tean in field.jpg" alt="FarmerCare Team in Field">
                </div>
            </div>
        </div>
    </section>

    <!-- Mission/Vision -->
    <section class="mission-vision">
        <div class="container">
            <h2 class="section-title">Our Core Philosophy</h2>
            <p class="section-subtitle">Guiding principles that drive our agricultural revolution</p>
            
            <div class="mv-grid">
                <div class="mv-card">
                    <div class="mv-icon">
                        <i class="fas fa-bullseye"></i>
                    </div>
                    <h3>Our Mission</h3>
                    <p>To empower smallholder farmers across Bangladesh with innovative technology, actionable knowledge, and direct market access. We aim to triple farmer incomes while promoting sustainable agricultural practices that benefit both producers and consumers.</p>
                </div>
                
                <div class="mv-card">
                    <div class="mv-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h3>Our Vision</h3>
                    <p>To establish Bangladesh's most trusted agricultural platform that transforms subsistence farming into a modern, profitable, and climate-resilient sector through digital innovation and farmer-centric services by 2030.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Values Section -->
    <section class="values-section">
        <div class="container">
            <h2 class="section-title">Our Values</h2>
            <p class="section-subtitle">The principles that guide every decision we make</p>
            
            <div class="values-grid">
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-hands-helping"></i>
                    </div>
                    <h3>Farmer First</h3>
                    <p>Every solution we develop begins with understanding farmers' real needs and challenges. Their success is our ultimate measure of achievement.</p>
                </div>
                
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h3>Innovation</h3>
                    <p>We constantly challenge conventional approaches to develop smarter, more effective agricultural solutions for Bangladesh's unique context.</p>
                </div>
                
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-seedling"></i>
                    </div>
                    <h3>Sustainability</h3>
                    <p>Our solutions promote environmental stewardship, ensuring productive farms today don't compromise tomorrow's agricultural potential.</p>
                </div>
                
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h3>Collaboration</h3>
                    <p>We believe in partnerships - with farmers, agronomists, researchers, and policymakers - to create systemic change in agriculture.</p>
                </div>
                
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>Impact</h3>
                    <p>We measure success not by profits alone, but by the tangible improvements in livelihoods we help farmers achieve.</p>
                </div>
                
                <div class="value-card">
                    <div class="value-icon">
                        <i class="fas fa-hand-holding-heart"></i>
                    </div>
                    <h3>Integrity</h3>
                    <p>We maintain the highest ethical standards, ensuring transparency and fairness in all our farmer relationships and business practices.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section">
        <div class="container">
            <h2 class="section-title">Leadership Team</h2>
            <p class="section-subtitle">The passionate experts driving FarmerCare's mission forward</p>
            
            <div class="team-grid">
                <div class="team-member">
                    <div class="member-photo">
                        <img src="https://images.unsplash.com/photo-1560250097-0b93528c311a?ixlib=rb-1.2.1&auto=format&fit=crop&w=334&q=80" alt="Rahim Khan">
                    </div>
                    <h3>Rahim Khan</h3>
                    <p>Founder & CEO</p>
                    <p style="color: var(--text-light); font-size: 0.9rem; margin-top: -10px;">Agricultural Economist</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
                
                <div class="team-member">
                    <div class="member-photo">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-1.2.1&auto=format&fit=crop&w=334&q=80" alt="Ayesha Rahman">
                    </div>
                    <h3>Ayesha Rahman</h3>
                    <p>Chief Technology Officer</p>
                    <p style="color: var(--text-light); font-size: 0.9rem; margin-top: -10px;">Agri-Tech Specialist</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
                
                <div class="team-member">
                    <div class="member-photo">
                        <img src="https://images.unsplash.com/photo-1542190891-2093d38760f2?ixlib=rb-1.2.1&auto=format&fit=crop&w=334&q=80" alt="Jamal Hossain">
                    </div>
                    <h3>Jamal Hossain</h3>
                    <p>Head of Agriculture</p>
                    <p style="color: var(--text-light); font-size: 0.9rem; margin-top: -10px;">Agronomy Expert</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
                
                <div class="team-member">
                    <div class="member-photo">
                        <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&auto=format&fit=crop&w=334&q=80" alt="Fatima Akter">
                    </div>
                    <h3>Fatima Akter</h3>
                    <p>Head of Operations</p>
                    <p style="color: var(--text-light); font-size: 0.9rem; margin-top: -10px;">Supply Chain Specialist</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <h2 class="section-title">By The Numbers</h2>
            <p class="section-subtitle" style="color: rgba(255,255,255,0.8);">Measuring our impact across Bangladesh's agricultural sector</p>
            
            <div class="stats-grid">
                <div class="stat-item">
                    <h3>10,000+</h3>
                    <p>Farmers Empowered</p>
                </div>
                <div class="stat-item">
                    <h3>$5M+</h3>
                    <p>In Farmer Transactions</p>
                </div>
                <div class="stat-item">
                    <h3>25+</h3>
                    <p>Districts Served</p>
                </div>
                <div class="stat-item">
                    <h3>95%</h3>
                    <p>Farmer Satisfaction Rate</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2>Ready to Transform Your Farming Business?</h2>
                <p>Join thousands of Bangladeshi farmers who are increasing their yields, income, and sustainability with FarmerCare's innovative solutions.</p>
                <div class="cta-buttons">
                    <a href="contact.html" class="btn">Get Started Today</a>
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