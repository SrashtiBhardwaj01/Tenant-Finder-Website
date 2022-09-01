<?php session_start(); ?>


<!DOCTYPE html>
<html>
<head>
    <title>UPDATE BASIC DETAILS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="upbasicdetails.css" rel="stylesheet">
</head>
<body>
    <section class="events">
         <div class="primary">

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
                
        <div class ="paragraph"> UPDATE BASIC DETAILS</div>
        <form action="upbasic_backend.php" method="post">
            <div class="fields">
                <input type="text"  name="username" required>
                <label for="User Name">Name*</label>
            </div>
            <div class="fields">
                <input type="number" name="mob" required>
                <label for="Mobile ">Mobile*</label>
            </div>
            <div class="fields">
					<input type="id" name="l_id" required>
					<label for="l_id">Registered Id*</label>
			</div>
            <div class="fields">
                <input type="text" id="House\Building No." name="hno" required>
                <label for="House/Building No.">House/Building No.*</label>
            </div>
            <div class="fields">
                <input type="text" id="Society/Building" name="society" required>
                <label for="Society/Building(if Any)">Society/Building*</label>
            </div>
            <div class="fields">
                <input type="text" id="Key Landmark" name="kl" required>
                <label for="Key Landmark">Key Landmark*</label>
            </div>
            <div class="fields">
                <input type="text" id="Address" name="address" required>
                <label for="Address">Address*</label>
            </div>
            <div class="fields">
                <input type="text" id="City" name="city" required>
                <label for="City">City*</label>
            </div>
            <div class="pass-link">
                    <a href="i.d.php">Forgot Id?</a>
                </div>
            <div class="fields">
                <input type="submit" name="save" value="Save"/>
            </div>      
        </form>
    </div>
    </section>
    </body>
</html>