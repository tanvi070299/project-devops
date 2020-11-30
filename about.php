<?php

if(session_id() == '' || !isset($_SESSION)){session_start();}

?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About Us || AnyList</title>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="./styleabout.css">
    <link rel="stylesheet" href="css/foundation.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body background="b1.jpg">

    <nav class="top-bar" data-topbar role="navigation">
      <ul class="title-area">
        <li class="name">
          <h1><a href="index.php">Anylist</a></h1>
        </li>
        <li class="toggle-topbar menu-icon"><a href="#"><span></span></a></li>
      </ul>

      <section class="top-bar-section">
	  <ul class="right">
          <li class="active"><a href="about.php">About</a></li>
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




    <!-- <div class="row" style="margin-top:30px;">
      <div class="small-12">
        <p>Any List is new age online grocery store o deliver fresh groceries at your home without any hustle.

        <p> All time solutions for your kirana store or grocery lists.</p>

        <footer>
           <p style="text-align:center; font-size:0.8em;">&copy; AnyList. All Rights Reserved.</p>
        </footer>

      </div>
    </div> -->
    <div class="wrapper" style="background-color:#C0C0C0;">
  <div class="container">
    <div class="profile">
      <div class="meta">
        <h2>AnyList</h2>
        <div class="position">Online Grocery Store</div>
        <div class="social"><a href="#"><i class="fa fa-facebook-square"></i></a><a href="#"><i class="fa fa-dribbble"></i></a><a href="#"><i class="fa fa-envelope"></i></a></div>
      </div>
      <div class="overlay"></div>
    </div>
    <div class="portfolio">
      <h1>About Us</h1>
      <p>Any List is new age online grocery store o deliver fresh groceries at your home without any hustle.</p>
      <p>All time solutions for your kirana store or grocery lists.</p>
      <footer>
           <p style="text-align:center; font-size:0.8em;">&copy; AnyList. All Rights Reserved.</p>
        </footer>
    </div>
  </div>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script  src="./scriptabout.js"></script>


    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
