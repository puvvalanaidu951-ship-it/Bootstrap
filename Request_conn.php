<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "request_form_info";
$con = mysqli_connect($server, $user, $password, $database);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
} else {
    echo "Connected successfully!";
}
?>