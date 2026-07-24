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
    
</head>
<body>

    <?php 

        

        session_start();
        

        include_once "db_conn.php"; 

        if(isset($_SESSION['user_session_id'])){
            $user_session_id = $_SESSION['user_session_id'];
            $get_use_name_query = "SELECT fullname,phone,dob,gender,blood_group,city,state,locality,pincode,role FROM users WHERE Id = '$user_session_id'";
            $get_user_name = mysqli_query($conn, $get_use_name_query);
            if(mysqli_num_rows($get_user_name)==1){
                $user_name_data = mysqli_fetch_assoc($get_user_name);
                $user_name =  $user_name_data['fullname'];
                $user_blood_group = $user_name_data['blood_group'];
                $user_location = $user_name_data['city'];
                $user_phn = $user_name_data['phone'];
                $user_dob = $user_name_data['dob'];
                $user_gender = trim($user_name_data['gender']);
                $user_state = $user_name_data['state'];
                $user_area = $user_name_data['locality'];
                $user_pincode = $user_name_data['pincode'];
                $user_role = $user_name_data['role'];
            }else{
                $user_name = "Update your profile";
            }
        }


        if(isset($_POST['fullname'])){

            $fullname     = trim($_POST['fullname']);
            $phone        = trim($_POST['phone']);
            $dob          = $_POST['dob'];
            $gender       = $_POST['gender'];
            $blood_group  = $_POST['blood_group'];
            $state        = $_POST['state'];
            $city         = trim($_POST['city']);
            $area         = trim($_POST['area']);
            $pincode      = trim($_POST['pincode']);


            $stmt = mysqli_prepare($conn,"UPDATE users SET fullname=?, phone=?, dob=?, gender=?, blood_group=?, state=?, city=?, locality=?,pincode=? WHERE Id=?");

            mysqli_stmt_bind_param($stmt,"ssssssssss",$fullname,$phone,$dob,$gender,$blood_group,$state,$city,$area,$pincode,$user_session_id);



            mysqli_stmt_bind_param($stmt,"ssssssssss",$fullname,$phone,$dob,$gender,$blood_group,$state,$city,$area,$pincode,$user_session_id);


            if(mysqli_stmt_execute($stmt)){
                header("Location: myprofile.php");
                exit();
            } else {
                echo "Update Failed: " . mysqli_error($conn);
            }
        }
    ?>

    

    <section class="mt-5">
        <div class="container d-flex gap-3">
            <div class=" col-3">
                <div class="card pb-2">
                    <div class="d-flex flex-column justify-content-center align-items-center gap-2">
                        <div class="text-center pt-3">
                            <div class="bg-danger px-4 py-3 rounded-circle fs-4 text-white fw-bold ">L</div>
                        </div>
                        <h4><?php echo "$user_name" ?> </h4>
                        <p><?php echo "$user_role" ?> ❤️</p>
                        <div class="progress" style="height: 6px;">
                                <div class="progress-bar bg-danger" style="width: 100%;"></div>
                        </div>
                    </div>
                    
                    <div class="row text-center">
                            <div class="col-6">
                                <div class="stat-item">
                                    <h6 class="text-primary mb-0"><?php echo "$user_blood_group" ?></h6>
                                    <small class="text-muted">Blood Group</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="stat-item">
                                    <h6 class="text-success mb-0">
                                        Jul 2026                                    </h6>
                                    <small class="text-muted">Member Since</small>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="card mt-4 p-3 d-flex flex-column gap-2">
                    <span>Quick Actions</span>
                    <div class="d-flex flex-column gap-2 p-2">
                        <button class="btn btn-outline-primary">Dashboard</button>
                        <button class="btn btn-outline-success">Public Profile</button>
                        <button class="btn btn-outline-warning">Change Password</button>
                        <button class="btn btn-outline-secondary">Privacy Settings</button>
                    </div>
                </div>
            </div>
            <div class="col-9 p-4 card mb-4">
                <div class="d-flex flex-column gap-2">
                    <h4>Edit Profile</h4>
                    <p class="text-danger fs-5 fw-bold"><i class="bi bi-person me-2"></i>Personal Information</p>
                </div>
                <div>
                    <form action="" method="POST" class="needs-validation" novalidate="">
                        <div class="row">
                            <div class="col-6 d-flex flex-column gap-2">
                                <label for="fullname">Fullname</label>
                                <input type="text" name="fullname" id="fullname" class="p-2 border-1 rounded-2" value="<?php echo htmlspecialchars($user_name); ?>" >
                                
                            </div>
                            <div class="col-6 d-flex flex-column gap-2">
                                <label for="phone">Phone NUmber</label>
                                <input type="tel" name="phone" class="p-2 border-1 rounded-2" value="<?php echo htmlspecialchars($user_phn); ?>" >
                            </div>
                        </div>
  
                        <div class="row pt-3">
                            <div class="col-4 d-flex flex-column gap-2">
                                <label for="fullname">Date of Birth</label>
                                <input type="date" name="dob" class="p-2 border-1 rounded-2" value="<?php echo htmlspecialchars($user_dob); ?>" >
                            </div>
                            <div class="col-4 d-flex flex-column gap-2">
                                <label for="phone">Gender</label>
                                <select name="gender" class="p-2 border-1 rounded-2">
                                    <option value="">Select Gender</option>
                                    <option value="male" <?php if($user_gender == "male") echo "selected"; ?>>Male</option>
                                    <option value="female" <?php if($user_gender == "female") echo "selected"; ?>>Female</option>
                                    <option value="other" <?php if($user_gender == "other") echo "selected"; ?>>Other</option>
                                </select>
                            </div>
                            
                            <div class="col-4 d-flex flex-column gap-2">
                                <label for="Blood group">Blood Group</label>
                                <select name="blood_group" class="p-2 border-1 rounded-2">
                                    <option value="">Select Blood Group</option>

                                    <option value="A+" <?php if($user_blood_group == "A+") echo "selected"; ?>>A+</option>
                                    <option value="A-" <?php if($user_blood_group == "A-") echo "selected"; ?>>A-</option>
                                    <option value="B+" <?php if($user_blood_group == "B+") echo "selected"; ?>>B+</option>
                                    <option value="B-" <?php if($user_blood_group == "B-") echo "selected"; ?>>B-</option>
                                    <option value="AB+" <?php if($user_blood_group == "AB+") echo "selected"; ?>>AB+</option>
                                    <option value="AB-" <?php if($user_blood_group == "AB-") echo "selected"; ?>>AB-</option>
                                    <option value="O+" <?php if($user_blood_group == "O+") echo "selected"; ?>>O+</option>
                                    <option value="O-" <?php if($user_blood_group == "O-") echo "selected"; ?>>O-</option>
                                </select>
                            </div>
                        </div>

                        <p class="text-danger fs-5 pt-3 fw-bold"><i class="bi bi-geo-alt me-2"></i>Location Information</p>

                        <div class="row pt-3">
                            <div class="col-6 d-flex flex-column gap-2">
                                <label for="state">State</label>
                                <?php
                            $states = [
                                "Andhra Pradesh",
                                "Gujarat",
                                "Karnataka",
                                "Kerala",
                                "Maharashtra",
                                "Rajasthan",
                                "Tamil Nadu",
                                "Telangana",
                                "Uttar Pradesh",
                                "West Bengal"
                            ];
                        ?>
                                <select class="p-2 border-1 rounded-2" name="state" id="">
                                    <option value="select gender">Select State</option>
                                    <?php foreach($states as $state){ ?>
                                    <option value="<?php echo $state; ?>"
                                        <?php if($user_state == $state) echo "selected"; ?>>
                                        <?php echo $state; ?>
                                    </option>
                                    <?php } ?>
                                </select>
                                
                            </div>
                            <div class="col-6 d-flex flex-column gap-2">
                                <label for="phone">City</label>
                                <input type="text" name="city" class="p-2 border-1 rounded-2" value="<?php echo htmlspecialchars($user_location); ?>">
                            </div>
                        </div>

                        <div class="row pt-3">
                            <div class="col-6 d-flex flex-column gap-2">
                                <label for="area">Area</label>
                                <input type="text" name="area" class="p-2 border-1 rounded-2" value="<?php echo htmlspecialchars($user_area); ?>">
                            </div>
                            <div class="col-6 d-flex flex-column gap-2">
                                <label for="pin">Pincode</label>
                                <input type="tel" name="pincode" class="p-2 border-1 rounded-2" value="<?php echo htmlspecialchars($user_pincode); ?>">
                            </div>
                        </div>
                        <div class="row pt-3">
                            <div class="col-12 d-flex flex-column gap-2">
                                <label for="address">Complete Address</label>
                                <textarea name="" id="" class="rounded-2 p-2" style="height: 100px;"><?php
                                    echo htmlspecialchars($user_area . ", " .
                                                        $user_location . ", " .
                                                        $user_state . " - " .
                                                        $user_pincode); ?>
                                </textarea>
                            </div>
                        </div>

                        <p class="text-danger fs-5 pt-3 fw-bold"><i class="bi bi-geo-alt me-2"></i>Emergency Contact</p>
                        
                        <div class="row pt-3">
                            <div class="col-6 d-flex flex-column gap-2">
                                <label for="area">Emergency Contact Name</label>
                                <input type="text" name="contactname" class="p-2 border-1 rounded-2" placeholder="Name of Emergency Contact person">
                            </div>
                            <div class="col-6 d-flex flex-column gap-2">
                                <label for="pin">Emergency Contact Phone</label>
                                <input type="tel" name="contactphone" class="p-2 border-1 rounded-2" placeholder="10-digit phone number">
                            </div>
                        </div>

                        <p class="text-danger fs-5 pt-3 fw-bold"><i class="bi bi-geo-alt me-2"></i>Medical Information</p>

                        <div class="row pt-3">
                            <div class="col-6 d-flex flex-column gap-2">
                                <label for="area">Last Donation date</label>
                                <input type="date" name="lastdate" class="p-2 border-1 rounded-2">
                                <label for="" style="font-size: 13px;">Leave empty if you've never donated before</label>
                            </div>
                            <div class="col-6 d-flex flex-column gap-2">
                                <label for="pin">Weight (kg)</label>
                                <input type="tel" name="weight" class="p-2 border-1 rounded-2" placeholder="weight in kilograms">
                                <label for="" style="font-size: 13px;">Minimum 45 kg required for donation</label>
                            </div>
                        </div>

                        <div class="row pt-3">
                            <div class="col-12 d-flex flex-column gap-2">
                                <label for="address">Medical Conditions</label>
                                <textarea name="medicalcond" id="" class="rounded-2" style="height: 100px;" placeholder="List Any medical conditions, medications, or health issues "></textarea>
                                <label for="" style="font-size: 13px;">This information helps ensure safe blood donation</label>
                                
                            </div>
                        </div>

                        <div class="row pt-3">
                            <div class="col-12 d-flex flex-column gap-2 p-3" style="font-size: 16px;">
                                <div>
                                    <input type="checkbox" name="" id="" checked="">
                                    <label for="">Make my profile visible to other users</label>
                                </div>
                                <div>
                                    <input type="checkbox" name="" id="" checked="">
                                    <label for="">Make my profile visible to other users</label>
                                </div>
                                <div>
                                    <input type="checkbox" name="" id="" checked="">
                                    <label for="">Make my profile visible to other users</label>
                                </div>
                            </div>
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="button" class="btn btn-outline-secondary" onclick="window.history.back()">
                                <i class="bi bi-arrow-left"></i> Cancel
                            </button>
                            <button type="submit" class="btn btn-danger btn-lg">
                                <i class="bi bi-check-circle"></i> Update Profile
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php include "footer.php" ?>
</body>
</html>