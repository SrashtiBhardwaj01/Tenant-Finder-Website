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


<!doctype html>
<html>
<head>
	<title> About Us</title>
	<link href="aboutus.css" rel="stylesheet"  >

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <script src="navcheck.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/51d140a1ed.js" crossorigin="anonymous"></script>

</head>
<body>
<div class="section">
	<!---------header section starts here------------>

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



<div class="container">
<div class="title">
<h1>About Us</h1><br>
<div class="content"><hr>
<p> Our <span> Tenant Finder website </span> provides the knowledge to the tenants about the homes which are accessible for rent.
    They can easily search for their needs using keywords like property type, location, city.<br><br>
    On the other side, the Landlords have the facility to post their property for interested buyers to see. <br>
    </p>
    <div class="button">
    <a href="read.php">Read More</a>
    </div>
</div>
    <div class="image-section">
    <img src="https://img1.mashed.com/img/gallery/this-genius-hack-will-keep-your-gingerbread-house-from-falling-apart/l-intro-1607976419.jpg">
    </div>

</div>
</div>



<!---------------------------------------------  Footer Start Here--------------------------------------------->
<footer class="footer">
                <div class="container2">
                    <div class="row">  
                        <div class="footer-col">
                            <h4>Company</h4>
                            <ul>
                                <li><a href="aboutus.php">About Us</a></li>
                                <!--<li><a href="#">Our Services</a></li>-->
                                <li><a href="privacy.php">Privacy Policy</a></li>
                                <li><a href="termncond.php">Term and Condition</a></li>
                            </ul>
                        </div>
                        <div class="footer-col">
                            <h4>Get help</h4>
                            <ul>
                                <li><a href="faq.php">FAQs</a></li>
                                <?php   
                                    if(!$loggedin)
                                    {
                                        echo '<li><a href="index.php">Feedback</a></li>';
                                    }
                                    
                                    if($loggedin)
                                    {
                                        echo '<li><a href="feedback.php">Feedback</a></li> '; 
                                    }
                                ?>

                                <?php   
                                    if(!$loggedin)
                                    {
                                        echo '<li><a href="index.php">Agreement</a></li>';
                                    }
                                    
                                    if($loggedin)
                                    {
                                        echo '<li><a href="agreement.php">Agreement</a></li>'; 
                                    }
                                ?>
                             <!--   <li><a href="#">Payment Options</a></li> -->
                            </ul>
                        </div>
                        
                        <div class="footer-col">
                            <h4>Follow Us</h4>
                            <div class="social-links">
                                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                            
                        </div>
                    </div>
                    <hr>
                            <p>Copyright &#169; 2022, Tenant Finder Website</p> 
            
            </footer></div>
    <!---------------------------------------------  Footer Ends Here---------------------------------------------> 
  
</body> 
</html>
