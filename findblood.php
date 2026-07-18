<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Find Blood Donors | Search by Location & Blood Group | BloodDonor.in</title>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/b2ca557543.js" crossorigin="anonymous"></script>

<style>
.bg-gradient-primary {
background: linear-gradient(135deg, #dc2626 0%, #991b1b 100%);
}
.btn-primary{
    background-color: #dc2626;
}
.text-white-75 {
color: rgba(255, 255, 255, 0.75) !important;
}

.section-title {
color: #1f2937;
font-size: 2.5rem;
font-weight: 700;
}

.donor-card {
transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.donor-card:hover {
transform: translateY(-5px);
box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
}

.donor-avatar {
width: 60px;
height: 60px;
display: flex;
align-items: center;
justify-content-center;
font-size: 1.5rem;
font-weight: bold;
}

.compatibility-table .table {
border-radius: 8px;
overflow: hidden;
}

.compatibility-table .table th {
background-color: #1f2937;
border-color: #374151;
}

.no-results i {
opacity: 0.3;
}


</style>
</head>
<body>
   <?php include "nav.php"; ?>


<div class="navbar-spacer"></div>

<style>

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
height: 76px; /* Adjust based on navbar height */
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



.navbar-collapse {
transition: all 0.3s ease-in-out;
}

.navbar.scrolled {
background: rgba(153, 27, 27, 0.95) !important;
backdrop-filter: blur(10px);
}



.navbar-brand.loading {
animation: pulse-brand 2s infinite;
}
</style>


<section class="search-hero py-5 bg-gradient-primary">
<div class="container">
<div class="text-center text-white">
<h1 class="display-4 fw-bold mb-4">
Find Blood Donors
</h1>
<p class="lead mb-4">
Connect with verified blood donors in your area for emergency blood requirements
</p>

<div class="search-stats">
<div class="row g-4 justify-content-center">
<div class="col-auto">
<div class="stat-item text-center">
  <?PHP
    include_once 'db_conn.php';
    $donor_count_query = "SELECT COUNT(*) FROM users WHERE available = 1";
    $db_donor_count = mysqli_query($conn, $donor_count_query); 
    $donor_count = mysqli_fetch_row($db_donor_count)[0];
  ?>
<h3 class="fw-bold text-warning mb-1">x</h3>
<small class="text-white-75">Donors Found</small>
</div>
</div>
<div class="col-auto">
<div class="stat-item text-center">
<h3 class="fw-bold text-warning mb-1">0+</h3>
<small class="text-white-75">Verified</small>
</div>
</div>
<div class="col-auto">
<div class="stat-item text-center">
<h3 class="fw-bold text-warning mb-1">24/7</h3>
<small class="text-white-75">Available</small>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="search-filters py-4 bg-light border-bottom">
<div class="container">
<form method="GET" action="/search" class="search-form">
<div class="row g-3">
<div class="col-lg-2 col-md-6">
<label for="blood_group" class="form-label fw-semibold">Blood Group</label>
<select name="bg" id="blood_group" class="form-select">
<option value="" 
>
All Groups                            
</option>
<option value="A+" 
>
A+                            
</option>
<option value="A-" 
>
A-                            
</option>
<option value="B+" 
>
B+                            
</option>
<option value="B-" 
>
B-                            
</option>
<option value="AB+" 
>
AB+                            
</option>
<option value="AB-" 
>
AB-                            
</option>
<option value="O+" 
>
O+                            
</option>
<option value="O-" 
>
O-                           
 </option>
</select>
</div>

<div class="col-lg-2 col-md-6">
<label for="city" class="form-label fw-semibold">City</label>
<input type="text" name="c" id="city" class="form-control" 
placeholder="Enter city" value="">
</div>

<div class="col-lg-2 col-md-6">
<label for="area" class="form-label fw-semibold">Area</label>
<input type="text" name="a" id="area" class="form-control" 
placeholder="Enter area" value="">
</div>

<div class="col-lg-2 col-md-6">
<label for="state" class="form-label fw-semibold">State</label>
<select name="s" id="state" class="form-select">
<option value="" 
>
All States                            
</option>
<option value="Andhra Pradesh" 
>
Andhra Pradesh                            
</option>
<option value="Arunachal Pradesh" 
>
Arunachal Pradesh                           
 </option>
<option value="Assam" 
>
Assam                            
</option>
<option value="Bihar" 
>
Bihar                            
</option>
<option value="Chhattisgarh" 
>
Chhattisgarh                           
 </option>
<option value="Goa" 
>
Goa                            
</option>
<option value="Gujarat" 
>
Gujarat                            
</option>
<option value="Haryana" 
>
Haryana                            
</option>
<option value="Himachal Pradesh" 
>
Himachal Pradesh                           
 </option>
<option value="Jharkhand" 
>
Jharkhand                            
</option>
<option value="Karnataka" 
>
Karnataka                            
</option>
<option value="Kerala" 
>
Kerala                            
</option>
<option value="Madhya Pradesh" 
>
Madhya Pradesh                           
 </option>
<option value="Maharashtra" 
>
Maharashtra                            
</option>
<option value="Manipur" 
>
Manipur                            
</option>
<option value="Meghalaya" 
>
Meghalaya                            
</option>
<option value="Mizoram" 
>
Mizoram                            
</option>
<option value="Nagaland" 
>
Nagaland                           
 </option>
<option value="Odisha" 
>
Odisha                            
</option>
<option value="Punjab" 
>
Punjab                            
</option>
<option value="Rajasthan" 
>
Rajasthan                            
</option>
<option value="Sikkim" 
>
Sikkim                            
</option>
<option value="Tamil Nadu" 
>
Tamil Nadu                            
</option>
<option value="Telangana" 
>
Telangana                            
</option>
<option value="Tripura" 
>
Tripura                            
</option>
<option value="Uttar Pradesh" 
>
Uttar Pradesh                           
 </option>
<option value="Uttarakhand" 
>
Uttarakhand                           
 </option>
<option value="West Bengal" 
>
West Bengal                           
 </option>
<option value="Delhi" 
>
Delhi                            
</option>
<option value="Jammu and Kashmir" 
>
Jammu and Kashmir                            
</option>
<option value="Ladakh" 
>
Ladakh                            
</option>
</select>
</div>

<div class="col-lg-2 col-md-6">
<label for="availability" class="form-label fw-semibold">Availability</label>
<select name="av" id="availability" class="form-select">
<option value="">All Donors</option>
<option value="Available Now" >
Available Now
</option>
</select>
</div>

<div class="col-lg-2 col-md-6 d-flex align-items-end">
<button type="submit" class="btn btn-primary w-100">
<i class="bi bi-search me-2"></i>Search
</button>
</div>
</div>
</form>
</div>
</section>


<section class="search-results py-5">
  <div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
      <h2 class="section-title mb-0">
        <i class="bi bi-people-fill me-2 text-danger"></i>
        Search Results
        <span class="badge bg-danger ms-2">50 donors found</span>
      </h2>
      <div class="d-flex gap-2">
        <a href="/request-blood" class="btn btn-outline-danger">
          <i class="bi bi-plus-circle me-2"></i>Request Blood
        </a>
        <a href="/register?role=donor" class="btn btn-success">
          <i class="bi bi-heart me-2"></i>Become Donor
        </a>
      </div>
    </div>
    
    <div class='row g-4'>
      <?PHP
        include_once 'db_conn.php';
        function calculateAge($dob) {
            $dobObj = DateTime::createFromFormat('Y-m-d', $dob);
            $errors = DateTime::getLastErrors();
            if ($errors['warning_count'] > 0 || $errors['error_count'] > 0) {
                return "Invalid date format. Use YYYY-MM-DD.";
            }
            $today = new DateTime();
            if ($dobObj > $today) {
                return "update your Date of birth.";
            }
            $age = $today->diff($dobObj);
            return $age->y . " years";
        }
        $sql_get_donor_data_query = "SELECT blood_group,fullname,gender,dob, state, district, city, locality
                                    FROM users";
        $donor_db_data = mysqli_query($conn, $sql_get_donor_data_query);
        if(mysqli_num_rows($donor_db_data) > 0){
          while($row = mysqli_fetch_assoc($donor_db_data)){
            $age_of_candidate = calculateAge($row['dob']);
            echo "
                <div class='col-lg-6 col-xl-4'>
                  <div class='donor-card card border-0 shadow-sm h-100'>
                    <div class='card-body p-4'>
                        <div class='d-flex align-items-start mb-3'>
                          <div class='donor-avatar bg-danger text-white rounded-circle me-3'>
                              ". $row['blood_group']."
                          </div>
                          <div class='flex-grow-1'>
                          <h5 class='card-title mb-1'>".$row['fullname']."</h5>
                          <div class='d-flex align-items-center gap-2 mb-2'>
                            <span class='badge bg-danger'>".$row['blood_group']."</span>
                          </div>
                        </div>
                      </div>
                      <div class='donor-details mb-3'>
                        <div class='row g-2'>
                          <div class='col-6'>
                            <small class='text-muted d-block'>Age</small>
                            <strong>".$age_of_candidate."</strong>
                          </div>
                        <div class='col-6'>
                          <small class='text-muted d-block'>Gender</small>
                          <strong>".$row['gender']."</strong>
                        </div>
                        <div class='col-12'>
                          <small class='text-muted d-block'>Location</small>
                          <strong>".$row['locality'].", ".$row['city'].", ".$row['district'].", ".$row['state']."</strong>
                        </div>
                      </div>
                    </div>
                    <div class='donor-actions'>
                      <div class='d-grid gap-2'>
                        <a href='' class='btn btn-primary btn-sm'>
                          <i class='bi bi-lock me-2'></i>Login to View Contact</a>
                        <a href='' class='btn btn-outline-secondary btn-sm'>
                          <i class='bi bi-megaphone me-2'></i>Create Request</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            ";
          }
        }
      ?>
    </div>
  </div>
</section>



<section class="blood-compatibility py-5 bg-light">
<div class="container">
<div class="row align-items-center">
<div class="col-lg-6">
<h2 class="section-title">Blood Compatibility</h2>
<p class="lead mb-4">
Understanding who can donate to whom is crucial for successful blood transfusions.
</p>
<div class="compatibility-table">
<div class="table-responsive">
<table class="table table-bordered">
<thead class="table-dark">
<tr>
<th>Blood Group</th>
<th>Can Donate To</th>
</tr>
</thead>
<tbody>
<tr>
<td><strong>A+</strong></td>
<td>A+, AB+</td>
</tr>
<tr>
<td><strong>A-</strong></td>
<td>A+, A-, AB+, AB-</td>
</tr>
<tr>
<td><strong>B+</strong></td>
<td>B+, AB+</td>
</tr>
<tr>
<td><strong>B-</strong></td>
<td>B+, B-, AB+, AB-</td>
</tr>
<tr>
<td><strong>AB+</strong></td>
<td>AB+</td>
</tr>
<tr>
<td><strong>AB-</strong></td>
<td>AB+, AB-</td>
</tr>
<tr>
<td><strong>O+</strong></td>
<td>A+, B+, AB+, O+</td>
</tr>
<tr>
<td><strong>O-</strong></td>
<td>All Groups</td>
</tr>
</tbody>
</table>
</div>
</div>
</div>

<div class="col-lg-6">
<div class="compatibility-info">
<h3 class="h4 mb-3">Quick Facts</h3>
<ul class="list-unstyled">
<li class="mb-2">
<i class="bi bi-check-circle text-success me-2"></i>
<strong>O-</strong> is the universal donor
</li>
<li class="mb-2">
<i class="bi bi-check-circle text-success me-2"></i>
<strong>AB+</strong> is the universal recipient
</li>
<li class="mb-2">
<i class="bi bi-check-circle text-success me-2"></i>
Rh factor compatibility is crucial
</li>
<li class="mb-2">
<i class="bi bi-check-circle text-success me-2"></i>
Always verify compatibility before transfusion
</li>
</ul>

<div class="mt-4">
<a href="/blood-compatibility" class="btn btn-outline-primary">
<i class="bi bi-info-circle me-2"></i>Learn More
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
<h2 class="mb-3">Need Blood Urgently?</h2>
<p class="lead mb-0">
Don't wait! Create a blood request and connect with multiple donors in your area.
</p>
</div>
<div class="col-lg-4 mt-4 mt-lg-0">
<div class="d-grid gap-2">
<a href="/emergency" class="btn btn-warning btn-lg">
<i class="bi bi-exclamation-triangle me-2"></i>Emergency Request
</a>
<a href="/request-blood" class="btn btn-outline-light">
<i class="bi bi-plus-circle me-2"></i>Create Request
</a>
</div>
</div>
</div>
</div>
</section>
<?php include "footer.php"; ?>


</body>
</html>


