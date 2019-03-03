<?php include("header/header.php");?> 
<section id="One" class="wrapper style3">
   <div class="inner">
      <header class="align-center">
         <p>MANAGE</p>
         <h2>Booking Details</h2>
      </header>
   </div>
</section>
<section id="two" class="wrapper style2">
   <div class="content" style="overflow-x:auto">					
      <?php
         $sql = "select * from booking_info"; // this is query for displaying  all booking details
         $run = mysqli_query( $con, $sql );
         echo "
         <div class='container divform'>
         <table class='table table-bordered'  >
         	<tr>
         	<th>Booking Art Id</th>
         <th>Customer Id</mmth>
         <th> Art Id</th>
         <th>Name</th>
         <th>Booking Art Name</th>
         <th>Booking Order Status</th>
         <th>Delivery Address</th>
         <th>Booking Art Quantity</th>
         <th>Booking Art Date</th>
         <th>Booking Art Price</th>	
         	</tr>";
         while ( $result = mysqli_fetch_array( $run ) ) {
         	echo "<tr>
         		<td>$result[0]</td>
         <td>$result[1]</td>
         <td>$result[2]</td>
         <td>$result[3]</td>
         <td>$result[4]</td>
         <td>$result[5]</td>
         <td>$result[6]</td>
         <td>$result[7]</td>
         <td>$result[8]</td>
         <td>$result[9]</td>
         		</tr>";
         }
         echo "</table> 
         </div>";
         mysqli_close( $con );
         ?>
   </div>
</section>
<?php include( "../footer/footer.php" );?>