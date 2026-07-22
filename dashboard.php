<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/b2ca557543.js" crossorigin="anonymous"></script>
    <style>
        .well{
            gap:350px;
        }
        .cardh{
            height:200px;
        }
        .icard{
            transition: all 0.5s ease-in-out;
        }
        .icard:hover{
            margin-top:-10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);

        }
        .emptycard{
            height: 400px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .butt{
            color: white;
        }
        .cardhh{
            height: 390px;
        }
    </style>
</head>
<body>
    <?php 
        session_start();
        include_once "db_conn.php"; 
        
        if(isset($_SESSION['user_session_id'])){
            $user_session_id = $_SESSION['user_session_id'];
            $get_use_name_query = "SELECT fullname,blood_group,city FROM users WHERE Id = '$user_session_id'";
            $get_user_name = mysqli_query($conn, $get_use_name_query);
            if(mysqli_num_rows($get_user_name)==1){
                $user_name_data = mysqli_fetch_assoc($get_user_name);
                $user_name =  $user_name_data['fullname'];
                $user_blood_group = $user_name_data['blood_group'];
                $user_location = $user_name_data['city'];
            }else{
                $user_name = "Update your profile";
            }
        }
    ?>
    <div class="bg-danger d-flex justify-content-around align-items-center p-4 well">
        <div>
            <h2 class="text-white">Welcome back, <?PHP echo " ".$user_name; ?> 💛</h2>
            <p class="text-light">Blood Group: <?PHP echo " ".$user_blood_group; ?> <span><i class="bi bi-geo-alt me-1"></i></span><span><?PHP echo " ".$user_location; ?></span></p>
        </div>
        <div class="d-flex gap-3">
            <button class="btn bg-white p-3"><i class="bi bi-person"></i>Edit Profile</button>
            <button class="btn bg-warning p-3"><i class="bi bi-eye"></i>Public Settings</button>
        </div>
    </div>
<section class="container-fluid mb-5 ms-0 acti">
    <div class="row g-4 container-fluid mt-4 px-4  align-items-center justify-content-center ms-0">
        <div class="col-lg-3 col-md-6 cardh">
            <div class="stat-card card icard border-0 shadow-sm h-100">
                <div class="card-body p-4 d-flex align-items-center justify-content-center">
                    <div class="d-flex align-items-center">
                        <div class="stat-icon bg-danger bg-opacity-10 text-danger rounded-3 me-3">
                            <i class="bi bi-heart-pulse fs-3"></i>
                        </div>
                        <div>
                            <h3 class="stat-number mb-1">0</h3>
                            <p class="stat-label text-muted mb-0">Donations Made</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 cardh">
            <div class="stat-card card icard border-0 shadow-sm h-100 ">
                <div class="card-body p-4 d-flex align-items-center justify-content-center">
                    <div class="d-flex align-items-center">
                        <div class="stat-icon bg-primary bg-opacity-10 text-primary rounded-3 me-3">
                            <i class="bi bi-clipboard-pulse fs-3"></i>
                        </div>
                        <div>
                            <h3 class="stat-number mb-1">0</h3>
                            <p class="stat-label text-muted mb-0">Requests Made</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 cardh">
            <div class="stat-card card  icard border-0 shadow-sm h-100">
                <div class="card-body p-4 d-flex align-items-center justify-content-center">
                    <div class="d-flex align-items-center">
                        <div class="stat-icon bg-success bg-opacity-10 text-success rounded-3 me-3">
                            <i class="bi bi-check-circle fs-3"></i>
                        </div>
                        <div>
                            <h3 class="stat-number mb-1">0</h3>
                            <p class="stat-label text-muted mb-0">Requests Fulfilled</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-6 cardh">
            <div class="stat-card card icard border-0 shadow-sm h-100">
                <div class="card-body p-4 d-flex align-items-center justify-content-center">
                    <div class="d-flex align-items-center">
                        <div class="stat-icon bg-warning bg-opacity-10 text-warning rounded-3 me-3">
                            <i class="bi bi-people fs-3"></i>
                        </div>
                        <div>
                            <h3 class="stat-number mb-1">0</h3>
                            <p class="stat-label text-muted mb-0">Lives Impacted</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mb-5">
    <div class="d-flex  align-items-start gap-5 container-fluid mt-5 px-4 ms-0">
        <div class="d-flex flex-column card col-4 p-4 gap-3">
            <span>Quick Actions</span>
            <button class="btn bg-danger butt"><i class="bi bi-heart me-2"></i>Find Donation Centers</button>
            <button class="btn btn-outline-primary"><i class="bi bi-clock-history me-2"></i>Donation History</button>
            <button class="btn bg-success butt"><i class="bi bi-plus-circle me-2"></i>Request Blood</button>
            <button class="btn btn-outline-info"><i class="bi bi-search me-2"></i>Find Donors</button>
            <button class="btn btn-outline-secondary"><i class="bi bi-megaphone me-2"></i>View Campaigns</button>
            <button class="btn btn-outline-warning"><i class="bi bi-telephone me-2"></i>Emergency Contact</button>
        </div>
        <div class=" col-7">
            <div class="card shadow-sm cardhh">
                <div class="card-header bg-transparent border-0 pb-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0">My Blood Requests</h5>
                        <a href="/my-requests" class="btn btn-sm btn-outline-primary px-4 rounded-3 py-3">View All</a>
                    </div>
                </div>
                <div class="card-body">
                        <div class="text-center py-4">
                            <i class="bi bi-clipboard text-muted" style="font-size: 3rem;"></i>
                            <p class="text-muted mt-2">No blood requests yet</p>
                            <a href="/request-blood.php" class="btn btn-primary">Make a Request</a>
                        </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid mb-4">
    <div class="card col-12 p-4">
        <span class="mb-3">Recent Activities</span>
        <div class="activity-item d-flex align-items-start mb-3">
            <div class="activity-icon bg-primary bg-opacity-10 text-primary rounded-circle d-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px; min-width: 40px;">
                <i class="bi bi-activity"></i>
            </div>
            <div class="flex-grow-1">
                <p class="mb-1"></p>
                <small class="text-muted">Jul 21, 2026</small>
            </div>
        </div>
                                
    </div>
</section>

<?php include "footer.php"; ?>

</body>
</html>