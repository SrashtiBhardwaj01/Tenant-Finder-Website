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
    <title>Terms and Condition</title>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="term.css">


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <script src="navcheck.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/51d140a1ed.js" crossorigin="anonymous"></script>



</head>
<body>

<div class="head">
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



    <div class="term">
        <h1>Terms and Condition</h1><hr>

    <h2><strong>Terms and Conditions</strong></h2>

    <p>Welcome to <span>Tenant finder website!</span></p>

    <p>These terms and conditions outline the rules and regulations for the use of tenant finder website's Website, located at
         www.tenantfinder.com.</p>

    <p>By accessing this website we assume you accept these terms and conditions. Do not continue to use tenant finder website
         if you do not agree to take all of the terms and conditions stated on this page.</p>

    <p>The following terminology applies to these Terms and Conditions, Privacy Statement and Disclaimer Notice and all Agreements: 
        "Client", "You" and "Your" refers to you, the person log on this website and compliant to the Company’s terms and conditions.
         "The Company", "Ourselves", "We", "Our" and "Us", refers to our Company. "Party", "Parties", or "Us", refers to both the 
         Client and ourselves. All terms refer to the offer, acceptance and consideration of payment necessary to undertake the process 
         of our assistance to the Client in the most appropriate manner for the express purpose of meeting the Client’s needs in respect
          of provision of the Company’s stated services, in accordance with and subject to, prevailing law of Netherlands. Any use of 
          the above terminology or other words in the singular, plural, capitalization and/or he/she or they, are taken as interchangeable 
          and therefore as referring to same.</p>


    <h3><strong>License</strong></h3>

    <p>Unless otherwise stated, tenant finder website and/or its licensors own the intellectual property rights for all material
         on tenant finder website. All intellectual property rights are reserved. You may access this from tenant finder website 
         for your own personal use subjected to restrictions set in these terms and conditions.</p>

    <p>You must not:</p>
    <ul>
        <li>Republish material from tenant finder website.</li>
        <li>Sell, rent or sub-license material from tenant finder website.</li>
        <li>Reproduce, duplicate or copy material from tenant finder website.</li>
        <li>Redistribute content from tenant finder website.</li>
    </ul>

    <p>Parts of this website offer an opportunity for users to post and exchange opinions and information in certain areas of the website.
        tenant finder website does not filter, edit, publish or review Comments prior to their presence on the website. Comments do not
        reflect the views and opinions of tenant finder website,its agents and/or affiliates. Comments reflect the views and opinions
        of the person who post their views and opinions. To the extent permitted by applicable laws, tenant finder website shall not
        be liable for the Comments or for any liability, damages or expenses caused and/or suffered as a result of any use of and/or
        posting of and/or appearance of the Comments on this website.</p>

    <p>Tenant finder website reserves the right to monitor all Comments and to remove any Comments which can be considered inappropriate, 
        offensive or causes breach of these Terms and Conditions.</p>


    <p>You hereby grant tenant finder website a non-exclusive license to use, reproduce, edit and authorize others to use, reproduce and
         edit any of your Comments in any and all forms, formats or media.</p>

    <h3><strong>Hyperlinking to our Content</strong></h3>

    <p>The following organizations may link to our Website without prior written approval:</p>

    <ul>
        <li>Government agencies;</li>
        <li>Search engines;</li>
        <li>News organizations;</li>
        <li>Online directory distributors may link to our Website in the same manner as they hyperlink to the Websites of other listed
             businesses; and</li>
        <li>System wide Accredited Businesses except soliciting non-profit organizations, charity shopping malls, and charity fundraising
             groups which may not hyperlink to our Web site.</li>
    </ul>

    <p>These organizations may link to our home page, to publications or to other Website information so long as the link: <br>(a)
         is not in any way deceptive; <br>(b) does not falsely imply sponsorship, endorsement or approval of the linking party and
          its products and/or services; and<br> (c) fits within the context of the linking party’s site.</p>

    <p>We may consider and approve other link requests from the following types of organizations:</p>

    <ul>
        <li>Commonly-known consumer and/or business information sources;</li>
        <li>dot.com community sites;</li>
        <li>Associations or other groups representing charities;</li>
        <li>Online directory distributors;</li>
        <li>Internet portals;</li>
        <li>Accounting, law and consulting firms; and</li>
        <li>Educational institutions and trade associations.</li>
    </ul>

    <p>We will approve link requests from these organizations if we decide that: <br>(a) the link would not make us look unfavorably to 
        ourselves or to our accredited businesses;<br> (b) the organization does not have any negative records with us;<br>
         (c) the benefit to us from the visibility of the hyperlink compensates the absence of tenant finder website; and <br>
         (d) the link is in the context of general resource information.</p>

    <p>These organizations may link to our home page so long as the link: <br>
        (a) is not in any way deceptive;<br>
         (b) does not falsely imply sponsorship, endorsement or approval of the linking party and its products or services; and<br>
          (c) fits within the context of the linking party’s site.</p>

    <p>If you are one of the organizations listed in paragraph 2 above and are interested in linking to our website, you must inform
         us by sending an e-mail to tenant finder website. Please include your name, your organization name, contact information as well
          as the URL of your site, a list of any URLs from which you intend to link to our Website, and a list of the URLs on our site to
           which you would like to link. Wait 2-3 weeks for a response.</p>

    <p>Approved organizations may hyperlink to our Website as follows:</p>

    <ul>
        <li>By use of our corporate name; or</li>
        <li>By use of the uniform resource locator being linked to; or</li>
        <li>By use of any other description of our Website being linked to that makes sense within the context and format of content
             on the linking party’s site.</li>
    </ul>

    <p>No use of tenant finder website's logo or other artwork will be allowed for linking absent a trademark license agreement.</p>

    <h3><strong>Content Liability</strong></h3>

    <p>We shall not be hold responsible for any content that appears on your Website. You agree to protect and defend us against all 
        claims that is rising on your Website. No link(s) should appear on any Website that may be interpreted as libelous, obscene 
        or criminal, or which infringes, otherwise violates, or advocates the infringement or other violation of, any third party rights.</p>

    <h3><strong>Your Privacy</strong></h3>

    <p>Please read Privacy Policy</p>

    <h3><strong>Reservation of Rights</strong></h3>

    <p>We reserve the right to request that you remove all links or any particular link to our Website. You approve to immediately 
        remove all links to our Website upon request. We also reserve the right to amen these terms and conditions and it’s linking 
        policy at any time. By continuously linking to our Website, you agree to be bound to and follow these linking terms and conditions.</p>

    <h3><strong>Removal of links from our website</strong></h3>

    <p>If you find any link on our Website that is offensive for any reason, you are free to contact and inform us any moment. We will 
        consider requests to remove links but we are not obligated to or so or to respond to you directly.</p>

    <p>We do not ensure that the information on this website is correct, we do not warrant its completeness or accuracy; nor do we
         promise to ensure that the website remains available or that the material on the website is kept up to date.</p>

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
            
            </footer>
    <!---------------------------------------------  Footer Ends Here---------------------------------------------> 
    
</body>
</html>