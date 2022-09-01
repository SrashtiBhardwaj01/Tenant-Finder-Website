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



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Privacy Policy</title>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="privacy.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
        <script src="navcheck.js" defer></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/51d140a1ed.js" crossorigin="anonymous"></script>
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


    <div class="privacy">
    <h1>Privacy Policy</h1><hr>
    <h2>Privacy Policy</h2>

    <p>At <span>Tenant Finder Website</span>, accessible from www.tenantfinder.com, one of our main priorities is the privacy of our visitors.
         This Privacy Policy document contains types of information that is collected and recorded by tenant finder website and how we use 
         it.</p>

    <p>If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us.</p>

    <p>This Privacy Policy applies only to our online activities and is valid for visitors to our website with regards to the information
         that they shared and/or collect in tenant finder website. This policy is not applicable to any information collected offline or
          via channels other than this website.</p>

    <h2>Consent</h2>

    <p>By using our website, you hereby consent to our Privacy Policy and agree to its terms.</p>

    <h2>Information we collect</h2>

    <p>The personal information that you are asked to provide, and the reasons why you are asked to provide it, will be made clear to
         you at the point we ask you to provide your personal information.</p>
    <p>If you contact us directly, we may receive additional information about you such as your name, email address,
         the contents of the message and/or attachments you may send us, and any other information you may choose to provide.</p>
    <p>When you register for an Account, we may ask for your contact information, including items such as name, 
        address, email address, and telephone number.</p>

    <h2>How we use your information</h2>

    <p>We use the information we collect in various ways, including to:</p>

    <ul>
    <li>Provide, operate, and maintain our website.</li>
    <li>Improve, personalize, and expand our website.</li>
    <li>Understand and analyze how you use our website.</li>
    <li>Develop new products, services, features, and functionality.</li>
    <li>Communicate with you, either directly or through one of our partners,<!-- including for customer service,--> to provide you with 
        updates and other information relating to the website, and for marketing and promotional purposes.</li>
    <li>Send you emails.</li>
    <li>Find and prevent fraud.</li>
    </ul>

    <h2>Log Files</h2>

    <p><span>Tenant Finder Website</span> follows a standard procedure of using log files. These files log visitors when they visit websites. 
        All hosting companies do this and a part of hosting services' analytics. The information collected by log files include
         internet protocol (IP) addresses, browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, 
         and possibly the number of clicks. These are not linked to any information that is personally identifiable. The purpose of
          the information is for analyzing trends, administering the site, tracking users' movement on the website, and gathering
           demographic information.</p>

    <h2>Advertising Partners Privacy Policies</h2>

    <P>You may consult this list to find the Privacy Policy for each of the advertising partners of tenant finder website.</p>

    <p>Third-party ad servers or ad networks uses technologies like cookies, JavaScript, or Web Beacons that are used in their respective 
        advertisements and links that appear on tenant finder website, which are sent directly to users' browser. They automatically receive 
        your IP address when this occurs. These technologies are used to measure the effectiveness of their advertising campaigns and/or 
        to personalize the advertising content that you see on websites that you visit.</p>

    <p>Note that tenant finder website has no access to or control over these cookies that are used by third-party advertisers.</p>

    <h2>Third Party Privacy Policies</h2>

    <p>Tenant finder website's Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you to consult
         the respective Privacy Policies of these third-party ad servers for more detailed information. It may include their practices 
         and instructions about how to opt-out of certain options. </p>

    <p>You can choose to disable cookies through your individual browser options. To know more detailed information about cookie
         management with specific web browsers, it can be found at the browsers' respective websites.</p>

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
            
            </footer>
    <!---------------------------------------------  Footer Ends Here---------------------------------------------> 
</body>
</html>