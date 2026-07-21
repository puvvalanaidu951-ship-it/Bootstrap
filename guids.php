



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Donors in Index.php, Guides | Find Donors, Request Blood | BloodDonor.in</title>
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/b2ca557543.js" crossorigin="anonymous"></script>

           
</head>
<body>




 <?php include "nav.php"; ?>

<!-- Bootstrap CSS only - JS will be loaded in footer -->
 

<!-- Location Hero -->
<section class="location-hero py-5 bg-gradient-primary">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="hero-content text-white">
                    <nav aria-label="breadcrumb">
                       
                    </nav>
                    
                    <h1 class="display-4 fw-bold mb-4">
                        Blood Donors                     </h1>
                    <p class="lead mb-4">
                        Find verified blood donors in Index.php, Guides. 
                        Connect with 150+ local donors 
                        and join our life-saving community.
                    </p>
                    
                    <div class="hero-stats">
                        <div class="row g-4">
                            <div class="col-auto">
                                <div class="stat-item text-center">
                                    <h3 class="fw-bold text-warning mb-1">150</h3>
                                    <small class="text-white-75">Total Donors</small>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="stat-item text-center">
                                    <h3 class="fw-bold text-warning mb-1">85</h3>
                                    <small class="text-white-75">Available Now</small>
                                </div>
                            </div>
                            <div class="col-auto">
                                <div class="stat-item text-center">
                                    <h3 class="fw-bold text-warning mb-1">12</h3>
                                    <small class="text-white-75">Recent Requests</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 text-center">
                <div class="hero-visual">
                    <i class="bi bi-geo-alt-fill text-white" style="font-size: 8rem; opacity: 0.8;"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Quick Actions -->
<section class="quick-actions py-4 bg-light border-bottom">
    <div class="container">
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="/search.php?city=Index.php&state=Guides" 
               class="btn btn-danger btn-lg rounded-pill px-4">
                <i class="bi bi-search me-2"></i>Find Donors
            </a>
            <a href="/request-blood.php?city=Index.php&state=Guides" 
               class="btn btn-success btn-lg rounded-pill px-4">
                <i class="bi bi-plus-circle me-2"></i>Request Blood
            </a>
            <a href="/register.php?role=donor&city=Index.php&state=Guides" 
               class="btn btn-primary btn-lg rounded-pill px-4">
                <i class="bi bi-heart me-2"></i>Become Donor
            </a>
        </div>
    </div>
</section>

<!-- Blood Group Distribution -->
<section class="blood-groups py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Blood Groups Available</h2>
            <p class="section-subtitle">Blood group distribution of donors in Index.php</p>
        </div>
        
        <div class="row g-4">
                            <div class="col-lg-3 col-md-6">
                    <div class="blood-group-card card border-0 shadow-sm text-center">
                        <div class="card-body p-4">
                            <div class="blood-group-badge mb-3">
                                <span class="badge bg-danger fs-3 px-3 py-2">A+</span>
                            </div>
                            <h4 class="fw-bold text-primary">45</h4>
                            <p class="text-muted mb-3">Donors Available</p>
                            <a href="/search.php?blood_group=A%2B&city=Index.php&state=Guides" 
                               class="btn btn-outline-danger btn-sm">
                                <i class="bi bi-search"></i> Find A+ Donors
                            </a>
                        </div>
                    </div>
                </div>
                            <div class="col-lg-3 col-md-6">
                    <div class="blood-group-card card border-0 shadow-sm text-center">
                        <div class="card-body p-4">
                            <div class="blood-group-badge mb-3">
                                <span class="badge bg-danger fs-3 px-3 py-2">B+</span>
                            </div>
                            <h4 class="fw-bold text-primary">38</h4>
                            <p class="text-muted mb-3">Donors Available</p>
                            <a href="/search.php?blood_group=B%2B&city=Index.php&state=Guides" 
                               class="btn btn-outline-danger btn-sm">
                                <i class="bi bi-search"></i> Find B+ Donors
                            </a>
                        </div>
                    </div>
                </div>
                            <div class="col-lg-3 col-md-6">
                    <div class="blood-group-card card border-0 shadow-sm text-center">
                        <div class="card-body p-4">
                            <div class="blood-group-badge mb-3">
                                <span class="badge bg-danger fs-3 px-3 py-2">O+</span>
                            </div>
                            <h4 class="fw-bold text-primary">42</h4>
                            <p class="text-muted mb-3">Donors Available</p>
                            <a href="/search.php?blood_group=O%2B&city=Index.php&state=Guides" 
                               class="btn btn-outline-danger btn-sm">
                                <i class="bi bi-search"></i> Find O+ Donors
                            </a>
                        </div>
                    </div>
                </div>
                            <div class="col-lg-3 col-md-6">
                    <div class="blood-group-card card border-0 shadow-sm text-center">
                        <div class="card-body p-4">
                            <div class="blood-group-badge mb-3">
                                <span class="badge bg-danger fs-3 px-3 py-2">AB+</span>
                            </div>
                            <h4 class="fw-bold text-primary">25</h4>
                            <p class="text-muted mb-3">Donors Available</p>
                            <a href="/search.php?blood_group=AB%2B&city=Index.php&state=Guides" 
                               class="btn btn-outline-danger btn-sm">
                                <i class="bi bi-search"></i> Find AB+ Donors
                            </a>
                        </div>
                    </div>
                </div>
                    </div>
    </div>
</section>


<section class="cta-section py-5 bg-gradient-primary">
    <div class="container">
        <div class="row align-items-center text-white text-center text-lg-start">
            <div class="col-lg-8">
                <h2 class="mb-3">Join the Blood Donation Community</h2>
                <p class="lead mb-0">
                    Every donation saves lives. Be a hero in your community and help those in need.
                </p>
            </div>
            <div class="col-lg-4 mt-4 mt-lg-0">
                <div class="d-grid gap-2">
                    <a href="/register.php?role=donor&city=Index.php&state=Guides" 
                       class="btn btn-warning btn-lg">
                        <i class="bi bi-heart"></i> Become a Donor
                    </a>
                    <a href="/emergency.php" class="btn btn-outline-light">
                        <i class="bi bi-exclamation-triangle"></i> Emergency Request
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include "footer.php"; ?>
</body>
</html>

<style>
.bg-gradient-primary {
    background: linear-gradient(135deg, #dc2626 0%, #991b1b 100%);
}

.text-white-75 {
    color: rgba(255, 255, 255, 0.75) !important;
}

.text-white-50 {
    color: rgba(255, 255, 255, 0.5) !important;
}

.donor-avatar {
    width: 60px;
    height: 60px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.5rem;
    font-weight: bold;
}

.donor-card, .blood-group-card, .request-card {
    transition: transform 0.3s ease;
}

.donor-card:hover, .blood-group-card:hover, .request-card:hover {
    transform: translateY(-3px);
}

.section-title {
    color: #1f2937;
    font-size: 2.5rem;
    font-weight: 700;
}

.section-subtitle {
    color: #6b7280;
    font-size: 1.125rem;
}

.hero-visual {
    animation: float 6s ease-in-out infinite;
}

@keyframes float {
    0%, 100% { transform: translateY(0px); }
    50% { transform: translateY(-20px); }
}
</style>



