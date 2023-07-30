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
   <title>about</title>



   <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />

   
   <link rel="stylesheet" href="css/style.css">


   <style>

   </style>
</head>

<body>

   <?php include 'components/user_header.php'; ?>

   <section class="about">

      <div class="row">

         <div class="image">
            <img src="images/about us.png" alt="">
         </div>

         <div class="content">
            <h3>why choose us?</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores magni omnis et ab alias? In sunt, odit molestias excepturi eaque impedit consequatur voluptatibus dignissimos, maxime soluta a? Quas non repellat in adipisci dolores facere reprehenderit nam eligendi quasi repellendus cum laudantium mollitia tenetur vitae possimus, ullam ipsum magnam ipsam consequatur officiis recusandae soluta. Quaerat nulla, magnam dolor quia ratione aliquid molestias voluptas inventore a consequatur est adipisci sed debitis laboriosam neque natus illo enim accusantium? Voluptate similique explicabo praesentium temporibus tempore autem suscipit, sapiente laborum facilis beatae quidem aliquid perferendis recusandae hic et quod! Soluta aut molestias quasi corrupti mollitia!</p>
            <a href="contact.php" class="btn">contact us</a>
         </div>

      </div>

   </section>


   <br><br><br><br><br><br><br><br>







   <?php include 'components/footer.php'; ?>


   <script src="js/script.js"></script>

</body>

</html>