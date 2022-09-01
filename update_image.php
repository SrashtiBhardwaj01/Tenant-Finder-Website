<!DOCTYPE html>
<html>
<head>
    <title>Multiple Image Update</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="update_image.css">
</head>
<body>
<div class="contact">
<div class="container">
<div class="row">
<div class="col-12">
   
    <h2>Update Images</h2>
    <hr>
    <form method="post" enctype="multipart/form-data" action="file-update.php">
          <div class="field">
            <label for="id" >Registered Id* : </label>
            <input type="id" name="l_id" required>
            </div>

        <div class="form-group">
            <h6>Image One</h6>
            <input type="file" name="image[]" class="form-control" multiple />
        </div>
         <div class="form-group">
            <h6>Image Two</h6>
            <input type="file" name="image[]" class="form-control"/>
        </div><!--
        <div class="form-group">
            <h6>Image Three</h6>
            <input type="file" name="image[]" class="form-control"/>
        </div>
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
        <input type="submit" name="save" value="Save" class="btn btn-primary">
        </div>
    </form>
    </div>
</div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>