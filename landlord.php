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
		<title>Landlord View</title>
		<link href="landlord.css" rel="stylesheet" type="text/css" />

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
        <script src="navcheck.js" defer></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/51d140a1ed.js" crossorigin="anonymous"></script>

	</head>
	<body>
		<section class="events">

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


            <div class="primary">
				<h1>Welcome Owner</h1>
				<p>Sit Back and relax..!!<br>While we are searching tenants for you</p>
			</div>

            <div class="d3">
                <div id="d31">
                    <a href="Post_property.php"><img src="https://www.lago.it/wp-content/uploads/2020/10/Home-Office-5.jpg" alt="post"></a>
                </div>
                <div id="d32">
                    <h3><a href="Post_property.php">POST PROPERTY</a></h3>
                    <h5>Owner will post their property.</h5>
                </div>
            </div>
                
            <div class="d5">
                <div id="d51">
                    <a href="update_property.php"><img src="https://www.choice.com.au/-/media/b1485194fd3c401ea7dc85f2dfecf006.ashx"
                     alt="update" /></a>
                </div>
                <div id="d52">
                    <h3><a href="update_property.php">UPDATE PROPERTY</a></h3>
                <h5>Landlord can update the changes in their property.</h5>
                </div>
            </div>    </section>

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
            
            </footer>
    <!---------------------------------------------  Footer Ends Here---------------------------------------------> 
    
    </body>
</html>