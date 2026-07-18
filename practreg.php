<?php
$fullname=$_POST['name'];
$id=$_POST['student_id'];
$email=$_POST['email'];
$password_user = $_POST['password'];
$phone=$_POST['phone'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$dep=$_POST['department'];
$year=$_POST['year'];
$address=$_POST['address'];


    include 'form_db_con.php';

// echo $fullname.$id.$email.$phone.$dob.$gender.$dep.$year.$address;
    
      $id = "std".random_strings(8);

    
    function random_strings($length_of_string)
    {

        
        $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';

       
        return substr(str_shuffle($str_result), 
                        0, $length_of_string);
    }

         $sql_query = "INSERT INTO student_form (ID, Fullname,  Email, Password, Phone,  DOB,gender,Department,Year,Address) 
                    VALUES ('$id', '$fullname',  '$email', '$password_user', '$phone',  '$dob', '$gender', '$dep', '$year','$address')"; 
         $execute = mysqli_query($conn, $sql_query);
         if($execute){
        echo "Registration Successfull";
    }
    else{
        echo "Unsuccesfull";
        echo "Error: " . mysqli_error($conn);
    }
   
?>