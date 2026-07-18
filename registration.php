<?PHP
    $full_name = $_POST['name'];
    $role = $_POST['role'];
    $email = $_POST['email'];
    $mobile = $_POST['phone'];
    $dob = $_POST['date_of_birth'];
    $gender = $_POST['gender'];
    $blood = $_POST['blood_group'];
    $state = $_POST['state'];
    $district = $_POST['district'];
    $city = $_POST['city'];
    $locality = $_POST['area'];
    $pincode = $_POST['pincode'];
    $password = $_POST['password'];

 //   echo $full_name.$role.$email.$mobile.$dob.$gender.$blood.$state.$district.$city.$locality.$pincode.$password;

    include 'db_conn.php';
    
    $id = "BLOOD".$role.random_strings(8);

    
    function random_strings($length_of_string)
    {

        // String of all alphanumeric character
        $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';

        // Shuffle the $str_result and returns substring
        // of specified length
        return substr(str_shuffle($str_result), 
                        0, $length_of_string);
    }

    $availability = 1;

    $sql_query = "INSERT INTO users (Id, fullname, role, email, password, phone, blood_group, gender, dob, state, district, city, locality, available, pincode) 
                    VALUES ('$id', '$full_name', '$role', '$email', '$password', '$mobile', '$blood', '$gender', '$dob', '$state', '$district', '$city', '$locality', '$availability', '$pincode')"; 

    $execute = mysqli_query($conn, $sql_query);
    
    if($execute){
        echo "Registration Successfull";
    }
    else{
        echo "Unsuccesfull";
        echo "Error: " . mysqli_error($conn);
    }
?>