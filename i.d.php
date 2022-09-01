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
    <link href="i.d.css" rel="stylesheet" />
</head>
<?php
    include("config.php");

    if(isset($_POST['search']))
    {
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $address=mysqli_real_escape_string($conn, $_POST['address']);
        $city=mysqli_real_escape_string($conn, $_POST['city']);

        error_reporting(0);
        $query="SELECT id from landlord WHERE email='$email' AND address='$address' AND city='$city' ";
        $data=mysqli_query($conn,$query);
        $total=mysqli_num_rows($data);
        $result =mysqli_fetch_assoc($data);
        $y=$result['id'];

        if($total !=0){
            echo '<script>alert("Your Resigtered Id is :'.$y.'")</script>';
        }
        else{
            echo '<script>alert("No data found !!")</script>';
        }
    }
?>

<body>
    <section class="events">

    <div class="primary">
        
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
        <div class ="paragraph">Enter Your Details</div>
            <form action="" method="post">
                <div class="fields">
                    <input type="email" name="email" required>
                    <label for="emailid">Email Id*</label>
                </div>
                <div class="fields">
                    <input type="text" id="Address" name="address" required>
                    <label for="Address">Address*</label>
                </div>
                <div class="fields">
                    <input type="text" id="City" name="city" required>
                    <label for="City">City*</label>
                </div>
                <div class="fields">
                    <input type="submit"  name="search" value="Search Id"/>
                </div>  
                <a href="Post_property.php">Back to post property</a>    
            </form>
    </div>
    </div>
    </section>
</body>
</html>

