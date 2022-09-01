<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Details</title>
    <link href="id.css" rel="stylesheet" />
</head>
<body>
    <section class="events">

    <div class="primary">
    <h1>Thank You!!</h1>
    <p>Your Data Inserted Successfully.</p>
    <h2>Your Registered Id :
                <?php 
                        if(isset($_SESSION['status']))
                        {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                         unset($_SESSION['status']);
                    }
                ?>
                <?php
                    include("config.php");
                    error_reporting(0);
                    $query="SELECT id from landlord order by id desc limit 1";
                    $data=mysqli_query($conn,$query);
                    $total=mysqli_num_rows($data);
                    $result =mysqli_fetch_assoc($data);

                    if($total !=0){
                        echo $result['id'];
                    }
                    else{
                        echo "No record";
                    }
                    ?></h2>
        <a href="Post_property.php">Back</a>
    </div>
    </div>
</body>
</html>