<?php
include("../connection.php");
  session_start(); // Start the session

  $cid = $_SESSION[ "uid" ];

  ?>

<!doctype html>

<html lang="en">

  <head>

   <title>Customer - <?php echo $_SESSION["name"]; ?> - Online Artwork & Fine Art</title>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

<link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
<link rel="icon" href="../img/favicon.ico" type="image/x-icon">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="../boots/css/bootstrap.css">

    <!-- jQuery library -->



    <!-- Latest compiled JavaScript -->

    <script src="../boots/js/bootstrap.js"></script>

    <link rel="stylesheet" href="../css/style.css">

	

	<link rel="stylesheet" href="../assets/css/main.css" />



<!-- Latest compiled JavaScript -->

<script src="../boots/js/jquery.js"></script>

<!-- Scripts -->

			<script src="../assets/js/jquery.min.js"></script>

			<script src="../assets/js/jquery.scrollex.min.js"></script>

			<script src="../assets/js/skel.min.js"></script>

			<script src="../assets/js/util.js"></script>

			<script src="../assets/js/main.js"></script>



 </head>



    

<header>

<nav class="#header" >



  <!-- Header -->

			<header id="header" class="alt" >

				<div class="logo"><a href="index.php">Online <span>Artwork & Fine Art</span></a></div>

			
 <a href="javascript:;" style="padding: 0px 0;color:#000;margin-right: 3em;">

                  <form class="navbar-form navbar-left" action="welcome.php" method="post">

                    <div class="input-group" >

                      <input list="browsers" name="proname" type="text" class="form-control" style="
    color: white; max-height: 35px;
" placeholder="Search Product" required>

                      <datalist id="browsers">

                        <option value="Art Deco">

                        <option value="Fine Art">

                        <option value="Folk">

                        <option value="Pop Art">

                        <option value="Street Art">

                      </datalist>

                      <div class="input-group-btn">

                      <button class="btn btn-default" type="submit" style="
    max-height: 35px; margin-bottom: 10px;
" name="search">

                      <i class="glyphicon glyphicon-search"></i>

                      </button>

                      </div>

                    </div>

                  </form>

                </a>

   				</a> 
				<a href="#menu"><p class="custom-para">Action</p></a>

			</header>



		<!-- Nav -->

			<nav id="menu">

				<ul class="links">

					<li><a href="index.php">Home</a>

					</li>

					<li><a href="cancel_booking.php?id2=<?php echo $cid;?>">Cancel Booking</a>

					</li>

					<li><a href="add_feedback_by_cust.php?id=<?php echo $cid;?>">Feedback</a>

					</li>

					<li><a href="view_payment_cust.php?id=<?php echo $cid;?>">View Payment Detail</a>

          </li>
<li><a href="exhibitionevents.php">View Exhibition & Events
</a>

          </li>

					<li><a class="a button special" href="cust_logout.php?id=<?php echo $cid;?>">Logout</a>

					</li>

					

			</nav>

 

</nav>

</header>

  <body >