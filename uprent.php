<?php session_start(); ?>

<!doctype html>
<html>
<head>
    <title>UPDATE RENT</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="uprent.css" rel="stylesheet">
</head>
<body>
    <section class="events">
        <div class ="primary">

            <div class ="paragraph">
                UPDATE RENT
            </div>

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

            <form action="uprent_backend.php" method="post">

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
                    <input type="text" name="withoutfur" required>
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
                    <a href="i.d.php">Forgot Id?</a>
                </div>
                <div class="field">     
                    <input type="submit" name="save" value="Save"/>
                </div>                 
            </form>
        </div>
     </section>
</body>
</html>