<?php

include '../components/connect.php';

session_start();

$admin_id = $_SESSION['admin_id'];

if (!isset($admin_id)) {
   header('location:admin_login.php');
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>dashboard</title>

   <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,600,0,0" />

   <link rel="stylesheet" href="../css/admin_style.css">

</head>

<body>

   <?php include '../components/admin_header.php'; ?>

   <section class="showcase">

      
      <video src="../images/mixkit-many-pills-and-drugs-rotating-close-up-35887-medium.mp4" muted loop autoplay id="first"></video>
      
      <div class="text">
         <h3>CHANDRA PHARMACY</h3>

      </div>

   </section>











   <script>
      document.querySelector('video').playbackRate = 0.7;
   </script>
   <script src="../js/admin_script.js"></script>

</body>

</html>