
    <style>
        *{
            margin: 0;
            padding: 0;
        }
        .navbar{
            /* background:#c91f1f !important; */
            background: linear-gradient(180deg,#b71c1c,#d61f1f);
            height: 100px;
            z-index: 1000;
            
            
        }

        .navbar-brand{
            color:white !important;
            font-size:24px;
            font-weight:700;
        }
        .menu-item i{
            font-size:18px;
            margin-bottom:5px;
        }

        .menu-item span{
            font-size:14px;
            line-height:1;
        }

        .menu-item .nav-link{
            color:white !important;
            padding:0;
            font-size:14px;
        }

        .menu-item:hover{
            color:white;
        }
        .navbar-nav{
            gap:18px;
        }
        i{
            cursor: pointer;
        }
        .navv{
            box-shadow: 0 12px 8px rgba(0, 0, 0, 0.1);   
        }
    </style>


    <nav class="navbar navbar-expand-lg navbar-light bg-danger p-4 ps-5 fixed-top navv">    
        <div class="container-fluid">
            <a class="navbar-brand d-flex align-items-center text-white fw-bold" href="index.php">
                <img src="bloodlogo.png" width="50" class="me-2">
                BloodDonor<span class="text-warning">.in</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto align-items-center">
                    <li class="nav-item menu-item active-menu d-flex flex-column text-danger align-items-start">
                        <a href="index.php" class="nav-link">
                        <i class="fa-regular fa-house text-white"></i>
                        <a href="index.php" class="nav-link">Home</a>
                        </a>
                    </li>
                    <li class="nav-item text-warning p-1 rounded-2 d-flex flex-column">
                        <div>
                            <i class="fa-solid fa-magnifying-glass"></i>
                            <a href="findblood.php" class="text-white text-decoration-none"><span>Find</span></a>
                        </div>
                        <a class="nav-link text-white" href="findblood.php" >Donors</a>
                    </li>
                    <li class="nav-item  text-warning p-1 d-flex flex-column">
                        <div>
                            <i class="fa-solid fa-circle-plus"></i>
                            <a href="login.php">
                            <a href="login.php" class="text-white text-decoration-none"><span>Request</span></a>
                        </div>
                        <a class="nav-link text-white" href="login.php">Blood</a>
                    </li>
                    </a>

                    <li class="nav-item text-warning p-1 d-flex flex-column">
                      
                        <i class="fa-solid fa-bullhorn ps-md-2"></i>
                        <a class="nav-link text-white" href="campaigns.php">Campaigns</a>
                       
                    </li>
                     </a>
                        
                    <li class="nav-item">
                        <i class="fa-regular fa-file-lines ps-md-2 text-warning"></i>
                        <a class="nav-link text-white" href="Blog.php   ">Blog</a>
                    </li>
                    <li class="nav-item">
                        <i class="fa-solid fa-book-open ps-md-2 text-warning"></i>
                        <a class="nav-link text-white" href="#">Guides</a>
                    </li>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        More
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="about.php">About us</a></li>
                        <li><a class="dropdown-item" href="#">Blood Compatibility</a></li>
                        <li><a class="dropdown-item" href="#">Donation Centers</a></li>
                        <li><a class="dropdown-item" href="#">Browse by State</a></li>
                        <li><a class="dropdown-item" href="popularcities.php">Popular Cities</a></li>
                        <li><a class="dropdown-item" href="HC&FAQ.php">Help & FAQ</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="contact.php">Contact Us</a></li>
                    </ul>
                    </li>
                    <a href="Emergency.php" class="btn btn-warning rounded-pill px-4 py-3 mx-3">
                        <i class="fa-solid fa-triangle-exclamation"></i><br>
                        Emergency
                    </a>
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
                            <a href="logout.php" class="join-btn bg-white text-danger px-4 py-3 rounded-5 text-decoration-none">
                        <span><strong><?PHP echo " ".$user_name; ?></strong></span><br>
                        <strong>Welcome</strong>
                    </a>
                    <?php
                        }
                        else{
                         
                        ?>
                    
                    <li class="nav-item">
                        <a class="nav-link text-white" href="login.php">Login</a>
                    </li>

                    <a href="Register.php" class="join-btn bg-white text-danger px-4 py-3 rounded-5 text-decoration-none">
                        <i class="fa-regular fa-heart"></i>
                        <span><strong>Join</strong></span><br>
                        <strong>Now</strong>
                    </a>
                    <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

