<?php
session_start();
?>


<!doctype html>
<html>
<head>
	<title>property details</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="prop_details.css" rel="stylesheet">


	
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
                      PROPERTY DETAILS
			</div>
			<form action="prop_details.php" method="post">
                    <div class="type">
						<label for="Accommodation Type">Accommodation Type:</label>

						<select id="At" name="AT">
							<option value="none" >--select--</option>
							<option value="Commercial">Commercial</option>
							<option value="Residential">Residential</option>
							<option value="PG">PG</option>
							<option value="Co-working">Co-working</option>
						</select>

				   </div>

				   <div class="type">
						<label for="Food Type">Food Type:</label>

						<input type="radio" name="mealtype" value="v" id="v" required>
						<label>Veg</label>

						<input type="radio"  name="mealtype" value="nv" id="v" required>
						<label>Non-veg</label>

					</div>

					<div class="type">
						<label for="Occupancy">Occupancy:</label>

						<select id="op" name="op" required>

							<option value="none">--select--</option>
							<option value="Single">Single</option>
							<option value="Double">Double</option>
							<option value="Triple">Triple</option>
							<option value="Quadruple">Quadruple</option>	

						</select>
					</div>

					<div class="type">
						<label for="Prefferred Tenant">Prefferred Tenant:</label>

						<select id="pt" name="pt">

							<option value="none">--select--</option>
							<option value="Student">Student</option>
							<option value="Professional">Professional</option>
							<option value="family">Family</option>

						</select>
			    	</div>

                   <div class="type">
						<label for="No. of meals">Number of meals:</label>

						<br>
						<input type="checkbox" name="meal2" value="breakfast">
						<label>Breakfast</label><br>

						<input type="checkbox" name="meal2" value="lunch">
						<label>Lunch</label><br>

						<input type="checkbox"  name="meal2" value="evening snacks">
						<label>Evening Snacks</label><br>

						<input type="checkbox"  name="meal2" value="dinner">
						<label>Dinner</label>

				    </div>

					<div class="field">
						<input type="text" name="rentalfloor" required>
						<label for="Rental Floor">Rental Floor*</label>
					</div>

					<div class="field">
						<input type="text" name="beds" required>
						<label for="available beds">BHK*</label>
					</div>

					<div class="type">

						<label for="Furnished status">Furnishing Status:</label>

						<select id="furnished status" name="fs">

							<option value="none">--select--</option>
							<option value="Furnished">Furnished</option>
							<option value="Unfurnished">Unfurnished</option>
							<option value="SemiFurnished">semiFurnished</option>

						</select>
					</div>
					<div>
						<label for="Parking">Parking:</label>

						<select id="parking" name="ff">
							<option value="none">--select--</option>
							<option value="Available">Available</option>
							<option value="Not Available">Not Available</option>

						</select>

					</div>	
					<div class="type">
						<label for="gender">Gender:</label>

						<select id="gender" name="gender">
							<option value="none">--select--</option>
							<option value="male">Male</option>
							<option value="female">Female</option>
							<option value="no">Prefer not to say</option>

						</select>
					</div>
					
					<div class="field">
						<input type="text" name="descr" >
						<label for="description">Description</label>
					</div>

					<div class="field">
						<input type="id" name="l_id" required>
						<label for="l_id">Registered Id*</label>
					</div>
					<div class="pass-link">
                     <a href="i.d.php">Forgot Id?</a></div>

					<div class="field">
						<input type="submit" name="submit" value="Submit"/>
					</div>
				</form>
			</div>
		</section>

 
	</body>
</html>


   