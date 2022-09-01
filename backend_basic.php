<?php

session_start();
$conn = mysqli_connect("localhost","root","","tenantfinder");
if($conn->connect_error){
    die('Connection Failed: '.$conn->connect_error);
}
else{

        if(isset($_POST['submit']))
        {
            $username = mysqli_real_escape_string($conn, $_POST['username']);
            $mob = mysqli_real_escape_string($conn, $_POST['mob']);
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $hno = mysqli_real_escape_string($conn, $_POST['hno']);
            $society=mysqli_real_escape_string($conn, $_POST['society']);
            $k=$kl=mysqli_real_escape_string($conn, $_POST['kl']);
            $a=$address=mysqli_real_escape_string($conn, $_POST['address']);
            $c=$city=mysqli_real_escape_string($conn, $_POST['city']);

            $query=$conn->prepare("INSERT INTO landlord (username,mob,email,hno,society,kl,address,city)
            VALUES(?,?,?,?,?,?,?,?)");
            $query->bind_param('ssssssss',$username,$mob,$email,$hno,$society,$kl,$address,$city );
            $query->execute();

            // $stmt=$conn->prepare("INSERT INTO property_details (image1,image2,image3,image4,City,Address,Landmark,House_type,BHK,Furnished,Rental_floor,Price)
            // VALUES(?,?,?,?,?,?,?,?,?,?,?,?)");
            // $stmt->bind_param('ssssssssssss','1','1','1','1',$c,$a,$k,'1','1','1','1','1');
            // $stmt->execute();

                     error_reporting(0);
                    $query="SELECT id from landlord order by id desc limit 1";
                    $data=mysqli_query($conn,$query);
                    $total=mysqli_num_rows($data);
                    $result =mysqli_fetch_assoc($data);
                    $x=$result['id'];

            $que = "UPDATE property_details SET Landmark='$k',Address='$a', City='$c' WHERE Id='$x' ";
            $que_run = mysqli_query($conn, $que);
        
            if($que_run)
            {
                header("Location: id.php");
            }
            else
            {
                $_SESSION['status'] = "Data Not Inserted";
                header("Location:index.php");
            }
        }
    }

?>