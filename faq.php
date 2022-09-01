<?php
session_start();?>

<!DOCTYPE html>
<!-- Designed by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!--<title> Responsive FAQ Accordion | CodingLab </title>-->
    <link rel="stylesheet" href="FAQs.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
        <script src="navcheck.js" defer></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://kit.fontawesome.com/51d140a1ed.js" crossorigin="anonymous"></script>
   </head>
<body>

  <div class="accordion">

    <div class="image-box">
      <img src="https://i.postimg.cc/TwnGJmqb/faq.png" alt="Accordion Image">
    </div>
    <div class="accordion-text">
      <div class="title">FAQ</div>
    <ul class="faq-text">
      <li>
        <div class="question-arrow">
          <span class="question">What condition will the property be rented in?</span>
 
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <p>The property will remain in its current condition unless agreements are made in
writing at the time of application other than the fact that all dwellings will be well cleaned, carpets
cleaned, and necessary maintenance performed (as defined by the owner)</p>

        <span class="line"></span>
      </li>
      <li>
        <div class="question-arrow">
          <span class="question">What is the term of the lease?</span>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>

        <p>All units are rented on 1 year lease agreements unless otherwise specified on the rental list.</p>
        <span class="line"></span>
      </li>
      <li>
        <div class="question-arrow">
          <span class="question">Are pets allowed?</span>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <p>Birds and Fish are allowed. Cats &amp; Dogs are upon approval with a refundable pet deposit</p>

        <span class="line"></span>
      </li>
      <li>
        <div class="question-arrow">
          <span class="question">Smoking?</span>
          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <p>All TenantFinder properties are NON SMOKING.</p>

        <span class="line"></span>
      </li>
      <li>
        <div class="question-arrow">
          <span class="question">How long does it take to process my application ?</span>

          <i class="bx bxs-chevron-down arrow"></i>
        </div>
        <p> Processing time may vary depending on the amount of time it takes to receive all
information needed to complete the rental application from all parties, including third parties. All
applications are processed on a first come, first qualified, first serve basis. The property will continue to
be offered for rent until final approval; confirmation and a signed lease is completed.</p>

        <span class="line"></span>
      </li>
    </ul>
    </div>
  </div>


  <script>
    let li = document.querySelectorAll(".faq-text li");
    for (var i = 0; i < li.length; i++) {
      li[i].addEventListener("click", (e)=>{
        let clickedLi;
        if(e.target.classList.contains("question-arrow")){
          clickedLi = e.target.parentElement;
        }else{
          clickedLi = e.target.parentElement.parentElement;
        }
       clickedLi.classList.toggle("showAnswer");
      });
    }
  </script>

</body>
</html>
