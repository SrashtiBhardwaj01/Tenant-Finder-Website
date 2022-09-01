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

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';
include 'config.php';
$msg = "";


if(isset($_POST['submit']))
        {
            $rate = mysqli_real_escape_string($conn, $_POST['rate']);
            $fullname = mysqli_real_escape_string($conn, $_POST['fullname']);
            $email = mysqli_real_escape_string($conn, $_POST['email']);
            $age = mysqli_real_escape_string($conn, $_POST['age']);
            $phoneno = mysqli_real_escape_string($conn, $_POST['phoneno']);
            $message=mysqli_real_escape_string($conn, $_POST['message']);


            $stmt=$conn->prepare("INSERT INTO feedback (rate,fullname,email,age,phoneno,message)
            VALUES(?,?,?,?,?,?)");
            $stmt->bind_param('ssssss',$rate,$fullname,$email,$age,$phoneno,$message );
            $stmt->execute();
        
            if($stmt)

            {        
                echo "<div style='display: none;'>";
                //Create an instance; passing `true` enables exceptions
                $mail = new PHPMailer(true);
    
                try {
                    //Server settings
                    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                    $mail->isSMTP();                                            //Send using SMTP
                    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                    $mail->Username   = 'khushi.hr.unnati@gmail.com';                   //SMTP username
                    $mail->Password   = '123!?@#lets';                               //SMTP password
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
                    //Recipients
                    $mail->setFrom('khushi.hr.unnati@gmail.com');
                    $mail->addAddress($email);
    
                    //Content
                    $mail->isHTML(true);                                  //Set email format to HTML
                    $mail->Subject = 'no reply';
                    $mail->Body    = 'Thankyou for giving your Suggestions!! <b></b>';
    
                    $mail->send();
                    echo 'Message has been sent';
                } catch (Exception $e) {
                    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                }
                echo "</div>";        
                $msg = "<div class='alert alert-info'>Thankyou for your Suggestions!! We have sent you an email.</div>";
                header("Location: welcome.php");
            }
         
    }
        

?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta hhtp-equiv="X-UA-Compatible" content="ie=edge">
        <title>Feedback Form</title>

        <!-- BOOTSTRAP CDN Links -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="feedbackform.css">
        <link href="//fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">


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

        <div class="wrap">
        <?php 
                    if(isset($_SESSION['status']))
                    {
                        ?>
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                            <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        <?php
                         unset($_SESSION['status']);
                    }
                ?>

        <table>
        <form action="" method ="post">
            <h1> Feedback Form </h1>
            <tr>
        <td colspan="2">
        <label>
        How do you rate your overall experience?</label>
        <br/>
        
        <input type="radio" id="y" name="rate" value="bad">Bad &nbsp &nbsp;
        <input type="radio" id="x" name="rate" value="average">Average &nbsp &nbsp;
        <input type="radio" id="z" name="rate" value="good">Good
        
        </td>
        
        </tr>

        
        <tr>
        <td>
        <br>
        <label class="color"> Fullname* </label>
        <br/>

        <input type="text" name="fullname" class="txt">
        </td>



        <td>
        <br>
        <label class="color"> Email* </label>
        <br/>

        <input type="email" name="email"class="txt">
        </td>
        </tr>

        <tr>
        <td>
        <br>
        <label class="color"> Age* </label>
        <br/>

        <input type="text" name="age" class="txt">
        </td>



        <td>
        <br>
        <label class="color">Phone no* </label>
        <br/>

        <input type="text" name="phoneno" class="txt">
        </td>
        </tr>


        <tr>
        <td colspan="2">
        <br>
        <label class="color"> Your Suggestions * </label>
        <br/>
        <textarea class="txtarea" name="message"></textarea>
        </td>
        </tr>

        <tr>
        <br>
        <td colspan="2"><button type="submit" name="submit" class="btn">Submit</button></td>
        </tr>
        </form>
        </table>
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