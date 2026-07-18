<?PHP
    include 'db_conn.php';

    $query = "SELECT fullname FROM users";
    
    $exec = mysqli_query($conn, $query);
    
    if(mysqli_num_rows($exec)>0){
        while($row = mysqli_fetch_assoc($exec)){
           $profile_name = $row['fullname'];

            echo "
                <h1>". $profile_name ."</h1>
            ";
        }
    }else{
        echo "No Data Found";
    }
?>