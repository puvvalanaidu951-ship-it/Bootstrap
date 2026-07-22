<?PHP
    $full_name = $_POST['name'];

    $email = $_POST['email'];

    $mobile = $_POST['phone'];

    $msg_type=$_POST['msg_type'];

    $subject=$_POST['subject'];

    $message=$_POST['message'];
    
    // echo $message;

    include 'db_conn.php';

    $sql_query = "INSERT INTO contact_feedback ( fullname, email, phone,msg_type,subject, message)
                    VALUES ( '$full_name',  '$email',  '$mobile','$msg_type','$subject','$message')"; 

    $execute = mysqli_query($conn, $sql_query);
    
    if($execute){
        echo "Message Successfull submitted";
    }
    else{
        echo "Unsuccesfull";
        echo "Error: " . mysqli_error($conn);
    }
?>

