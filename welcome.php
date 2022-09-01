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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <title>Tenant Finder Website : Home Page</title>

    <link rel="stylesheet" href="stylen.css">
    <script src="navcheck.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/51d140a1ed.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</head>
<body>
    <div class="header">
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

    <div class="container">
            <h1>Find Your Stay!!</h1>
            <div class="search">
                    <!-- <form method="post" action="indexn.php"> -->
                <form method="post" action="Property.php">
                    <input type="text" name="search" placeholder="Search">
                    <button type="submit" name="submit"><img src="TFW-img\images\search.png" alt=""></button>
                </form>
            </div>
                
            </div> 
        </div>


    <div class="container">
        <h2 class="sub-title">Trending Places</h2>
            <div class="exclusives">
                <div>
                    <a href="delhi.php"><img src="TFW-img\images\WhatsApp Image 2022-04-08 at 00.47.37.jpeg" alt=""></a>
                    <span>
                        <h3>Delhi</h3>
                        <p>Starts @ &#x20b9 20,000</p>
                    </span>
                </div>
                <div>
                    <a href="Lucknow.php"><img src="TFW-img\images\e10.jpg" alt=""></a>
                    <span>
                        <h3>Lucknow</h3>
                        <p>Starts @ &#x20b9 20,000</p>
                    </span>
                </div>
                <div>
                    <a href="Jaipur.php"><img src="TFW-img\images\e2.jpg" alt=""></a>
                    <span>
                        <h3>Jaipur</h3>
                        <p>Starts @ &#x20b9 20,000</p>
                    </span>
                </div>
                <div>
                    <a href="Chennai.php"><img src="TFW-img\images\e4.jpg" alt=""></a>
                   
                    <span>
                        <h3>Chennai</h3>
                        <p>Starts @ &#x20b9 20,000</p>
                    </span>
                </div>
                            </div>

            
            <div class="cta">
                <h3>Want to rent<br>your property</h3>
                <p>Great opportunity to make money by <br>by your extra space</p>
                <a href="landlord.php" class="cta-btn">Know More</a>
            </div>

            <div class="cta1">
                <h3>Add Your Review Now</h3>
               <p> 
            
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-4 text-center">
                        <h1 class="text-warning mt-4 mb-4">
                            <b><span id="average_rating">0.0</span> / 5</b>
                        </h1>
                        <div class="mb-3">
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                            <i class="fas fa-star star-light mr-1 main_star"></i>
                        </div>
                        <a href="review.php" target="_blank" class="cta-btn">Add Review</a>
                        <!-- <h3><span id="total_review">0</span> Review</h3> -->
                    </div>
                    </div>
                    </div>
                    
                </p>
            </div>
            
            <script>
                var rating_data = 0;
                
                    $('#add_review').click(function(){
                
                        $('#review_modal').modal('show');
                
                    });
                
                    $(document).on('mouseenter', '.submit_star', function(){
                
                        var rating = $(this).data('rating');
                
                        reset_background();
                
                        for(var count = 1; count <= rating; count++)
                        {
                
                            $('#submit_star_'+count).addClass('text-warning');
                
                        }
                
                    });
                
                    function reset_background()
                    {
                        for(var count = 1; count <= 5; count++)
                        {
                
                            $('#submit_star_'+count).addClass('star-light');
                
                            $('#submit_star_'+count).removeClass('text-warning');
                
                        }
                    }
                
                    $(document).on('mouseleave', '.submit_star', function(){
                
                        reset_background();
                
                        for(var count = 1; count <= rating_data; count++)
                        {
                
                            $('#submit_star_'+count).removeClass('star-light');
                
                            $('#submit_star_'+count).addClass('text-warning');
                        }
                
                    });
                
                    $(document).on('click', '.submit_star', function(){
                
                        rating_data = $(this).data('rating');
                
                    });
                
                    $('#save_review').click(function(){
                
                        var user_name = $('#user_name').val();
                
                        var user_review = $('#user_review').val();
                
                        if(user_name == '' || user_review == '')
                        {
                            alert("Please Fill Both Field");
                            return false;
                        }
                        else
                        {
                            $.ajax({
                                url:"submit_rating.php",
                                method:"POST",
                                data:{rating_data:rating_data, user_name:user_name, user_review:user_review},
                                success:function(data)
                                {
                                    $('#review_modal').modal('hide');
                
                                    load_rating_data();
                
                                    alert(data);
                                }
                            })
                        }
                
                    });
                
                    load_rating_data();
                
                    function load_rating_data()
                    {
                        $.ajax({
                            url:"submit_rating.php",
                            method:"POST",
                            data:{action:'load_data'},
                            dataType:"JSON",
                            success:function(data)
                            {
                                $('#average_rating').text(data.average_rating);
                                $('#total_review').text(data.total_review);
                
                                var count_star = 0;
                
                                $('.main_star').each(function(){
                                    count_star++;
                                    if(Math.ceil(data.average_rating) >= count_star)
                                    {
                                        $(this).addClass('text-warning');
                                        $(this).addClass('star-light');
                                    }
                                });
                
                                $('#total_five_star_review').text(data.five_star_review);
                
                                $('#total_four_star_review').text(data.four_star_review);
                
                                $('#total_three_star_review').text(data.three_star_review);
                
                                $('#total_two_star_review').text(data.two_star_review);
                
                                $('#total_one_star_review').text(data.one_star_review);
                
                                $('#five_star_progress').css('width', (data.five_star_review/data.total_review) * 100 + '%');
                
                                $('#four_star_progress').css('width', (data.four_star_review/data.total_review) * 100 + '%');
                
                                $('#three_star_progress').css('width', (data.three_star_review/data.total_review) * 100 + '%');
                
                                $('#two_star_progress').css('width', (data.two_star_review/data.total_review) * 100 + '%');
                
                                $('#one_star_progress').css('width', (data.one_star_review/data.total_review) * 100 + '%');
                
                                if(data.review_data.length > 0)
                                {
                                    var html = '';
                
                                    for(var count = 0; count < data.review_data.length; count++)
                                    {
                                        html += '<div class="row mb-3">';
                
                                        html += '<div class="col-sm-1"><div class="rounded-circle bg-danger text-white pt-2 pb-2"><h3 class="text-center">'+data.review_data[count].user_name.charAt(0)+'</h3></div></div>';
                
                                        html += '<div class="col-sm-11">';
                
                                        html += '<div class="card">';
                
                                        html += '<div class="card-header"><b>'+data.review_data[count].user_name+'</b></div>';
                
                                        html += '<div class="card-body">';
                
                                        for(var star = 1; star <= 5; star++)
                                        {
                                            var class_name = '';
                
                                            if(data.review_data[count].rating >= star)
                                            {
                                                class_name = 'text-warning';
                                            }
                                            else
                                            {
                                                class_name = 'star-light';
                                            }
                
                                            html += '<i class="fas fa-star '+class_name+' mr-1"></i>';
                                        }
                
                                        html += '<br />';
                
                                        html += data.review_data[count].user_review;
                
                                        html += '</div>';
                
                                        html += '<div class="card-footer text-right">On '+data.review_data[count].datetime+'</div>';
                
                                        html += '</div>';
                
                                        html += '</div>';
                
                                        html += '</div>';
                                    }
                
                                    $('#review_content').html(html);
                                }
                            }
                        })
                    }
                    </script>

    </div>

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
    
   
    </footer>
</body>
</html>