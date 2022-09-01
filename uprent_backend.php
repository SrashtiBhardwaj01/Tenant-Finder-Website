<?php
session_start();
$con = mysqli_connect("localhost","root","","tenantfinder");

if(isset($_POST['save']))
{
    $l_id=$_POST['email'];
    $withfood=$_POST['withfood'];
    $withoutfood = $_POST['withoutfood'];
    $withfur = $_POST['withfur'];
    $withoutfur = $_POST['withoutfur'];
    $withsemi = $_POST['withsemi'];
    $rent5 = $_POST['rent5'];
    $parking = $_POST['parking'];
    $security = $_POST['security'];
    $p=$price = $_POST['price'];


    $query = "UPDATE rent SET withfood='$withfood', withoutfood='$withoutfood', withfur='$withfur',withoutfur='$withoutfur', withsemi='$withsemi',rent5='$rent5', parking='$parking',security='$security',price='$price' WHERE l_id='$l_id' ";
    $query_run = mysqli_query($con, $query);

    $que = "UPDATE property_details SET Price='$p' WHERE id='$l_id' ";
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