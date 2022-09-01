<?php
session_start();

if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true)
{
    $loggedin=true;
}
else
{
    $loggedin=false;
}?>

<?php
    $conn = mysqli_connect('localhost', 'root', '', 'tenantfinder');
    if (!$conn) {
        echo 'Connection Failed';
    }
?>
<?php
            $search = 'Delhi';
            // echo $search;
        
            $sql1 = "SELECT * FROM `property_details` WHERE City='$search' OR House_type='$search' OR BHK ='$search'";
            $result = $conn->query($sql1);
        ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property</title>
    <link rel="stylesheet" href="ex-result.css">
    <style>
        .search{
            width:70%;
            margin-left:100px;
        }
    </style>
</head>
<body>
    <!----------------------------------------Navbar Start Here------------------------------------------------->
    <nav class="navbar">
                <img src="images\1.jpeg" class="mlogo" alt="logo">
                <div class="logo">Tenant Finder</div>
            
                    <a href="#" class="toggle-btn" >
                        <span class="bar"></span>
                        <span class="bar"></span>
                        <span class="bar"></span>
                    </a>
                    <div class="nav-items">
                        <ul>
                            <li><a href="welcome.php">Home</a></li>
                            <li><a href="aboutus.php">About Us</a></li>
                        <?php   if(!$loggedin)
                            {
                                echo '<li>
                                <a href="index.php">Login</a>
                                </li>';
                            }
                            
                            if($loggedin)
                            {
                                echo '<li><a href="logout.php">Logout</a></li> '; 
                            }?>
                            <li><a href="contactus.php">Contact Us</a></li>
                        </ul>
                    </div>
            </nav>
    <!----------------------------------------Navbar End Here------------------------------------------------->
    <div class="search">
    <h1>Recommended Places For <?php echo "$search";?></h1>
	<?php
                    
        if (mysqli_num_rows($result)==0){
            echo "No Rentals Available Currently.!!";
        }
        else if (mysqli_num_rows($result)>0) {
        while ($fetch = mysqli_fetch_assoc($result)) {
    ?>

    <div class="house-details">
	    <div class="house-title">
			<div class="row">
			   <!-- <div>
				 <span><?//php echo $fetch['Rating']; ?> Rating</span>
			    </div>
			    <div> -->
			       <p>Location: <?php echo $fetch['Address']; ?> </p>
		    </div>
		 </div>	
	</div>
    <div class="gallery">
	<div class="gallery-img-1"><img src="upload/<?php echo $fetch['image1']; ?>"></div>
                        <div><img src="upload/<?php echo $fetch['image2']; ?>"></div>
		                <div><img src="upload/<?php echo $fetch['image3']; ?>"></div>
		                <div><img src="upload/<?php echo $fetch['image4']; ?>"></div>
	</div>
	<div class="small-details">
	     <!-- <h2>Entire rental unit hosted by Brandon</h2> -->
		 <p><?php echo $fetch['Furnished']; ?> &nbsp; &nbsp; <?php echo $fetch['Rental_floor']; ?> Floor &nbsp; &nbsp; <?php echo $fetch['BHK']; ?> BHK &nbsp; &nbsp; <?php echo $fetch['House_type']; ?></p>
		 <h4>&#x20b9 <?php echo $fetch['Price']; ?>/month</h4>
	</div>
	<hr class="line">

	<?php
            }
		}
    ?>
    </div>
</body>
</html>