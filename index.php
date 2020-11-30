<?php

if(session_id() == '' || !isset($_SESSION)){session_start();}

?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>AnyList</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="./styleindex.css">
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>

    <nav class="top-bar" data-topbar role="navigation" style="z-index:1;">
      <ul class="title-area">
        <li class="name">
          <h1><a href="index.php">AnyList</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
        <ul class="right">
          <li><a href="about.php">About</a></li>
          <li><a href="products.php">Products</a></li>
          <li><a href="cart.php">View Cart</a></li>
          <li><a href="orders.php">My Orders</a></li>
          <li><a href="contact.php">Contact</a></li>
          <?php

          if(isset($_SESSION['username'])){
            echo '<li><a href="account.php">My Account</a></li>';
            echo '<li><a href="logout.php">Log Out</a></li>';
          }
          else{
            echo '<li><a href="login.php">Log In</a></li>';
            echo '<li><a href="register.php">Register</a></li>';
          }
          ?>
        </ul>
      </section>
    </nav>


<div class="main1">
  
    <div class="row" style="margin-top:10px;">
      <div class="small-12"> 

      <ul class="slideshow" style="background-color:#C0C0C0;">
  <li><span>Image 01</span><div><h3>AnyList</h3></div></li>
  <li><span>Image 02</span></li>
  <li><span>Image 03</span></li>
  <li><span>Image 04</span></li>
  <li><span>Image 05</span></li>
  <li><span>Image 06</span></li>
</ul>

  <div class="container" style="background-color:white; border-radius:13px; width:30vw; margin: 40vh auto; text-align:center; padding:auto;">
   Get fresh groceries at your store.<br>
    Start making lists by adding into cart.<br>
    <button href="products.php" style="border-radius:13px; background-color:#228B22">Products</button>
</div>
<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

        <footer style="margin-top:10px;">
           <p style="text-align:center; font-size:0.8em;">&copy; AnyList. All Rights Reserved.</p>
        </footer>

      </div>
    </div>
        </div>




    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
