<?php
session_start();
?>



<!DOCTYPE html>
<html>
<head>
    <title>BASIC DETAILS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="basic_details.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
        <script src="navcheck.js" defer></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/51d140a1ed.js" crossorigin="anonymous"></script>
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
            <div class ="paragraph">BASIC DETAILS</div>
            <form action="backend_basic.php" method="post">
                <div class="fields">
                    <input type="text" name="username" required>
                    <label for="Name">Name*</label>
                </div>
                <div class="fields">
                    <input type="number" name="mob" id="mob" required>
                    <label for="Mobile ">Mobile*</label>
                </div>
                <div class="fields">
                    <input type="email" name="email" required>
                    <label for="emailid">Email Id*</label>
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
                <div class="fields">
                    <input type="submit"  name="submit" value="Submit" "/>
                </div>      
            </form>
    </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>

