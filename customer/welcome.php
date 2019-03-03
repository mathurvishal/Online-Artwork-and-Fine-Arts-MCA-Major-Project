<div class="back-img back-img1 img-welcome">
   <?php include("header/header.php"); ?>
   <?php
      if($_SESSION["uid"] == ""  ||  $_SESSION["uid"]==NULL)
      {
      header('Location:../index.php?page=customer_login');
      }
      else{
      	 $cid =$_SESSION["uid"];
      	echo "<div class='text-center wel-div'>Welcome " .$_SESSION["name"] ." ! ";
      	echo "Your Customer Id is " .  $cid . " !" . "</div>";
      }
      ?>
   <div class="container-fluid">
      <div class="row">
         <?php
            if(isset($_POST['search'])){
              echo "<script> 
            $(document).ready(function(){
            $('.alllist').hide();
            });
            </script>";
            	$sr=$_POST['proname'];
            // display by selected item.
            	$run=mysqli_query($con, "select * from 	art_info where art_category='$sr'");
            		if (mysqli_num_rows($run) >0){	
               // output data of each row
            	while($result=mysqli_fetch_array($run))
            {
            	echo "<div class='col-md-3 col-sm-6 productlist'><div style='border: 2px solid #000;margin: 20px;text-align: -webkit-center;'>
            	<div><img src='$result[5]' style='height:230px;' class='img-responsive'></div>
            	<div style='background:green;color:#fff;font-size:16px;font-weight:bold;' class='text-center text-capitalize'><span>$result[1] |   <span style='text-decoration:line-through;'>Less(Rs.):$result[4]</span> | Rs.$result[3]</span></div><div class='product-des' style='background:#000;color:#fff;font-size: 16px;height:50px;overflow-y:hidden;' class='text-center'><span>$result[6]</span></div><div class='text-center'style='background:green;font-size: 20px;'><a href='bookingbycustomer.php?id=$result[0]' style='color:#fff'>Booking Now</a></div></div></div>";
            	
            }
            		}
            
            else {
                echo "<script> window.alert('Not Found ');
            window.location.assign('welcome.php');
            </script>";
            }
            }
            // all product display
            			$run=mysqli_query($con, "select * from 	art_info");
            		if (mysqli_num_rows($run) >0){	
               // output data of each row
            	while($result=mysqli_fetch_array($run))
            {
            	echo "<div class='col-md-3 col-sm-6 alllist productlist'>
              <div style='border: 2px solid #000;margin: 20px;text-align: -webkit-center;'>
            	<div>
                  <img src='$result[5]' style='height:230px;' class='img-responsive'>
              </div>
            	<div style='background:green;color:#fff;font-size:15px;font-weight:bold;' class='text-center text-capitalize'>
              <span>$result[1] |   <span style='text-decoration:line-through;'>Less(Rs.):$result[4]</span> | Rs.$result[3]</span></div><div class='product-des' style='background:#000;color:#fff;font-size: 16px;height:50px;overflow-y:hidden;' class='text-center'><span>$result[6]</span></div><div class='text-center'style='background:green;font-size: 20px;'><a href='bookingbycustomer.php?id=$result[0]' style='color:#fff'>Booking Now</a></div></div></div>";
            	
            }
            		}
            mysqli_close($con);
            ?>
      </div>
   </div>
</div>
<?php include("../footer/footer.php"); ?>