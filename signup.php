<?php
require_once "config.php";

$username =$fullname=$password = $confirm_password = "";
$username_err= $fullname_err=$password_err = $confirm_password_err = "";

if ($_SERVER['REQUEST_METHOD'] == "POST"){

  // Check if email is empty
  if(empty(trim($_POST["username"]))){
      $username_err = "Username cannot be blank";
  }
  else{
      $sql = "SELECT id FROM signup WHERE username = ?";
      $stmt = mysqli_prepare($conn, $sql);
      if($stmt)
      {
          mysqli_stmt_bind_param($stmt, "s", $param_username);

          // Set the value of param username
          $param_username = trim($_POST['username']);

          // Try to execute this statement
          if(mysqli_stmt_execute($stmt)){
              mysqli_stmt_store_result($stmt);
              if(mysqli_stmt_num_rows($stmt) == 1)

              {
                $username_err = "This username is already taken"; 
            }
            else{
                $username = trim($_POST['username']);
            }
        }
        else{
            echo "Something went wrong";
        }
    }
}

  mysqli_stmt_close($stmt);



   // Check if Fullname is empty
   if(empty(trim($_POST["fullname"]))){
    $fullname_err = "Username cannot be blank";
}
else{
    $sql = "SELECT id FROM signup WHERE fullname = ?";
    $stmt = mysqli_prepare($conn, $sql);
    if($stmt)
    {
        mysqli_stmt_bind_param($stmt, "s", $param_fullname);

        // Set the value of param username
        $param_fullname = trim($_POST['fullname']);

        // Try to execute this statement
        if(mysqli_stmt_execute($stmt)){
            mysqli_stmt_store_result($stmt);
            if(mysqli_stmt_num_rows($stmt) == 1)

            {
              $fullname_err = "This username is already taken"; 
          }
          else{
              $fullname = trim($_POST['username']);
          }
      }
      else{
          echo "Something went wrong";
      }
  }
}

mysqli_stmt_close($stmt);


// Check for password
if(empty(trim($_POST['password']))){
  $password_err = "Password cannot be blank";
}
elseif(strlen(trim($_POST['password'])) < 5){
    $password_err = "Password cannot be less than 5 characters";
}
else{
    $password = trim($_POST['password']);
}

// Check for confirm password field
if(trim($_POST['password']) !=  trim($_POST['confirm_password'])){
    $password_err = "Passwords should match";
    $message = "<div class='alert alert-danger'>Wrong Password !!</div>";
}


// If there were no errors, go ahead and insert into the database
if(empty($username_err) && empty($fullname_err)&& empty($password_err) && empty($confirm_password_err))
{
    $sql = "INSERT INTO signup (fullname,username, password) VALUES (?,?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt){
      mysqli_stmt_bind_param($stmt, "sss",$param_fullname, $param_username, $param_password);

      // Set these parameters
      $param_fullname=$fullname;
      $param_username = $username;
      $param_password = password_hash($password, PASSWORD_DEFAULT);

      // Try to execute the query
      if (mysqli_stmt_execute($stmt))
      {
          header("location:login.php");
      }
      else{
        $message = "<div class='alert alert-danger'>Wrong Password !!</div>";
      }
  }
  mysqli_stmt_close($stmt);
}
mysqli_close($conn);
}
?>




<!DOCTYPE html>
<!-- Created By CodingNepal -->
<html lang="en">
   <head>
      <meta charset="utf-8">
      <title>signup </title>
      <link rel="stylesheet" href="login.css">
      <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap"
      rel="stylesheet"
    />

   </head>
   <body>

  
      <div class="wrapper">
         <div class="title">
            Signup
         </div>
         <form action="" method="post">
         <div class="field">
               <input type="text" name="fullname" required>
               <label>Full Name</label>
            </div>
            <div class="field">
               <input type="text" name="username"  required>
               <label>Email Address</label>
            </div>
            <div class="field">
               <input type="password" name="password" required>
               <label>Password</label>
            </div>
            <div class="field">
               <input type="password" name="confirm_password" required>
               <label>confirm Password</label>
            </div>
            <div class="field">
               <input type="submit" value="Login">
            </div>
            <div class="signup-link">
            <p>
                By clicking the Sign Up button,you agree to our
                <a href="#">Terms and Condition </a> and <a href="#">Policy Privacy</a>
            </p>
            </div>
            <p class="para-2">
            Already have an account? <a href="login.php">Login here</a>
            </p> 
         </form>

        </div>
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
   </body>
</html>