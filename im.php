<?php
include 'config.php';
    $image           = $_FILES['image']['name'];
    $tmp            = $_FILES['image']['tmp_name'];
    $image1           = $_FILES['image1']['name'];
    $tmp1           = $_FILES['image1']['tmp_name'];
    $image2           = $_FILES['image2']['name'];
    $tmp2           = $_FILES['image2']['tmp_name'];

    
    $temp           = explode(".", $image);
    $temp1          = explode(".", $image1);
    $temp2          = explode(".", $image2);
    $new            = round(microtime(true)) . '.' . end($temp);
    $new1           = round(microtime(true)) . '.' . end($temp1);
    $new2           = round(microtime(true)) . '.' . end($temp2);
    $path           = "images/".$new;
    $path1          = "images/".$new1;
    $path2          = "images/".$new2;
    move_uploaded_file($tmp, $path);
    move_uploaded_file($tmp1, $path1);
    move_uploaded_file($tmp2, $path2);


$c  = "insert into `multiple-images` values('$brg','$nama','$new','$new1','$new2');";

$ins=mysqli_query($conn,$c);

if($ins){
header('location: welcome.php?success='.base64_encode('success'));
} else {
header('location: welcome.php?error='.base64_encode('failed'));
}
?>