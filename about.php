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
        .aboutcont{
            background-color: rgb(195, 13, 13) !important;
            margin-top: 100px;
        }
        .abh1{
            font-size: 3.2rem;
        }
        .abp{
            font-size: 18px;
        }
        .abd{
            gap: 130px;
        }
        .abdd{
            gap: 120px;
        }
        .box1{
            width: 100px;
            height:120px;
        }
        .card{
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);   
        }
        .abtp{
            font-size: 17px;
        }
    </style>
</head>
<body>
    <?php include "nav.php"; ?>
    <div class="aboutcont " >
        <div class="container pt-5 pb-5">
            <div class="d-flex flex-row ">
                <div class="col-6 d-flex flex-column justify-content-center align-items-start">
                    <h1 class="fw-bold text-white abh1 pb-4"><b>About BloodDonor.in</b></h1>
                    <p class="text-white abp">We're on a mission to save lives by connecting blood donors with those who need them most. Every drop counts, every donor matters.</p>   
                    <div class="d-flex flex-row  abd text-warning">
                        <h2>88+</h2>
                        <h2>0+</h2>
                        <h2>66+</h2>

                        <h2>0+</h2>
                    </div>
                    <div class="d-flex flex-row abdd text-white">
                        <span>Donors</span>
                        <span>Live Saved</span>
                        <span>Cities</span>
                        <span>Campaigns</span>
                    </div>
                </div>
                <div class="col-6">
                    <img src="image.png" alt="aboutimg" class="">
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex flex-row container gap-4 mt-5 mb-5">
        <div class="card col-6 p-4 d-flex flex-column justify-content-center align-items-start bg-white">
            <div class="bg-danger box1">

            </div>
            <div>
                <h1 class="fw-bold">Our Mission</h1>
                <p class="fs-5 text-secondary">To create a seamless, technology-driven platform that connects voluntary blood donors with patients in need, ensuring no life is lost due to blood shortage.</p>
            </div>
            <div>
                <h6 class="fw-bold">Save Lives Daily</h6>
                <p class=" text-secondary">Enable immediate blood donor connections during emergencies</p>
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
        <div class="card col-6 p-4 d-flex flex-column justify-content-center align-items-start bg-white">
            <div class="bg-danger box1">

            </div>
            <div>
                <h1 class="fw-bold">Our Vision</h1>
                <p class="fs-5 text-secondary">To eliminate blood shortage in India by 2030 and become the most trusted blood donation platform globally, powered by technology and human compassion.</p>
            </div>
            <div>
                <h6 class="fw-bold">Zero Blood Shortage</h6>
                <p class=" text-secondary">Ensure blood availability in every corner of India</p>
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

    <div class="bg-light pb-5">
        <div class="d-flex flex-column justify-content-center align-items-center pt-5">
            <h1 class="fs-1">Our Story</h1>
            <p class="text-secondary fs-5 pt-2">How a personal tragedy sparked a movement to save lives</p>
        </div>

        <div class="card container col-9 d-flex flex-column p-5">
            <i>
                "When my father needed urgent blood during his surgery, I spent precious hours calling friends, posting on social media, and running to blood banks. That's when I realized we needed a better way."
            </i>
            <p class="blockquote-footer mt-3 mb-3"> Dr. Rajesh Kumar, Founder</p>
            <p class="abtp">BloodDonor.in was born from a simple yet powerful idea: what if we could instantly connect people who need blood with those willing to donate? In 2020, during the peak of the pandemic, we witnessed unprecedented blood shortages across India.</p>
            <p class="abtp">Our founder, Dr. Rajesh Kumar, a former blood bank director, experienced firsthand the challenges families face during medical emergencies. He partnered with medical professionals, technology experts, and passionate volunteers to create a platform that would eliminate these barriers.</p>
            <p class="abtp">Today, BloodDonor.in has grown into India's largest blood donor network, connecting over 88 donors with those in need. Every success story, every life saved, fuels our commitment to expand our reach and impact.</p>
            <div class="d-flex justify-content-between align-items-center bg-danger px-3 py-3 rounded-3">
                <div>
                    <h3>Join Our Mission</h3>
                    <p>Be part of the movement that's saving lives every day.</p>
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

    <div class="container">
        <div class="d-flex flex-column justify-content-center align-items-center pt-5 gap-2">
            <h1 class="fw-bold">Our Journey</h1>
            <p class="fs-5 text-secondary">Key milestones in our mission to save lives</p>
        </div>
    </div>
    <?php include "footer.php"; ?>
</body>
</html>

