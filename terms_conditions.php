
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Terms of Service | User Agreement | BloodDonor.in</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/b2ca557543.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include "nav.php"; ?>
<style>
        .bg-gradient-danger {
    background: linear-gradient(135deg, #dc2626 0%, #991b1b 100%) !important;
}
    .terms-header {
        border-bottom: 3px solid #dc2626;
        padding-bottom: 2rem;
    }

    .section-title {
        color: #dc2626;
        font-weight: 700;
        border-left: 4px solid #dc2626;
        padding-left: 1rem;
    }

    .service-item {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        height: 100%;
    }

    .service-item:hover {
        transform: translateY(-3px);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .requirements-list {
        list-style: none;
        padding-left: 0;
    }

    .requirements-list li {
        padding: 0.5rem 0;
        border-bottom: 1px solid #e5e7eb;
        position: relative;
        padding-left: 2rem;
    }

    .requirements-list li::before {
        content: '✓';
        color: #16a34a;
        font-weight: bold;
        position: absolute;
        left: 0;
        top: 0.5rem;
    }

    .prohibited-category {
        transition: transform 0.3s ease;
    }

    .prohibited-category:hover {
        transform: translateY(-2px);
    }

    .accordion-button:not(.collapsed) {
        background-color: #fef2f2;
        border-color: #fecaca;
        color: #dc2626;
    }

    .acceptance-section {
        background: linear-gradient(135deg, #fef2f2, #f0f9ff);
        border: 2px solid #dc2626;
    }

    @media (max-width: 768px) {
        .display-5 {
            font-size: 2rem;
        }
        
        .section-title {
            font-size: 1.5rem;
        }
    }
</style>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="terms-header text-center mb-5">
                <h1 class="display-5 fw-bold text-primary mb-3">Terms of Service</h1>
                <p class="lead text-muted mb-2">
                    Please read these terms carefully before using BloodDonor.in. 
                    By using our platform, you agree to these terms.
                </p>
                <p class="text-muted">
                    <i class="bi bi-calendar"></i> Last updated: January 1, 2025                </p>
            </div>

            <div class="summary-card card border-0 shadow-sm mb-5">
                <div class="card-header bg-success text-white">
                    <h5 class="mb-0">
                        <i class="bi bi-lightbulb me-2"></i>Quick Summary
                    </h5>
                </div>
                <div class="card-body">
                    <div class="row g-4">
                        <div class="col-md-4">
                            <div class="summary-item text-center">
                                <i class="bi bi-shield-check text-success fs-2 mb-2"></i>
                                <h6>Your Safety First</h6>
                                <p class="small text-muted mb-0">We prioritize user safety and data protection</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="summary-item text-center">
                                <i class="bi bi-people text-primary fs-2 mb-2"></i>
                                <h6>Community Guidelines</h6>
                                <p class="small text-muted mb-0">Respectful interaction and accurate information</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="summary-item text-center">
                                <i class="bi bi-heart text-danger fs-2 mb-2"></i>
                                <h6>Life-Saving Mission</h6>
                                <p class="small text-muted mb-0">Committed to connecting donors with recipients</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="terms-content">
                <section class="terms-section mb-5">
                    <h2 class="section-title text-danger mb-4">1. Acceptance of Terms</h2>
                    <p class="lead">
                        By accessing or using BloodDonor.in, you agree to be bound by these Terms of Service 
                        and all applicable laws and regulations.
                    </p>
                    <div class="important-note bg-warning bg-opacity-10 border-warning border p-3 rounded">
                        <h6 class="text-warning mb-2">
                            <i class="bi bi-exclamation-triangle"></i> Important
                        </h6>
                        <p class="mb-0">
                            If you do not agree with any part of these terms, you may not use our service. 
                            These terms apply to all users, including donors, recipients, and visitors.
                        </p>
                    </div>
                </section>

                <section class="terms-section mb-5">
                    <h2 class="section-title text-danger mb-4">2. Description of Service</h2>
                    
                    <div class="service-description">
                        <p>BloodDonor.in is a digital platform that:</p>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="service-item p-3 border rounded">
                                    <h6 class="text-primary">
                                        <i class="bi bi-link-45deg me-2"></i>Connects Users
                                    </h6>
                                    <p class="small mb-0">Facilitates connections between blood donors and recipients</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="service-item p-3 border rounded">
                                    <h6 class="text-primary">
                                        <i class="bi bi-info-circle me-2"></i>Provides Information
                                    </h6>
                                    <p class="small mb-0">Offers blood donation education and resources</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="service-item p-3 border rounded">
                                    <h6 class="text-primary">
                                        <i class="bi bi-calendar-event me-2"></i>Organizes Campaigns
                                    </h6>
                                    <p class="small mb-0">Facilitates blood donation drives and events</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="service-item p-3 border rounded">
                                    <h6 class="text-primary">
                                        <i class="bi bi-bell me-2"></i>Sends Notifications
                                    </h6>
                                    <p class="small mb-0">Alerts users about relevant blood requests</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="disclaimer mt-4 p-3 bg-light rounded">
                        <h6 class="text-muted">Disclaimer</h6>
                        <p class="small mb-0">
                            BloodDonor.in is a technology platform only. We do not collect, store, or transfuse blood. 
                            All medical activities must be conducted through authorized healthcare facilities.
                        </p>
                    </div>
                </section>

                <section class="terms-section mb-5">
                    <h2 class="section-title text-danger mb-4">3. User Eligibility</h2>
                    
                    <h5 class="text-primary mb-3">General Requirements</h5>
                    <ul class="requirements-list">
                        <li>Must be at least 18 years old</li>
                        <li>Must provide accurate and truthful information</li>
                        <li>Must have legal capacity to enter into agreements</li>
                        <li>Must comply with all applicable laws and regulations</li>
                    </ul>
                    
                    <h5 class="text-primary mb-3 mt-4">Additional Requirements for Donors</h5>
                    <ul class="requirements-list">
                        <li>Must meet standard blood donation eligibility criteria</li>
                        <li>Must be in good health and able to donate safely</li>
                        <li>Must provide accurate medical and contact information</li>
                        <li>Must update availability status regularly</li>
                    </ul>
                </section>

                <section class="terms-section mb-5">
                    <h2 class="section-title text-danger mb-4">4. User Responsibilities</h2>
                    
                    <div class="accordion" id="responsibilitiesAccordion">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#resp1">
                                    Account Security
                                </button>
                            </h2>
                            <div id="resp1" class="accordion-collapse collapse show" data-bs-parent="#responsibilitiesAccordion">
                                <div class="accordion-body">
                                    <ul>
                                        <li>Keep your login credentials secure</li>
                                        <li>Report suspicious activity immediately</li>
                                        <li>Log out from shared or public devices</li>
                                        <li>Use strong, unique passwords</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#resp2">
                                    Accurate Information
                                </button>
                            </h2>
                            <div id="resp2" class="accordion-collapse collapse" data-bs-parent="#responsibilitiesAccordion">
                                <div class="accordion-body">
                                    <ul>
                                        <li>Provide truthful and current information</li>
                                        <li>Update profile regularly</li>
                                        <li>Correct any inaccurate information promptly</li>
                                        <li>Verify blood group and medical details</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#resp3">
                                    Respectful Conduct
                                </button>
                            </h2>
                            <div id="resp3" class="accordion-collapse collapse" data-bs-parent="#responsibilitiesAccordion">
                                <div class="accordion-body">
                                    <ul>
                                        <li>Treat all users with respect and dignity</li>
                                        <li>Communicate professionally and courteously</li>
                                        <li>Respect privacy and confidentiality</li>
                                        <li>Report inappropriate behavior</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#resp4">
                                    Safe Practices
                                </button>
                            </h2>
                            <div id="resp4" class="accordion-collapse collapse" data-bs-parent="#responsibilitiesAccordion">
                                <div class="accordion-body">
                                    <ul>
                                        <li>Only donate at authorized medical facilities</li>
                                        <li>Follow all medical screening procedures</li>
                                        <li>Verify recipient legitimacy</li>
                                        <li>Report any safety concerns</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="terms-section mb-5">
                    <h2 class="section-title text-danger mb-4">5. Prohibited Activities</h2>
                    
                    <div class="alert alert-danger">
                        <h6 class="alert-heading">
                            <i class="bi bi-x-circle"></i> The following activities are strictly prohibited:
                        </h6>
                    </div>
                    
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="prohibited-category p-3 border border-danger rounded">
                                <h6 class="text-danger">
                                    <i class="bi bi-shield-x me-2"></i>Fraudulent Activities
                                </h6>
                                <ul class="small">
                                    <li>Creating fake profiles or accounts</li>
                                    <li>Providing false medical information</li>
                                    <li>Impersonating others</li>
                                    <li>Commercial blood trading</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="prohibited-category p-3 border border-danger rounded">
                                <h6 class="text-danger">
                                    <i class="bi bi-chat-square-x me-2"></i>Inappropriate Behavior
                                </h6>
                                <ul class="small">
                                    <li>Harassment or bullying</li>
                                    <li>Spam or unwanted messages</li>
                                    <li>Offensive or inappropriate content</li>
                                    <li>Privacy violations</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="prohibited-category p-3 border border-danger rounded">
                                <h6 class="text-danger">
                                    <i class="bi bi-gear-wide-connected me-2"></i>Technical Violations
                                </h6>
                                <ul class="small">
                                    <li>Hacking or unauthorized access</li>
                                    <li>Interfering with platform operation</li>
                                    <li>Automated data collection</li>
                                    <li>Reverse engineering</li>
                                </ul>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="prohibited-category p-3 border border-danger rounded">
                                <h6 class="text-danger">
                                    <i class="bi bi-exclamation-diamond me-2"></i>Unsafe Practices
                                </h6>
                                <ul class="small">
                                    <li>Non-medical blood collection</li>
                                    <li>Ignoring medical screening</li>
                                    <li>Unsafe meeting locations</li>
                                    <li>Coercing blood donation</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="terms-section mb-5">
                    <h2 class="section-title text-danger mb-4">6. Limitation of Liability</h2>
                    <div class="liability-notice p-4 bg-light rounded">
                        <p>
                            BloodDonor.in provides a platform service only. We are not responsible for:
                        </p>
                        <ul>
                            <li>Medical outcomes or complications</li>
                            <li>Actions of users outside our platform</li>
                            <li>Accuracy of user-provided information</li>
                            <li>Third-party services or content</li>
                        </ul>
                        <p class="mb-0">
                            <strong>Users participate at their own risk and should exercise due diligence.</strong>
                        </p>
                    </div>
                </section>

                <section class="terms-section mb-5">
                    <h2 class="section-title text-danger mb-4">7. Privacy and Data Protection</h2>
                    <p>
                        Your privacy is important to us. Please review our 
                        <a href="/privacy.php" class="text-decoration-none">Privacy Policy</a> 
                        to understand how we collect, use, and protect your information.
                    </p>
                </section>

                <section class="terms-section mb-5">
                    <h2 class="section-title text-danger mb-4">8. Modifications to Terms</h2>
                    <p>
                        We may update these terms periodically. We will notify users of significant changes 
                        via email or platform notifications. Continued use constitutes acceptance of updated terms.
                    </p>
                </section>

                <section class="terms-section mb-5">
                    <h2 class="section-title text-danger mb-4">9. Contact Information</h2>
                    <div class="contact-info bg-primary bg-opacity-10 rounded-3 p-4">
                        <p>For questions about these terms:</p>
                        <div class="row">
                            <div class="col-md-6">
                                <p><strong>Email:</strong> <a href="mailto:legal@blooddonor.in">legal@blooddonor.in</a></p>
                                <p><strong>Phone:</strong> <a href="tel:+911234567890">+91 12345 67890</a></p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Address:</strong><br>
                                BloodDonor.in Legal Department<br>
                                123 Health Care Complex<br>
                                New Delhi, India 110001</p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>

            <div class="acceptance-section text-center mt-5 p-4 border rounded">
                <h5 class="mb-3">Agreement Acknowledgment</h5>
                <p class="text-muted mb-4">
                    By using BloodDonor.in, you acknowledge that you have read, understood, 
                    and agree to be bound by these Terms of Service.
                </p>
                                    <a href="register.php" class="btn btn-primary btn-lg">
                        <i class="bi bi-person-plus"></i> Register and Accept Terms
                    </a>
                            </div>
        </div>
    </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="/assets/js/main.js"></script>
<?php include "footer.php"; ?>
</body>
</html>




