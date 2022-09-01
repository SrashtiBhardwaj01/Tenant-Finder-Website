<?php
session_start();
$con = mysqli_connect("localhost","root","","tenantfinder");

if(isset($_POST['save']))
{
    $l_id=$_POST['l_id'];
    $username=$_POST['username'];
    $mob = $_POST['mob'];
    $hno = $_POST['hno'];
    $society = $_POST['society'];
    $l=$kl = $_POST['kl'];
    $a=$address = $_POST['address'];
    $c=$city = $_POST['city'];

    $query = "UPDATE landlord SET username='$username', mob='$mob', hno='$hno',society='$society', kl='$kl',address='$address', city='$city' WHERE l_id='$l_id' ";
    $query_run = mysqli_query($con, $query);

    $que = "UPDATE property_details SET Landmark='$l',Address='$a', City='$c' WHERE id='$l_id' ";
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