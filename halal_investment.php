<?php
$current_page = basename($_SERVER['PHP_SELF']);   // Get the current page name
$page_title = 'AgroFarm - Halal Investment Opportunities';  // Set the page title
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
                <h1>Halal Investment in Agriculture</h1>
                <p>Ethical, Sharia-compliant investment opportunities that support sustainable farming while generating competitive returns.</p>
            </div>
        </div>
    </section>

    <!-- Investment Intro Section -->
    <section class="investment-intro">
        <div class="container">
            <div>
                <h2>Sharia-Compliant Agricultural Investments</h2>
                <p>AgroFarm offers Halal investment opportunities that align with Islamic financial principles while supporting Bangladesh's agricultural development. Our investment models are structured to avoid Riba (interest) and Gharar (excessive uncertainty), focusing instead on profit-sharing and asset-backed investments.</p>
                
                <ul>
                    <li><i class="fas fa-check-circle"></i> <strong>100% Halal</strong> - Fully compliant with Islamic finance principles</li>
                    <li><i class="fas fa-check-circle"></i> <strong>Asset-backed</strong> - Investments tied to tangible agricultural assets</li>
                    <li><i class="fas fa-check-circle"></i> <strong>Profit-sharing</strong> - Returns based on actual farm profits (Mudarabah)</li>
                    <li><i class="fas fa-check-circle"></i> <strong>Ethical farming</strong> - Supporting sustainable and organic practices</li>
                </ul>
                
                <a href="#investment-form" class="btn">Invest Now</a>
            </div>
            <img src="https://images.unsplash.com/photo-1605000797499-95a51c5269ae?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Halal Agriculture Investment">
        </div>
    </section>

    <!-- Investment Models Section -->
    <section class="investment-models">
        <div class="container">
            <h2 class="section-title">Our Investment Models</h2>
            <p class="section-subtitle">Choose the Halal investment option that best suits your financial goals</p>
            
            <div class="models-grid">
                <div class="model-card">
                    <div class="model-icon">
                        <i class="fas fa-handshake"></i>
                    </div>
                    <h3>Mudarabah (Profit Sharing)</h3>
                    <p>Invest as a capital provider (Rab-ul-Maal) while we manage the farming operations (Mudarib). Profits are shared according to pre-agreed ratios.</p>
                    <a href="#investment-form" class="btn btn-outline">Invest Now</a>
                </div>
                
                <div class="model-card">
                    <div class="model-icon">
                        <i class="fas fa-tractor"></i>
                    </div>
                    <h3>Musharakah (Joint Venture)</h3>
                    <p>Joint ownership of agricultural assets where both parties contribute capital and share profits/losses proportionally.</p>
                    <a href="#investment-form" class="btn btn-outline">Invest Now</a>
                </div>
                
                <div class="model-card">
                    <div class="model-icon">
                        <i class="fas fa-tree"></i>
                    </div>
                    <h3>Sukuk (Asset-Backed)</h3>
                    <p>Invest in Sharia-compliant agricultural bonds tied to specific farm assets and commodities.</p>
                    <a href="#investment-form" class="btn btn-outline">Invest Now</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section -->
    <section class="benefits">
        <div class="container">
            <h2 class="section-title">Benefits of Investing With Us</h2>
            <p class="section-subtitle">Why AgroFarm is the preferred choice for Halal agricultural investments</p>
            
            <div class="benefits-grid">
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-star"></i>
                    </div>
                    <div class="benefit-content">
                        <h3>Sharia Compliance</h3>
                        <p>All investments are structured according to Islamic finance principles, certified by our Sharia Advisory Board.</p>
                    </div>
                </div>
                
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <div class="benefit-content">
                        <h3>Competitive Returns</h3>
                        <p>Average annual returns of 12-18% from our diversified agricultural portfolio.</p>
                    </div>
                </div>
                
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <div class="benefit-content">
                        <h3>Risk Management</h3>
                        <p>Diversified across multiple crops and regions to minimize risk exposure.</p>
                    </div>
                </div>
                
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <i class="fas fa-leaf"></i>
                    </div>
                    <div class="benefit-content">
                        <h3>Sustainable Impact</h3>
                        <p>Your investment supports sustainable farming practices and rural development in Bangladesh.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Investment Form Section -->
    <section class="investment-form" id="investment-form">
        <div class="container">
            <div class="form-container">
                <h2 class="form-title">Investment Registration</h2>
                <form id="halalInvestmentForm">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="firstName">First Name *</label>
                            <input type="text" id="firstName" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="lastName">Last Name *</label>
                            <input type="text" id="lastName" class="form-control" required>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="email">Email Address *</label>
                        <input type="email" id="email" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="phone">Phone Number *</label>
                        <input type="tel" id="phone" class="form-control" required>
                    </div>
                    
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" id="address" class="form-control">
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" id="city" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="country">Country</label>
                            <input type="text" id="country" class="form-control" value="Bangladesh" readonly>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="investmentModel">Investment Model *</label>
                        <select id="investmentModel" class="form-control" required>
                            <option value="">Select an option</option>
                            <option value="mudarabah">Mudarabah (Profit Sharing)</option>
                            <option value="musharakah">Musharakah (Joint Venture)</option>
                            <option value="sukuk">Sukuk (Asset-Backed)</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="investmentAmount">Investment Amount (BDT) *</label>
                        <input type="number" id="investmentAmount" class="form-control" min="50000" required>
                        <small>Minimum investment: 50,000 BDT</small>
                    </div>
                    
                    <div class="form-group">
                        <label for="investmentDuration">Investment Duration *</label>
                        <select id="investmentDuration" class="form-control" required>
                            <option value="">Select duration</option>
                            <option value="1">1 Year</option>
                            <option value="2">2 Years</option>
                            <option value="3">3 Years</option>
                            <option value="5">5 Years</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label>
                            <input type="checkbox" id="shariaAgreement" required> 
                            I confirm that I understand and agree that this investment complies with Sharia principles *
                        </label>
                    </div>
                    
                    <div class="form-group">
                        <label>
                            <input type="checkbox" id="termsAgreement" required> 
                            I agree to the <a href="#" style="color: var(--primary);">Terms & Conditions</a> and <a href="#" style="color: var(--primary);">Investment Agreement</a> *
                        </label>
                    </div>
                    
                    <div class="form-footer">
                        <button type="submit" class="btn">Submit Application</button>
                        <p class="form-note">Our investment advisor will contact you within 24 hours to complete the process</p>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="faq">
        <div class="container">
            <h2 class="section-title">Frequently Asked Questions</h2>
            <p class="section-subtitle">Find answers to common questions about Halal agricultural investments</p>
            
            <div class="faq-container">
                <div class="faq-item">
                    <div class="faq-question">
                        <span>What makes these investments Halal?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Our investments avoid interest (Riba), excessive uncertainty (Gharar), and gambling (Maysir). They're structured as profit-sharing agreements (Mudarabah) or joint ventures (Musharakah) with tangible agricultural assets. All models are certified by our Sharia Advisory Board composed of Islamic finance scholars.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <span>How are profits calculated and distributed?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>For Mudarabah investments, profits are calculated after deducting all operational costs and shared according to pre-agreed ratios (typically 70% investor / 30% manager). For Musharakah, profits/losses are shared according to capital contribution ratios. Detailed accounting is provided quarterly.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <span>What are the risks involved?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>As with any agricultural investment, risks include crop failure, price fluctuations, and natural disasters. We mitigate these through diversification across crops/regions, insurance coverage, and modern farming techniques. Importantly, in Mudarabah models, investors bear financial losses while managers bear the loss of their labor.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <span>Can I withdraw my investment early?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Early withdrawal is possible but subject to terms in your agreement. For Musharakah, you may sell your share to another investor. For Mudarabah, early termination may require finding a replacement investor. We maintain a secondary market to facilitate such transactions in a Sharia-compliant manner.</p>
                    </div>
                </div>
                
                <div class="faq-item">
                    <div class="faq-question">
                        <span>How are Zakat obligations handled?</span>
                        <i class="fas fa-chevron-down"></i>
                    </div>
                    <div class="faq-answer">
                        <p>Investors are responsible for calculating and paying Zakat on their investment. We provide annual statements detailing your investment value to assist with Zakat calculations. For convenience, we partner with certified Zakat collection organizations you can direct your payments to.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
<!-----------=====================------------->
<!----========= End Main Content ============--> 
<!-----------=====================------------->
<script>
    document.getElementById('halalInvestmentForm').addEventListener('submit', async function(e) {
        e.preventDefault(); // Prevent default form submission

        const form = e.target;
        const submitBtn = form.querySelector('button[type="submit"]');
        
        // Add a spinner inside the button (optional, you can change as needed)
        let originalBtnText = submitBtn.innerHTML;
        submitBtn.disabled = true;
        submitBtn.innerHTML = 'Submitting <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>';

        // Build FormData
        const formData = new FormData();
        formData.append('first_name', document.getElementById('firstName').value.trim());
        formData.append('last_name', document.getElementById('lastName').value.trim());
        formData.append('email_address', document.getElementById('email').value.trim());
        formData.append('phone', document.getElementById('phone').value.trim());
        formData.append('address', document.getElementById('address').value.trim());
        formData.append('city', document.getElementById('city').value.trim());
        formData.append('country', document.getElementById('country').value.trim());
        formData.append('investment_model', document.getElementById('investmentModel').value);
        formData.append('investment_amount', document.getElementById('investmentAmount').value);
        formData.append('investment_duration', document.getElementById('investmentDuration').value);
        formData.append('sharia_agreement', document.getElementById('shariaAgreement').checked ? 1 : '');
        formData.append('terms_agreement', document.getElementById('termsAgreement').checked ? 1 : '');

        try {
            const response = await fetch('api/halal-investment.php?action=submit-investment', {
                method: 'POST',
                headers: {
                    'API-Key': 'AGRPRJCT-API-KEY-744334674564HFHSSQYB71'
                },
                body: formData
            });

            const result = await response.json();

            if (result.success) {
                Swal.fire({
                    icon: 'success',
                    title: 'Application Submitted!',
                    text: 'Your Halal investment application has been received.',
                    confirmButtonColor: '#3085d6'
                }).then(() => {
                    form.reset();
                });
            } else {
                Swal.fire({
                    icon: 'error',
                    title: 'Submission Failed',
                    text: result.message || 'Please try again.',
                    confirmButtonColor: '#d33'
                });
            }
        } catch (error) {
            console.error('Submission error:', error);
            Swal.fire({
                icon: 'error',
                title: 'Network Error',
                text: 'An error occurred while submitting your application.',
                confirmButtonColor: '#d33'
            });
        } finally {
            submitBtn.disabled = false;
            submitBtn.innerHTML = originalBtnText;
        }
    });
</script>

<!-- Footer -->
<?php require 'footer.php'; ?>