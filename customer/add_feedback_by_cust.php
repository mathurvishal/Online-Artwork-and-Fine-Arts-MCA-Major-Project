<?php include("header/header.php"); ?>
<?php
$cid=$_GET['id'];
$run_cust=mysqli_query($con,"select * from customer_info where cust_id=$cid");
$cust_result=mysqli_fetch_array($run_cust);
?>
<section>
<div class="back-img back-img1 img-custom">
<div class="container divform">
	<h2 style="
    margin-top: 10px;
">Feedback</h2>
	<form action="" method="post" name="f1">
		<div class="form-group">
			<label for="ci">Customer Id:</label>
			<input type="text" class="form-control" id="ci" name="custid" placeholder="Enter Id" readonly value="<?php echo $cid;?>" >
		</div>
		<div class="form-group">
			<label for="email">Email Id:</label>
			<input type="email" class="form-control" id="email" name="mail" placeholder="Enter Email" readonly value="<?php echo $cust_result[2];?>">
		</div>
		<div class="form-group">
			<label for="st"> Comments:</label>
			<input type="text" class="form-control" id="st" name="status" placeholder="Enter Comments" required>
		</div>
		<div class="form-group">
			<label for="res">Response:</label>
			<select class="form-control" id="res" name="response"  value="Select" required>
				<option value="" >------Select------</option> 
				<option value="Positive">Positive</option>
				<option value="Negative">Negative</option>
				
			</select>		
			</div>
		<div class="form-group">
			<label for="sel1">Feedback Type:</label>
			<select class="form-control" id="sel1" name="type" required>
				<option value="">------Select------</option>
				<option value="Quality">Quality</option>
				<option value="Service">Service</option>
				<option value="Time Management">Time Management</option>
				<option value="Other">Other</option>

			</select>
		</div>
		<button type="submit" class="btn btn-primary" name="sub">Submit</button>
	</form>
</div>
</div>
</section>
<!--End this is form for customer registration-->
<?php
if ( isset( $_POST[ 'sub' ] ) ){
	$a11=$_POST['custid'];
	$a12=$_POST['mail'];
	$a13=$_POST['status'];
	$a14=$_POST['response'];
	$a15=$_POST['type'];
	$sql = "INSERT INTO feedback_info (cust_id, email_id, Feed_Status, Feed_Response, Feed_type) VALUES ('$a11', '$a12', '$a13', '$a14', '$a15')"; // this is query for adding feedback by customer.
	if (mysqli_query($con, $sql)) {
    echo "<script>alert('Thanks for your feedback.\\nYour Feedback has been Added!');
	window.location.assign('../customer/')
	</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
}
mysqli_close($con);
	?>
	<?php include("../footer/footer.php"); ?> 