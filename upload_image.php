<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<title>Multiple Image Upload</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="upload_image.css">


	<link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
        <script src="navcheck.js" defer></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/51d140a1ed.js" crossorigin="anonymous"></script>
</head>
<body>


<div class="contact">
<div class="container">
<div class="row">
<div class="col-12">
   
	<h2>Upload Multiple Image</h2>
	<hr>
	<form method="post" enctype="multipart/form-data" action="file-upload.php">
          <div class="field">
            <label for="l_id" >Registered Id* : </label>
            <input type="id" name="l_id" required>
            </div>

		<div class="form-group">
			<h6>Image One</h6>
			<input type="file" name="image[]" class="form-control" multiple />
		</div>
		 <div class="form-group">
			<h6>Image Two</h6>
			<input type="file" name="image[]" class="form-control"/>
		</div>
		<div class="form-group">
			<h6>Image Three</h6>
			<input type="file" name="image[]" class="form-control"/>
		</div><!--
		<div class="form-group">
			<h6>Image Four</h6>
			<input type="file" name="image[]" class="form-control"/>
		</div>
		<div class="form-group">
			<label>Image Five</label>
			<input type="file" name="image[]" class="form-control"/>
		</div> -->
        <div class="pass-link">
           <a href="i.d.php">Forgot Id?</a>
        </div>
        <div class="inputBox">
		<input type="submit" name="submit" value="Submit" class="btn btn-primary">
        </div>
	</form>
    </div>
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>



 <!---------------------------------------------  Footer Start Here---------------------------------------------
 <footer class="footer">
                <div class="container2">
                    <div class="row">  
                        <div class="footer-col">
                            <h4>Company</h4>
                            <ul>
                                <li><a href="aboutus.php">About Us</a></li>
                                <!--<li><a href="#">Our Services</a></li>--
                                <li><a href="privacy.php">Privacy Policy</a></li>
                                <li><a href="termncond.php">Term and Condition</a></li>
                            </ul>
                        </div>
                        <div class="footer-col">
                            <h4>Get help</h4>
                            <ul>
                                <li><a href="faq.php">FAQs</a></li>
                                <li><a href="feedback.php">Feedback</a></li>
                                <li><a href="agreement.php">Agreement</a></li>
                             <!--   <li><a href="#">Payment Options</a></li> --
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