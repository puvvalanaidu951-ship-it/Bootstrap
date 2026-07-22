
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request Blood | BloodDonor.in</title>
                
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/b2ca557543.js" crossorigin="anonymous"></script>
</head>
<body>


<div class="navbar-spacer"></div>

<style>

.bg-gradient-danger {
    background: linear-gradient(135deg, #dc2626 0%, #991b1b 100%) !important;
}

</style>
 <?php include "nav.php"; ?>

<section class="request-hero py-5 bg-gradient-danger">
    <div class="container">
        <div class="text-center text-white mb-4">
            <h1 class="display-6 fw-bold mb-3">Request Blood</h1>
            <p class="lead">Help us connect you with life-saving donors</p>
        </div>
        
      
        <div class="alert alert-warning alert-dismissible fade show mx-auto" style="max-width: 600px;">
            <div class="d-flex align-items-center">
                <i class="bi bi-exclamation-triangle-fill fs-4 me-3"></i>
                <div>
                    <strong>Emergency?</strong> For critical situations, please call our 24/7 helpline: 
                    <a href="tel:+911234567890" class="alert-link fw-bold">+91 12345 67890</a>
                </div>
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    </div>
</section>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
   
            <div class="card border-0 shadow-lg">
                <div class="card-header bg-white border-0 py-4">
                    <h4 class="card-title mb-0">
                        <i class="bi bi-clipboard-pulse text-danger me-2"></i>
                        Blood Request Form
                    </h4>
                    <p class="text-muted mb-0">Fill in the details to submit your blood request</p>
                </div>
                
                <div class="card-body p-4">
                                        
                                        
                    <form method="POST" class="needs-validation" novalidate id="requestForm">
                        <div class="mb-4">
                            <label class="form-label fw-bold">Request Type</label>
                            <div class="row g-3">
                                <div class="col-md-4">
                                    <div class="form-check card-check">
                                        <input class="form-check-input" type="radio" name="request_type" id="emergency" value="emergency" checked>
                                        <label class="form-check-label card-check-label" for="emergency">
                                            <div class="text-center p-3">
                                                <i class="bi bi-exclamation-triangle-fill text-danger fs-2 mb-2"></i>
                                                <h6>Emergency</h6>
                                                <small class="text-muted">Immediate need</small>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check card-check">
                                        <input class="form-check-input" type="radio" name="request_type" id="planned" value="planned">
                                        <label class="form-check-label card-check-label" for="planned">
                                            <div class="text-center p-3">
                                                <i class="bi bi-calendar-event text-warning fs-2 mb-2"></i>
                                                <h6>Planned Surgery</h6>
                                                <small class="text-muted">Scheduled procedure</small>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-check card-check">
                                        <input class="form-check-input" type="radio" name="request_type" id="regular" value="regular">
                                        <label class="form-check-label card-check-label" for="regular">
                                            <div class="text-center p-3">
                                                <i class="bi bi-arrow-repeat text-info fs-2 mb-2"></i>
                                                <h6>Regular Need</h6>
                                                <small class="text-muted">Ongoing treatment</small>
                                            </div>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="section-header mb-4">
                            <h5 class="section-title text-danger mb-3">
                                <i class="bi bi-person-plus me-2"></i>Patient Information
                            </h5>
                        </div>
                        
                        <div class="row g-3 mb-4">
                            <div class="col-md-8">
                                <label for="patient_name" class="form-label required">Patient Name</label>
                                <input type="text" class="form-control form-control-lg" id="patient_name" name="patient_name" required>
                                <div class="invalid-feedback">Please provide the patient's name.</div>
                            </div>
                            
                            <div class="col-md-4">
                                <label for="patient_age" class="form-label required">Age</label>
                                <input type="number" class="form-control form-control-lg" id="patient_age" name="patient_age" 
                                       min="1" max="120" required>
                                <div class="invalid-feedback">Please provide a valid age.</div>
                            </div>
                        </div>
                        
                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <label for="patient_gender" class="form-label required">Gender</label>
                                <select class="form-select form-select-lg" id="patient_gender" name="patient_gender" required>
                                    <option value="">Select Gender</option>
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                    <option value="other">Other</option>
                                </select>
                                <div class="invalid-feedback">Please select gender.</div>
                            </div>
                            
                            <div class="col-md-6">
                                <label for="medical_condition" class="form-label">Medical Condition</label>
                                <input type="text" class="form-control form-control-lg" id="medical_condition" name="medical_condition" 
                                       placeholder="e.g., Surgery, Accident, Thalassemia">
                            </div>
                        </div>
                        
                        <div class="section-header mb-4">
                            <h5 class="section-title text-danger mb-3">
                                <i class="bi bi-droplet me-2"></i>Blood Requirements
                            </h5>
                        </div>
                        
                        <div class="row g-3 mb-4">
                            <div class="col-md-4">
                                <label for="blood_group" class="form-label required">Blood Group</label>
                                <select class="form-select form-select-lg" id="blood_group" name="blood_group" required>
                                    <option value="">Select Blood Group</option>
                                    <option value="A+">A+</option>
                                    <option value="A-">A-</option>
                                    <option value="B+">B+</option>
                                    <option value="B-">B-</option>
                                    <option value="AB+">AB+</option>
                                    <option value="AB-">AB-</option>
                                    <option value="O+">O+</option>
                                    <option value="O-">O-</option>
                                </select>
                                <div class="invalid-feedback">Please select blood group.</div>
                            </div>
                            
                            <div class="col-md-4">
                                <label for="units_needed" class="form-label required">Units Needed</label>
                                <select class="form-select form-select-lg" id="units_needed" name="units_needed" required>
                                    <option value="">Units</option>
                                                                            <option value="1">1 Unit</option>
                                                                            <option value="2">2 Units</option>
                                                                            <option value="3">3 Units</option>
                                                                            <option value="4">4 Units</option>
                                                                            <option value="5">5 Units</option>
                                                                            <option value="6">6 Units</option>
                                                                            <option value="7">7 Units</option>
                                                                            <option value="8">8 Units</option>
                                                                            <option value="9">9 Units</option>
                                                                            <option value="10">10 Units</option>
                                                                    </select>
                                <div class="invalid-feedback">Please select units needed.</div>
                            </div>
                            
                            <div class="col-md-4">
                                <label for="urgency" class="form-label required">Urgency Level</label>
                                <select class="form-select form-select-lg" id="urgency" name="urgency" required>
                                    <option value="low">Low</option>
                                    <option value="medium" selected>Medium</option>
                                    <option value="high">High</option>
                                    <option value="critical">Critical</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <label for="required_date" class="form-label required">Required Date</label>
                            <input type="date" class="form-control form-control-lg" id="required_date" name="required_date" 
                                   min="2026-07-21" required>
                            <div class="invalid-feedback">Please select when blood is needed.</div>
                        </div>
                        
                        <div class="section-header mb-4">
                            <h5 class="section-title text-danger mb-3">
                                <i class="bi bi-hospital me-2"></i>Hospital Information
                            </h5>
                        </div>
                        
                        <div class="mb-3">
                            <label for="hospital_name" class="form-label required">Hospital Name</label>
                            <input type="text" class="form-control form-control-lg" id="hospital_name" name="hospital_name" required>
                            <div class="invalid-feedback">Please provide hospital name.</div>
                        </div>
                        
                        <div class="mb-4">
                            <label for="hospital_address" class="form-label">Hospital Address</label>
                            <textarea class="form-control" id="hospital_address" name="hospital_address" rows="2" 
                                      placeholder="Complete hospital address"></textarea>
                        </div>
                        
                        <div class="row g-3 mb-4">
                            <div class="col-md-4">
                                <label for="city" class="form-label required">City</label>
                                <input type="text" class="form-control form-control-lg" id="city" name="city" 
                                       value="kwarhti" required>
                                <div class="invalid-feedback">Please provide city.</div>
                            </div>
                            
                            <div class="col-md-4">
                                <label for="state" class="form-label required">State</label>
                                <input type="text" class="form-control form-control-lg" id="state" name="state" 
                                       value="Kerala" required>
                                <div class="invalid-feedback">Please provide state.</div>
                            </div>
                            
                            <div class="col-md-4">
                                <label for="pincode" class="form-label">Pincode</label>
                                <input type="text" class="form-control form-control-lg" id="pincode" name="pincode" 
                                       pattern="[0-9]{6}" placeholder="6-digit pincode">
                            </div>
                        </div>
                        
                        <div class="section-header mb-4">
                            <h5 class="section-title text-danger mb-3">
                                <i class="bi bi-person-badge me-2"></i>Doctor Information (Optional)
                            </h5>
                        </div>
                        
                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <label for="doctor_name" class="form-label">Doctor Name</label>
                                <input type="text" class="form-control" id="doctor_name" name="doctor_name" 
                                       placeholder="Attending physician name">
                            </div>
                            
                            <div class="col-md-6">
                                <label for="doctor_phone" class="form-label">Doctor Phone</label>
                                <input type="tel" class="form-control" id="doctor_phone" name="doctor_phone" 
                                       pattern="[0-9]{10}" placeholder="Doctor's contact number">
                            </div>
                        </div>
                        
                        <div class="section-header mb-4">
                            <h5 class="section-title text-danger mb-3">
                                <i class="bi bi-telephone me-2"></i>Contact Information
                            </h5>
                        </div>
                        
                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <label for="contact_person" class="form-label required">Contact Person</label>
                                <input type="text" class="form-control form-control-lg" id="contact_person" name="contact_person" 
                                       value="yajnesh" required>
                                <div class="invalid-feedback">Please provide contact person name.</div>
                            </div>
                            
                            <div class="col-md-6">
                                <label for="contact_phone" class="form-label required">Contact Phone</label>
                                <input type="tel" class="form-control form-control-lg" id="contact_phone" name="contact_phone" 
                                       value="8594934857" 
                                       pattern="[0-9]{10}" required>
                                <div class="invalid-feedback">Please provide a valid 10-digit phone number.</div>
                            </div>
                        </div>
                        
                        <div class="mb-4">
                            <label for="notes" class="form-label">Additional Notes</label>
                            <textarea class="form-control" id="notes" name="notes" rows="3" 
                                      placeholder="Any additional information that might help donors..."></textarea>
                        </div>
                        
                        <div class="mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="terms_accept" required>
                                <label class="form-check-label" for="terms_accept">
                                    I confirm that the information provided is accurate and I agree to the 
                                    <a href="/terms" target="_blank">Terms and Conditions</a> and 
                                    <a href="/privacy" target="_blank">Privacy Policy</a>.
                                </label>
                                <div class="invalid-feedback">Please accept the terms and conditions.</div>
                            </div>
                        </div>
                        
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="button" class="btn btn-outline-secondary btn-lg" onclick="window.history.back()">
                                <i class="bi bi-arrow-left"></i> Cancel
                            </button>
                            <button type="submit" class="btn btn-danger btn-lg" id="submitBtn">
                                <i class="bi bi-send"></i> Submit Request
                                <span class="spinner-border spinner-border-sm ms-2 d-none" id="submitSpinner"></span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4 mt-4 mt-lg-0">
            <div class="card border-0 shadow-sm mb-4">
                <div class="card-header bg-primary text-white">
                    <h6 class="mb-0">
                        <i class="bi bi-info-circle me-2"></i>What Happens Next?
                    </h6>
                </div>
                <div class="card-body">
                    <div class="timeline">
                        <div class="timeline-item">
                            <div class="timeline-marker bg-primary"></div>
                            <div class="timeline-content">
                                <h6 class="mb-1">Request Submitted</h6>
                                <p class="small text-muted mb-2">Your request is immediately visible to matching donors</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-marker bg-warning"></div>
                            <div class="timeline-content">
                                <h6 class="mb-1">Donors Notified</h6>
                                <p class="small text-muted mb-2">We notify compatible donors in your area via SMS and email</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-marker bg-success"></div>
                            <div class="timeline-content">
                                <h6 class="mb-1">Donors Respond</h6>
                                <p class="small text-muted mb-2">You'll receive calls/messages from available donors</p>
                            </div>
                        </div>
                        <div class="timeline-item">
                            <div class="timeline-marker bg-info"></div>
                            <div class="timeline-content">
                                <h6 class="mb-1">Coordination</h6>
                                <p class="small text-muted">Coordinate with donors for donation at the hospital</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="card border-0 shadow-sm bg-danger text-white mb-4">
                <div class="card-body text-center">
                    <i class="bi bi-telephone-fill fs-1 mb-3"></i>
                    <h6>Emergency Helpline</h6>
                    <h4 class="mb-3">+91 12345 67890</h4>
                    <p class="small mb-3">24/7 assistance for critical blood requirements</p>
                    <a href="tel:+911234567890" class="btn btn-light btn-sm">
                        <i class="bi bi-telephone"></i> Call Now
                    </a>
                </div>
            </div>
            
        </div>
    </div>
</div>
<?php include "footer.php"; ?>

</body>
</html>

