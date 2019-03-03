<?php include("header/header.php"); ?>
<?php
   if($_SESSION["uid"] == ""  ||  $_SESSION["uid"]==NULL)
   {
   header('Location:index.php?page=customer_login');
   }
   else{
   	$cbid = $_SESSION['baid'];
   	$run_bart=mysqli_query($con,"select * from booking_info where bart_id=$cbid");
   	$art_result1=mysqli_fetch_array($run_bart);
   }
   ?>
<!--this is form for payment-->
<div class="back-img back-img1">
   <div class="container divform">
      <h2>Payment Information</h2>
      <form action="" method="post" name="f1">
         <div class="form-group">
            <label for="a11">Booking Art Id:</label>
            <input type="number" class="form-control" id="a11" name="bart" placeholder="Enter Id" readonly value="<?php echo $art_result1[0];?>" >
         </div>
         <div class="form-group">
            <label for="a1">Customer Id:</label>
            <input type="number" class="form-control" id="a1" name="custid1" placeholder="Enter Id" readonly value="<?php echo $art_result1[1];?>" >
         </div>
         <div class="form-group">
            <label for="a2">Art_Id:</label>
            <input type="number" class="form-control" id="a2" name="arid"  readonly value="<?php echo $art_result1[2];?>">
         </div>
         <div class="form-group">
            <label for="a3"> Name:</label>
            <input type="text" class="form-control" id="a3" name="cname" readonly required value="<?php echo $art_result1[3];?>">
         </div>
         <div class="form-group">
            <label for="a4"> Art_Name:</label>
            <input type="text" class="form-control" id="a4" name="aname" readonly  value="<?php echo $art_result1[4];?>">
         </div>
         <div class="form-group">
            <label for="a5">Order_Status:</label>
            <input type="text" class="form-control" id="a5" name="os" readonly value="<?php echo $art_result1[5];?>">
         </div>
         <div class="form-group">
            <label for="a6">Delivery_Address:</label>
            <input type="text" class="form-control" id="a6" name="da" readonly placeholder="Enter Address" required value="<?php echo $art_result1[6];?>">
         </div>
         <div class="form-group">
            <label for="a7">Quantity:</label>
            <input type="number" class="form-control" id="a7" name="quan" readonly placeholder="Enter Quantity" required value="<?php echo $art_result1[7];?>">
         </div>
         <div class="form-group">
            <label for="a8">Date:</label>
            <input type="text" class="form-control" id="a8" name="date" readonly value="<?php echo $art_result1[8];?>">
         </div>
         <div class="form-group">
            <label for="a9">Price(Rs.):</label>
            <input type="text" class="form-control" id="a9" name="price" readonly value="<?php echo $art_result1[9];?>">
         </div>
         <div class="form-group">
            <label for="a10">Mode:</label>
            <select class="form-control" name="sel" id="a10" required>
               <option value="">---Select--</option>
               <option value="Cash On Delivery">Cash On Delivery</option>
            </select>
         </div>
         <button type="submit" class="btn btn-primary" name="sub">Proceed To Payment</button>
      </form>
   </div>
</div>
<?php include("../footer/footer.php"); ?>
<!--End this is form for payment-->
<?php
   if ( isset( $_POST[ 'sub' ] ) ){
   	$a=$_POST['bart'];
   	$b=$_POST['custid1'];
   	$c=$_POST['price'];
   $run_pay=mysqli_query($con, "insert into payment_info (bart_id, cust_id, pay_amount) values('$a', '$b', '$c')"); // this is query for payment to insert database.
   	if($run_pay){
   		 echo "<script> window.alert('Congratulation! You will get your product at home in working day');
   	window.location.assign('../customer/')
   </script>";
   	}
   	else{
   		 echo "<script> window.alert('Please try again later.');
   	window.location.assign('../customer/')
   </script>";
   	}
   }
   mysqli_close($con);
   	?>