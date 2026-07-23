<?php
// index.php
session_start();

// Uncomment after login system is ready
// if(!isset($_SESSION['admin'])){
//     header("Location: login.php");
//     exit();
// }

// Dummy Data (Replace with database queries)
$totalUsers = 150;
$totalDonors = 85;
$totalRequests = 32;        
$totalHospitals = 12;
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Admin Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

<style>

body{
    background:#f4f6f9;
}

.sidebar{
    width:250px;
    min-height:100vh;
    background:#212529;
}

.sidebar a{
    color:white;
    text-decoration:none;
    padding:15px 20px;
    display:block;
    transition:.3s;
}

.sidebar a:hover{
    background:#0d6efd;
}

.content{
    flex:1;
}

.card{
    border:none;
    border-radius:15px;
    box-shadow:0 5px 15px rgba(0,0,0,.08);
}

.table{
    background:white;
}

.navbar{
    box-shadow:0 3px 10px rgba(0,0,0,.1);
}

.profile{
    width:40px;
    height:40px;
    border-radius:50%;
    background:#0d6efd;
    color:white;
    display:flex;
    align-items:center;
    justify-content:center;
    font-weight:bold;
}

</style>

</head>

<body>

<div class="d-flex">

    <!-- Sidebar -->

    <div class="sidebar">

        <h3 class="text-center text-white py-4">
            Admin Panel
        </h3>

        <a href="#">
            <i class="fa fa-home"></i>
            Dashboard
        </a>

        <a href="#">
            <i class="fa fa-users"></i>
            Users
        </a>

        <a href="#">
            <i class="fa fa-heart"></i>
            Blood Donors
        </a>

        <a href="#">
            <i class="fa fa-droplet"></i>
            Blood Requests
        </a>

        <a href="#">
            <i class="fa fa-hospital"></i>
            Hospitals
        </a>

        <a href="#">
            <i class="fa fa-chart-line"></i>
            Reports
        </a>

        <a href="#">
            <i class="fa fa-gear"></i>
            Settings
        </a>

        <a href="#">
            <i class="fa fa-right-from-bracket"></i>
            Logout
        </a>

    </div>

    <!-- Content -->

    <div class="content">

        <!-- Navbar -->

        <nav class="navbar navbar-expand-lg bg-white px-4">

            <h4 class="mb-0">
                Dashboard
            </h4>

            <div class="ms-auto d-flex align-items-center">

                <div class="me-3">

                    <i class="fa fa-bell fs-5"></i>

                </div>

                <div class="profile">
                    A
                </div>

            </div>

        </nav>

        <div class="container-fluid p-4">

            <!-- Cards -->

            <div class="row g-4">

                <div class="col-md-3">

                    <div class="card p-4">

                        <h6>Total Users</h6>
                        <?PHP
                            include_once 'db_conn.php';
                            $donor_count_query = "SELECT COUNT(*) FROM users WHERE available = 1";
                            $db_donor_count = mysqli_query($conn, $donor_count_query); 
                            $totalUsers = mysqli_fetch_row($db_donor_count)[0];
                        ?>

                        <h2><?php echo $totalUsers; ?></h2>

                        <i class="fa fa-users text-primary fs-2"></i>

                    </div>

                </div>

                <div class="col-md-3">

                    <div class="card p-4">

                        <h6>Blood Donors</h6>
                         <?PHP
                            include_once 'db_conn.php';
                            $donor_count_query = "SELECT COUNT(*) FROM users WHERE available = 1";
                            $db_donor_count = mysqli_query($conn, $donor_count_query); 
                            $totalDonors = mysqli_fetch_row($db_donor_count)[0];
                        ?>

                        <h2><?php echo $totalDonors; ?></h2>

                        <i class="fa fa-heart text-danger fs-2"></i>

                    </div>

                </div>

                <div class="col-md-3">

                    <div class="card p-4">

                        <h6>Blood Requests</h6>

                        <h2><?php echo $totalRequests; ?></h2>

                        <i class="fa fa-droplet text-warning fs-2"></i>

                    </div>

                </div>

                <div class="col-md-3">

                    <div class="card p-4">

                        <h6>Hospitals</h6>

                        <h2><?php echo $totalHospitals; ?></h2>

                        <i class="fa fa-hospital text-success fs-2"></i>

                    </div>

                </div>

            </div>

            <!-- Table -->

            <div class="row mt-5">

                <div class="col-lg-8">

                    <div class="card p-3">

                        <h5 class="mb-3">
                            Recent Users
                        </h5>

                        <table class="table table-hover">

                            <thead>

                                <tr>

                                    <th>ID</th>

                                    <th>Name</th>

                                    <th>Blood Group</th>

                                    <th>Status</th>

                                </tr>

                            </thead>

                            <tbody>
                                <?PHP
        include_once 'db_conn.php';
        $i=1;
         $sql_get_donor_data_query = "SELECT blood_group,fullname,available
                                    FROM users";
        $donor_db_data = mysqli_query($conn, $sql_get_donor_data_query);
        if(mysqli_num_rows($donor_db_data) > 0){
          while($row = mysqli_fetch_assoc($donor_db_data)){
           
            echo"

                                <tr>

                                    <td>".($i++)."</td>

                                    <td>".$row['fullname']."</td>

                                    <td>".$row['blood_group']."</td>

                                    <td>
                                        <span class='badge bg-success'>
                                            Active
                                        </span>
                                    </td>

                                </tr>";
                                 }
        }
      ?>

                              

                            </tbody>

                        </table>

                    </div>

                </div>

                <!-- Activity -->

                <div class="col-lg-4">

                    <div class="card p-3">

                        <h5>
                            Recent Activity
                        </h5>

                        <hr>
                    <a href="register.php.php" class="btn btn-primary mb-3">
                        <p>
                            ✅ New donor registered
                        </p>
                    </a>
                        <p>
                            🩸 Blood request approved
                        </p>

                        <p>
                            🏥 Hospital added
                        </p>

                        <p>
                            👤 Admin updated profile
                        </p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>