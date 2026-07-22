<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blood_Compatibility_Page</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/ebdd1363cb.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>
<body>
            <?php include "nav.php"; ?>

    <section class="container-fluid bg-danger text-white py-5 px-3">
        <div class="ms-5 px-5">
            <h1 class="display-3 fw-bold">Blood Compatibility Guide</h1>
            <p class="fs-5 mt-3">Understanding blood type compatibility is crucial for safe blood transfusions.
                 Learn which blood types<br> can safely donate to and receive from each other.</p>
            <div class="d-flex mt-5">
                <div><i class="fa-solid fa-chart-diagram text-warning px-5 fs-4"></i>Interactive charts</div>
                <div><i class="fa-solid fa-magnifying-glass text-warning px-5 fs-4"></i>Compatibility Checker</div>
                <div><i class="fa-solid fa-book-open text-warning px-5 fs-4"></i>Educational Content</div>

            </div>  
        </div>
    </section>

    <section>
        <div class=" text-center py-4">
                    <h2 class="mb-2 display-5 fw-bold">Compatibility Checker</h2>
                    <p class="mb-0 fs-5">Select blood types to check donation compatibility</p>
        </div>
        <div class="container bg-light">
            <div class="bg-danger text-center text-white py-2 fs-3 fw-bold border-0 rounded"><i class="fa-solid fa-magnifying-glass text-white px-5 fs-4"></i>Blood Type Compatibility Checker</div>
            <div class="d-flex justify-content-center align-items-center gap-5 py-4 px-5 fs-5">
                <div class="col-md-4">
                    <label class="form-label fw-bold">Donor Blood Type</label>

                    <select class="form-select form-select-sm py-3 fs-5">
                        <option selected disabled>Select Donor Type</option>
                        <option>O-</option>
                        <option>O+</option>
                        <option>A-</option>
                        <option>A+</option>
                        <option>B-</option>
                        <option>B+</option>
                        <option>AB-</option>
                        <option>AB+</option>
                    </select>

                </div>
                 <div class="col-md-4">
                    <label class="form-label fw-bold">Recipient Blood Type</label>

                        <select class="form-select form-select-sm py-3 fs-5 ">
                            <option selected disabled >Select Receipient Type</option>
                            <option>O-</option>
                            <option>O+</option>
                            <option>A-</option>
                            <option>A+</option>
                            <option>B-</option>
                            <option>B+</option>
                            <option>AB-</option>
                            <option>AB+</option>
                        </select>

                </div>
                <div><button class="bg-danger p-3 border-0 rounded-2 text-white fw-bold mt-5"><i class="fa-regular fa-circle-check text-white me-2"></i>Compatibility Checker</button></div>
            </div>
        </div>
    </section>

    <section class="bg-light mt-5">

    <div class="text-center py-4">
        <h2 class="display-6 fw-bold">Blood Type Compatibility Matrix</h2>
        <p>Click on any blood type to see compatibility details</p>
    </div>

    <div class="container">

        <div class="row justify-content-center g-4">

            <div class="col-lg-3 col-md-6">
                <div class="card shadow h-100">
                    <div class="card-header bg-danger text-white text-center py-3">
                        <h1 class="fw-bold mb-1">O-</h1>
                        <h5 class="fw-semibold">Universal Donor</h5>
                    </div>

                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-2">
                            <h5 class="text-secondary">Population:</h5>
                            <h5 class="fw-bold">6.6%</h5>
                        </div>

                        <div class="progress mb-3" style="height:8px;">
                            <div class="progress-bar bg-danger" style="width:20%;"></div>
                        </div>

                        <p class="text-secondary">Rare</p>

                        <p>Can donate to all blood types</p>

                        <h5 class="text-success mb-3">
                            <i class="bi bi-arrow-right"></i>
                            Can Donate To:
                        </h5>

                        <div class="mb-4">
                            <span class="badge bg-success">O-</span>
                            <span class="badge bg-success">O+</span>
                            <span class="badge bg-success">A-</span>
                            <span class="badge bg-success">A+</span>
                            <span class="badge bg-secondary">+4</span>
                        </div>

                        <h5 class="text-info mb-3">
                            <i class="bi bi-arrow-left"></i>
                            Can Receive From:
                        </h5>

                        <span class="badge bg-info">O-</span>
                    </div>

                    <div class="card-footer bg-white">
                        <a href="#" class="btn btn-outline-primary w-100">
                            <i class="bi bi-info-circle"></i>
                            View Details
                        </a>
                    </div>
                </div>
            </div>

            
            <div class="col-lg-3 col-md-6">
                <div class="card shadow h-100">
                    <div class="card-header bg-danger text-white text-center py-3">
                        <h1 class="fw-bold mb-1">O-</h1>
                        <h5 class="fw-semibold">Universal Donor</h5>
                    </div>

                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-2">
                            <h5 class="text-secondary">Population:</h5>
                            <h5 class="fw-bold">6.6%</h5>
                        </div>

                        <div class="progress mb-3" style="height:8px;">
                            <div class="progress-bar bg-danger" style="width:20%;"></div>
                        </div>

                        <p class="text-secondary">Rare</p>

                        <p>Can donate to all blood types</p>

                        <h5 class="text-success mb-3">
                            <i class="bi bi-arrow-right"></i>
                            Can Donate To:
                        </h5>

                        <div class="mb-4">
                            <span class="badge bg-success">O-</span>
                            <span class="badge bg-success">O+</span>
                            <span class="badge bg-success">A-</span>
                            <span class="badge bg-success">A+</span>
                            <span class="badge bg-secondary">+4</span>
                        </div>

                        <h5 class="text-info mb-3">
                            <i class="bi bi-arrow-left"></i>
                            Can Receive From:
                        </h5>

                        <span class="badge bg-info">O-</span>
                    </div>

                    <div class="card-footer bg-white">
                        <a href="#" class="btn btn-outline-primary w-100">
                            <i class="bi bi-info-circle"></i>
                            View Details
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="card shadow h-100">
                    <div class="card-header bg-danger text-white text-center py-3">
                        <h1 class="fw-bold mb-1">O-</h1>
                        <h5 class="fw-semibold">Universal Donor</h5>
                    </div>

                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-2">
                            <h5 class="text-secondary">Population:</h5>
                            <h5 class="fw-bold">6.6%</h5>
                        </div>

                        <div class="progress mb-3" style="height:8px;">
                            <div class="progress-bar bg-danger" style="width:20%;"></div>
                        </div>

                        <p class="text-secondary">Rare</p>

                        <p>Can donate to all blood types</p>

                        <h5 class="text-success mb-3">
                            <i class="bi bi-arrow-right"></i>
                            Can Donate To:
                        </h5>

                        <div class="mb-4">
                            <span class="badge bg-success">O-</span>
                            <span class="badge bg-success">O+</span>
                            <span class="badge bg-success">A-</span>
                            <span class="badge bg-success">A+</span>
                            <span class="badge bg-secondary">+4</span>
                        </div>

                        <h5 class="text-info mb-3">
                            <i class="bi bi-arrow-left"></i>
                            Can Receive From:
                        </h5>

                        <span class="badge bg-info">O-</span>
                    </div>

                    <div class="card-footer bg-white">
                        <a href="#" class="btn btn-outline-primary w-100">
                            <i class="bi bi-info-circle"></i>
                            View Details
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="card shadow h-100">
                    <div class="card-header bg-danger text-white text-center py-3">
                        <h1 class="fw-bold mb-1">O-</h1>
                        <h5 class="fw-semibold">Universal Donor</h5>
                    </div>

                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-2">
                            <h5 class="text-secondary">Population:</h5>
                            <h5 class="fw-bold">6.6%</h5>
                        </div>

                        <div class="progress mb-3" style="height:8px;">
                            <div class="progress-bar bg-danger" style="width:20%;"></div>
                        </div>

                        <p class="text-secondary">Rare</p>

                        <p>Can donate to all blood types</p>

                        <h5 class="text-success mb-3">
                            <i class="bi bi-arrow-right"></i>
                            Can Donate To:
                        </h5>

                        <div class="mb-4">
                            <span class="badge bg-success">O-</span>
                            <span class="badge bg-success">O+</span>
                            <span class="badge bg-success">A-</span>
                            <span class="badge bg-success">A+</span>
                            <span class="badge bg-secondary">+4</span>
                        </div>

                        <h5 class="text-info mb-3">
                            <i class="bi bi-arrow-left"></i>
                            Can Receive From:
                        </h5>

                        <span class="badge bg-info">O-</span>
                    </div>

                    <div class="card-footer bg-white">
                        <a href="#" class="btn btn-outline-primary w-100">
                            <i class="bi bi-info-circle"></i>
                            View Details
                        </a>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section>

    <section class="bg-light mt-1 ">

    <div class="container">

        <div class="row justify-content-center g-4 py-5">

            <div class="col-lg-3 col-md-6">
                <div class="card shadow h-100">
                    <div class="card-header bg-danger text-white text-center py-3">
                        <h1 class="fw-bold mb-1">O-</h1>
                        <h5 class="fw-semibold">Universal Donor</h5>
                    </div>

                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-2">
                            <h5 class="text-secondary">Population:</h5>
                            <h5 class="fw-bold">6.6%</h5>
                        </div>

                        <div class="progress mb-3" style="height:8px;">
                            <div class="progress-bar bg-danger" style="width:20%;"></div>
                        </div>

                        <p class="text-secondary">Rare</p>

                        <p>Can donate to all blood types</p>

                        <h5 class="text-success mb-3">
                            <i class="bi bi-arrow-right"></i>
                            Can Donate To:
                        </h5>

                        <div class="mb-4">
                            <span class="badge bg-success">O-</span>
                            <span class="badge bg-success">O+</span>
                            <span class="badge bg-success">A-</span>
                            <span class="badge bg-success">A+</span>
                            <span class="badge bg-secondary">+4</span>
                        </div>

                        <h5 class="text-info mb-3">
                            <i class="bi bi-arrow-left"></i>
                            Can Receive From:
                        </h5>

                        <span class="badge bg-info">O-</span>
                    </div>

                    <div class="card-footer bg-white">
                        <a href="#" class="btn btn-outline-primary w-100">
                            <i class="bi bi-info-circle"></i>
                            View Details
                        </a>
                    </div>
                </div>
            </div>

            
            <div class="col-lg-3 col-md-6">
                <div class="card shadow h-100">
                    <div class="card-header bg-danger text-white text-center py-3">
                        <h1 class="fw-bold mb-1">O-</h1>
                        <h5 class="fw-semibold">Universal Donor</h5>
                    </div>

                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-2">
                            <h5 class="text-secondary">Population:</h5>
                            <h5 class="fw-bold">6.6%</h5>
                        </div>

                        <div class="progress mb-3" style="height:8px;">
                            <div class="progress-bar bg-danger" style="width:20%;"></div>
                        </div>

                        <p class="text-secondary">Rare</p>

                        <p>Can donate to all blood types</p>

                        <h5 class="text-success mb-3">
                            <i class="bi bi-arrow-right"></i>
                            Can Donate To:
                        </h5>

                        <div class="mb-4">
                            <span class="badge bg-success">O-</span>
                            <span class="badge bg-success">O+</span>
                            <span class="badge bg-success">A-</span>
                            <span class="badge bg-success">A+</span>
                            <span class="badge bg-secondary">+4</span>
                        </div>

                        <h5 class="text-info mb-3">
                            <i class="bi bi-arrow-left"></i>
                            Can Receive From:
                        </h5>

                        <span class="badge bg-info">O-</span>
                    </div>

                    <div class="card-footer bg-white">
                        <a href="#" class="btn btn-outline-primary w-100">
                            <i class="bi bi-info-circle"></i>
                            View Details
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="card shadow h-100">
                    <div class="card-header bg-danger text-white text-center py-3">
                        <h1 class="fw-bold mb-1">O-</h1>
                        <h5 class="fw-semibold">Universal Donor</h5>
                    </div>

                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-2">
                            <h5 class="text-secondary">Population:</h5>
                            <h5 class="fw-bold">6.6%</h5>
                        </div>

                        <div class="progress mb-3" style="height:8px;">
                            <div class="progress-bar bg-danger" style="width:20%;"></div>
                        </div>

                        <p class="text-secondary">Rare</p>

                        <p>Can donate to all blood types</p>

                        <h5 class="text-success mb-3">
                            <i class="bi bi-arrow-right"></i>
                            Can Donate To:
                        </h5>

                        <div class="mb-4">
                            <span class="badge bg-success">O-</span>
                            <span class="badge bg-success">O+</span>
                            <span class="badge bg-success">A-</span>
                            <span class="badge bg-success">A+</span>
                            <span class="badge bg-secondary">+4</span>
                        </div>

                        <h5 class="text-info mb-3">
                            <i class="bi bi-arrow-left"></i>
                            Can Receive From:
                        </h5>

                        <span class="badge bg-info">O-</span>
                    </div>

                    <div class="card-footer bg-white">
                        <a href="#" class="btn btn-outline-primary w-100">
                            <i class="bi bi-info-circle"></i>
                            View Details
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-3 col-md-6">
                <div class="card shadow h-100">
                    <div class="card-header bg-danger text-white text-center py-3">
                        <h1 class="fw-bold mb-1">O-</h1>
                        <h5 class="fw-semibold">Universal Donor</h5>
                    </div>

                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-2">
                            <h5 class="text-secondary">Population:</h5>
                            <h5 class="fw-bold">6.6%</h5>
                        </div>

                        <div class="progress mb-3" style="height:8px;">
                            <div class="progress-bar bg-danger" style="width:20%;"></div>
                        </div>

                        <p class="text-secondary">Rare</p>

                        <p>Can donate to all blood types</p>

                        <h5 class="text-success mb-3">
                            <i class="bi bi-arrow-right"></i>
                            Can Donate To:
                        </h5>

                        <div class="mb-4">
                            <span class="badge bg-success">O-</span>
                            <span class="badge bg-success">O+</span>
                            <span class="badge bg-success">A-</span>
                            <span class="badge bg-success">A+</span>
                            <span class="badge bg-secondary">+4</span>
                        </div>

                        <h5 class="text-info mb-3">
                            <i class="bi bi-arrow-left"></i>
                            Can Receive From:
                        </h5>

                        <span class="badge bg-info">O-</span>
                    </div>

                    <div class="card-footer bg-white">
                        <a href="#" class="btn btn-outline-primary w-100">
                            <i class="bi bi-info-circle"></i>
                            View Details
                        </a>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section>

      <section class="container py-5 mt-5">
        
    <div class="text-center py-4">
        <h2 class="display-6 fw-bold">Special Compatibility Rules</h2>
        <p>Important exceptions and special considerations</p>
    </div>
    <div class="row g-4">
        <div class="col-lg-6">
            <div class="card shadow-lg border-0 h-100">
                <div class="card-body">
                    <div class="d-flex align-items-start">
                        <div class="rounded-circle bg-warning bg-opacity-10 d-flex justify-content-center align-items-center p-4 me-3">
                            <i class="bi bi-exclamation-triangle text-warning fs-2"></i>
                        </div>
                        <div>
                            <h5 class="text-danger mb-3">Emergency Transfusion</h5>
                            <p class="text-secondary">
                                In life-threatening emergencies when blood typing is not possible,
                                O- blood (universal donor) can be given to anyone.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card shadow-lg border-0 h-100">
                <div class="card-body">
                    <div class="d-flex align-items-start">
                        <div class="rounded-circle bg-warning bg-opacity-10 d-flex justify-content-center align-items-center p-4 me-3">
                            <i class="bi bi-people-fill text-warning fs-2"></i>
                        </div>
                        <div>
                            <h5 class="text-danger mb-3">Rh Factor in Pregnancy</h5>
                            <p class="text-secondary">Rh-negative mothers carrying Rh-positive babies need special monitoring and RhoGAM injections.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="mt-3">
    <div class="row g-4">
        <div class="col-lg-6">
            <div class="card shadow-lg border-0 h-100">
                <div class="card-body">
                    <div class="d-flex align-items-start">
                        <div class="rounded-circle bg-warning bg-opacity-10 d-flex justify-content-center align-items-center p-4 me-3">
                            <i class="bi bi-exclamation-triangle text-warning fs-2"></i>
                        </div>
                        <div>
                            <h5 class="text-danger mb-3">Emergency Transfusion</h5>
                            <p class="text-secondary">
                                In life-threatening emergencies when blood typing is not possible,
                                O- blood (universal donor) can be given to anyone.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-6">
            <div class="card shadow-lg border-0 h-100">
                <div class="card-body">
                    <div class="d-flex align-items-start">
                        <div class="rounded-circle bg-warning bg-opacity-10 d-flex justify-content-center align-items-center p-4 me-3">
                            <i class="bi bi-people-fill text-warning fs-2"></i>
                        </div>
                        <div>
                            <h5 class="text-danger mb-3">Rh Factor in Pregnancy</h5>
                            <p class="text-secondary">Rh-negative mothers carrying Rh-positive babies need special monitoring and RhoGAM injections.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
</body>
       <?php include "footer.php"; ?>

</html>