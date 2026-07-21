<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/b2ca557543.js" crossorigin="anonymous"></script>

<title>Get in Touch</title>

<style>
.get-touch{
    background: linear-gradient(180deg,#b71c1c,#d61f1f);
    padding:70px 0;
}

.help-box{
    background:#fdbb18;
    border-radius:8px;
    padding:35px;
    margin-top:35px;
}

.headset{
    font-size:150px;
    color:#f8d7da;
}
.abt-icons{
    border: none;
    border-radius: 50%;
    background: #cea2a2;
    width: 30px;
    height: 30px;
}
  .card{
            border:none;
            border-radius:18px;
            box-shadow:0 .15rem 1rem rgba(0,0,0,.08);
        }

        .section-title{
            font-size:45px;
            font-weight:700;
            color:#2d4363;
        }

        .card-header{
            border-radius:18px 18px 0 0 !important;
            font-size:30px;
            font-weight:700;
        }

        textarea{
            resize:none;
        }

        .social-btn{
            width:72px;
            height:72px;
            border-radius:50%;
            display:flex;
            align-items:center;
            justify-content:center;
            font-size:30px;
            text-decoration:none;
        }
    </style>

</style>

</head>
<body>
    <?php include "nav.php"; ?>

<section class="get-touch text-white mt-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="display-4 fw-bold mb-4">Get in Touch</h1>
                <p class="fs-3 mb-0">Need help? Have questions? We're here to support you 24/7. Reach out to us anytime - every inquiry matters.</p>
                <div class="help-box text-center">
                    <p class="text-white fs-4 mb-0"> For urgent blood requirements, call our emergency helpline:</p>
                </div>
            </div>
            <div class="col-lg-4 text-center">
                <i class="bi bi-headset headset"></i>
            </div>
        </div>
    </div>
</section>
<div class="container-fluid border-top border-5 border-danger py-5">
    <div class="container">
        <div class="row g-4">

            <div class="col-lg-3 col-md-6">
                <div class="card border-0 shadow-sm rounded-4 text-center h-100 p-4">
                    <div class="rounded-circle bg-success bg-opacity-10 d-flex justify-content-center align-items-center mx-auto mb-4"
                        style="width:100px;height:100px;">
                        <i class="bi bi-telephone-fill text-success fs-1"></i>
                    </div>
                    <h2 class="fw-bold mb-4">Phone Support</h2>
                    <p class="text-secondary fs-4">Speak directly with our support team</p>
                    <h3 class="fw-bold my-4">+91 12345 67890</h3>
                    <p class="text-secondary fs-4">24/7 Available</p>
                    <div class="mt-3">
                        <a href="#" class="btn btn-success btn-lg px-4 py-3 fw-semibold ">
                            <i class="bi bi-telephone me-2"></i>Call Now
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card border-0 shadow-sm rounded-4 text-center h-100 p-4">
                    <div class="rounded-circle bg-danger d-flex justify-content-center align-items-center mx-auto mb-4 
                        style="width:100px;height:100px;">
                        <i class="bi bi-envelope-fill text-white fs-1"></i>
                    </div>
                    <h2 class="fw-bold mb-4">Email Support</h2>
                    <p class="text-secondary fs-4"> Send us detailed queries</p>
                    <h3 class="fw-bold my-4"> support@blooddonor.in</h3>
                    <p class="text-secondary fs-4"> Response in 4 hours</p>
                    <div class="mt-3">
                        <a href="#" class="btn btn-danger btn-lg px-4 py-3 fw-semibold mb-6">
                            <i class="bi bi-envelope me-2"></i>Send Email
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="card border-0 shadow-sm rounded-4 text-center h-100 p-4">
                    <div class="rounded-circle bg-info bg-opacity-10 d-flex justify-content-center align-items-center mx-auto mb-4"
                        style="width:100px;height:100px;">
                        <i class="bi bi-chat-dots-fill text-info fs-1"></i>
                    </div>
                    <h2 class="fw-bold mb-4">Live Chat</h2>
                    <p class="text-secondary fs-4">Get instant help from our team </p>
                    <h3 class="fw-bold my-4"> Available Now</h3>
                    <p class="text-secondary fs-4">  Average response: </p>
                    <div class="mt-3">
                        <a href="#" class="btn btn-info btn-lg px-4 py-3 fw-semibold text-dark " >
                            <i class="bi bi-chat me-2"></i>Start Chat
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card border-0 shadow-sm rounded-4 text-center h-100 p-4">

                    <div class="rounded-circle bg-success bg-opacity-10 d-flex justify-content-center align-items-center mx-auto mb-4"
                        style="width:100px;height:100px;">
                        <i class="bi bi-whatsapp text-success fs-1"></i>
                    </div>
                    <h2 class="fw-bold mb-4">WhatsApp</h2>
                    <p class="text-secondary fs-4"> Quick support via WhatsApp</p>
                    <h3 class="fw-bold my-4">
                        +91 98765 43210 </h3>
                    <p class="text-secondary fs-4"> Business hours</p>
                    <div class="mt-3">
                        <a href="#" class="btn btn-success btn-lg px-4 py-3 fw-semibold">
                            <i class="bi bi-whatsapp me-2"></i>Message
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<section class="py-5">

     <div class="container-fluid">
        <div class="row g-4">
            <div class="col-lg-8">
             <div class="card p-5">
                <h1 class="section-title">
                <i class="bi bi-send text-danger"></i>Send Us a Message </h1>
                <p class="fs-3 text-secondary mb-5">Fill out the form below and we'll get back to you promptly</p>

<form>
    <div class="row">
         <div class="col-md-6 mb-4">
             <label class="form-label fs-4">Full Name <span class="text-danger">*</span></label>
            <input type="text"class="form-control form-control-lg">
        </div>
    <div class="col-md-6 mb-4">
        <label class="form-label fs-4">Email Address <span class="text-danger">*</span> </label>
         <input type="email"class="form-control form-control-lg">
    </div>

    <div class="col-md-6 mb-4">
        <label class="form-label fs-4">Phone Number </label>
        <input type="text" class="form-control form-control-lg">
    <div class="text-secondary mt-2">
        10-digit phone number (optional)
    </div>
</div>

<div class="col-md-6 mb-4">
    <label class="form-label fs-4">Message Type</label>
    <select class="form-select form-select-lg">
        <option>General Inquiry</option>
        <option>Blood Donation</option>
        <option>Emergency</option>
        <option>Complaint</option>
        <option>Suggestion</option>
    </select>
</div>

</div>
<div class="mb-4">
    <label class="form-label fs-4">  Subject <span class="text-danger">*</span> </label>
    <input type="text" class="form-control form-control-lg" placeholder="Brief description of your inquiry">
</div>
<div class="mb-3">
    <label class="form-label fs-4"> Message <span class="text-danger">*</span></label>
    <textarea class="form-control form-control-lg" rows="8" placeholder="Please provide detailed information about your inquiry..."></textarea>
</div>

<div class="text-secondary fs-5 mb-5">
    0 / 1000 characters
</div>

    <button class="btn btn-danger btn-lg w-100 py-3 fs-3 fw-bold"><i class="bi bi-send me-2"></i> Send Message</button>

</form>

</div>

</div>

<div class="col-lg-4">

    <div class="card mb-4">
        <div class="card-header bg-danger text-white">
            <i class="bi bi-buildings"></i>
            Office Information
        </div>

        <div class="card-body">
            <h4 class="text-danger mb-3">
                Headquarters
            </h4>

            <p class="fs-4 mb-0">BloodDonor.in</p>
            <p class="fs-4 mb-0">123 Health Care Complex</p>
            <p class="fs-4 mb-0">Medical District, New Delhi</p>
            <p class="fs-4">India - 110001</p>

            <h4 class="text-danger mt-4 mb-3">Business Hours</h4>

            <p class="fs-4"><strong>Monday - Friday:</strong> 9:00 AM - 6:00 PM</p>

            <p class="fs-4"> <strong>Saturday:</strong> 10:00 AM - 4:00 PM</p>

            <p class="fs-4"><strong>Sunday:</strong> Emergency support only</p>

            <h4 class="text-danger mt-4 mb-3">Emergency Support</h4>

            <p class="fs-4">24/7 available for blood emergencies</p>
        </div>
    </div>

    <div class="card mb-4">
        <div class="card-header bg-info text-white">
            <i class="bi bi-question-circle"></i>
            Quick Help
        </div>

        <div class="card-body">
            <button class="btn btn-outline-info w-100 py-3 mb-3 fs-4">
                <i class="bi bi-question-square"></i>
                FAQ
            </button>

            <button class="btn btn-outline-info w-100 py-3 mb-3 fs-4">
                <i class="bi bi-life-preserver"></i>
                Help Center
            </button>

            <button class="btn btn-outline-info w-100 py-3 mb-3 fs-4">
                <i class="bi bi-book"></i>
                Donation Guide
            </button>

            <button class="btn btn-outline-danger w-100 py-3 fs-4">
                <i class="bi bi-exclamation-triangle"></i>
                Emergency Help
            </button>
        </div>
    </div>

    <div class="card">
        <div class="card-header bg-success text-white">
            <i class="bi bi-share"></i>
            Follow Us
        </div>

        <div class="card-body text-center">
            <p class="text-secondary fs-4">
                Stay connected with us on social media
            </p>

            <div class="d-flex justify-content-around mt-4">
                <a href="#" class="social-btn border border-primary text-primary">
                    <i class="bi bi-facebook"></i>
                </a>

                <a href="#" class="social-btn border border-info text-info">
                    <i class="bi bi-twitter"></i>
                </a>

                <a href="#" class="social-btn border border-danger text-danger">
                    <i class="bi bi-instagram"></i>
                </a>

                <a href="#" class="social-btn border border-primary text-primary">
                    <i class="bi bi-linkedin"></i>
                </a>
            </div>
        </div>
    </div>

</div>

</div>

</div>

</section>

<section class="py-5 bg-white">
    <div class="container">

        <div class="text-center mb-5">
            <h1 class="fw-bold display-4 text-dark">
                Find Our Office
            </h1>

            <p class="fs-3 text-secondary">
                Visit us at our headquarters in New Delhi
            </p>
        </div>

        <div class="card shadow-sm border-0 rounded-4">
            <div class="card-body bg-light text-center py-5" style="min-height: 650px;">

                <div class="mb-4">
                    <i class="bi bi-geo-alt-fill text-danger display-1"></i>
                </div>

                <h2 class="mb-4">Interactive Map</h2>

                <p class="fs-4 text-secondary mb-4">To enable map, add Google Maps API key in contact.php </p>

                <a href="#" class="btn btn-danger btn-lg px-5 py-3 fw-bold rounded-3">
                <i class="bi bi-map me-2"></i>View on Google Maps </a>

                <div class="mt-5 pt-5">
                    <p class="fs-3 text-secondary">  Our location on the map</p>

                    <a href="#" class="btn btn-danger btn-lg px-5 py-3 fw-bold rounded-3">
                         <i class="bi bi-map me-2"></i> Open in Google Maps </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "footer.php"; ?>

</body>

</html>