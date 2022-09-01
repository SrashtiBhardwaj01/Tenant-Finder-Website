<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    session_start();
  
    //Load Composer's autoloader
    require 'vendor/autoload.php';

    include 'config.php';
    $msg = "";

  
   
  
   if (isset($_POST['submit'])) {
       $nm = $_POST['name'];
       $email = $_POST['email'];
       $phno = $_POST['phno'];
       $c_add = $_POST['add'];
       $adhaar = $_POST['ano'];

       $query = "INSERT INTO `tenant_details`(`Sno`, `Name`, `Email`, `Contact`, `Current_Address`, `Adhaar`, `Date`) VALUES ('','$nm','$email','$phno','$c_add','$adhaar',current_timestamp())";

       $res = $conn->query($query);

       if ($res) {
           echo "<div style='display: none;'>";
           //Create an instance; passing `true` enables exceptions
           $mail = new PHPMailer(true);

           try {
               //Server settings
               $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
               $mail->isSMTP();                                            //Send using SMTP
               $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
               $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
               $mail->Username   = 'khushi.hr.unnati@gmail.com';                     //SMTP username
               $mail->Password   = '123!?@#lets';                               //SMTP password
               $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
               $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

               //Recipients
               $mail->setFrom('khushi.hr.unnati@gmail.com');
               $mail->addAddress($email);
               $mail->addAttachment('attach/agreement.pdf', 'agreement.pdf');

               //Content
               $mail->isHTML(true);                                  //Set email format to HTML
               $mail->Subject = 'no reply';
               $mail->Body    = "Hey $nm, your Details have been received !! <br><b> Kindly check the Terms and Conditions attached below.</b>";

               $mail->send();
               echo 'Message has been sent';
           } catch (Exception $e) {
               echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
           }
           echo "</div>";
           echo '<script>alert("Details Received.We will send the confirmation of Agreement on your email address soon. !!")</script>';
       } 
   }


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Property Agreement</title>
    <link rel="stylesheet" href="Agreement.css">
    <link href="//fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
   
</head>
<body>

   

    <div class="container">
        <form id="form1" method="post" action="">
           
            <h3>Agreement Details</h3>
            <input type="text" name="name" placeholder="Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="phno" placeholder="Contact Number" required><br>
            <input type="text" name="add" placeholder="Current Address" required>
            <input type="text" name="ano" data-type="adhaar-number" maxlength="19" placeholder="Adhaar Number" required><br>
            <br><a href="Agreement Terms  (1).pdf">View Rental terms and conditions</a><br><br>
            <input type="checkbox" name="agree" required>
            <label for="">I hereby agree to all the terms and conditions as mentioned above.</label>
            <div class="btn-box">
                <button type="submit" name="submit" >Submit</button>
            </div>
        </form>
    </div>

    <script>
        $('[data-type="adhaar-number"]').keyup(function() {
        var value = $(this).val();
        value = value.replace(/\D/g, "").split(/(?:([\d]{4}))/g).filter(s => s.length > 0).join("-");
        $(this).val(value);
        });

        $('[data-type="adhaar-number"]').on("change, blur", function() {
        var value = $(this).val();
        var maxLength = $(this).attr("maxLength");
        if (value.length != maxLength) {
          $(this).addClass("highlight-error");
        } else {
          $(this).removeClass("highlight-error");
        }
        });
    </script>
   
    <script>
       

        function display_msg(){
            
            window.alert("Form submitted successfully!")
        }
    </script>
</body>
</html>