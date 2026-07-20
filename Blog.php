<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/ebdd1363cb.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <style>
    .hvr{
        text-decoration: none;
        
    }
    .card{
        transition: all 0.5s;
    }
    .card:hover{
        margin-top:-10px;
    }
  </style>
</head>
<body>
      <?php include "nav.php"; ?>
    
<div class="container-fluid bg-danger py-5 " c>
    <div class="container text-center">
        <h1 class="display-5 fw-bold text-white">Blood Donation Blog</h1>
        <p class="text-white fs-5 my-4">
            Read articles, guides, and stories about blood donation.
            Learn how to save lives and stay informed about blood donation in India.
        </p>
        <div class="row justify-content-center">
            <div class="w-50 ">
                <input type="text" class="form-control form-control-lg p-4" placeholder="Search articles...">
            </div>
            <div class="col-2">
                <button class="btn btn-warning btn-lg w-50"><i class="bi bi-search"></i> Search</button>
            </div>
        </div>
    </div>
</div>

<div class="container py-5">
    <div class="text-center mb-5">
        <h1 class="display-4 fw-bold">Featured Articles</h1>
        <p class="text-secondary fs-5">   Most popular and trending articles</p>
    </div>

    <div class="row g-4">
        <div class="col-lg-4">
            <div class="card h-100">
                <div class="bg-danger text-center py-5">
                    <i class="bi bi-heart-pulse display-1 text-white"></i>
                </div>
                <div class="card-body">
                    <span class="badge bg-danger">Eligibility & Requirements</span>
                    <h5 class="mt-3">Blood Donation Eligibility: Who Can Donate and Who Cannot</h5>
                    <p class="text-secondary">
                        A comprehensive guide to blood donation eligibility criteria in India, including age requirements, health conditions, and temporary deferrals.
                    </p>
                    <div class="d-flex justify-content-between">
                        <span class="text-secondary"><i class="bi bi-person"></i>Administrator</span>
                        <span class="text-secondary"><i class="bi bi-calendar"></i>Nov 14, 2025</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card h-100">
                <div class="bg-danger text-center py-5">
                    <i class="bi bi-heart-pulse display-1 text-white"></i>
                </div>
                <div class="card-body">
                    <span class="badge bg-danger">Eligibility & Requirements</span>
                    <h5 class="mt-3">Blood Donation Requirements: Age, Weight, and Health Criteria</h5>
                    <p class="text-secondary">
                        Complete guide to blood donation requirements in India. Learn about age limits, weight, health conditions, and eligibility.
                    </p>
                    <div class="d-flex justify-content-between">
                        <span class="text-secondary"><i class="bi bi-person"></i>Administrator</span>
                        <span class="text-secondary"><i class="bi bi-calendar"></i>Oct 28, 2025</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card h-100">
                <div class="bg-danger text-center py-5">
                    <i class="bi bi-heart-pulse display-1 text-white"></i>
                </div>
                <div class="card-body">
                    <span class="badge bg-danger">News & Updates</span>
                    <h5 class="mt-3">Blood Donation Statistics in India: Current Status</h5>
                    <p class="text-secondary">
                        Discover the latest blood donation statistics in India. Learn about blood shortages,donor rates, and how your donation saves lives.
                    </p>
                    <div class="d-flex justify-content-between">
                        <span class="text-secondary"><i class="bi bi-person"></i> Administrator</span>
                        <span class="text-secondary"><i class="bi bi-calendar"></i>Nov 18, 2025</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container py-5">

    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-sm-4">
            <div class="card shadow-sm">
                <div class="bg-danger text-center py-3">
                    <i class="bi bi-heart-pulse display-1 text-white"></i>
                </div>
                <div class="card-body">
                    <span class="badge bg-danger mb-3">  News & Updates</span>
                    <h5 class="fw-bold"> Blood Donation Statistics in India: Current Status and How You Can Help</h5>
                    <h6 class="text-secondary mt-3 fs-6">
                        Discover the latest blood donation statistics in India.Learn about blood shortages, donor rates, and how your donation contributes to saving lives across the country.
                    </h6>
                    <div class="d-flex justify-content-between my-1">
                        <span class="text-secondary"><i class="bi bi-person"></i> Administrator</span>
                        <span class="text-secondary"><i class="bi bi-calendar"></i> Nov 18, 2025</span>
                        <span class="text-secondary"> <i class="bi bi-eye"></i> 649</span>
                    </div>
                    <div class="mb-2">
                        <span class="badge bg-secondary">blood donation statistics</span>
                        <span class="badge bg-secondary">blood supply</span>
                        <span class="badge bg-secondary">donation awareness</span>
                        <span class="badge bg-secondary">donation rates</span>
                        <span class="badge bg-secondary">india blood shortage</span>
                    </div>
                    <button class="btn btn-outline-primary btn-lg">Read More<i class="bi bi-arrow-right"></i></button>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card shadow-sm">
                <div class="bg-danger text-center py-3">
                    <i class="bi bi-heart-pulse display-1 text-white"></i>
                </div>
                <div class="card-body">
                    <span class="badge bg-danger mb-3">  News & Updates</span>
                    <h5 class="fw-bold"> Blood Donation Statistics in India: Current Status and How You Can Help</h5>
                    <h6 class="text-secondary mt-3 fs-6">
                        Discover the latest blood donation statistics in India.Learn about blood shortages, donor rates, and how your donation contributes to saving lives across the country.
                    </h6>
                    <div class="d-flex justify-content-between my-1">
                        <span class="text-secondary"><i class="bi bi-person"></i> Administrator</span>
                        <span class="text-secondary"><i class="bi bi-calendar"></i> Nov 18, 2025</span>
                        <span class="text-secondary"> <i class="bi bi-eye"></i> 649</span>
                    </div>
                    <div class="mb-2">
                        <span class="badge bg-secondary">blood donation statistics</span>
                        <span class="badge bg-secondary">blood supply</span>
                        <span class="badge bg-secondary">donation awareness</span>
                        <span class="badge bg-secondary">donation rates</span>
                        <span class="badge bg-secondary">india blood shortage</span>
                    </div>
                    <button class="btn btn-outline-primary btn-lg">Read More<i class="bi bi-arrow-right"></i></button>
                </div>
            </div>
        </div>
        <div class="col-sm-4 ">
            <div class="card shadow-sm">
                <div class="bg-danger text-center text-white py-3 fs-5 fw-bold"><i class="fa-solid fa-inbox"></i>
                    Categories
                </div>
                <div class="card-body d-flex flex-column justify-content-center align-items-start">
                    <h5 class="text-danger"> All Categories</h5>
                    <a href="#">Blood Donation</a>
                    <a href="#">Eligibility & Requirements</a>
                    <a href="#">Guides & Tutorials</a>
                    <a href="#">Health & Wellness</a>
                    <a href="#">News & Updates</a>
                    <a href="#">Success Stories</a>
                </div>
            </div>
        </div>
    </div>
       <div class="row d-flex justify-content-center align-items-center mt-5">
        <div class="col-sm-4">
            <div class="card shadow-sm">
                <div class="bg-danger text-center py-3">
                    <i class="bi bi-heart-pulse display-1 text-white"></i>
                </div>
                <div class="card-body">
                    <span class="badge bg-danger mb-3">  News & Updates</span>
                    <h5 class="fw-bold"> Blood Donation Statistics in India: Current Status and How You Can Help</h5>
                    <h6 class="text-secondary mt-3 fs-6">
                        Discover the latest blood donation statistics in India.Learn about blood shortages, donor rates, and how your donation contributes to saving lives across the country.
                    </h6>
                    <div class="d-flex justify-content-between my-1">
                        <span class="text-secondary"><i class="bi bi-person"></i> Administrator</span>
                        <span class="text-secondary"><i class="bi bi-calendar"></i> Nov 18, 2025</span>
                        <span class="text-secondary"> <i class="bi bi-eye"></i> 649</span>
                    </div>
                    <div class="mb-2">
                        <span class="badge bg-secondary">blood donation statistics</span>
                        <span class="badge bg-secondary">blood supply</span>
                        <span class="badge bg-secondary">donation awareness</span>
                        <span class="badge bg-secondary">donation rates</span>
                        <span class="badge bg-secondary">india blood shortage</span>
                    </div>
                    <button class="btn btn-outline-primary btn-lg">Read More<i class="bi bi-arrow-right"></i></button>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card shadow-sm">
                <div class="bg-danger text-center py-3">
                    <i class="bi bi-heart-pulse display-1 text-white"></i>
                </div>
                <div class="card-body">
                    <span class="badge bg-danger mb-3">  News & Updates</span>
                    <h5 class="fw-bold"> Blood Donation Statistics in India: Current Status and How You Can Help</h5>
                    <h6 class="text-secondary mt-3 fs-6">
                        Discover the latest blood donation statistics in India.Learn about blood shortages, donor rates, and how your donation contributes to saving lives across the country.
                    </h6>
                    <div class="d-flex justify-content-between my-1">
                        <span class="text-secondary"><i class="bi bi-person"></i> Administrator</span>
                        <span class="text-secondary"><i class="bi bi-calendar"></i> Nov 18, 2025</span>
                        <span class="text-secondary"> <i class="bi bi-eye"></i> 649</span>
                    </div>
                    <div class="mb-2">
                        <span class="badge bg-secondary">blood donation statistics</span>
                        <span class="badge bg-secondary">blood supply</span>
                        <span class="badge bg-secondary">donation awareness</span>
                        <span class="badge bg-secondary">donation rates</span>
                        <span class="badge bg-secondary">india blood shortage</span>
                    </div>
                    <button class="btn btn-outline-primary btn-lg">Read More<i class="bi bi-arrow-right"></i></button>
                </div>
            </div>
        </div>
        <div class="col-sm-4 ">
            <div class="card shadow-sm">
                <div class="bg-danger text-center text-white py-2 fs-5 fw-bold"><i class="fa-regular fa-clock"></i>
                    Recent Posts
                </div>
                <div class="card-body d-flex flex-column justify-content-center align-items-start">
                    <div>
                    <p>Blood Donation Statistics in India: Current Status and How You Can Help</p>
                     <span class="text-secondary"><i class="bi bi-calendar"></i> Nov 18, 2025</span>
                    <hr style="height:1px;border-width:0;background-color:rgb(27, 26, 26)">
                    </div>
                    <div>
                    <p>Blood Donation and Iron Deficiency: How to Maintain Healthy Iron Levels</p>
                    <span class="text-secondary"><i class="bi bi-calendar"></i> Nov 18, 2025</span>
                    <hr style="height:1px;border-width:0;background-color:rgb(27, 26, 26)">
                    </div>
                    <div>
                    <p>Blood Donation Eligibility: Who Can Donate and Who Cannot</p>
                    <span class="text-secondary"><i class="bi bi-calendar"></i> Nov 18, 2025</span>
                    <hr style="height:1px;border-width:0;background-color:rgb(27, 26, 26)">
                    </div>
                    <div>
                    <p>Blood Donation After COVID-19: When Can You Donate After Recovery?</p>
                    <span class="text-secondary"><i class="bi bi-calendar"></i> Nov 18, 2025</span>
                    <hr style="height:1px;border-width:0;background-color:rgb(27, 26, 26)">
                    </div>
                    <div>
                    <p>Real Life Blood Donation Stories: How One Donation Saved Three Lives</p>
                    <span class="text-secondary"><i class="bi bi-calendar"></i> Nov 18, 2025</span>
                    <hr style="height:1px;border-width:0;background-color:rgb(27, 26, 26)">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row d-flex justify-content-center align-items-center">
        <div class="col-sm-4">
            <div class="card shadow-sm">
                <div class="bg-danger text-center py-3">
                    <i class="bi bi-heart-pulse display-1 text-white"></i>
                </div>
                <div class="card-body">
                    <span class="badge bg-danger mb-3">  News & Updates</span>
                    <h5 class="fw-bold"> Blood Donation Statistics in India: Current Status and How You Can Help</h5>
                    <h6 class="text-secondary mt-3 fs-6">
                        Discover the latest blood donation statistics in India.Learn about blood shortages, donor rates, and how your donation contributes to saving lives across the country.
                    </h6>
                    <div class="d-flex justify-content-between my-1">
                        <span class="text-secondary"><i class="bi bi-person"></i> Administrator</span>
                        <span class="text-secondary"><i class="bi bi-calendar"></i> Nov 18, 2025</span>
                        <span class="text-secondary"> <i class="bi bi-eye"></i> 649</span>
                    </div>
                    <div class="mb-2">
                        <span class="badge bg-secondary">blood donation statistics</span>
                        <span class="badge bg-secondary">blood supply</span>
                        <span class="badge bg-secondary">donation awareness</span>
                        <span class="badge bg-secondary">donation rates</span>
                        <span class="badge bg-secondary">india blood shortage</span>
                    </div>
                    <button class="btn btn-outline-primary btn-lg">Read More<i class="bi bi-arrow-right"></i></button>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card shadow-sm">
                <div class="bg-danger text-center py-3">
                    <i class="bi bi-heart-pulse display-1 text-white"></i>
                </div>
                <div class="card-body">
                    <span class="badge bg-danger mb-3">  News & Updates</span>
                    <h5 class="fw-bold"> Blood Donation Statistics in India: Current Status and How You Can Help</h5>
                    <h6 class="text-secondary mt-3 fs-6">
                        Discover the latest blood donation statistics in India.Learn about blood shortages, donor rates, and how your donation contributes to saving lives across the country.
                    </h6>
                    <div class="d-flex justify-content-between my-1">
                        <span class="text-secondary"><i class="bi bi-person"></i> Administrator</span>
                        <span class="text-secondary"><i class="bi bi-calendar"></i> Nov 18, 2025</span>
                        <span class="text-secondary"> <i class="bi bi-eye"></i> 649</span>
                    </div>
                    <div class="mb-2">
                        <span class="badge bg-secondary">blood donation statistics</span>
                        <span class="badge bg-secondary">blood supply</span>
                        <span class="badge bg-secondary">donation awareness</span>
                        <span class="badge bg-secondary">donation rates</span>
                        <span class="badge bg-secondary">india blood shortage</span>
                    </div>
                    <button class="btn btn-outline-primary btn-lg">Read More<i class="bi bi-arrow-right"></i></button>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card shadow-sm bg-danger text-white text-center align-items-center ">
              <h4 class="mt-3">Ready to Save Lives?</h4>
                <p>Join thousands of donors making a difference</p>
                <button class=" badge bg-warning w-80 p-3 border-0 mb-5 px-5 fs-5">Become a doctor</button>
            </div>
        </div>
    </div>
     <div class="row g-4 mt-2">
        <div class="col-lg-4">
            <div class="card h-100">
                <div class="bg-danger text-center py-5">
                    <i class="bi bi-heart-pulse display-1 text-white"></i>
                </div>
                <div class="card-body">
                    <span class="badge bg-danger">Eligibility & Requirements</span>
                    <h5 class="mt-3">Blood Donation Eligibility: Who Can Donate and Who Cannot</h5>
                    <p class="text-secondary">
                        A comprehensive guide to blood donation eligibility criteria in India, including age requirements, health conditions, and temporary deferrals.
                    </p>
                    <div class="d-flex justify-content-between">
                        <span class="text-secondary"><i class="bi bi-person"></i>Administrator</span>
                        <span class="text-secondary"><i class="bi bi-calendar"></i>Nov 14, 2025</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card h-100">
                <div class="bg-danger text-center py-5">
                    <i class="bi bi-heart-pulse display-1 text-white"></i>
                </div>
                <div class="card-body">
                    <span class="badge bg-danger">Eligibility & Requirements</span>
                    <h5 class="mt-3">Blood Donation Requirements: Age, Weight, and Health Criteria</h5>
                    <p class="text-secondary">
                        Complete guide to blood donation requirements in India. Learn about age limits, weight, health conditions, and eligibility.
                    </p>
                    <div class="d-flex justify-content-between">
                        <span class="text-secondary"><i class="bi bi-person"></i>Administrator</span>
                        <span class="text-secondary"><i class="bi bi-calendar"></i>Oct 28, 2025</span>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
     <div class="row g-4 mt-2">
        <div class="col-lg-4">
            <div class="card h-100">
                <div class="bg-danger text-center py-5">
                    <i class="bi bi-heart-pulse display-1 text-white"></i>
                </div>
                <div class="card-body">
                    <span class="badge bg-danger">Eligibility & Requirements</span>
                    <h5 class="mt-3">Blood Donation Eligibility: Who Can Donate and Who Cannot</h5>
                    <p class="text-secondary">
                        A comprehensive guide to blood donation eligibility criteria in India, including age requirements, health conditions, and temporary deferrals.
                    </p>
                    <div class="d-flex justify-content-between">
                        <span class="text-secondary"><i class="bi bi-person"></i>Administrator</span>
                        <span class="text-secondary"><i class="bi bi-calendar"></i>Nov 14, 2025</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card h-100">
                <div class="bg-danger text-center py-5">
                    <i class="bi bi-heart-pulse display-1 text-white"></i>
                </div>
                <div class="card-body">
                    <span class="badge bg-danger">Eligibility & Requirements</span>
                    <h5 class="mt-3">Blood Donation Requirements: Age, Weight, and Health Criteria</h5>
                    <p class="text-secondary">
                        Complete guide to blood donation requirements in India. Learn about age limits, weight, health conditions, and eligibility.
                    </p>
                    <div class="d-flex justify-content-between">
                        <span class="text-secondary"><i class="bi bi-person"></i>Administrator</span>
                        <span class="text-secondary"><i class="bi bi-calendar"></i>Oct 28, 2025</span>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
     <div class="row g-4 mt-2">
        <div class="col-lg-4">
            <div class="card h-100">
                <div class="bg-danger text-center py-5">
                    <i class="bi bi-heart-pulse display-1 text-white"></i>
                </div>
                <div class="card-body">
                    <span class="badge bg-danger">Eligibility & Requirements</span>
                    <h5 class="mt-3">Blood Donation Eligibility: Who Can Donate and Who Cannot</h5>
                    <p class="text-secondary">
                        A comprehensive guide to blood donation eligibility criteria in India, including age requirements, health conditions, and temporary deferrals.
                    </p>
                    <div class="d-flex justify-content-between">
                        <span class="text-secondary"><i class="bi bi-person"></i>Administrator</span>
                        <span class="text-secondary"><i class="bi bi-calendar"></i>Nov 14, 2025</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card h-100">
                <div class="bg-danger text-center py-5">
                    <i class="bi bi-heart-pulse display-1 text-white"></i>
                </div>
                <div class="card-body">
                    <span class="badge bg-danger">Eligibility & Requirements</span>
                    <h5 class="mt-3">Blood Donation Requirements: Age, Weight, and Health Criteria</h5>
                    <p class="text-secondary">
                        Complete guide to blood donation requirements in India. Learn about age limits, weight, health conditions, and eligibility.
                    </p>
                    <div class="d-flex justify-content-between">
                        <span class="text-secondary"><i class="bi bi-person"></i>Administrator</span>
                        <span class="text-secondary"><i class="bi bi-calendar"></i>Oct 28, 2025</span>
                    </div>
                </div>
            </div>
        </div>
    
    </div>
</div>

</div>
 <?php include "footer.php"; ?>
</body>
</html>