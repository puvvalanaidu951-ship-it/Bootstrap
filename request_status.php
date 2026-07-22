<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/ebdd1363cb.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>Request status Page</title>
</head>
<body>
            <?php

            $status = $_GET['status'];
            ?>
                    <div class="container mt-5 w-80">
                        <?php
                        if($status == "success")
                            {
                        ?>
                        <div class="alert alert-success text-center">

                        <h3>Request submitted successfully!...</h3>
                        <p>Your blood request has been submitted...</p>
                       <a href="index.php"><button class="border-0 btn btn-success py-3 px-5" >Ok...</button></a> 
                            

                    </div>
            <?php
            }
            else 
            {
            ?>
                <div class="alert alert-danger text-center">
                <h3>Request failed...</h3>
                <p>Please check the form...</p>
               <a href="Emergency.php" class="btn btn-danger"> <button>Again Submit the form</button></a>
                </div>
            <?php
            }
            ?>
            </div>
</body>

</html>