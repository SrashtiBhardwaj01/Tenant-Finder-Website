<?php
session_start();
$conn = mysqli_connect("localhost","root","","tenantfinder");
if($conn->connect_error){
    die('Connection Failed: '.$conn->connect_error);
}
else{

        if(isset($_POST['submit']))
        {
            $name = mysqli_real_escape_string($conn, $_POST['name']);
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $message=mysqli_real_escape_string($conn, $_POST['message']);

            $stmt=$conn->prepare("INSERT INTO contactus (name,email,message)
            VALUES(?,?,?)");
            $stmt->bind_param('sss',$name,$email,$message );
            $stmt->execute();
        
            if($stmt)
            {
                $_SESSION['status'] = "Data Inserted Successfully";
                header("Location: welcome.php");
            }
            else
            {
                $_SESSION['status'] = "Data Not Inserted";
                header("Location:index.php");
            }
        }
    }

?>