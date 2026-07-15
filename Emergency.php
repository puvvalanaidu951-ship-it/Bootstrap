<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/ebdd1363cb.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>Emergency Page</title>
</head>
<body>
         <?php include "nav.php"; ?>

    <div class="container-fluid bg-dark text-white py-3 px-3 ">
        <div class="d-flex justify-content-evenly align-items-center">
            <span>
                <i class="fa-solid fa-triangle-exclamation fs-5 "></i>
                <b class="ps-3">24/7 Emergency Blood Support</b> 
                - Immediate response for critical blood needs
            </span>
            <button class="btn btn-warning text-dark px-4 py-2 fw-bold">call:+91 1234567890</button>
        </div>
    </div>
        <div class="container-fluid bg-danger text-white px-5 py-5">
            <div class="row align-items-center">
                    <div class="col-md-8">
                    <h1 class="display-2 fw-bold">Emergency Blood Request</h1>
                    <p>Submit urgent blood requirements for immediate attention. Our emergency network will respond within minutes.</p>
                        <div class="row text-center bg-light text-dark rounded py-5 mt-5">
                            <div class="col fw-bold fs-4">0%</div>
                            <div class="col fw-bold fs-4">0</div>
                            <div class="col fw-bold fs-4">15</div>
                            
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <i class="fa-solid fa-heart-pulse display-1 "></i>
                        
                    </div>
            </div>
        </div>
      
       <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card shadow-lg form-card">
                    <div class="card-header bg-danger text-white text-center py-4">
                        <h2 class="mb-2">Emergency Blood Request Form</h2>
                        <p class="mb-0">fill out the form below to submit your emergency blood request.</p>
                    </div>
                    <div class="card-body p-4">
                       <div class="alert alert-warning">
                        <i class="fa-solid fa-triangle-exclamation"></i>
                        <strong>For life-threatening Emergencies:</strong>call our 24/7 helpline at
                        <a href="#">+91 12345 67890</a>
                        for immediate phone assistance while while filling this form.
                        </div>
                        <h5 class="section-title">
                            <i class="fa-regular fa-user"></i>
                            Patient Information
                        </h5>
                        <div class="row">
                            <div class="col-md-8 mb-3">
                                <label class="form-label">Patient Name</label>
                                <input type="text" class="form-control">

                            </div>
                            <div class="col-md-4 mb-3">
                                <label class="form-label">Blood Group
                                <span class="required">*</span>
                                </label>
                                <select class="form-select">
                                    <option>A+</option>
                                    <option>A-</option>
                                    <option>B+</option>
                                    <option>B-</option>
                                    <option>AB+</option>
                                    <option>AB-</option>
                                    <option>O+</option>
                                    <option>O-</option>
                                </select>

                            </div>

                        </div>
                        <h5 class="section-title">
                            <i class="fa-solid fa-droplet"></i>
                            Blood Requirement

                        </h5>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Units Needed
                                <span class="required">*</span>
                                </label>
                                <select class="form-select">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>


                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">
                                When Needed
                                <span class="required">*</span>

                            </label>
                            <select class="form-select">
                                <option>Today</option>
                                <option>Tomorrow</option>
                                <option>This Week</option>
                                <option>This Month</option>
                            </select>

                        </div>

                    </div>
                    <h5 class="section-title">
                        <i class="fa-solid fa-droplet"></i>
                        Hospital Information
                    </h5>
                    <div class="mb-3">
                    <label class="form-label">Hospital Name
                       <span class="required">*</span>
                    </label>
                    <input type="text" class="form-control">

                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">
                                City
                                <span class="required">*</span>
                            </label>
                            <input type="text" class="form-control">


                    </div>
                    <div class="col-md-6 mb-3">
                            <label class="form-label">
                                State
                                <span class="required">*</span>
                            </label>
                            <input type="text" class="form-control">

                        </div>
                    </div>
                    <h5 class="section-title">
                        <i class="fa-solid fa-phone"></i>
                        Contact Information
                    </h5>
                   <div class="row">
                    
                    <div class="col-md-6 mb-3">
                        <label class="form-label">
                            Contact Person
                            <span class="required">*</span>
                        </label>
                        <input type="text" class="form-control">

                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">
                            Contact Number
                            <span class="required">*</span>
                        </label>
                        <input type="text" class="form-control">

                    </div>

                   </div>
                   <h5 class="section-title">
                    <i class="fa-solid fa-circle-info"></i>
                    Additional Information
                </h5>
                <div class="mb-3">
                    <label class="form-label">
                        Additional Details
                    </label>
                    <textarea class="form-control" rows="4" placeholder="Please provide any additional information..."></textarea>
                </div>
                <div class="border border-warning rounded p-3 bg-light">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="termsCheck">
                        <label class="form-check-label">
                            <strong>Emergency Declaration:</strong>
                            I hereby declare that the information provided above is accurate and that this request is for a genuine emergency blood requirement. I understand that providing false information may result in legal consequences.
                            I also acknowledge that this form is for emergency blood requests only and that I will follow up with the hospital or blood bank directly for further assistance.
                        </label>
                    </div>

                </div>
                <div class="d-grid mt-4">
                    <button class="btn btn-danger btn-lg fw-bold" type="submit">
                        <i class="fa-solid fa-paper-plane"></i>Submit Emergency Request</button>


                </div>
            </div>

        </div>
       </div>
       <div class="container-fluid px-5 py-3 mt-5">
         <div class="d-flex flex-column justify-content-center align-items-center py-5">
                <h1>24/7 Emergency Support</h1>
                <p>Multiple ways to get immediate help during blood emergencies</p>

            </div>
    <div class="container">
        <div class="row g-4">

            <div class="col-lg-3 col-md-6">
                <div class="card border shadow-sm rounded-4 text-center h-80 p-1 bg-white">
                    <div class="rounded-circle bg-success bg-opacity-10 d-flex justify-content-center align-items-center mx-auto mb-4"
                        style="width:100px;height:100px;">
                        <i class="bi bi-telephone-fill text-success fs-3"></i>
                    </div>

                    <h4 class="fw-bold mb-4">Emergency Hotline</h4>

                <p class="text-secondary fs-5">Immediate phone assistance</p>

                    <h6 class="fw-bold">+91 12345 67890</h6>

                    <h6 class="text-secondary fs-4">24/7 Available</h6>

                    <div class="mt-3 mb-3">
                        <a href="#" class="btn btn-success btn-lg px-2 py-2 fw-semibold">
                            <i class="bi bi-telephone me-2"></i>Call Now
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card border shadow-sm rounded-4 text-center h-70 p-1 bg-white">

                    <div class="rounded-circle bg-success bg-opacity-10 d-flex justify-content-center align-items-center mx-auto mb-4"
                        style="width:100px;height:100px;">
                        <i class="bi bi-whatsapp text-success fs-1"></i>
                    </div>

                    <h4 class="fw-bold mb-4">WhatsApp Support</h4>

                    <p class="text-secondary fs-5">
                        Quick messaging support
                    </p>

                    <h6 class="fw-bold">+91 98765 43210</h6>

                    <p class="text-secondary fs-4">Instant Response</p>

                    <div class="mt-1 mb-3">
                        <a href="#" class="btn btn-success btn-lg px-2 py-2 fw-semibold">
                            <i class="bi bi-whatsapp me-2"></i>Message
                        </a>
                    </div>

                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card border shadow-sm rounded-4 text-center h-70 p-1 bg-white">

                    <div class="rounded-circle bg-danger d-flex justify-content-center align-items-center mx-auto mb-4"
                        style="width:100px;height:100px;">
                        <i class="bi bi-envelope-fill text-white fs-1"></i>
                    </div>

                    <h4 class="fw-bold mb-4">Emergency Email</h4>

                    <p class="text-secondary fs-5">
                        For detailed requests
                    </p>

                    <h6 class="fw-bold">
                        emergency@blooddonor.in
                    </h6>

                    <p class="text-secondary fs-4">
                        Priority Response
                    </p>

                    <div class="mt-1 mb-3">
                        <a href="#" class="btn btn-danger btn-lg px-2 py-2 fw-semibold">
                            <i class="bi bi-envelope me-2"></i>Send Email
                        </a>
                    </div>

                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card border-0 shadow-sm rounded-4 text-center h-10 p-1 bg-white">

                    <div class="rounded-circle bg-info bg-opacity-10 d-flex justify-content-center align-items-center mx-auto mb-4"
                        style="width:100px;height:100px;">
                        <i class="bi bi-chat-dots-fill text-info fs-1"></i>
                    </div>

                    <h4 class="fw-bold mb-4">Live Chat</h4>

                    <p class="text-secondary fs-5">
                        Real-time assistance
                    </p>

                    <h6 class="fw-bold">
                        Available Now
                    </h6>

                    <p class="text-secondary fs-4">
                        Average response: 1 min
                    </p>

                    <div class="mt-1 mb-3">
                        <a href="#" class="btn btn-info btn-lg px-2 py-2 fw-semibold text-dark">
                            <i class="bi bi-chat me-2"></i>Start Chat
                        </a>
                    </div>

                </div>
            </div>

            

        </div>
    </div>
</div>

       <div class="container bg-white">
            <div class="d-flex flex-column justify-content-center align-items-center py-5">
                <h1>Emergency Blood Request Tips</h1>
                <p>Important guidelines for emergency situations</p>

            </div>
            <div class="d-flex  justify-content-center align-items-center gap-5 ">
                <div class="card col-6 rounded-2">
                    <h3 class="card-title bg-success text-white"><i class="fa-regular fa-circle-check text-white fs-5"></i>Do</h3>
                    <div class="px-4 py-4">
                    <p><i class="fa-solid fa-check text-success"></i><b>Act Quickly:</b> Submit request as soon as blood need is confirmed</p>
                    <p><i class="fa-solid fa-check text-success"></i><b>Verify Blood Group:</b>Double-check patient's blood group with medical records.</p>
                    <p><i class="fa-solid fa-check text-success"></i><b>Stay Available:</b>Keep your phone accessible for donor calls</p>
                    <p><i class="fa-solid fa-check text-success"></i><b>Coordinate at Hospital:</b> Arrange for donors to visit the hospital directly</p>
                    <p><i class="fa-solid fa-check text-success"></i><b>Update Status:</b> Inform us when blood requirement is fulfilled</p>
                    </div>
                </div>
                <div class="card col-6">
                    <h3 class="card-title bg-danger text-white"><i class="fa-regular fa-circle-xmark text-white fs-5"></i>Don'ts</h3>
                        <div class="px-4 py-4">
                            <p><i class="fa-solid fa-xmark text-danger"></i><b>Don't Submit False Requests:</b> Only genuine emergencies should be reported</p>
                            <p><i class="fa-solid fa-xmark text-danger"></i><b>Don't Ignore Donor Calls:</b> Respond to all donor inquiries promptly</p>
                            <p><i class="fa-solid fa-xmark text-danger"></i><b>Don't Accept Unsafe Donations:</b> Only accept blood from authorized facilities</p>
                            <p><i class="fa-solid fa-xmark text-danger"></i><b>Don't Forget to Thank:</b> Appreciate donors who respond to your request</p>
                            <p><i class="fa-solid fa-xmark text-danger"></i><b>Don't Panic:</b> Stay calm and follow medical professional guidance</p>
                        </div>
                </div>
            </div>

       </div>
        <?php include "footer.php"; ?>
</body>
</html>