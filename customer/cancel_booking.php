<div class="back-img back-img1">
   <?php include("header/header.php"); ?>
   <div class="container-fluid" style="margin-top: 31px;" >
      <h2 style="color: white;" >Table of Bookings</h2>
      <b>
   </div>
   <section>
      <div class="container-fluid" style="
         background-color: white;>
         <div class="row" style="margin-left:10px;">
         <?php
            $r= $_GET['id2'];
            $sql="select * from booking_info where cust_id=$r"; // display all details of booking
            $run=mysqli_query($con,$sql);
            echo "<table class='table table-bordered'>
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
            <th>Cancel Booking</th>	
            </tr>";
            while($result=mysqli_fetch_array($run))
            {
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
            <td><a href='cancel_booking.php?id1=$result[0]' class='btn btn-danger'>Cancel</a> </td>
            	</tr>";
            }
            echo "</table>";
            ?>
      </div>
</div>
</section>
</div>
<?php include("../footer/footer.php"); ?>
<?php
   if ( isset( $_GET[ 'id1' ] ) ){
   	$a=$_GET['id1'];
   	$up="delete from booking_info where bart_id=$a"; // this is query for cancelling of booking
   	$run=mysqli_query($con, $up);
   	if($run){
   		$upto="delete from payment_info where bart_id=$a";
   		mysqli_query($con, $upto);
   		echo "<script>alert('Booking Successfully Canceled..!');
   		window.location.assign('../customer/')
   		</script>";
   	}
   	else{
   		 echo "<script>alert('Error');
   		
   		</script>";}
   }
   mysqli_close($con);
   ?>