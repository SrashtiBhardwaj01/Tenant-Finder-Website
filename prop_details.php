<?php

session_start();
$conn = mysqli_connect("localhost","root","","tenantfinder");
if($conn->connect_error){
    die('Connection Failed: '.$conn->connect_error);
}
else{

        if(isset($_POST['submit']))
        {
            $ht=$AT = mysqli_real_escape_string($conn, $_POST['AT']);
            $mealtype = mysqli_real_escape_string($conn, $_POST['mealtype']);
            $op = mysqli_real_escape_string($conn, $_POST['op']);
            $pt = mysqli_real_escape_string($conn, $_POST['pt']);
            $meal2=mysqli_real_escape_string($conn, $_POST['meal2']);
            $rf=$rentalfloor=mysqli_real_escape_string($conn, $_POST['rentalfloor']);
            $bhk=$beds=mysqli_real_escape_string($conn, $_POST['beds']);
            $f=$fs=mysqli_real_escape_string($conn, $_POST['fs']);
            $ff=mysqli_real_escape_string($conn, $_POST['ff']);
            $gender=mysqli_real_escape_string($conn, $_POST['gender']);
            $descr=mysqli_real_escape_string($conn, $_POST['descr']);
            $l_id=mysqli_real_escape_string($conn, $_POST['l_id']);

            $stmt=$conn->prepare("INSERT INTO propdetails (AT,mealtype,op,pt,meal2,rentalfloor,beds,fs,ff,gender,descr,l_id)
            VALUES(?,?,?,?,?,?,?,?,?,?,?,?)");
            $stmt->bind_param('ssssssssssss', $AT, $mealtype ,$op ,$pt ,$meal2 ,$rentalfloor ,$beds ,$fs ,$ff ,$gender ,$descr,$l_id );
            $stmt->execute();
        
            // $stm=$conn->prepare("INSERT INTO property_details (House_type,BHK,Furnished,Rental_floor)
            // VALUES(?,?,?,?)") ;
            // $stm->bind_param('ssss',$ht,$bhk,$f,$rf);
            // $stm->execute();

            $que = "UPDATE property_details SET House_type='$ht',Rental_floor='$rf', BHK='$bhk',Furnished='$f' WHERE id='$l_id' ";
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











