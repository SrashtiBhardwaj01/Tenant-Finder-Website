<?php
session_start();
$con = mysqli_connect("localhost","root","","tenantfinder");

if(isset($_POST['save']))
{
    $ht=$AT=$_POST['AT'];
    $mealtype=$_POST['mealtype'];
    $op = $_POST['op'];
    $pt = $_POST['pt'];
    $meal2 = $_POST['meal2'];
    $rf=$rentalfloor = $_POST['rentalfloor'];
    $bhk=$beds = $_POST['beds'];
    $f=$fs = $_POST['fs'];
    $ff = $_POST['ff'];
    $gender = $_POST['gender'];
    $descr = $_POST['descr'];
    $l_id = $_POST['l_id'];


    $query = "UPDATE propdetails SET AT='$AT', mealtype='$mealtype', op='$op',pt='$pt', meal2='$meal2',rentalfloor='$rentalfloor', beds='$beds',fs='$fs',ff='$ff' ,gender='$gender',descr='$descr'   WHERE l_id='$l_id' ";
    $query_run = mysqli_query($con, $query);

    $que = "UPDATE property_details SET House_type='$ht',Rental_floor='$rf', BHK='$bhk',Furnished='$f' WHERE id='$l_id' ";
    $que_run = mysqli_query($con, $que);

    if($que_run)
    {
        $_SESSION['status'] = "Data Updated Successfully";
        header("Location: update_property.php");
    }
    else
    {
        $_SESSION['status'] = "Not Updated";
        header("Location: home.php");
    }
}

?>