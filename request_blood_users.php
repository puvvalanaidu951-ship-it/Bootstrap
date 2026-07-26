
<?php

    session_start();

    $req_type = $_POST['request_type'];
    $patient_name = $_POST['patient_name'];
    $patient_age = $_POST['patient_age'];
    $patient_gen = $_POST['patient_gender'];
    $Patient_cond = $_POST['medical_condition'];
    $req_blood = $_POST['blood_group'];
    $req_units = $_POST['units_needed'];
    $urg_level = $_POST['urgency'];
    $req_date = $_POST['required_date'];
    $hosp_name = $_POST['hospital_name'];
    $hosp_address = $_POST['hospital_address'];
    $city = $_POST['city'];
    $state = $_POST['state'];
    $pincode = $_POST['pincode'];
    $doctor_name = $_POST['doctor_name'];
    $doctor_phone = $_POST['doctor_phone'];
    $contact_person = $_POST['contact_person'];
    $contact_phone = $_POST['contact_phone'];
    $add_notes = $_POST['notes'];

    include "db_conn.php";

    $reqid = "BLOODREQ".random_strings(8);

    
    function random_strings($length_of_string)
    {

        $str_result = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz';

        
        return substr(str_shuffle($str_result), 
                        0, $length_of_string);
    }

    $user_id = $_SESSION['user_session_id'];

    $sql_query = "INSERT INTO request_blood_users 
                        (User_Id, Id, req_type, Patient_name, Age, Gender, Medical_Condition, Blood_Group, Units, Urgency_Level, Required_Date, Hospital_Name, Hospital_Address, City, State, Pincode, Doctor_Name, Doctor_Phone, Contact_Person, Contact_Phone, Add_Notes) 
                  VALUES ('$user_id','$reqid', '$req_type', '$patient_name', '$patient_age', '$patient_gen', '$Patient_cond', '$req_blood', '$req_units', '$urg_level', '$req_date', '$hosp_name', '$hosp_address', '$city', '$state', '$pincode', '$doctor_name', '$doctor_phone', '$contact_person', '$contact_phone', '$add_notes')";

    $sql_execute = mysqli_query($conn,$sql_query);

    if($sql_execute){
        

        $_SESSION['request_success'] = true;

        header("Location: request_blood.php");
        exit();
    }
    else{
        echo "Unsuccesfull";
        echo "Error: " . mysqli_error($conn);
    }

?>