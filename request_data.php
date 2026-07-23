<?php

    $Patient_Name = $_POST['pname'];
    $Blood_Group = $_POST['blood'];
    $Units_Needed =$_POST['units'];
    $When_Needed = $_POST['when'];
    $Hospital_Name =$_POST['hname'];
    $City =$_POST['city'];
    $State =$_POST['state'];
    $Contact_Person =$_POST['contactp'];
    $Contact_Number =$_POST['contactn'];
    $Additional_Details = $_POST['details'];


    include 'Request_conn.php';

    $sql_query = "INSERT INTO request_info 
                  (Patient_Name, Blood_Group, Units_Needed, When_Needed, Hospital_Name, City, State, Contact_Person, Contact_Number, Additional_Details) 
                  VALUES ('$Patient_Name', '$Blood_Group', '$Units_Needed', '$When_Needed', '$Hospital_Name', '$City', '$State', '$Contact_Person', '$Contact_Number', '$Additional_Details')";

    $execute = mysqli_query($con, $sql_query);
    if ($execute) 
    {
        header("Location: request_status.php?status=success");
    } 
    else
    {
        header("Location: request_status.php?status=failed");
    }
?>