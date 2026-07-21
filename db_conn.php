<?PHP
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db_name = "blood_donor_info";

    $conn = mysqli_connect($server, $user, $pass, $db_name);

    if (!$conn) {
    
    // mysqli_connect_error() returns a string description of the last connect error
    die("Connection failed: " . mysqli_connect_error());
    }

?>