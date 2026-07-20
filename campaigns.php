<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Donation Campaigns</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/b2ca557543.js" crossorigin="anonymous"></script>


    <style>
        body{
            background:#f5f5f5;
        }

        .hero{
            background:linear-gradient(90deg,#e41d24,#9d1717);
        }

        .hero-icon{
            font-size:140px;
        }

        .stats h2{
            color:#ffc107;
            font-weight:700;
        }

        .filter-box{
            margin-top:-20px;
        }

        .search-btn{
            width:100%;
        }
         .campaign-section{
            min-height:100vh;
            padding:50px 0;
        }

        .empty-state{
            min-height:500px;
        }

        .empty-icon{
            font-size:80px;
            color:#6c757d;
        }

        .campaign-title{
            color:#22395f;
            font-weight:700;
        }

        .campaign-subtitle{
            color:#6c757d;
        }

        .empty-title{
            color:#22395f;
            font-weight:700;
        }

        .btn-view{
            background:#e52323;
            border:none;
            padding:14px 35px;
            font-weight:600;
        }

        .btn-view:hover{
            background:#c71b1b;
        }
    </style>
</head>
<body>
 <?php include "nav.php"; ?>
<section class="hero text-white py-5" style="margin-top:100px;" >
    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-8">

                <h1 class="display-2 fw-bold">
                    Blood Donation Campaigns
                </h1>

                <p class="fs-3 mt-4 mb-5">
                    Join blood donation drives and campaigns in your area.
                    Every donation saves lives and makes a difference in our community.
                </p>

                <div class="row stats text-center text-lg-start">

                    <div class="col-3">
                        <h2>0</h2>
                        <p>Upcoming</p>
                    </div>

                    <div class="col-3">
                        <h2>0</h2>
                        <p>Ongoing</p>
                    </div>

                    <div class="col-3">
                        <h2>0+</h2>
                        <p>Cities</p>
                    </div>

                    <div class="col-3">
                        <h2>0+</h2>
                        <p>Registrations</p>
                    </div>

                </div>

            </div>

            <div class="col-lg-4 text-center">
                <i class="bi bi-megaphone-fill hero-icon"></i>
            </div>

        </div>

    </div>
</section>

<section class="bg-white py-5 border-top">
    <div class="container">

        <div class="row g-3 align-items-end">

            <div class="col-lg-3">
                <label class="form-label fw-semibold">City</label>
                <input type="text" class="form-control form-control-lg" placeholder="Enter city">
            </div>

            <div class="col-lg-2">
                <label class="form-label fw-semibold">State</label>
                <select class="form-select form-select-lg">
                    <option>All States</option>
                </select>
            </div>

            <div class="col-lg-2">
                <label class="form-label fw-semibold">Status</label>
                <select class="form-select form-select-lg">
                    <option>All Campaigns</option>
                </select>
            </div>

            <div class="col-lg-2">
                <label class="form-label fw-semibold">Month</label>
                <select class="form-select form-select-lg">
                    <option>All Months</option>
                </select>
            </div>

            <div class="col-lg-1 d-grid">
                <button class="btn btn-danger btn-lg">
                    <i class="bi bi-search"></i>
                </button>
            </div>

            <div class="col-lg-2 d-grid">
                <button class="btn btn-outline-secondary btn-lg">
                    <i class="bi bi-x-lg"></i> Clear
                </button>
            </div>

        </div>

    </div>
</section>

  

<section class="campaign-section">
    <div class="container">

        <div class="mb-5">
            <h1 class="display-5 campaign-title">
                Blood Donation Campaigns
            </h1>

            <p class="fs-4 campaign-subtitle">
                No campaigns found
            </p>
        </div>

        <div class="row justify-content-center">

            <div class="col-lg-8">

                <div class="empty-state d-flex flex-column justify-content-center align-items-center text-center">

                    <i class="bi bi-calendar-x empty-icon mb-4"></i>

                    <h2 class="empty-title mb-4">
                        No Campaigns Found
                    </h2>

                    <p class="text-secondary fs-5 mb-5">
                        No blood donation campaigns match your search criteria.
                        Try adjusting your filters or check back later.
                    </p>

                    <button class="btn btn-danger btn-lg btn-view">
                        View All Campaigns
                    </button>

                </div>

            </div>

        </div>

    </div>
</section>

 <?php include "footer.php"; ?>


</body>
</html>