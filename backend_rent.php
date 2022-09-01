<?php

session_start();
$conn = mysqli_connect("localhost","root","","tenantfinder");
if($conn->connect_error){
    die('Connection Failed: '.$conn->connect_error);
}
else{

        if(isset($_POST['submit']))
        {
            $withfood = mysqli_real_escape_string($conn, $_POST['withfood']);
            $withoutfood = mysqli_real_escape_string($conn, $_POST['withoutfood']);
            $withfur = mysqli_real_escape_string($conn, $_POST['withfur']);
            $withoutfur = mysqli_real_escape_string($conn, $_POST['withoutfur']);
            $withsemi=mysqli_real_escape_string($conn, $_POST['withsemi']);
            $rent5=mysqli_real_escape_string($conn, $_POST['rent5']);
            $parking=mysqli_real_escape_string($conn, $_POST['parking']);
            $security=mysqli_real_escape_string($conn, $_POST['security']);
            $p=$price=mysqli_real_escape_string($conn, $_POST['price']);
            $l_id=mysqli_real_escape_string($conn, $_POST['l_id']);

            $stmt=$conn->prepare("INSERT INTO rent (withfood,withoutfood,withfur,withoutfur,withsemi,rent5,parking,security,price,l_id)
            VALUES(?,?,?,?,?,?,?,?,?,?)");
            $stmt->bind_param('ssssssssss',$withfood,$withoutfood,$withfur,$withoutfur,$withsemi,$rent5,$parking,$security,$price,$l_id );
            $stmt->execute();

            // $stm=$conn->prepare("INSERT INTO property_details (Price) WHERE id=1
            // VALUES(?)");
            // $stm->bind_param('s',$p);
            // $stm->execute();

            $que = "UPDATE property_details SET Price='$p' WHERE id='$l_id'";
            $que_run = mysqli_query($conn, $que);
        
            if($que_run)
            {
                $_SESSION['status'] = "Data Inserted Successfully";
                header("Location: Post_property.php");
            }
            else
            {
                $_SESSION['status'] = "Data Not Inserted";
                header("Location:index.php");
            }
        }
    }

?>