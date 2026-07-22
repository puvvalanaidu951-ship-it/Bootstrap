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
        .signin:hover{
            background-color: rgb(162, 6, 6) !important;  
        }
        .btns{
            width: 50%;
        }
        .ipl input{
            height: 55px;
        }
        .ipl input:hover{
            border: 1px solid red;
        }
        .parat{
            color: rgb(114, 105, 105);
            font-size: 18px;
        }
        .lgnbtm{
            background-color: rgba(250, 246, 246, 0.848);
            
        }
        .lgcard{
            transition: all 0.2s;
            height: 240px;
            padding-bottom: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .lgcard:hover{
            margin-top: -10px;
        }
    </style>
<?php include "nav.php"; ?>
<section class="bg-danger lgnn" >
        <div class="container  ">
            <div class=" row row-gap-3 pt-5 pb-5">
                <div class=" col-6 bg-danger d-flex flex-column justify-content-center align-items-start gap-3">
                    <h1 class="fs-1 fw-bold text-white">Welcome Back</h1>
                    <p class="fs-5 text-light">Login to your account to find blood donors, request blood, and be part of our life-saving community.</p>
                    <div class="d-flex flex-row gap-2 text-white">
                        <i class="bi bi-shield-check text-warning me-2"></i>
                        <span>Secure Platform</span>
                        <i class="bi bi-people text-warning me-2"></i>
                        <span>25,000+ Members</span>
                        <i class="bi bi-heart text-warning me-2"></i>
                        <span>Lives Saved Daily</span>
                    </div>
                </div>
                
                <div class=" card col-6 bg-white d-flex flex-column mb-3 rounded-4">
                    <div class="d-flex flex-column justify-content-center align-items-center mt-4 mb-4">
                        <h3>Sign In</h3>
                        <p>Enter your credentials to access your account</p>
                    </div>
                    <div class="ps-4 pe-4">
                        <form method="POST" action="login_control.php" class="need-validation" novalidate id="loginForm">
                            <div class="mb-3 ipl">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
                                <div id="emailHelp" class="form-text">Please Enter your Email Address</div>
                            </div>
                            <div class="mb-3 ipl">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" name="password" required>
                            </div>
                            <div class="mb-3 form-check d-flex flex-row justify-content-between">
                                <div>
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Remember me</label>
                                </div>
                                <div>
                                    <a class="text-primary text-decoration-none" href="#">forgot password</a>
                                </div>
                            </div>
                            <div class="signin1">
                                <button class="btn  bg-danger rounded-2 w-100 px-5 py-2 signin fw-bold fs-5 text-white">Sign in</button>
                            </div>
                        </form>
                    </div>
                    <hr>
                    <div class="d-flex flex-row justify-content-center align-items-center gap-2">
                        <span>Don't have an account?</span>
                        <a href="" class="text-decoration-none"><b>Sign up here</b></a>
                    </div>
                    <div class="d-flex flex-row justify-content-center align-items-center gap-2 mt-3 mb-3 ps-2 pe-2">
                        <button class="btn btn-outline-danger rounded-2 py-2 px-5 btns">
                            <i class="bi bi-heart me-1"></i>
                            Register as a donor
                        </button>
                        <button class="btn btn-outline-primary  rounded-2 py-2 px-5 btns">
                            <i class="bi bi-search-heart me-1"></i>
                            Find Donors
                        </button>
                    </div>
                </div>
            </div>
        </div>
</section>

    <div class="lgnbtm">
        <div class="d-flex flex-column justify-content-center align-items-center pt-5 pb-3">
                <h2 class="fw-bold">Emergency? Need Blood Urgently?</h2>
                <p class="parat">Access emergency services without registration</p>
        </div>
        <div class="container mt-3 pb-5"> 
            <div class="d-flex flex-row justify-content-center align-items-center gap-3">
                <div class="col-4 d-flex flex-column justify-content-center align-items-center ps-3 pe-3 bg-white rounded-2 lgcard">
                    <i class="bi bi-exclamation-triangle text-warning fs-1 mt-3"></i>
                    <h3>Emergency Request</h3>
                    <p class="text-center">Submit urgent blood requests without creating an account</p>
                    <button class="btn btn-warning px-4 py-2">
                        <i class="bi bi-exclamation-triangle"></i>
                        Emergency request
                    </button>
                </div>
                <div class="col-4 d-flex flex-column justify-content-center align-items-center ps-3 pe-3 bg-white  rounded-2 lgcard">
                    <i class="bi bi-search text-primary fs-1 mt-3"></i>
                    <h3>Find Donors</h3>
                    <p class="text-center">Browse available blood donors in your area</p>
                    <button class="btn btn-danger py-2 px-3">
                        <i class="bi bi-search"></i>
                        Search Donors
                    </button>
                </div>
                <div class="col-4 d-flex flex-column justify-content-center align-items-center bg-white  rounded-2 lgcard">
                    <i class="bi bi-telephone text-success fs-1 mt-3"></i>
                    <h3>24/7 Helpline</h3>
                    <p class="text-center">Call our emergency helpline for immediate assistance</p>
                    <button class="btn bg-success text-white px-3 py-3">
                        <i class="bi bi-telephone"></i>
                        Call Now
                    </button>
                </div>
            </div>
        </div>
    </div>
<?php include "footer.php"; ?>