



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood Donation Cities | Find Blood Donors by City | BloodDonor.in</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/b2ca557543.js" crossorigin="anonymous"></script>
    <script type="application/ld+json">{
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "BloodDonor.in",
    "alternateName": "Blood Donor India",
    "url": "https://blooddonor.in",
    "logo": "https://blooddonor.in/assets/images/logo.png",
    "description": "India's leading blood donation platform connecting donors with those in need",
    "foundingDate": "2024",
    "slogan": "Save Lives, Donate Blood",
    "address": {
        "@type": "PostalAddress",
        "streetAddress": "4, Kalangal Road, Sulur",
        "addressLocality": "Coimbatore",
        "addressRegion": "Tamil Nadu",
        "postalCode": "641402",
        "addressCountry": "IN"
    },
    "contactPoint": {
        "@type": "ContactPoint",
        "telephone": "+91-9585160363",
        "contactType": "customer service",
        "areaServed": "IN",
        "availableLanguage": [
            "English",
            "Hindi",
            "Tamil"
        ]
    },
    "sameAs": [
        "https://facebook.com/blooddonorin",
        "https://twitter.com/blooddonorin",
        "https://instagram.com/blooddonorin",
        "https://linkedin.com/company/blooddonorin"
    ],
    "knowsAbout": [
        "Blood Donation",
        "Blood Groups",
        "Emergency Blood Supply",
        "Blood Bank Management",
        "Blood Compatibility",
        "Donor Management"
    ],
    "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Blood Donation Services",
        "itemListElement": [
            {
                "@type": "Offer",
                "name": "Find Blood Donors",
                "description": "Search and connect with verified blood donors across India",
                "category": "Blood Donor Search"
            },
            {
                "@type": "Offer",
                "name": "Request Blood",
                "description": "Emergency blood request service for hospitals and individuals",
                "category": "Blood Request"
            },
            {
                "@type": "Offer",
                "name": "Blood Donation Campaigns",
                "description": "Organize and join blood donation drives and campaigns",
                "category": "Blood Campaigns"
            },
            {
                "@type": "Offer",
                "name": "Blood Bank Directory",
                "description": "Comprehensive directory of blood banks and donation centers",
                "category": "Blood Banks"
            }
        ]
    }
}</script>        
    <script src="/assets/js/analytics-tracker.js"></script>

<style>


.bg-gradient-primary {
    background: linear-gradient(135deg, #dc2626 0%, #991b1b 100%);
}

.text-white-75 {
    color: rgba(255, 255, 255, 0.75) !important;
}

.city-card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.city-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
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

.city-item {
    padding: 0.75rem;
    border-radius: 8px;
    transition: background-color 0.3s ease;
}

.city-item:hover {
    background-color: #f8fafc;
}

@media (max-width: 768px) {
    .display-4 {
        font-size: 2.5rem;
    }
    .section-title {
        font-size: 2rem;
    }
}

.bg-gradient-danger {
    background: linear-gradient(135deg, #dc2626 0%, #991b1b 100%) !important;
}

.navbar-brand {
    transition: transform 0.3s ease;
}

.navbar-brand:hover {
    transform: scale(1.05);
}

.logo-circle {
    width: 45px;
    height: 45px;
    transition: all 0.3s ease;
}

.navbar-brand:hover .logo-circle {
    transform: rotate(10deg) scale(1.1);
    box-shadow: 0 4px 15px rgba(220, 38, 38, 0.3) !important;
}

.brand-name {
    letter-spacing: -0.5px;
}

.brand-domain {
    font-weight: 600;
}

.navbar-nav .nav-link {
    transition: all 0.3s ease;
    position: relative;
    border-radius: 8px;
    margin: 2px 4px;
    padding: 8px 12px !important;
}

.navbar-nav .nav-link:hover {
    background-color: rgba(255, 255, 255, 0.1);
    transform: translateY(-1px);
}

.navbar-nav .nav-link.active {
    background-color: rgba(255, 255, 255, 0.2);
    font-weight: 600;
}

.navbar-nav .nav-link.active::after {
    content: '';
    position: absolute;
    bottom: -2px;
    left: 50%;
    transform: translateX(-50%);
    width: 20px;
    height: 2px;
    background-color: #fbbf24;
    border-radius: 2px;
}

.dropdown-menu {
    border-radius: 12px;
    border: none;
    margin-top: 8px;
    min-width: 220px;
}

.dropdown-menu::before {
    content: '';
    position: absolute;
    top: -6px;
    right: 20px;
    width: 12px;
    height: 12px;
    background: white;
    border: 1px solid rgba(0,0,0,.1);
    border-bottom: none;
    border-right: none;
    transform: rotate(45deg);
}

.dropdown-item {
    padding: 10px 20px;
    border-radius: 8px;
    margin: 4px 8px;
    transition: all 0.3s ease;
}

.dropdown-item:hover {
    background-color: #f8fafc;
    transform: translateX(4px);
}

.dropdown-item:active {
    background-color: #dc2626;
    color: white;
}

.dropdown-header {
    padding: 12px 20px 8px;
    color: #374151;
    font-weight: 600;
}

.user-avatar {
    width: 32px;
    height: 32px;
    font-size: 14px;
    font-weight: 600;
}

.navbar-spacer {
    height: 76px; 
}

.navbar-toggler {
    padding: 6px 8px;
    transition: all 0.3s ease;
}

.navbar-toggler:hover {
    background-color: rgba(255, 255, 255, 0.1);
}

.navbar-toggler:focus {
    box-shadow: 0 0 0 2px rgba(255, 193, 7, 0.5);
}

@media (max-width: 991.98px) {
    .navbar-collapse {
        margin-top: 1rem;
        padding-top: 1rem;
        border-top: 1px solid rgba(255, 255, 255, 0.1);
    }
    
    .navbar-nav .nav-link {
        padding: 12px 16px !important;
        margin: 2px 0;
    }
    
    .navbar-spacer {
        height: 70px;
    }
}

.navbar-collapse {
    transition: all 0.3s ease-in-out;
}

.navbar.scrolled {
    background: rgba(153, 27, 27, 0.95) !important;
    backdrop-filter: blur(10px);
}

@keyframes pulse-brand {
    0%, 100% { opacity: 1; }
    50% { opacity: 0.8; }
}

.navbar-brand.loading {
    animation: pulse-brand 2s infinite;
}
</style>
</head>
<body>


 <?php include "nav.php" ?>
<section class="py-5 bg-gradient-primary" style="margin-top:-50px">
    <div class="container">
        <div class="text-center text-white">
            <h1 class="display-4 fw-bold mb-4">Blood Donation Cities</h1>
            <p class="lead mb-4">
                Find blood donors in major cities across India. Connect with local donors 
                and join the blood donation community in your city.
            </p>
            
            <div class="hero-stats">
                <div class="row g-4 justify-content-center">
                    <div class="col-auto">
                        <div class="stat-item text-center">
                            <h3 class="fw-bold text-warning mb-1">143+</h3>
                            <small class="text-white-75">Cities</small>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="stat-item text-center">
                            <h3 class="fw-bold text-warning mb-1">31+</h3>
                            <small class="text-white-75">States</small>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="stat-item text-center">
                            <h3 class="fw-bold text-warning mb-1">99+</h3>
                            <small class="text-white-75">Donors</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="search-cities py-4 bg-light border-bottom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="search-box">
                    <div class="input-group input-group-lg">
                        <input type="text" class="form-control" id="citySearch" 
                               placeholder="Search for your city...">
                        <button class="btn btn-danger" type="button">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="top-cities py-5">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Top Cities by Donors</h2>
            <p class="section-subtitle">High-traffic donor hubs plus major cities we actively promote for search</p>
        </div>
        
        <div class="row g-4">
                            <div class="col-lg-3 col-md-6">
                    <div class="city-card card border-0 shadow-sm h-100">
                        <div class="card-body text-center p-4">
                            <div class="city-rank mb-3">
                                <span class="badge bg-danger fs-5 px-3 py-2 rounded-pill">#1</span>
                            </div>
                            <h5 class="city-name mb-2">Delhi</h5>
                            <p class="state-name text-muted mb-3">Delhi</p>
                            <div class="donor-count mb-3">
                                <h4 class="text-danger fw-bold">6</h4>
                                <small class="text-muted">Active Donors</small>
                            </div>
                            
                                <div class="blood-groups-info mb-3">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <small class="text-muted">Blood Groups:</small>
                                    <span class="badge bg-success">4 types</span>
                                </div>
                                <div class="blood-groups-list">
                                    <span class="badge bg-danger bg-opacity-75 me-1 mb-1">A+</span>
                                    <span class="badge bg-danger bg-opacity-75 me-1 mb-1">B+</span>
                                    <span class="badge bg-danger bg-opacity-75 me-1 mb-1">AB+</span>
                                    <span class="badge bg-danger bg-opacity-75 me-1 mb-1">O+</span>
                                </div>
                            </div>
                                                        
                            <a href="guids.php?blood_group=in Delhi" 
                               class="btn btn-danger">
                                <i class="bi bi-geo-alt"></i> View Donors
                            </a>
                        </div>
                    </div>
                </div>
                            <div class="col-lg-3 col-md-6">
                    <div class="city-card card border-0 shadow-sm h-100">
                        <div class="card-body text-center p-4">
                            <div class="city-rank mb-3">
                                <span class="badge bg-danger fs-5 px-3 py-2 rounded-pill">#2</span>
                            </div>
                            <h5 class="city-name mb-2">Bengaluru</h5>
                            <p class="state-name text-muted mb-3">Karnataka</p>
                            <div class="donor-count mb-3">
                                <h4 class="text-danger fw-bold">5</h4>
                                <small class="text-muted">Active Donors</small>
                            </div>
                            
                            <div class="blood-groups-info mb-3">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <small class="text-muted">Blood Groups:</small>
                                    <span class="badge bg-success">3 types</span>
                                </div>
                                <div class="blood-groups-list">
                                    <span class="badge bg-danger bg-opacity-75 me-1 mb-1">A+</span>
                                    <span class="badge bg-danger bg-opacity-75 me-1 mb-1">B+</span>
                                    <span class="badge bg-danger bg-opacity-75 me-1 mb-1">O+</span>
                                </div>
                            </div>
                                                        
                            <a href="guids.php?blood_group=in Bengalur" 
                               class="btn btn-danger">
                                <i class="bi bi-geo-alt"></i> View Donors
                            </a>
                        </div>
                    </div>
                </div>
                            <div class="col-lg-3 col-md-6">
                    <div class="city-card card border-0 shadow-sm h-100">
                        <div class="card-body text-center p-4">
                            <div class="city-rank mb-3">
                                <span class="badge bg-danger fs-5 px-3 py-2 rounded-pill">#3</span>
                            </div>
                            <h5 class="city-name mb-2">Coimbatore</h5>
                            <p class="state-name text-muted mb-3">Tamil Nadu</p>
                            <div class="donor-count mb-3">
                                <h4 class="text-danger fw-bold">5</h4>
                                <small class="text-muted">Active Donors</small>
                            </div>
                            
                                <div class="blood-groups-info mb-3">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <small class="text-muted">Blood Groups:</small>
                                    <span class="badge bg-success">4 types</span>
                                </div>
                                <div class="blood-groups-list">
                                    <span class="badge bg-danger bg-opacity-75 me-1 mb-1">A+</span>
                                    <span class="badge bg-danger bg-opacity-75 me-1 mb-1">B+</span>
                                    <span class="badge bg-danger bg-opacity-75 me-1 mb-1">O+</span>
                                    <span class="badge bg-danger bg-opacity-75 me-1 mb-1">O-</span>
                                </div>
                            </div>
                                                        
                            <a href="guids.php?blood_group=in Coimbatore" 
                               class="btn btn-danger">
                                <i class="bi bi-geo-alt"></i> View Donors
                            </a>
                        </div>
                    </div>
                </div>
                            <div class="col-lg-3 col-md-6">
                    <div class="city-card card border-0 shadow-sm h-100">
                        <div class="card-body text-center p-4">
                            <div class="city-rank mb-3">
                                <span class="badge bg-danger fs-5 px-3 py-2 rounded-pill">#4</span>
                            </div>
                            <h5 class="city-name mb-2">Hyderabad</h5>
                            <p class="state-name text-muted mb-3">Telangana</p>
                            <div class="donor-count mb-3">
                                <h4 class="text-danger fw-bold">5</h4>
                                <small class="text-muted">Active Donors</small>
                            </div>
                            
                                <div class="blood-groups-info mb-3">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <small class="text-muted">Blood Groups:</small>
                                    <span class="badge bg-success">4 types</span>
                                </div>
                                <div class="blood-groups-list">
                                    <span class="badge bg-danger bg-opacity-75 me-1 mb-1">B+</span>
                                    <span class="badge bg-danger bg-opacity-75 me-1 mb-1">AB+</span>
                                    <span class="badge bg-danger bg-opacity-75 me-1 mb-1">O+</span>
                                    <span class="badge bg-danger bg-opacity-75 me-1 mb-1">O-</span>
                                </div>
                            </div>
                                                        
                            <a href="guids.php?blood_group=in Hyderabad" 
                               class="btn btn-danger">
                                <i class="bi bi-geo-alt"></i> View Donors
                            </a>
                        </div>
                    </div>
                </div>
                            <div class="col-lg-3 col-md-6">
                    <div class="city-card card border-0 shadow-sm h-100">
                        <div class="card-body text-center p-4">
                            <div class="city-rank mb-3">
                                <span class="badge bg-danger fs-5 px-3 py-2 rounded-pill">#5</span>
                            </div>
                            <h5 class="city-name mb-2">Chennai</h5>
                            <p class="state-name text-muted mb-3">Tamil Nadu</p>
                            <div class="donor-count mb-3">
                                <h4 class="text-danger fw-bold">4</h4>
                                <small class="text-muted">Active Donors</small>
                            </div>
                            
                            <div class="blood-groups-info mb-3">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <small class="text-muted">Blood Groups:</small>
                                    <span class="badge bg-success">2 types</span>
                                </div>
                                <div class="blood-groups-list">
                                    <span class="badge bg-danger bg-opacity-75 me-1 mb-1">A+</span>
                                    <span class="badge bg-danger bg-opacity-75 me-1 mb-1">B+</span>
                                </div>
                            </div>
                                                        
                            <a href="guids.php?blood_group=in Chennai" 
                               class="btn btn-danger">
                                <i class="bi bi-geo-alt"></i> View Donors
                            </a>
                        </div>
                    </div>
                </div>
                            <div class="col-lg-3 col-md-6">
                    <div class="city-card card border-0 shadow-sm h-100">
                        <div class="card-body text-center p-4">
                            <div class="city-rank mb-3">
                                <span class="badge bg-danger fs-5 px-3 py-2 rounded-pill">#6</span>
                            </div>
                            <h5 class="city-name mb-2">New Delhi</h5>
                            <p class="state-name text-muted mb-3">Delhi</p>
                            <div class="donor-count mb-3">
                                <h4 class="text-danger fw-bold">3</h4>
                                <small class="text-muted">Active Donors</small>
                            </div>
                            
                            <div class="blood-groups-info mb-3">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <small class="text-muted">Blood Groups:</small>
                                    <span class="badge bg-success">2 types</span>
                                </div>
                                <div class="blood-groups-list">
                                    <span class="badge bg-danger bg-opacity-75 me-1 mb-1">A+</span>
                                    <span class="badge bg-danger bg-opacity-75 me-1 mb-1">B+</span>
                                </div>
                            </div>
                                                        
                            <a href="guids.php?blood_group=in new-delhi" 
                               class="btn btn-danger">
                                <i class="bi bi-geo-alt"></i> View Donors
                            </a>
                        </div>
                    </div>
                </div>
                            <div class="col-lg-3 col-md-6">
                    <div class="city-card card border-0 shadow-sm h-100">
                        <div class="card-body text-center p-4">
                            <div class="city-rank mb-3">
                                <span class="badge bg-danger fs-5 px-3 py-2 rounded-pill">#7</span>
                            </div>
                            <h5 class="city-name mb-2">Lucknow</h5>
                            <p class="state-name text-muted mb-3">Uttar Pradesh</p>
                            <div class="donor-count mb-3">
                                <h4 class="text-danger fw-bold">2</h4>
                                <small class="text-muted">Active Donors</small>
                            </div>
                            
                                <div class="blood-groups-info mb-3">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <small class="text-muted">Blood Groups:</small>
                                    <span class="badge bg-success">2 types</span>
                                </div>
                                <div class="blood-groups-list">
                                    <span class="badge bg-danger bg-opacity-75 me-1 mb-1">A+</span>
                                    <span class="badge bg-danger bg-opacity-75 me-1 mb-1">B+</span>
                                </div>
                            </div>
                                                        
                            <a href="guids.php?blood_group=in lucknow" 
                               class="btn btn-danger">
                                <i class="bi bi-geo-alt"></i> View Donors
                            </a>
                        </div>
                    </div>
                </div>
                            <div class="col-lg-3 col-md-6">
                    <div class="city-card card border-0 shadow-sm h-100">
                        <div class="card-body text-center p-4">
                            <div class="city-rank mb-3">
                                <span class="badge bg-danger fs-5 px-3 py-2 rounded-pill">#8</span>
                            </div>
                            <h5 class="city-name mb-2">Srikakulam</h5>
                            <p class="state-name text-muted mb-3">Andhra Pradesh</p>
                            <div class="donor-count mb-3">
                                <h4 class="text-danger fw-bold">2</h4>
                                <small class="text-muted">Active Donors</small>
                            </div>
                            
                            <div class="blood-groups-info mb-3">
                                <div class="d-flex justify-content-between align-items-center mb-2">
                                    <small class="text-muted">Blood Groups:</small>
                                    <span class="badge bg-success">2 types</span>
                                </div>
                                <div class="blood-groups-list">
                                    <span class="badge bg-danger bg-opacity-75 me-1 mb-1">A+</span>
                                    <span class="badge bg-danger bg-opacity-75 me-1 mb-1">A-</span>
                                    </div>
                            </div>
                                                        
                            <a href="guids.php?blood_group=in Srikakulam" 
                               class="btn btn-danger">
                                <i class="bi bi-geo-alt"></i> View Donors
                            </a>
                        </div>
                    </div>
                </div>
                    </div>
    </div>
</section>

<section class="cities-by-state py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="section-title">Cities by State</h2>
            <p class="section-subtitle">Browse blood donation cities organized by state</p>
        </div>
        
        <div class="row g-4">
                            <div class="col-lg-6">
                    <div class="state-section card border-0 shadow-sm">
                        <div class="card-header bg-danger text-white">
                            <h5 class="mb-0">
                                <i class="bi bi-map me-2"></i>Delhi<span class="badge bg-warning text-dark ms-2">7 cities</span>
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="cities-list">
                                <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Delhi</h6>
                                            <small class="text-muted">6 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Delhi" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                        <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">New Delhi</h6>
                                            <small class="text-muted">3 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in new Delhi" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                        <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Ansari Nagar, New Delhi</h6>
                                            <small class="text-muted">1 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Ansari Nagar,new-delhi" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                        <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Badarpur</h6>
                                            <small class="text-muted">1 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Badarpur" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                        <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Dwarka</h6>
                                            <small class="text-muted">1 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Dwarka" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                        <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">NORTH DELHI</h6>
                                            <small class="text-muted">1 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in North-Delhi" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                        <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Uttam Nagar</h6>
                                            <small class="text-muted">1 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Uttam Nagar" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                    </div>
                        </div>
                    </div>
                </div>
                            <div class="col-lg-6">
                    <div class="state-section card border-0 shadow-sm">
                        <div class="card-header bg-danger text-white">
                            <h5 class="mb-0">
                                <i class="bi bi-map me-2"></i>Karnataka<span class="badge bg-warning text-dark ms-2">9 cities</span>
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="cities-list">
                                         <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Bengaluru</h6>
                                            <small class="text-muted">5 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Bengaluru" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                        <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Bangalore</h6>
                                            <small class="text-muted">1 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Bangalore" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Malur</h6>
                                            <small class="text-muted">1 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Malur" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Periyapattanna</h6>
                                            <small class="text-muted">1 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Periyapattanna" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Shikaripura</h6>
                                            <small class="text-muted">1 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Shikaripura" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Belagavi</h6>
                                            <small class="text-muted">0 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Belagavi" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Hubli</h6>
                                            <small class="text-muted">0 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Hubli" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Mangaluru</h6>
                                            <small class="text-muted">0 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Mangaluru" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Mysuru</h6>
                                            <small class="text-muted">0 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Mysuru" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                            </div>
                        </div>
                    </div>
                </div>
                            <div class="col-lg-6">
                    <div class="state-section card border-0 shadow-sm">
                        <div class="card-header bg-danger text-white">
                            <h5 class="mb-0">
                                <i class="bi bi-map me-2"></i>Tamil Nadu                                <span class="badge bg-warning text-dark ms-2">12 cities</span>
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="cities-list">
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Coimbatore</h6>
                                            <small class="text-muted">5 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Coimbatore" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Chennai</h6>
                                            <small class="text-muted">4 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Chennai" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Villupuram</h6>
                                            <small class="text-muted">2 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Villupuram" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Coimbatore City</h6>
                                            <small class="text-muted">1 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Coimbatore city" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Madurai</h6>
                                            <small class="text-muted">1 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Madurai" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Puducherry</h6>
                                            <small class="text-muted">1 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Puducherry" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Tuticorin</h6>
                                            <small class="text-muted">1 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Tuticorin" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">kadayanallur</h6>
                                            <small class="text-muted">1 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Kadayanallur" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">perambur</h6>
                                            <small class="text-muted">1 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Perambur" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">ulundurpet</h6>
                                            <small class="text-muted">1 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Ulundurpet" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Salem</h6>
                                            <small class="text-muted">0 donors</small>
                                        </div>
                                        <a href="Salem" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Tiruchirappalli</h6>
                                            <small class="text-muted">0 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Tiruchirappalli" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                            </div>
                        </div>
                    </div>
                </div>
                            <div class="col-lg-6">
                    <div class="state-section card border-0 shadow-sm">
                        <div class="card-header bg-danger text-white">
                            <h5 class="mb-0">
                                <i class="bi bi-map me-2"></i>Telangana                                <span class="badge bg-warning text-dark ms-2">4 cities</span>
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="cities-list">
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Hyderabad</h6>
                                            <small class="text-muted">5 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Hyderabad" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Nizamabad</h6>
                                            <small class="text-muted">1 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Nizamabad" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Secunderabad</h6>
                                            <small class="text-muted">1 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Secunderabad" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Warangal</h6>
                                            <small class="text-muted">0 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Warangal" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                            </div>
                        </div>
                    </div>
                </div>
                            <div class="col-lg-6">
                    <div class="state-section card border-0 shadow-sm">
                        <div class="card-header bg-danger text-white">
                            <h5 class="mb-0">
                                <i class="bi bi-map me-2"></i>Uttar Pradesh                                <span class="badge bg-warning text-dark ms-2">11 cities</span>
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="cities-list">
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Lucknow</h6>
                                            <small class="text-muted">2 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Lucknow" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Amroha</h6>
                                            <small class="text-muted">1 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Amroha" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Balrampur</h6>
                                            <small class="text-muted">1 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Balrampur" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Ghaziabad</h6>
                                            <small class="text-muted">1 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Ghaziabad" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Gonda</h6>
                                            <small class="text-muted">1 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Gonda" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Agra</h6>
                                            <small class="text-muted">0 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Agra" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Kanpur</h6>
                                            <small class="text-muted">0 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Kanpur" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Meerut</h6>
                                            <small class="text-muted">0 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Meerut" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Noida</h6>
                                            <small class="text-muted">0 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Noida" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Prayagraj</h6>
                                            <small class="text-muted">0 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Prayagraj" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Varanasi</h6>
                                            <small class="text-muted">0 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Varanasi" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                            </div>
                        </div>
                    </div>
                </div>
                            <div class="col-lg-6">
                    <div class="state-section card border-0 shadow-sm">
                        <div class="card-header bg-danger text-white">
                            <h5 class="mb-0">
                                <i class="bi bi-map me-2"></i>Andhra Pradesh                                <span class="badge bg-warning text-dark ms-2">14 cities</span>
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="cities-list">
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Srikakulam</h6>
                                            <small class="text-muted">2 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Srikakulam" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">ATTILI</h6>
                                            <small class="text-muted">1 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in ATTILI" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Chodavaram</h6>
                                            <small class="text-muted">1 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Chodavaram" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Dr.YSR District</h6>
                                            <small class="text-muted">1 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Dr.YSR District" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Guntur</h6>
                                            <small class="text-muted">1 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Guntur" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Kadapa</h6>
                                            <small class="text-muted">1 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Kadapa" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Narsipatanam</h6>
                                            <small class="text-muted">1 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Narsipatanam" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Proddatur</h6>
                                            <small class="text-muted">1 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Proddatur" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">TEKKALI</h6>
                                            <small class="text-muted">1 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in TEKKALI" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Visakhapatnam</h6>
                                            <small class="text-muted">1 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Visakhapatnam" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">anakapalli</h6>
                                            <small class="text-muted">1 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Anakapalli" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">kurnool</h6>
                                            <small class="text-muted">1 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Kurnool" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Tirupati</h6>
                                            <small class="text-muted">0 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Tirupati" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Vijayawada</h6>
                                            <small class="text-muted">0 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Vijayawada" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                            </div>
                        </div>
                    </div>
                </div>
                            <div class="col-lg-6">
                    <div class="state-section card border-0 shadow-sm">
                        <div class="card-header bg-danger text-white">
                            <h5 class="mb-0">
                                <i class="bi bi-map me-2"></i>Kerala                                <span class="badge bg-warning text-dark ms-2">8 cities</span>
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="cities-list">
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Adoor</h6>
                                            <small class="text-muted">1 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Adoor" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Kozhikode</h6>
                                            <small class="text-muted">1 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Kozhikode" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Sasthamcotta</h6>
                                            <small class="text-muted">1 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Sasthamcotta" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">kerala</h6>
                                            <small class="text-muted">1 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Kerala" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">kwarhti</h6>
                                            <small class="text-muted">1 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Kwarhti" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Kochi</h6>
                                            <small class="text-muted">0 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Kochi" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Thiruvananthapuram</h6>
                                            <small class="text-muted">0 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Thiruvananthapuram" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Thrissur</h6>
                                            <small class="text-muted">0 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Thrissur" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                            </div>
                        </div>
                    </div>
                </div>
                            <div class="col-lg-6">
                    <div class="state-section card border-0 shadow-sm">
                        <div class="card-header bg-danger text-white">
                            <h5 class="mb-0">
                                <i class="bi bi-map me-2"></i>Goa                                <span class="badge bg-warning text-dark ms-2">3 cities</span>
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="cities-list">
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Aganas</h6>
                                            <small class="text-muted">1 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Aganas" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Margao</h6>
                                            <small class="text-muted">0 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Margao" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Panaji</h6>
                                            <small class="text-muted">0 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Panaji" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                            </div>
                        </div>
                    </div>
                </div>
                            <div class="col-lg-6">
                    <div class="state-section card border-0 shadow-sm">
                        <div class="card-header bg-danger text-white">
                            <h5 class="mb-0">
                                <i class="bi bi-map me-2"></i>Odisha                                <span class="badge bg-warning text-dark ms-2">6 cities</span>
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="cities-list">
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">BHUBANESWAR</h6>
                                            <small class="text-muted">1 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Bhubaneswar" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Bhadrak</h6>
                                            <small class="text-muted">1 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Bhadrak" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Dhenkanal</h6>
                                            <small class="text-muted">1 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Dhenkanal" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Ghatikia, Bhubaneshwar</h6>
                                            <small class="text-muted">1 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Ghatikia, Bhubaneshwar" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Rourkela</h6>
                                            <small class="text-muted">1 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Rourkela" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Cuttack</h6>
                                            <small class="text-muted">0 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Cuttack" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                            </div>
                        </div>
                    </div>
                </div>
                            <div class="col-lg-6">
                    <div class="state-section card border-0 shadow-sm">
                        <div class="card-header bg-danger text-white">
                            <h5 class="mb-0">
                                <i class="bi bi-map me-2"></i>Punjab                                <span class="badge bg-warning text-dark ms-2">4 cities</span>
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="cities-list">
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">CHANDIGARH</h6>
                                            <small class="text-muted">1 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in CHANDIGARH" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Amritsar</h6>
                                            <small class="text-muted">0 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Amritsar" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Jalandhar</h6>
                                            <small class="text-muted">0 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Jalandhar" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Ludhiana</h6>
                                            <small class="text-muted">0 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Ludhiana" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                            </div>
                        </div>
                    </div>
                </div>
                            <div class="col-lg-6">
                    <div class="state-section card border-0 shadow-sm">
                        <div class="card-header bg-danger text-white">
                            <h5 class="mb-0">
                                <i class="bi bi-map me-2"></i>Madhya Pradesh                                <span class="badge bg-warning text-dark ms-2">6 cities</span>
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="cities-list">
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Dabra</h6>
                                            <small class="text-muted">1 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Dabra" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Gwalior</h6>
                                            <small class="text-muted">1 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Gwalior" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">INDORE</h6>
                                            <small class="text-muted">1 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in INDORE" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">ujjain</h6>
                                            <small class="text-muted">1 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Ujjain" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Bhopal</h6>
                                            <small class="text-muted">0 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Bhopal" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Jabalpur</h6>
                                            <small class="text-muted">0 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Jabalpur" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                            </div>
                        </div>
                    </div>
                </div>
                            <div class="col-lg-6">
                    <div class="state-section card border-0 shadow-sm">
                        <div class="card-header bg-danger text-white">
                            <h5 class="mb-0">
                                <i class="bi bi-map me-2"></i>Rajasthan                                <span class="badge bg-warning text-dark ms-2">6 cities</span>
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="cities-list">
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Dausa</h6>
                                            <small class="text-muted">1 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Dausa" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Ajmer</h6>
                                            <small class="text-muted">0 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Ajmer" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Jaipur</h6>
                                            <small class="text-muted">0 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Jaipur" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Jodhpur</h6>
                                            <small class="text-muted">0 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Jodhpur" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Kota</h6>
                                            <small class="text-muted">0 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Kota" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Udaipur</h6>
                                            <small class="text-muted">0 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Udaipur" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                            </div>
                        </div>
                    </div>
                </div>
                            <div class="col-lg-6">
                    <div class="state-section card border-0 shadow-sm">
                        <div class="card-header bg-danger text-white">
                            <h5 class="mb-0">
                                <i class="bi bi-map me-2"></i>West Bengal                                <span class="badge bg-warning text-dark ms-2">6 cities</span>
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="cities-list">
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">GANGARAMPUR</h6>
                                            <small class="text-muted">1 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in GANGARAMPUR" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">KOLKATA</h6>
                                            <small class="text-muted">1 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in KOLKATA" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Malda Town</h6>
                                            <small class="text-muted">1 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Malda Town" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Durgapur</h6>
                                            <small class="text-muted">0 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Durgapur " 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Howrah</h6>
                                            <small class="text-muted">0 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Howrah" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Siliguri</h6>
                                            <small class="text-muted">0 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Siliguri" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                            </div>
                        </div>
                    </div>
                </div>
                            <div class="col-lg-6">
                    <div class="state-section card border-0 shadow-sm">
                        <div class="card-header bg-danger text-white">
                            <h5 class="mb-0">
                                <i class="bi bi-map me-2"></i>Haryana                                <span class="badge bg-warning text-dark ms-2">5 cities</span>
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="cities-list">
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Gurugram</h6>
                                            <small class="text-muted">1 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Gurugram" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Faridabad</h6>
                                            <small class="text-muted">0 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Faridabad" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Gurgaon</h6>
                                            <small class="text-muted">0 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Gurgaon" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Panipat</h6>
                                            <small class="text-muted">0 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Panipat" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Rohtak</h6>
                                            <small class="text-muted">0 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Rohtak" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                            </div>
                        </div>
                    </div>
                </div>
                            <div class="col-lg-6">
                    <div class="state-section card border-0 shadow-sm">
                        <div class="card-header bg-danger text-white">
                            <h5 class="mb-0">
                                <i class="bi bi-map me-2"></i>Assam                                <span class="badge bg-warning text-dark ms-2">4 cities</span>
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="cities-list">
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Guwahati</h6>
                                            <small class="text-muted">1 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Guwahati" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Hshs</h6>
                                            <small class="text-muted">1 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Hshs" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Dibrugarh</h6>
                                            <small class="text-muted">0 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Dibrugarh" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Silchar</h6>
                                            <small class="text-muted">0 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Silchar" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                            </div>
                        </div>
                    </div>
                </div>
                            <div class="col-lg-6">
                    <div class="state-section card border-0 shadow-sm">
                        <div class="card-header bg-danger text-white">
                            <h5 class="mb-0">
                                <i class="bi bi-map me-2"></i>Manipur                                <span class="badge bg-warning text-dark ms-2">1 cities</span>
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="cities-list">
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Imphal</h6>
                                            <small class="text-muted">1 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Imphal" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                            </div>
                        </div>
                    </div>
                </div>
                            <div class="col-lg-6">
                    <div class="state-section card border-0 shadow-sm">
                        <div class="card-header bg-danger text-white">
                            <h5 class="mb-0">
                                <i class="bi bi-map me-2"></i>Jharkhand                                <span class="badge bg-warning text-dark ms-2">4 cities</span>
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="cities-list">
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">JAMSHEDPUR</h6>
                                            <small class="text-muted">1 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in JAMSHEDPUR" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">NA</h6>
                                            <small class="text-muted">1 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in NA" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Dhanbad</h6>
                                            <small class="text-muted">0 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Dhanbad" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Ranchi</h6>
                                            <small class="text-muted">0 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Ranchi" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                            </div>
                        </div>
                    </div>
                </div>
                            <div class="col-lg-6">
                    <div class="state-section card border-0 shadow-sm">
                        <div class="card-header bg-danger text-white">
                            <h5 class="mb-0">
                                <i class="bi bi-map me-2"></i>Maharashtra                                <span class="badge bg-warning text-dark ms-2">8 cities</span>
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="cities-list">
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Mumbai</h6>
                                            <small class="text-muted">1 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Mumbai" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Navi Mumbai</h6>
                                            <small class="text-muted">1 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Navi Mumbai" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Panvel</h6>
                                            <small class="text-muted">1 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Panvel" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Aurangabad</h6>
                                            <small class="text-muted">0 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Aurangabad" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Nagpur</h6>
                                            <small class="text-muted">0 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Nagpur" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Nashik</h6>
                                            <small class="text-muted">0 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Nashik" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Pune</h6>
                                            <small class="text-muted">0 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Pune" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Thane</h6>
                                            <small class="text-muted">0 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Thane" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                            </div>
                        </div>
                    </div>
                </div>
                            <div class="col-lg-6">
                    <div class="state-section card border-0 shadow-sm">
                        <div class="card-header bg-danger text-white">
                            <h5 class="mb-0">
                                <i class="bi bi-map me-2"></i>Himachal Pradesh                                <span class="badge bg-warning text-dark ms-2">3 cities</span>
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="cities-list">
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">PALAMPUR</h6>
                                            <small class="text-muted">1 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in PALAMPUR" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Dharamshala</h6>
                                            <small class="text-muted">0 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Dharamshala" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Shimla</h6>
                                            <small class="text-muted">0 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Shimla" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                            </div>
                        </div>
                    </div>
                </div>
                            <div class="col-lg-6">
                    <div class="state-section card border-0 shadow-sm">
                        <div class="card-header bg-danger text-white">
                            <h5 class="mb-0">
                                <i class="bi bi-map me-2"></i>Gujarat                                <span class="badge bg-warning text-dark ms-2">5 cities</span>
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="cities-list">
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Surat</h6>
                                            <small class="text-muted">1 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Surat" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Ahmedabad</h6>
                                            <small class="text-muted">0 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Ahmedabad" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Bhavnagar</h6>
                                            <small class="text-muted">0 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Bhavnagar" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Rajkot</h6>
                                            <small class="text-muted">0 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Rajkot" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Vadodara</h6>
                                            <small class="text-muted">0 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Vadodara" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                            </div>
                        </div>
                    </div>
                </div>
                            <div class="col-lg-6">
                    <div class="state-section card border-0 shadow-sm">
                        <div class="card-header bg-danger text-white">
                            <h5 class="mb-0">
                                <i class="bi bi-map me-2"></i>Chhattisgarh                                <span class="badge bg-warning text-dark ms-2">3 cities</span>
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="cities-list">
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">bhilai</h6>
                                            <small class="text-muted">1 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Bhilai" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Bilaspur</h6>
                                            <small class="text-muted">0 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Bilaspur" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Raipur</h6>
                                            <small class="text-muted">0 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Raipur" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                            </div>
                        </div>
                    </div>
                </div>
                            <div class="col-lg-6">
                    <div class="state-section card border-0 shadow-sm">
                        <div class="card-header bg-danger text-white">
                            <h5 class="mb-0">
                                <i class="bi bi-map me-2"></i>Tripura                                <span class="badge bg-warning text-dark ms-2">1 cities</span>
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="cities-list">
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Agartala</h6>
                                            <small class="text-muted">0 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Agartala" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                            </div>
                        </div>
                    </div>
                </div>
                            <div class="col-lg-6">
                    <div class="state-section card border-0 shadow-sm">
                        <div class="card-header bg-danger text-white">
                            <h5 class="mb-0">
                                <i class="bi bi-map me-2"></i>Mizoram                                <span class="badge bg-warning text-dark ms-2">1 cities</span>
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="cities-list">
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Aizawl</h6>
                                            <small class="text-muted">0 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Aizawl" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                            </div>
                        </div>
                    </div>
                </div>
                            <div class="col-lg-6">
                    <div class="state-section card border-0 shadow-sm">
                        <div class="card-header bg-danger text-white">
                            <h5 class="mb-0">
                                <i class="bi bi-map me-2"></i>Uttarakhand                                <span class="badge bg-warning text-dark ms-2">2 cities</span>
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="cities-list">
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Dehradun</h6>
                                            <small class="text-muted">0 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Dehradun" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Haridwar</h6>
                                            <small class="text-muted">0 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Haridwar" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                            </div>
                        </div>
                    </div>
                </div>
                            <div class="col-lg-6">
                    <div class="state-section card border-0 shadow-sm">
                        <div class="card-header bg-danger text-white">
                            <h5 class="mb-0">
                                <i class="bi bi-map me-2"></i>Sikkim                                <span class="badge bg-warning text-dark ms-2">1 cities</span>
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="cities-list">
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Gangtok</h6>
                                            <small class="text-muted">0 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Gangtok" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                            </div>
                        </div>
                    </div>
                </div>
                            <div class="col-lg-6">
                    <div class="state-section card border-0 shadow-sm">
                        <div class="card-header bg-danger text-white">
                            <h5 class="mb-0">
                                <i class="bi bi-map me-2"></i>Bihar                                <span class="badge bg-warning text-dark ms-2">3 cities</span>
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="cities-list">
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Gaya</h6>
                                            <small class="text-muted">0 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Gaya" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Muzaffarpur</h6>
                                            <small class="text-muted">0 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Muzaffarpur" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Patna</h6>
                                            <small class="text-muted">0 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Patna" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                            </div>
                        </div>
                    </div>
                </div>
                            <div class="col-lg-6">
                    <div class="state-section card border-0 shadow-sm">
                        <div class="card-header bg-danger text-white">
                            <h5 class="mb-0">
                                <i class="bi bi-map me-2"></i>Arunachal Pradesh                                <span class="badge bg-warning text-dark ms-2">1 cities</span>
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="cities-list">
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Itanagar</h6>
                                            <small class="text-muted">0 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Itanagar" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                            </div>
                        </div>
                    </div>
                </div>
                            <div class="col-lg-6">
                    <div class="state-section card border-0 shadow-sm">
                        <div class="card-header bg-danger text-white">
                            <h5 class="mb-0">
                                <i class="bi bi-map me-2"></i>Jammu and Kashmir                                <span class="badge bg-warning text-dark ms-2">2 cities</span>
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="cities-list">
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Jammu</h6>
                                            <small class="text-muted">0 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Jammu" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Srinagar</h6>
                                            <small class="text-muted">0 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Srinagar" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                            </div>
                        </div>
                    </div>
                </div>
                            <div class="col-lg-6">
                    <div class="state-section card border-0 shadow-sm">
                        <div class="card-header bg-danger text-white">
                            <h5 class="mb-0">
                                <i class="bi bi-map me-2"></i>Nagaland                                <span class="badge bg-warning text-dark ms-2">1 cities</span>
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="cities-list">
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Kohima</h6>
                                            <small class="text-muted">0 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Kohima" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                            </div>
                        </div>
                    </div>
                </div>
                            <div class="col-lg-6">
                    <div class="state-section card border-0 shadow-sm">
                        <div class="card-header bg-danger text-white">
                            <h5 class="mb-0">
                                <i class="bi bi-map me-2"></i>Ladakh                                <span class="badge bg-warning text-dark ms-2">1 cities</span>
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="cities-list">
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Leh</h6>
                                            <small class="text-muted">0 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Leh" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                            </div>
                        </div>
                    </div>
                </div>
                            <div class="col-lg-6">
                    <div class="state-section card border-0 shadow-sm">
                        <div class="card-header bg-danger text-white">
                            <h5 class="mb-0">
                                <i class="bi bi-map me-2"></i>Meghalaya                                <span class="badge bg-warning text-dark ms-2">1 cities</span>
                            </h5>
                        </div>
                        <div class="card-body">
                            <div class="cities-list">
                                                                    <div class="city-item d-flex justify-content-between align-items-center mb-2">
                                        <div>
                                            <h6 class="mb-0">Shillong</h6>
                                            <small class="text-muted">0 donors</small>
                                        </div>
                                        <a href="guids.php?blood_group=in Shillong" 
                                           class="btn btn-outline-primary btn-sm">
                                            View
                                        </a>
                                    </div>
                                                            </div>
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
                <h2 class="mb-3">Don't See Your City?</h2>
                <p class="lead mb-0">
                    Help us expand our network! Register as a donor and be the first blood donor 
                    representative from your city.
                </p>
            </div>
            <div class="col-lg-4 mt-4 mt-lg-0">
                <div class="d-grid gap-2">
                    <a href="register.php" class="btn btn-warning btn-lg">
                        <i class="bi bi-heart"></i> Become a Donor
                    </a>
                    <a href="contact.php" class="btn btn-outline-light">
                        <i class="bi bi-envelope"></i> Contact Us
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="/assets/js/main.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // City search functionality
    const citySearch = document.getElementById('citySearch');
    const cityCards = document.querySelectorAll('.city-card, .city-item');
    
    citySearch.addEventListener('input', function() {
        const searchTerm = this.value.toLowerCase();
        
        cityCards.forEach(card => {
            const cityName = card.querySelector('.city-name, h6')?.textContent.toLowerCase() || '';
            const stateName = card.querySelector('.state-name, .text-muted')?.textContent.toLowerCase() || '';
            
            if (cityName.includes(searchTerm) || stateName.includes(searchTerm)) {
                card.closest('.col-lg-3, .col-lg-6')?.style.setProperty('display', 'block');
                card.style.display = 'flex';
            } else {
                card.closest('.col-lg-3, .col-lg-6')?.style.setProperty('display', 'none');
                card.style.display = 'none';
            }
        });
    });
});
</script>

<!-- JSON-LD for SEO -->
    <script type="application/ld+json">{
    "@context": "https://schema.org",
    "@type": "ItemList",
    "url": "https://blooddonor.in/cities",
    "name": "Blood Donation Cities",
    "description": "Blood donation platform",
    "provider": {
        "@type": "Organization",
        "name": "BloodDonor.in",
        "url": "https://blooddonor.in",
        "logo": "https://blooddonor.in/assets/images/logo.png",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "4, Kalangal Road, Sulur",
            "addressLocality": "Coimbatore",
            "addressRegion": "Tamil Nadu",
            "addressCountry": "IN"
        },
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+91-9585160363",
            "contactType": "customer service",
            "areaServed": "IN",
            "availableLanguage": [
                "English",
                "Hindi",
                "Tamil"
            ]
        }
    },
    "numberOfItems": 143,
    "itemListElement": [
        {
            "@type": "Place",
            "position": 1,
            "name": "Delhi, Delhi",
            "url": "https://blooddonor.in/delhi/delhi",
            "description": "Find blood donors in Delhi, Delhi. 6 active donors available.",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Delhi",
                "addressRegion": "Delhi",
                "addressCountry": "IN"
            }
        },
        {
            "@type": "Place",
            "position": 2,
            "name": "Bengaluru, Karnataka",
            "url": "https://blooddonor.in/karnataka/bengaluru",
            "description": "Find blood donors in Bengaluru, Karnataka. 5 active donors available.",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Bengaluru",
                "addressRegion": "Karnataka",
                "addressCountry": "IN"
            }
        },
        {
            "@type": "Place",
            "position": 3,
            "name": "Coimbatore, Tamil Nadu",
            "url": "https://blooddonor.in/tamil-nadu/coimbatore",
            "description": "Find blood donors in Coimbatore, Tamil Nadu. 5 active donors available.",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Coimbatore",
                "addressRegion": "Tamil Nadu",
                "addressCountry": "IN"
            }
        },
        {
            "@type": "Place",
            "position": 4,
            "name": "Hyderabad, Telangana",
            "url": "https://blooddonor.in/telangana/hyderabad",
            "description": "Find blood donors in Hyderabad, Telangana. 5 active donors available.",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Hyderabad",
                "addressRegion": "Telangana",
                "addressCountry": "IN"
            }
        },
        {
            "@type": "Place",
            "position": 5,
            "name": "Chennai, Tamil Nadu",
            "url": "https://blooddonor.in/tamil-nadu/chennai",
            "description": "Find blood donors in Chennai, Tamil Nadu. 4 active donors available.",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Chennai",
                "addressRegion": "Tamil Nadu",
                "addressCountry": "IN"
            }
        },
        {
            "@type": "Place",
            "position": 6,
            "name": "New Delhi, Delhi",
            "url": "https://blooddonor.in/delhi/new-delhi",
            "description": "Find blood donors in New Delhi, Delhi. 3 active donors available.",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "New Delhi",
                "addressRegion": "Delhi",
                "addressCountry": "IN"
            }
        },
        {
            "@type": "Place",
            "position": 7,
            "name": "Lucknow, Uttar Pradesh",
            "url": "https://blooddonor.in/uttar-pradesh/lucknow",
            "description": "Find blood donors in Lucknow, Uttar Pradesh. 2 active donors available.",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Lucknow",
                "addressRegion": "Uttar Pradesh",
                "addressCountry": "IN"
            }
        },
        {
            "@type": "Place",
            "position": 8,
            "name": "Srikakulam, Andhra Pradesh",
            "url": "https://blooddonor.in/andhra-pradesh/srikakulam",
            "description": "Find blood donors in Srikakulam, Andhra Pradesh. 2 active donors available.",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Srikakulam",
                "addressRegion": "Andhra Pradesh",
                "addressCountry": "IN"
            }
        },
        {
            "@type": "Place",
            "position": 9,
            "name": "Villupuram, Tamil Nadu",
            "url": "https://blooddonor.in/tamil-nadu/villupuram",
            "description": "Find blood donors in Villupuram, Tamil Nadu. 2 active donors available.",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Villupuram",
                "addressRegion": "Tamil Nadu",
                "addressCountry": "IN"
            }
        },
        {
            "@type": "Place",
            "position": 10,
            "name": "ATTILI, Andhra Pradesh",
            "url": "https://blooddonor.in/andhra-pradesh/attili",
            "description": "Find blood donors in ATTILI, Andhra Pradesh. 1 active donors available.",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "ATTILI",
                "addressRegion": "Andhra Pradesh",
                "addressCountry": "IN"
            }
        },
        {
            "@type": "Place",
            "position": 11,
            "name": "Adoor, Kerala",
            "url": "https://blooddonor.in/kerala/adoor",
            "description": "Find blood donors in Adoor, Kerala. 1 active donors available.",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Adoor",
                "addressRegion": "Kerala",
                "addressCountry": "IN"
            }
        },
        {
            "@type": "Place",
            "position": 12,
            "name": "Aganas, Goa",
            "url": "https://blooddonor.in/goa/aganas",
            "description": "Find blood donors in Aganas, Goa. 1 active donors available.",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Aganas",
                "addressRegion": "Goa",
                "addressCountry": "IN"
            }
        },
        {
            "@type": "Place",
            "position": 13,
            "name": "Amroha, Uttar Pradesh",
            "url": "https://blooddonor.in/uttar-pradesh/amroha",
            "description": "Find blood donors in Amroha, Uttar Pradesh. 1 active donors available.",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Amroha",
                "addressRegion": "Uttar Pradesh",
                "addressCountry": "IN"
            }
        },
        {
            "@type": "Place",
            "position": 14,
            "name": "Ansari Nagar, New Delhi, Delhi",
            "url": "https://blooddonor.in/delhi/ansari-nagar,-new-delhi",
            "description": "Find blood donors in Ansari Nagar, New Delhi, Delhi. 1 active donors available.",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Ansari Nagar, New Delhi",
                "addressRegion": "Delhi",
                "addressCountry": "IN"
            }
        },
        {
            "@type": "Place",
            "position": 15,
            "name": "BHUBANESWAR, Odisha",
            "url": "https://blooddonor.in/odisha/bhubaneswar",
            "description": "Find blood donors in BHUBANESWAR, Odisha. 1 active donors available.",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "BHUBANESWAR",
                "addressRegion": "Odisha",
                "addressCountry": "IN"
            }
        },
        {
            "@type": "Place",
            "position": 16,
            "name": "Badarpur, Delhi",
            "url": "https://blooddonor.in/delhi/badarpur",
            "description": "Find blood donors in Badarpur, Delhi. 1 active donors available.",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Badarpur",
                "addressRegion": "Delhi",
                "addressCountry": "IN"
            }
        },
        {
            "@type": "Place",
            "position": 17,
            "name": "Balrampur, Uttar Pradesh",
            "url": "https://blooddonor.in/uttar-pradesh/balrampur",
            "description": "Find blood donors in Balrampur, Uttar Pradesh. 1 active donors available.",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Balrampur",
                "addressRegion": "Uttar Pradesh",
                "addressCountry": "IN"
            }
        },
        {
            "@type": "Place",
            "position": 18,
            "name": "Bangalore, Karnataka",
            "url": "https://blooddonor.in/karnataka/bangalore",
            "description": "Find blood donors in Bangalore, Karnataka. 1 active donors available.",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Bangalore",
                "addressRegion": "Karnataka",
                "addressCountry": "IN"
            }
        },
        {
            "@type": "Place",
            "position": 19,
            "name": "Bhadrak, Odisha",
            "url": "https://blooddonor.in/odisha/bhadrak",
            "description": "Find blood donors in Bhadrak, Odisha. 1 active donors available.",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "Bhadrak",
                "addressRegion": "Odisha",
                "addressCountry": "IN"
            }
        },
        {
            "@type": "Place",
            "position": 20,
            "name": "CHANDIGARH, Punjab",
            "url": "https://blooddonor.in/punjab/chandigarh",
            "description": "Find blood donors in CHANDIGARH, Punjab. 1 active donors available.",
            "address": {
                "@type": "PostalAddress",
                "addressLocality": "CHANDIGARH",
                "addressRegion": "Punjab",
                "addressCountry": "IN"
            }
        }
    ]
}</script>
<!-- Analytics Tracking for Cities Page -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Cities page specific analytics
    const citiesAnalytics = {"page_type":"cities_listing","total_cities":143,"total_states":31,"total_donors":99,"top_cities":["Delhi","Bengaluru","Coimbatore","Hyderabad","Chennai","New Delhi","Lucknow","Srikakulam","Villupuram","ATTILI"],"blood_group_coverage":{"0":"A+","1":"B+","2":"AB+","3":"O+","10":"O-","22":"A-","36":"AB-","47":"B-","90":""}};
    
    // Track cities page view with enhanced data
    if (typeof analyticsTracker !== 'undefined') {
        // Track cities page view
        analyticsTracker.trackPageView({
            page_title: document.title,
            page_url: window.location.pathname + window.location.search,
            page_type: 'cities_listing',
            cities_data: citiesAnalytics
        });
        
        // Track city search interactions
        const citySearch = document.getElementById('citySearch');
        if (citySearch) {
            citySearch.addEventListener('input', function() {
                const searchTerm = this.value.toLowerCase();
                if (searchTerm.length >= 2) {
                    analyticsTracker.trackEvent('city_search_input', {
                        search_term: searchTerm,
                        cities_data: citiesAnalytics
                    });
                }
            });
        }
        
        // Track city card interactions
        const cityCards = document.querySelectorAll('.city-card, .city-item');
        cityCards.forEach((card, index) => {
            card.addEventListener('click', function() {
                const cityName = this.querySelector('.city-name, h6')?.textContent || '';
                const stateName = this.querySelector('.state-name, .text-muted')?.textContent || '';
                const donorCount = this.querySelector('.donor-count, .badge')?.textContent || '';
                
                analyticsTracker.trackEvent('city_card_click', {
                    city_name: cityName,
                    state_name: stateName,
                    donor_count: donorCount,
                    card_index: index,
                    cities_data: citiesAnalytics
                });
            });
        });
        
        // Track city listing engagement
        analyticsTracker.trackEvent('cities_listing_viewed', {
            total_cities: citiesAnalytics.total_cities,
            total_states: citiesAnalytics.total_states,
            total_donors: citiesAnalytics.total_donors,
            cities_data: citiesAnalytics
        });
        
        // Track scroll depth on cities page
        let maxScrollDepth = 0;
        window.addEventListener('scroll', function() {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            const windowHeight = window.innerHeight;
            const documentHeight = document.documentElement.scrollHeight;
            const scrollPercentage = Math.round((scrollTop / (documentHeight - windowHeight)) * 100);
            
            if (scrollPercentage > maxScrollDepth) {
                maxScrollDepth = scrollPercentage;
                
                // Track scroll milestones
                if (maxScrollDepth >= 25 && maxScrollDepth < 50) {
                    analyticsTracker.trackEvent('cities_scroll_25', citiesAnalytics);
                } else if (maxScrollDepth >= 50 && maxScrollDepth < 75) {
                    analyticsTracker.trackEvent('cities_scroll_50', citiesAnalytics);
                } else if (maxScrollDepth >= 75 && maxScrollDepth < 100) {
                    analyticsTracker.trackEvent('cities_scroll_75', citiesAnalytics);
                } else if (maxScrollDepth >= 100) {
                    analyticsTracker.trackEvent('cities_scroll_100', citiesAnalytics);
                }
            }
        });
    }
});

document.addEventListener('DOMContentLoaded', function() {
    const navbar = document.querySelector('.navbar');
    
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
    
    const currentPage = 'cities';
    const navLinks2 = document.querySelectorAll('.navbar-nav .nav-link');
    
    navLinks2.forEach(link => {
        if (link.getAttribute('href') === `/${currentPage}.php` || 
            (currentPage === 'index' && link.getAttribute('href') === '/')) {
            link.classList.add('active');
            link.setAttribute('aria-current', 'page');
        }
    });
    
    const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
    const navCollapse = document.querySelector('.navbar-collapse');
    
    navLinks.forEach(link => {
        link.addEventListener('click', () => {
            if (navCollapse.classList.contains('show')) {
                const bsCollapse = new bootstrap.Collapse(navCollapse);
                bsCollapse.hide();
            }
        });
    });
    
    const dropdownElementList = [].slice.call(document.querySelectorAll('.dropdown-toggle'));
    const dropdownList = dropdownElementList.map(function (dropdownToggleEl) {
        return new bootstrap.Dropdown(dropdownToggleEl);
    });
    
    const dropdownMenus = document.querySelectorAll('.dropdown-menu');
    dropdownMenus.forEach(menu => {
        menu.addEventListener('click', function(e) {
            if (e.target.classList.contains('dropdown-item')) {
                const navCollapse = document.querySelector('.navbar-collapse');
                if (navCollapse && navCollapse.classList.contains('show')) {
                    const bsCollapse = new bootstrap.Collapse(navCollapse);
                    bsCollapse.hide();
                }
            }
        });
    });
});
</script>


</body>
</html>


<?php include "footer.php" ?>

