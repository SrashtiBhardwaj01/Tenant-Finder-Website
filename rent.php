<?php
session_start();
?>



<!doctype html>
<html>
<head>
	<title>Rent</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="rent.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
        <script src="navcheck.js" defer></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/51d140a1ed.js" crossorigin="anonymous"></script>
</head>
<body>

 	<section class="events">
		<div class ="primary">

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

			<div class ="paragraph">
                RENT
            </div>

			<form action="backend_rent.php" method="POST">

                <div class="field">
                    <input type="text" name="withfood" required>
					<label for="Rent">Rent(with food)/Month*</label>
                </div>

                <div class="field">
					<input type="text" name="withoutfood" required>
                    <label for="Rent">Rent(without food)/Month*</label>
                </div>

                <div class="field">
					<input type="text" name="withfur" required>
                    <label for="Rent">Rent(with furnished status)/Month*</label>
                </div>

                <div class="field">
					<input type="text" name="withoutfur"required>
                    <label for="Rent">Rent(with unfurnished status)/Month*</label>
                </div>

                <div class="field">
					<input type="text" name="withsemi" required>
                    <label for="Rent">Rent(with semifurnished status)/Month*</label>
                </div>

                <div class="type">                
					<label for="Parking">Parking Status:</label>

					<input type="radio" value="parking" name="rent5">
					<label>Parking</label>

					<input type="radio" value="non-parking" name="rent5">
					<label>Non-Parking</label>
                </div>

                <div class="field">
                    <input type="text" name="parking" required>
					<label for="Rent">Rent(acc. to parking status)*</label>
                </div>

                <div class="field">
                    <input type="text" name="security" required>
					<label for="Security Deposit">Security Deposit</label>
                </div>

                <div class="field">
						<input type="price" name="price" required>
						<label for="price">Final Price*</label>
					</div>
                    
                <div class="field">
						<input type="id" name="l_id" required>
						<label for="l_id">Registered Id*</label>
					</div>
                    
                <div class="pass-link">
                     <a href="i.d.php">Forgot Id?</a></div>

                <div class="field">		
					<input type="submit" name="submit" value="submit"/>
                </div>                 
			</form>
        </div>
     </section>

     <script src="https://code.jquery.com/jquery-3.5.1.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
