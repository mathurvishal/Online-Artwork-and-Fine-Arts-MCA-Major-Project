<?php include("header/header.php"); ?>
		<div class="back-img back-img1">
<div class="container divform">
<?php
$r= $_GET['id'];
$s=mysqli_query($con, "select * from feedback_info where feed_id=$r"); // this is query for displaying feedback who is modifying. 
while($row=mysqli_fetch_array($s)){
?>
		<h2>Update Feedback</h2>
<!--this is info of feedback who is updating-->
	<form action="" method="post" name="f1" enctype="multipart/form-data">
		<div class="form-group">
			<label for="artid">Feedback ID:</label>
			<input type="text" class="form-control" id="artid" name="ai1" readonly value="<?php echo $row[0];?>">
		</div>
		<div class="form-group">
			<label for="artnm">Customer ID:</label>
			<input type="text" class="form-control" id="artnm" name="a1" readonly value="<?php echo $row[1];?>">
		</div>
		<div class="form-group">
			<label for="sel1">Email Id:</label>
			<input type="text" class="form-control" id="sel1" name="a2"  readonly value="<?php echo $row[2];?>">
		</div>
		<div class="form-group">
			<label for="pr">Feedback Status:</label>
			<input type="text" class="form-control" id="pr" name="a3"  value="<?php echo $row[3];?>" required>
		</div>
		<div class="form-group">
			<label for="dis">Feedback Response:</label>
			<input type="text" class="form-control" id="dis" name="a4"  value="<?php echo $row[4];?>" required>
		</div>
		<div class="form-group">
			<label for="ph">Feedback Type:</label>
			<input type="text" class="form-control" id="ph" name="a5"  value="<?php echo $row[5];?>" required>
		</div>
	<br/>
		<button type="submit" class="button special-red" name="sub">Modify</button>
	</form>
	
<?php } ?>
				
				</div>
			</div>

<?php
if ( isset( $_POST[ 'sub' ] ) ){
	$a=$_POST['ai1'];
	$b=$_POST['a1'];
	$c=$_POST['a2'];
	$d=$_POST['a3'];
	$e=$_POST['a4'];
	$g=$_POST['a5'];
	

	$up="update feedback_info set feed_id='$a', cust_id='$b', email_id='$c', Feed_Status='$d', Feed_Response='$e',Feed_type='$g' where feed_id='$r'"; // this is query for updating feedback.
	
$run=mysqli_query($con, $up);

		
		echo "
<script>

 	alert('successfull');
  
     window.location.assign('manage_feedback.php')
 

</script>";
	}
	else{
		echo "";
	}

mysqli_close($con);
?>
<?php include("../footer/footer.php"); ?>