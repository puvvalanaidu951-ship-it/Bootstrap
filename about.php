<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/b2ca557543.js" crossorigin="anonymous"></script>

    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .aboutcont {
            background: linear-gradient(135deg, #c91f1f 0%, #b91c1c 100%) !important;
            margin-top: 100px;
        }
        .abh1 {
            font-size: 3.2rem;
        }
        .abp {
            font-size: 18px;
        }
        .abd {
            gap: 130px;
        }
        .abdd {
            gap: 120px;
        }
        .box1 {
            width: 100px;
            height: 120px;
        }
        .card {
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .abtp {
            font-size: 17px;
        }
        .timeline {
            position: relative;
            padding: 20px 0;
        }
        .timeline::after {
            content: '';
            position: absolute;
            width: 2px;
            background-color: #dc2626;
            top: 0;
            bottom: 0;
            left: 50%;
            margin-left: -1px;
        }
        .timeline-item {
            padding: 10px 40px;
            position: relative;
            background-color: inherit;
            width: 50%;
        }
        .timeline-left {
            left: 0;
        }
        .timeline-right {
            left: 50%;
        }
        .timeline-left::after,
        .timeline-right::after {
            content: '';
            position: absolute;
            width: 25px;
            height: 25px;
            background-color: white;
            border: 4px solid #dc2626;
            top: 15px;
            border-radius: 50%;
            z-index: 1;
        }
        .timeline-left::after {
            right: -17px;
        }
        .timeline-right::after {
            left: -16px;
        }
        .timeline-content {
            padding: 20px 30px;
            background-color: white;
            position: relative;
            border-radius: 12px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .timeline-left .timeline-content::after {
            content: " ";
            height: 0;
            position: absolute;
            top: 22px;
            width: 0;
            z-index: 1;
            right: -15px;
            border: medium solid white;
            border-width: 10px 0 10px 10px;
            border-color: transparent transparent transparent white;
        }
        .timeline-right .timeline-content::after {
            content: " ";
            height: 0;
            position: absolute;
            top: 22px;
            width: 0;
            z-index: 1;
            left: -15px;
            border: medium solid white;
            border-width: 10px 10px 10px 0;
            border-color: transparent white transparent transparent;
        }
        .timeline-year {
            font-size: 1.5rem;
            font-weight: 700;
            color: #dc2626;
            margin-bottom: 0.5rem;
        }
        .timeline-title {
            color: #1f2937;
            margin-bottom: 0.5rem;
        }
        .timeline-description {
            color: #6b7280;
            margin-bottom: 0;
        }
        .ppp {
            font-size: 14px;
            text-align: center;
        }
        .pichh {
            font-size: 16px;
        }
        .car {
            transition: all 0.5s;
        }
        .car:hover {
            margin-top: -10px;
        }
        a {
            text-decoration: none;
        }
    </style>
</head>
<body>
    <?php include "nav.php"; ?>

    <div class="aboutcont">
        <div class="container pt-5 pb-5">
            <div class="row align-items-center g-4">
                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-start">
                    <h1 class="fw-bold text-white abh1 pb-4"><b>About BloodDonor.in</b></h1>
                    <p class="text-white abp">
                        We're on a mission to save lives by connecting blood donors with those who need them most. Every drop counts, every donor matters.
                    </p>
                    <div class="d-flex flex-wrap abd text-warning">
                        <h2>88+</h2>
                        <h2>0+</h2>
                        <h2>66+</h2>
                        <h2>0+</h2>
                    </div>
                    <div class="d-flex flex-wrap abdd text-white">
                        <span>Donors</span>
                        <span>Live Saved</span>
                        <span>Cities</span>
                        <span>Campaigns</span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bg-white rounded-4 p-4 shadow-sm">
                        <div class="bg-danger text-white rounded-4 p-4">
                            <h3 class="fw-bold">Why We Started</h3>
                            <p class="mb-0">We saw families lose precious time during emergencies and built a platform to make donor access faster, safer and simpler.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5 mb-5">
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="card p-4 d-flex flex-column justify-content-center align-items-start bg-white h-100">
                    <div class="bg-danger box1"></div>
                    <div>
                        <h1 class="fw-bold">Our Mission</h1>
                        <p class="fs-5 text-secondary">
                            To create a seamless, technology-driven platform that connects voluntary blood donors with patients in need, ensuring no life is lost due to blood shortage.
                        </p>
                    </div>
                    <div>
                        <h6 class="fw-bold">Save Lives Daily</h6>
                        <p class="text-secondary">Enable immediate blood donor connections during emergencies</p>
                    </div>
                    <div>
                        <h6 class="fw-bold">Build Community</h6>
                        <p class="text-secondary">Foster a network of compassionate donors across India</p>
                    </div>
                    <div>
                        <h6 class="fw-bold">Ensure Safety</h6>
                        <p class="text-secondary">Maintain highest standards of blood donation safety</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card p-4 d-flex flex-column justify-content-center align-items-start bg-white h-100">
                    <div class="bg-danger box1"></div>
                    <div>
                        <h1 class="fw-bold">Our Vision</h1>
                        <p class="fs-5 text-secondary">
                            To eliminate blood shortage in India by 2030 and become the most trusted blood donation platform globally, powered by technology and human compassion.
                        </p>
                    </div>
                    <div>
                        <h6 class="fw-bold">Zero Blood Shortage</h6>
                        <p class="text-secondary">Ensure blood availability in every corner of India</p>
                    </div>
                    <div>
                        <h6 class="fw-bold">Technology Leadership</h6>
                        <p class="text-secondary">Lead innovation in blood donation technology</p>
                    </div>
                    <div>
                        <h6 class="fw-bold">Global Expansion</h6>
                        <p class="text-secondary">Expand our life-saving mission worldwide</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-light pb-5">
        <div class="d-flex flex-column justify-content-center align-items-center pt-5">
            <h1 class="fs-1">Our Story</h1>
            <p class="text-secondary fs-5 pt-2">How a personal tragedy sparked a movement to save lives</p>
        </div>

        <div class="card container col-lg-9 d-flex flex-column p-5 mt-4">
            <i>
                "When my father needed urgent blood during his surgery, I spent precious hours calling friends, posting on social media, and running to blood banks. That's when I realized we needed a better way."
            </i>
            <p class="blockquote-footer mt-3 mb-3">Dr. Rajesh Kumar, Founder</p>
            <p class="abtp">BloodDonor.in was born from a simple yet powerful idea: what if we could instantly connect people who need blood with those willing to donate? In 2020, during the peak of the pandemic, we witnessed unprecedented blood shortages across India.</p>
            <p class="abtp">Our founder, Dr. Rajesh Kumar, a former blood bank director, experienced firsthand the challenges families face during medical emergencies. He partnered with medical professionals, technology experts, and passionate volunteers to create a platform that would eliminate these barriers.</p>
            <p class="abtp">Today, BloodDonor.in has grown into India's largest blood donor network, connecting over 88 donors with those in need. Every success story, every life saved, fuels our commitment to expand our reach and impact.</p>

            <div class="d-flex flex-wrap justify-content-between align-items-center bg-danger px-3 py-3 rounded-3">
                <div>
                    <h3>Join Our Mission</h3>
                    <p class="mb-0">Be part of the movement that's saving lives every day.</p>
                </div>
                <div>
                    <button class="btn bg-warning fw-bold">
                        <i class="bi bi-heart"></i>
                        Become a Donor
                    </button>
                </div>
            </div>
        </div>
    </div>

    <section class="timeline-section py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h1 class="section-title fw-bold">Our Journey</h1>
                <p class="section-subtitle text-secondary">Key milestones in our mission to save lives</p>
            </div>

            <div class="timeline">
                <div class="timeline-item timeline-left">
                    <div class="timeline-content">
                        <div class="timeline-year">2020</div>
                        <h5 class="timeline-title">Platform Launch</h5>
                        <p class="timeline-description">BloodDonor.in launched with mission to connect blood donors across India.</p>
                    </div>
                </div>
                <div class="timeline-item timeline-right">
                    <div class="timeline-content">
                        <div class="timeline-year">2021</div>
                        <h5 class="timeline-title">10,000 Donors</h5>
                        <p class="timeline-description">Reached first milestone of 10,000 registered blood donors.</p>
                    </div>
                </div>
                <div class="timeline-item timeline-left">
                    <div class="timeline-content">
                        <div class="timeline-year">2022</div>
                        <h5 class="timeline-title">100 Cities</h5>
                        <p class="timeline-description">Expanded to 100+ cities with active donor communities.</p>
                    </div>
                </div>
                <div class="timeline-item timeline-right">
                    <div class="timeline-content">
                        <div class="timeline-year">2023</div>
                        <h5 class="timeline-title">Mobile App Launch</h5>
                        <p class="timeline-description">Launched mobile apps for iOS and Android platforms.</p>
                    </div>
                </div>
                <div class="timeline-item timeline-left">
                    <div class="timeline-content">
                        <div class="timeline-year">2024</div>
                        <h5 class="timeline-title">25,000+ Lives Saved</h5>
                        <p class="timeline-description">Proud milestone of helping save over 25,000 lives.</p>
                    </div>
                </div>
                <div class="timeline-item timeline-right">
                    <div class="timeline-content">
                        <div class="timeline-year">2025</div>
                        <h5 class="timeline-title">AI Integration</h5>
                        <p class="timeline-description">Integrated AI for smart donor-recipient matching.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container pb-5">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <h1>Our Values</h1>
            <p class="text-secondary">The principles that guide everything we do</p>
        </div>

        <div class="row g-4 PB-5 mt-4">
            <div class="col-lg-4 col-md-6">
                <div class="car d-flex flex-column justify-content-between align-items-center px-2 gap-2 mb-4 p-4 h-100 border rounded-3 bg-white">
                    <div class="bg-danger p-4 rounded-circle mt-2"><i class="bi bi-heart-fill text-white fs-3"></i></div>
                    <h6 class="text-success">Compassion</h6>
                    <p class="px-2 ppp text-secondary">We put human life and dignity first in every action.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="car d-flex flex-column justify-content-between align-items-center px-2 gap-2 mb-4 p-4 h-100 border rounded-3 bg-white">
                    <div class="bg-danger p-4 rounded-circle mt-2"><i class="bi bi-shield-check text-white fs-3"></i></div>
                    <h6 class="text-success">Safety</h6>
                    <p class="px-2 ppp text-secondary">We follow strict standards to protect donors and recipients.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="car d-flex flex-column justify-content-between align-items-center px-2 gap-2 mb-4 p-4 h-100 border rounded-3 bg-white">
                    <div class="bg-danger p-4 rounded-circle mt-2"><i class="bi bi-people-fill text-white fs-3"></i></div>
                    <h6 class="text-success">Community</h6>
                    <p class="px-2 ppp text-secondary">We believe strong communities can solve urgent healthcare challenges.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-light mt-5">
        <div class="d-flex flex-column justify-content-center align-items-center pt-5">
            <h1>Meet Our Team</h1>
            <p class="text-secondary pichh">Passionate professionals dedicated to saving lives</p>
        </div>

        <div class="container mt-5 mb-5">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="car d-flex flex-column justify-content-between align-items-center px-2 gap-2 mb-4 p-4 h-100 bg-white rounded-3">
                        <div class="bg-danger p-4 rounded-circle mt-3"><i class="bi bi-person-fill text-white fs-3"></i></div>
                        <h5>Dr. Rajesh Kumar</h5>
                        <h6 class="text-success">Founder & CEO</h6>
                        <p class="px-2 ppp text-secondary">Former blood bank director with 15+ years experience in transfusion medicine.</p>
                        <div class="d-flex flex-row gap-4">
                            <a href="#" class="btn btn-outline-primary px-4 py-2"><i class="bi bi-linkedin"></i></a>
                            <a href="#" class="btn btn-outline-info px-4 py-2"><i class="bi bi-twitter"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="car d-flex flex-column justify-content-between align-items-center px-2 gap-2 mb-4 p-4 h-100 bg-white rounded-3">
                        <div class="bg-danger p-4 rounded-circle mt-3"><i class="bi bi-person-fill text-white fs-3"></i></div>
                        <h5>Dr. Meera Shah</h5>
                        <h6 class="text-success">Medical Advisor</h6>
                        <p class="px-2 ppp text-secondary">Specialist in transfusion medicine and emergency care.</p>
                        <div class="d-flex flex-row gap-4">
                            <a href="#" class="btn btn-outline-primary px-4 py-2"><i class="bi bi-linkedin"></i></a>
                            <a href="#" class="btn btn-outline-info px-4 py-2"><i class="bi bi-twitter"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="car d-flex flex-column justify-content-between align-items-center px-2 gap-2 mb-4 p-4 h-100 bg-white rounded-3">
                        <div class="bg-danger p-4 rounded-circle mt-3"><i class="bi bi-person-fill text-white fs-3"></i></div>
                        <h5>Arjun Rao</h5>
                        <h6 class="text-success">Product Lead</h6>
                        <p class="px-2 ppp text-secondary">Builds technology that helps donors and patients connect faster.</p>
                        <div class="d-flex flex-row gap-4">
                            <a href="#" class="btn btn-outline-primary px-4 py-2"><i class="bi bi-linkedin"></i></a>
                            <a href="#" class="btn btn-outline-info px-4 py-2"><i class="bi bi-twitter"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="car d-flex flex-column justify-content-between align-items-center px-2 gap-2 mb-4 p-4 h-100 bg-white rounded-3">
                        <div class="bg-danger p-4 rounded-circle mt-3"><i class="bi bi-person-fill text-white fs-3"></i></div>
                        <h5>Neha Verma</h5>
                        <h6 class="text-success">Community Manager</h6>
                        <p class="px-2 ppp text-secondary">Coordinates outreach and volunteer programs nationwide.</p>
                        <div class="d-flex flex-row gap-4">
                            <a href="#" class="btn btn-outline-primary px-4 py-2"><i class="bi bi-linkedin"></i></a>
                            <a href="#" class="btn btn-outline-info px-4 py-2"><i class="bi bi-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-light pb-5">
        <div class="d-flex flex-column justify-content-center align-items-center pt-5">
            <h1>Recognition & Awards</h1>
            <p>Honored to be recognized for our impact</p>
        </div>

        <div class="container mt-5 mb-5">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <a href="#" class="aa">
                        <div class="car card rounded d-flex flex-column align-items-center gap-2 p-4 h-100">
                            <i class="bi bi-award fs-1 text-warning"></i>
                            <h6>Best Healthcare Innovation</h6>
                            <p>Digital India Awards 2024</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="#" class="aa">
                        <div class="car card rounded d-flex flex-column align-items-center gap-2 p-4 h-100">
                            <i class="bi bi-trophy fs-1 text-danger"></i>
                            <h6>Social Impact Leader</h6>
                            <p>Tech for Good Awards 2024</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="#" class="aa">
                        <div class="car card rounded d-flex flex-column align-items-center gap-2 p-4 h-100">
                            <i class="bi bi-gem fs-1 text-secondary"></i>
                            <h6>Excellence in Healthcare</h6>
                            <p>National Health Awards 2023</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <a href="#" class="aa">
                        <div class="car card rounded d-flex flex-column align-items-center gap-2 p-4 h-100">
                            <i class="bi bi-heart-fill fs-1 text-danger"></i>
                            <h6>Humanitarian Impact</h6>
                            <p>Life Saver Awards 2023</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <div class="bg-danger d-flex flex-column justify-content-center align-items-center px-5 py-5 gap-3 rounded-4 text-center">
            <h2 class="text-white">Ready to Save Lives?</h2>
            <p class="text-white">Join our community of heroes and help us create a world where no life is lost due to blood shortage.</p>
            <div class="d-flex flex-wrap justify-content-center gap-4">
                <button class="btn bg-warning p-3 rounded-5">
                    <i class="bi bi-heart me-2"></i>
                    Become a Donor
                </button>
                <button class="btn btn-outline-warning p-3 rounded-5 text-white">
                    <i class="bi bi-plus-circle me-2"></i>
                    Request Blood
                </button>
                <button class="btn bg-white p-3 rounded-5">
                    <i class="bi bi-megaphone me-2"></i>
                    Join Campaigns
                </button>
            </div>
            <p class="text-white mb-0">Questions? We're here to help!</p>
            <div class="d-flex flex-wrap justify-content-center gap-2">
                <a href="#" style="color: white;">
                    <i class="bi bi-envelope me-1"></i>
                    info@blooddonor.in
                </a>
                <a href="#" style="color: white;">
                    <i class="bi bi-telephone me-1"></i>
                    +91 85236 52465
                </a>
            </div>
        </div>
    </div>

    <?php include "footer.php"; ?>
</body>
</html>
