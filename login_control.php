<?PHP
    session_start();
    include_once 'db_conn.php';

    $email_id = $_POST['email'];
    $user_passowrd = $_POST['password'];

    $get_user_details = "SELECT Id FROM users WHERE email = '$email_id' AND password = '$user_passowrd'";
    $user_details = mysqli_query($conn, $get_user_details);
    if(mysqli_num_rows($user_details)==1){
        echo "<script> alert('User Details Found') </script>";
        $user_id = mysqli_fetch_assoc($user_details);
        $_SESSION['user_session_id'] = $user_id['Id'];
        echo "<script> window.location.href = 'index.php' </script>";
    }else{
        echo "<script> alert('User Details Not Found / Mismatched') </script>";
        echo "<script> window.location.href = 'login.php' </script>";
    }   
?>