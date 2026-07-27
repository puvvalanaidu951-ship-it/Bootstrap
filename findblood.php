<?php
session_start();

if (!isset($_SESSION['user_session_id'])) {
    header("Location: login.php");
    exit();
}
?>
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

.btn-primary {
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
    justify-content: center;
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
.bg-gradient-danger {
background: linear-gradient(135deg, #dc2626 0%, #991b1b 100%) !important;
}
</style>
</head>
<body>
      <?php include "nav.php"; ?>


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

                            <?php
                            include_once "db_conn.php";
                           

                            $donor_count = 0;

                            $donor_count_query = "SELECT COUNT(*) AS total FROM users WHERE available = 1";
                            $db_donor_count = mysqli_query($conn, $donor_count_query);

                            if ($db_donor_count) {
                                $row = mysqli_fetch_assoc($db_donor_count);
                                $donor_count = $row['total'];
                            }
                            ?>

                            <h3 class="fw-bold text-warning mb-1">
                                <?php echo $donor_count; ?>
                            </h3>

                            <small class="text-white-75">
                                Donors Found
                            </small>

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

        <form method="GET" action="findblood.php" class="search-form">

            <div class="row g-3">

                <div class="col-lg-2 col-md-6">
                    <label for="blood_group" class="form-label fw-semibold">Blood Group</label>

                    <select name="bg" id="blood_group" class="form-select">
                        <option value="">All Groups</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>
                    </select>
                </div>

                <div class="col-lg-2 col-md-6">
                    <label for="city" class="form-label fw-semibold">City</label>
                    <input
                        type="text"
                        name="c"
                        id="city"
                        class="form-control"
                        placeholder="Enter city"
                        value="">
                </div>

                <div class="col-lg-2 col-md-6">
                    <label for="area" class="form-label fw-semibold">Area</label>
                    <input
                        type="text"
                        name="a"
                        id="area"
                        class="form-control"
                        placeholder="Enter area"
                        value="">
                </div>

                <div class="col-lg-2 col-md-6">
                    <label for="state" class="form-label fw-semibold">State</label>

                    <select name="s" id="state" class="form-select">
                        <option value="">All States</option>
                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Chhattisgarh">Chhattisgarh</option>
                        <option value="Goa">Goa</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Kerala">Kerala</option>
                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Meghalaya">Meghalaya</option>
                        <option value="Mizoram">Mizoram</option>
                        <option value="Nagaland">Nagaland</option>
                        <option value="Odisha">Odisha</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Sikkim">Sikkim</option>
                        <option value="Tamil Nadu">Tamil Nadu</option>
                        <option value="Telangana">Telangana</option>
                        <option value="Tripura">Tripura</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                        <option value="Uttarakhand">Uttarakhand</option>
                        <option value="West Bengal">West Bengal</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                        <option value="Ladakh">Ladakh</option>
                    </select>
                </div>

                <div class="col-lg-2 col-md-6">
                    <label for="availability" class="form-label fw-semibold">Availability</label>

                    <select name="av" id="availability" class="form-select">
                        <option value="">All Donors</option>
                        <option value="Available Now">Available Now</option>
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

<div class="row g-4 p-5" >

<?php

function calculateAge($dob)
{
    if (empty($dob)) {
        return "Age not available";
    }

    $dobObj = DateTime::createFromFormat('Y-m-d', $dob);

    if (!$dobObj) {
        return "Age not available";
    }

    $today = new DateTime();

    if ($dobObj > $today) {
        return "Age not available";
    }

    return $today->diff($dobObj)->y . " years";
}


// Get only available donors
$sql = "SELECT blood_group, fullname, gender, dob, state, district, city, locality
        FROM users
        WHERE available = 1";

$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {

    while ($row = mysqli_fetch_assoc($result)) {

        $age = calculateAge($row['dob']);
?>

    <div class="col-lg-6 col-xl-4">

        <div class="donor-card card border-0 shadow-sm h-100">

            <div class="card-body p-4">

                <div class="d-flex align-items-start mb-3">

                    <div class="donor-avatar bg-danger text-white rounded-circle me-3 d-flex align-items-center justify-content-center">
                        <?php echo htmlspecialchars($row['blood_group']); ?>
                    </div>

                    <div class="flex-grow-1">

                        <h5 class="card-title mb-1">
                            <?php echo htmlspecialchars($row['fullname']); ?>
                        </h5>

                        <span class="badge bg-danger">
                            <?php echo htmlspecialchars($row['blood_group']); ?>
                        </span>

                    </div>

                </div>

                <div class="donor-details mb-3">

                    <div class="row g-2">

                        <div class="col-6">
                            <small class="text-muted">Age</small><br>
                            <strong><?php echo $age; ?></strong>
                        </div>

                        <div class="col-6">
                            <small class="text-muted">Gender</small><br>
                            <strong><?php echo htmlspecialchars($row['gender']); ?></strong>
                        </div>

                        <div class="col-12">

                            <small class="text-muted">Location</small><br>

                            <strong>

                                <?php
                                echo htmlspecialchars(
                                    $row['locality'] . ", " .
                                    $row['city'] . ", " .
                                    $row['district'] . ", " .
                                    $row['state']
                                );
                                ?>

                            </strong>

                        </div>

                    </div>

                </div>

                <div class="d-grid gap-2">

                    <a href="tel:+919347157313" class="btn btn-danger btn-sm">
                        <i class="bi bi-telephone me-2"></i>
                       Call Now
                    </a>

                    <a href="mailto:donor@example.com" class="btn btn-outline-danger btn-sm">
                        <i class="bi bi-envelope me-2"></i>
                     Email
                    </a>

                </div>

            </div>

        </div>

    </div>

<?php
    }
} else {
?>

    <div class="col-12 text-center">
        <h4>No donors found.</h4>
    </div>

<?php
}
?>

</div>



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
                        <a href="compatibility.php" class="btn btn-outline-primary">
                            <i class="bi bi-info-circle me-2"></i>
                            Learn More
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
<a href="Emergency.php" class="btn btn-warning btn-lg">
<i class="bi bi-exclamation-triangle me-2"></i>Emergency Request
</a>
<a href="request_blood.php" class="btn btn-outline-light">
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


