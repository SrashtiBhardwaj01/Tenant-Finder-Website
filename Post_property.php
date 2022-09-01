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
		<title>Post property</title>
		<link href="Post_property.css" rel="stylesheet" />

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
                    <?php   if(!$loggedin)
                        {
                            echo '<a href="index.php"><img src="http://ww1.prweb.com/prfiles/2010/12/20/4325074/Anchorage.jpg" alt="Basic details"></a>';
                        }
                        
                        if($loggedin)
                        {
                            echo '<a href="basic_details.php"><img src="http://ww1.prweb.com/prfiles/2010/12/20/4325074/Anchorage.jpg" alt="Basic details"></a> '; 
                        }?>
					
				</div>
				<div id="d32">
					<?php   if(!$loggedin)
                        {
                            echo '<h3><a href="index.php">BASIC DETAILS</a></h3>';
                        }
                        
                        if($loggedin)
                        {
                            echo '<h3><a href="basic_details.php">BASIC DETAILS</a></h3> '; 
                        }?>
                       	<h5> Give the basic details about the property.</h5>
				</div>
			</div>

			<div class="d4">
				<div id="d41">
                    <?php   if(!$loggedin)
                        {
                            echo '<a href="index.php"><img src="https://everythinghomedesigns.com/wp-content/uploads/2018/12/a3da59_6b82c08e32f4478a8134e213ea9e2e0dmv2_d_2000_1333_s_21.jpg" alt="property details" /></a>';
                        }
                        
                        if($loggedin)
                        {
                            echo '<a href="Prop.php"><img src="https://everythinghomedesigns.com/wp-content/uploads/2018/12/a3da59_6b82c08e32f4478a8134e213ea9e2e0dmv2_d_2000_1333_s_21.jpg" alt="property details" /></a>'; 
                        }?>
					
				</div>
				<div id="d42">
                    <?php   if(!$loggedin)
                        {
                            echo '<h3><a href="index.php">PROPERTY DETAILS</a></h3>';
                        }
                        
                        if($loggedin)
                        {
                            echo '<h3><a href="Prop.php">PROPERTY DETAILS</a></h3> '; 
                        }?>
					<h5> Post about your Properties in just few Seconds. </h5>
				</div>
			</div>

			<div class="d5">
				<div id="d51">
                <?php   if(!$loggedin)
                        {
                            echo '<a href="index.php"><img src="http://i.huffpost.com/gen/1150031/images/o-EASY-HOME-UPGRADES-facebook.jpg" alt="rent" /></a>';
                        }
                        
                        if($loggedin)
                        {
                            echo '<a href="rent.php"><img src="http://i.huffpost.com/gen/1150031/images/o-EASY-HOME-UPGRADES-facebook.jpg" alt="rent" /></a>'; 
                        }?>
				</div>
				<div id="d52">
                    <?php   if(!$loggedin)
                        {
                            echo '<h3><a href="index.php">RENT</a></h3>';
                        }
                        
                        if($loggedin)
                        {
                            echo '<h3><a href="rent.php">RENT</a></h3> '; 
                        }?>
					
					<h5>Post about the property rent to make things easier.</h5>
				</div>
			</div>

			<div class="d6">
				<div id="d61">
                <?php   if(!$loggedin)
                        {
                            echo '<a href="index.php"><img src="https://www.courant.com/resizer/KzKpOH5psMqbC2eR0XdG7T625Gk=/1200x0/top/cloudfront-us-east-1.images.arcpublishing.com/tronc/PLG6UO7SAVCKFAFYTTP34AWMS4.jpeg" alt="images" /></a>';
                        }
                        
                        if($loggedin)
                        {
                            echo '<a href="upload_image.php"><img src="https://www.courant.com/resizer/KzKpOH5psMqbC2eR0XdG7T625Gk=/1200x0/top/cloudfront-us-east-1.images.arcpublishing.com/tronc/PLG6UO7SAVCKFAFYTTP34AWMS4.jpeg" alt="images" /></a>'; 
                        }?>
					
				</div>
			    <div id="d62">
                    <?php   if(!$loggedin)
                        {
                            echo '<h3><a href="index.php">IMAGES</a></h3>';
                        }
                        
                        if($loggedin)
                        {
                            echo '<h3><a href="upload_image.php">IMAGES</a></h3> '; 
                        }?>
					
					<h5>Upload the images to make your property more attractive.</h5>
			</div>
       </div>
		</section>


		       
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
