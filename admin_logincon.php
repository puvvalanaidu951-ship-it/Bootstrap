    <?PHP
        session_start();
        include_once 'db.php';

        $admin = $_POST['username'];
        $admin_password = $_POST['password'];

        $get_user_details = "SELECT id FROM admin WHERE username = '$admin' AND password = '$admin_password'";
        $user_details = mysqli_query($connec, $get_user_details);
        if(mysqli_num_rows($user_details)==1){
            echo "<script> alert('User Details Found') </script>";
            $user_id = mysqli_fetch_assoc($user_details);
            $_SESSION['user_session_id'] = $user_id['id'];
            echo "<script> window.location.href = 'admin_dashboard.php' </script>";
        }else{
            echo "<script> alert('admin Details Not Found / Mismatched') </script>";
            echo "<script> window.location.href = 'admin_login.php' </script>";
         
        }   
    ?>

    

     