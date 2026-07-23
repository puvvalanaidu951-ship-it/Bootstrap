<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
         <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    
    <script src="https://kit.fontawesome.com/b2ca557543.js" crossorigin="anonymous"></script>
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

        /* Mobile Responsive */
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
@media (min-width: 992px) {
    .navbar .dropdown:hover > .dropdown-menu {
        display: block;
        margin-top: 0;
        animation: fadeIn 0.2s ease;
    }

    .navbar .dropdown-toggle::after {
        transition: transform .2s;
    }

    .navbar .dropdown:hover .dropdown-toggle::after {
        transform: rotate(180deg);
    }
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(8px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
        
</style>


</head>
<body>
   <nav class="navbar navbar-expand-lg navbar-dark bg-gradient-danger fixed-top shadow-lg">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="index.php">
            <div class="navbar-logo me-3">
                <div class="logo-circle bg-white text-danger rounded-circle shadow-sm d-flex align-items-center justify-content-center">
                    <i class="bi bi-heart-pulse-fill fs-4"></i>
                </div>
            </div>
            <div class="brand-text">
                <span class="brand-name fw-bold fs-4">BloodDonor</span>
                <span class="brand-domain text-warning">.in</span>
            </div>
        </a>
        
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-lg-center">
                <li class="nav-item">
                    <a class="nav-link fw-medium " 
                       href="index.php" >
                        <i class="bi bi-house me-1"></i>Home
                    </a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link fw-medium " 
                       href="findblood.php">
                        <i class="bi bi-search me-1"></i>Find Donors
                    </a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link fw-medium " 
                       href="login.php">
                        <i class="bi bi-plus-circle me-1"></i>Request Blood
                    </a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link fw-medium " 
                       href="campaigns.php">
                        <i class="bi bi-megaphone me-1"></i>Campaigns
                    </a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link fw-medium " 
                       href="Blog.php">
                        <i class="bi bi-journal-text me-1"></i>Blog
                    </a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link fw-medium " 
                       href="guids.php">
                        <i class="bi bi-book me-1"></i>Guides
                    </a>
                </li>
                
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle fw-medium" href="#" id="navbarDropdown" 
                       role="button" data-bs-toggle="dropdown" >
                        <i class="bi bi-three-dots me-1"></i>More
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end shadow-lg border-0" aria-labelledby="navbarDropdown" >
                        <li><a class="dropdown-item" href="about.php">
                            <i class="bi bi-info-circle me-2"></i>About Us
                        </a></li>
                        <li><a class="dropdown-item" href="#">
                            <i class="bi bi-diagram-3 me-2"></i>Blood Compatibility
                        </a></li>
                        
                        <li><a class="dropdown-item" href="browsestate.php">
                            <i class="bi bi-map me-2"></i>Browse by State
                        </a></li>
                        <li><a class="dropdown-item" href="#">
                            <i class="bi bi-building me-2"></i>Popular Cities
                        </a></li>
                        <li><a class="dropdown-item" href="HC&FAQ.php">
                            <i class="bi bi-question-circle me-2"></i>Help & FAQ
                        </a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="contact.php">
                            <i class="bi bi-envelope me-2"></i>Contact Us
                        </a></li>
                    </ul>
                </li>
                
                <li class="nav-item d-none d-lg-block">
                    <a class="btn btn-warning btn-sm rounded-pill px-3 ms-2" href="Emergency.php">
                        <i class="bi bi-exclamation-triangle-fill me-1"></i>Emergency
                    </a>
                </li>
                    <?PHP
                        include_once "db_conn.php";
                        if(isset($_SESSION['user_session_id'])){
                            $user_session_id = $_SESSION['user_session_id'];
                            $get_use_name_query = "SELECT fullname FROM users WHERE Id = '$user_session_id'";
                            $get_user_name = mysqli_query($conn, $get_use_name_query);
                            if(mysqli_num_rows($get_user_name)==1){
                                $user_name_data = mysqli_fetch_assoc($get_user_name);
                                $user_name =  $user_name_data['fullname'];
                            }else{
                                $user_name = "Update your profile";
                            }
                            ?>
<<<<<<< HEAD
                            <a href="logout.php"  class="join-btn bg-white text-danger px-4 py-3 rounded-5 text-decoration-none">
                        <span><strong><?PHP echo " ".$user_name; ?></strong></span><br>
                        <strong>Welcome</strong>
=======
                            <a href="logout.php" class="join-btn bg-white text-danger px-3 ms-3 py-3 rounded-circle text-decoration-none ">
                        <span ><strong class="fs-5"><?PHP echo " ".$user_name[0]; ?></strong></span><br>
                        
                    </a>
                    <a href="">
                       <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle fw-medium" href="#" id="navbarDropdown" 
                       role="button" data-bs-toggle="dropdown" >
                        <i class="bi bi-three-dots me-1"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end shadow-lg border-0" aria-labelledby="navbarDropdown" >
                        <li><a class="dropdown-item" href="dashboard.php">
                            <i class="bi bi-info-circle me-2"></i>Dashboard
                        </a></li>
                        <li><a class="dropdown-item" href="myprofile.php">
                            <i class="bi bi-diagram-3 me-2"></i>My Profile
                        </a></li>
                        <li class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="logout.php" href="login.php">
                            <i class="bi bi-map me-2"></i>Logout
                        </a></li>

                    </ul>
                </li>

                    </a>
                    <?php
                        }
                        else{
                         
                        ?>
                    
                    <li class="nav-item">
                        <a class="nav-link text-white" href="login.php">Login</a>
                    </li>

                    <a href="Register.php" class="join-btn bg-white text-danger px-4 py-2 rounded-5 text-decoration-none d-flex align-items-center justify-content-center flex-column">
                        <div class="d-flex align-items-center justify-content-center mb-1">
                            <i class="fa-regular fa-heart"></i>
                            <span><strong>Join</strong></span>
                        </div>
                        <strong>Now</strong>
                    </a>
                    <?php
                    }
                    ?>
                
                
                   
            </ul>
        </div>
    </div>
</nav>

<div class="navbar-spacer"></div>

<script>
document.addEventListener("DOMContentLoaded", function () {

    if (window.innerWidth >= 992) {

        document.querySelectorAll('.navbar .dropdown').forEach(function (dropdown) {

            dropdown.addEventListener('mouseenter', function () {
                bootstrap.Dropdown.getOrCreateInstance(
                    dropdown.querySelector('.dropdown-toggle')
                ).show();
            });

            dropdown.addEventListener('mouseleave', function () {
                bootstrap.Dropdown.getOrCreateInstance(
                    dropdown.querySelector('.dropdown-toggle')
                ).hide();
            });

        });

    }

});
</script>



</body>
</html> 