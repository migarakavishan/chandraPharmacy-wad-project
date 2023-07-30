<?php

include 'components/connect.php';

session_start();

if (isset($_SESSION['user_id'])) {
   $user_id = $_SESSION['user_id'];
} else {
   $user_id = '';
};


?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>


   <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

   
   <link rel="stylesheet" href="css/style.css">
</head>


<body>

   <?php include 'components/user_header.php'; ?>

   <section class="showcase">

      <header>
         <div class="toggle"></div>
      </header>
      <video src="../chandra/images/production ID-4074432.mp4" muted loop autoplay id="first"></video>
      <div class="overlay"></div>
      <div class="text">
         <h3>THE BEST AND MOST EFFICIENT PHARMACY IS WITHIN YOUR OWN SYSTEM.</h3>
         <p>-Robert C.Peale-</p>
         <br /><br /><br /><br /><br /><br />
         <a href="../chandra/about.php">About Us</a>
      </div>

   </section>


   <div class="home-bg">

      <section class="home">



         <div class="swiper home-slider" id="last">

            <div class="swiper-wrapper" id="move">

               <div class="swiper-slide slide">
                  <div class="image">
                     <img src="images/mask.jpg" alt="">
                  </div>
                  <div class="content">
                     <span>upto 10% off</span>
                     <h3>Face Masks</h3>
                     <a href="shop.php" class="btn">shop now</a>
                  </div>
               </div>

               <div class="swiper-slide slide">
                  <div class="image">
                     <img src="images/bloodpresure monitor.jpg" alt="">
                  </div>
                  <div class="content">
                     <span>upto 50% off</span>
                     <h3>Blood Presure monitor</h3>
                     <a href="http://localhost/chandra/quick_view.php?pid=5" class="btn">shop now</a>
                  </div>
               </div>

               <div class="swiper-slide slide">
                  <div class="image">
                     <img src="images/wheelchair.jpg" alt="">
                  </div>
                  <div class="content">
                     <span>upto 20% off</span>
                     <h3>wheelchair</h3>
                     <a href="http://localhost/chandra/quick_view.php?pid=4" class="btn">shop now</a>
                  </div>
               </div>

            </div>

            <div class="swiper-pagination"></div>

         </div>

      </section>

   </div>










   <div class="footfooter"> <?php include 'components/footer.php'; ?> </div>


   

   <script src="js/script.js"></script>

   <script>
      let slideIndex = 0;
      showSlides();

      function showSlides() {
         let i;
         let slides = document.getElementsByClassName("swiper-slide slide");
         for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
         }
         slideIndex++;
         if (slideIndex > slides.length) {
            slideIndex = 1
         }
         slides[slideIndex - 1].style.display = "block";
         setTimeout(showSlides, 4000);
      }


      let first = document.getElementById("first");
      let move = document.getElementById("move");

      window.addEventListener('scroll', function() {
         var value = window.scrollY;

         first.style.top = value * 0.6 + 'px';
         move.style.top = value * 1 + 'px';
      })
   </script>

</body>

</html>