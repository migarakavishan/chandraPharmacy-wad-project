<footer class="footer">

   <section class="grid">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <span class="material-symbols-outlined">
               chevron_right
            </span><i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <span class="material-symbols-outlined">
               chevron_right
            </span><i class="fas fa-angle-right"></i> about</a>
         <a href="shop.php"> <span class="material-symbols-outlined">
               chevron_right
            </span><i class="fas fa-angle-right"></i> shop</a>
         <a href="contact.php"> <span class="material-symbols-outlined">
               chevron_right
            </span><i class="fas fa-angle-right"></i> contact</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="user_login.php"> <span class="material-symbols-outlined">
               chevron_right
            </span><i class="fas fa-angle-right"></i> login</a>
         <a href="user_register.php"> <span class="material-symbols-outlined">
               chevron_right
            </span><i class="fas fa-angle-right"></i> register</a>
         <a href="cart.php"> <span class="material-symbols-outlined">
               chevron_right
            </span><i class="fas fa-angle-right"></i> cart</a>
         <a href="orders.php"> <span class="material-symbols-outlined">
               chevron_right
            </span><i class="fas fa-angle-right"></i> orders</a>
      </div>

      <div class="box">
         <h3>contact us</h3>
         <a href="tel:1234567890"><span class="material-symbols-outlined">
               call
            </span><i class="fas fa-phone"></i> +123 456 7899</a>

         <a href="mailto:chandra@gmail.com"><span class="material-symbols-outlined">
               mail
            </span><i class="fas fa-envelope"></i> chandra@gmail.com</a>

      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"><i class="fab fa-facebook-f"></i>facebook</a>
         <a href="#"><i class="fab fa-twitter"></i>twitter</a>
         <a href="#"><i class="fab fa-instagram"></i>instagram</a>



      </div>

   </section>

   <div class="credit">
      <p class="ti" id="clock"></p>
      <p class="ti" id="date"></p>
   </div>

</footer>

<script>
   setInterval(displayClock, 1000);

   function displayClock() {
      let now = new Date();
      document.getElementById("clock").innerHTML = now.toLocaleTimeString();
      document.getElementById("date").innerHTML = now.toLocaleDateString();
      document.getElementById("timezone").innerHTML = now.getTimezoneOffset();
   }
</script>