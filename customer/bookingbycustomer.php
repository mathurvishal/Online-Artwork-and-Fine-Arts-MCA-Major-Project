<?php include("header/header.php"); ?>
<?php
if($_SESSION["uid"] == ""  ||  $_SESSION["uid"]==NULL)
{
header('Location:../customer/');
}
else{
	$cid = $_SESSION["uid"];
	$cn=$_SESSION["name"];
}
?>
<?php
$aid=$_GET['id'];
$run_art=mysqli_query($con,"select * from art_info where art_id=$aid"); //
$art_result=mysqli_fetch_array($run_art);
$_SESSION['aart'] = $aid;
?>
<section>
	<!--this is form for booking-->
<div class="back-img back-img1">
<div class="container divform">
	<h2>Booking</h2>
	<form action="" method="post" name="f1">
		<div class="form-group">
			<label for="a1">Customer Id:</label>
			<input type="number" class="form-control" id="a1" name="custid" placeholder="Enter Id" readonly value="<?php echo $cid;?>" >
		</div>
		<div class="form-group">
			<label for="a2">Art_Id:</label>
			<input type="number" class="form-control" id="a2" name="arid"  readonly value="<?php echo $aid;?>">
		</div>
		<div class="form-group">
			<label for="a3"> Name:</label>
			<input type="text" class="form-control" id="a3" name="cname" readonly required value="<?php echo $cn;?>">
		</div>
		<div class="form-group">
			<label for="a4"> Art_Name:</label>
			<input type="text" class="form-control" id="a4" name="aname" readonly  value="<?php echo $art_result[1];?>">
		</div>
		<div class="form-group">
			<label for="a5">Order_Status:</label>
			<input type="text" class="form-control" id="a5" name="os" readonly value="Available">
		</div>
		<div class="form-group">
			<label for="a6">Delivery_Address:</label>
			<input type="text" class="form-control" id="a6" name="da" placeholder="Enter Address" required>
		</div>
		<div class="form-group">
			<label for="a7">Quantity:</label>
			<input type="number" class="form-control" id="a7" name="quan" placeholder="Enter Quantity" required>
		</div>
		<div class="form-group">
			<label for="a8">Price(Rs.):</label>
			<input type="number" class="form-control" id="a8" name="price" readonly value="<?php echo $art_result[3];?>">
		</div>
		<button type="submit" class="btn btn-primary" name="sub">Submit</button>
	</form>
</div></div><?php include("../footer/footer.php"); ?> 
</section>


<!--End this is form for booking-->
<?php
if ( isset( $_POST[ 'sub' ] ) ){
	$a11=$_POST['custid'];
	$a12=$_POST['arid'];
	$a13=$_POST['cname'];
	$a14=$_POST['aname'];
	$a15=$_POST['os'];
	$a16=$_POST['da'];
	$a17=$_POST['quan'];
	$a18=($a17 * $_POST['price']);
	$sql = "INSERT INTO booking_info (cust_id, art_id, Name	, bart_name, order_status, delivery_address, bart_quantity, bart_date,bart_price) VALUES ('$a11', '$a12', '$a13', '$a14', '$a15','$a16', '$a17', NOW(), '$a18')"; //this is query for booking 
	if (mysqli_query($con, $sql)) {
		$current_baid = mysqli_insert_id($con);
		$_SESSION['baid'] =$current_baid;

   echo "<script>alert('Your Booking has been successfully! Proceed To Payment..');
	window.location.assign('paymentmode.php')
	</script>";
		
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
}
mysqli_close($con);
	?>
			

		
	
