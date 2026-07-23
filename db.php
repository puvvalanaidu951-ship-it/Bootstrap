<?PHP
    $server = "localhost";
    $user = "root";
    $pass = "";
    $db_name = "admin_dashboard";

    $connec = mysqli_connect($server, $user, $pass, $db_name);

    if (!$connec) {
    
    // mysqli_connect_error() returns a string description of the last connect error
    die("Connection failed: " . mysqli_connect_error());
    }
  

?>