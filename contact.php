<?php
$current_page = basename($_SERVER['PHP_SELF']); // Get the current page name
$page_title = 'Contact Us | FarmerCare - Modern Agricultural Solutions';  // Set the page title
?>
<!-- Header -->
<?php require 'header.php'; ?>

<!-----------=====================------------->
<!--========== Start Main Content ===========-->
<!-----------=====================------------->
<div class="main-area">

    <!-- Contact Hero -->
    <section class="contact-hero">
        <div class="container">
            <h1>Get In Touch With Us</h1>
            <p>Have questions about our agricultural services? Our team is ready to help you grow your farming business</p>
            
            <ul class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li>Contact</li>
            </ul>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section">
        <div class="container">
            <div class="contact-container">
                <div class="contact-content">
                    <h2 class="section-title">Contact Information</h2>
                    <p class="section-subtitle">We're here to help and answer any questions you might have about our agricultural services</p>
                    
                    <div class="contact-info">
                        <h3>Headquarters</h3>
                        <ul class="contact-details">
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <div>
                                    <strong>Address:</strong> 
                                    <p>123 Agricultural Road, Farmville, Bangladesh</p>
                                </div>
                            </li>
                            <li>
                                <i class="fas fa-phone-alt"></i>
                                <div>
                                    <strong>Phone:</strong> 
                                    <p><a href="tel:+8801234567890">+880 1234 567890</a></p>
                                </div>
                            </li>
                            <li>
                                <i class="fas fa-envelope"></i>
                                <div>
                                    <strong>Email:</strong> 
                                    <p><a href="mailto:info@FarmerCare.com">info@FarmerCare.com</a></p>
                                </div>
                            </li>
                            <li>
                                <i class="fas fa-clock"></i>
                                <div>
                                    <strong>Working Hours:</strong> 
                                    <p>Monday - Friday: 9AM - 6PM</p>
                                    <p>Saturday: 10AM - 4PM</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="contact-info">
                        <h3>Regional Offices</h3>
                        <ul class="contact-details">
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <div>
                                    <strong>Dhaka Office:</strong> 
                                    <p>456 Farm Tower, Motijheel, Dhaka</p>
                                    <p><a href="tel:+880987654321">+880 9876 54321</a></p>
                                </div>
                            </li>
                            <li>
                                <i class="fas fa-map-marker-alt"></i>
                                <div>
                                    <strong>Chittagong Office:</strong> 
                                    <p>789 Agri Plaza, Agrabad, Chittagong</p>
                                    <p><a href="tel:+880987654322">+880 9876 54322</a></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="contact-form">
                    <h3>Send Us a Message</h3>
                    <form id="contactForm">
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" id="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" id="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="tel" id="phone" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <select id="subject" class="form-control" required>
                                <option value="">Select a subject</option>
                                <option value="general">General Inquiry</option>
                                <option value="services">Services Information</option>
                                <option value="partnership">Partnership Opportunity</option>
                                <option value="support">Technical Support</option>
                                <option value="feedback">Feedback/Suggestion</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="message">Your Message</label>
                            <textarea id="message" class="form-control" required></textarea>
                        </div>
                        <div class="form-submit">
                            <button type="submit" class="btn">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Map Section -->
    <section class="map-section">
        <div class="container">
            <h2 class="section-title">Our Location</h2>
            <p class="section-subtitle">Visit our headquarters or regional offices across Bangladesh</p>
            
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.837240932881!2d90.40665931543146!3d23.79086839322472!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c70b72f1b8b1%3A0xfc87a1bc6699ed26!2sDhaka!5e0!3m2!1sen!2sbd!4v1620000000000!5m2!1sen!2sbd" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq-section">
        <div class="container">
            <h2 class="section-title">Frequently Asked Questions</h2>
            <p class="section-subtitle">Find answers to common questions about our agricultural services</p>
            
            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <span>How can I join FarmerCare as a farmer?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            <p>Joining FarmerCare is simple! You can register through our website, mobile app, or by visiting any of our regional offices. Our team will guide you through the registration process and help you get started with our services.</p>
                        </div>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <span>What financial services do you offer to farmers?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            <p>We offer a range of financial services including agricultural loans with competitive interest rates, crop insurance, and investment opportunities. Our financial products are specifically designed to meet the needs of farmers at different scales.</p>
                        </div>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <span>How does your marketplace benefit farmers?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            <p>Our digital marketplace connects farmers directly with buyers, eliminating middlemen and ensuring fair prices. Farmers can list their produce, negotiate prices, and arrange delivery through our platform, often securing better deals than traditional markets.</p>
                        </div>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <span>What training programs do you offer?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            <p>We provide comprehensive training programs covering modern farming techniques, sustainable practices, financial literacy, and technology adoption. Our programs include workshops, field demonstrations, and online courses tailored to different crops and regions.</p>
                        </div>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <span>How can I access your equipment rental service?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <div class="faq-answer-content">
                            <p>Our equipment rental service is available through our mobile app or by contacting our local offices. We maintain a network of modern farming equipment that members can rent at affordable rates, reducing capital expenses for small and medium farmers.</p>
                        </div>
                    </div>
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

    