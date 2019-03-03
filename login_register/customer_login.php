<section id="One" class="wrapper style3"  style="
    margin-top: -2%;
">
				<div class="inner">
					<header class="align-center">
						<p>Customer Login</p>
						<h2>Customer Login</h2>
						
					</header>
				</div>
</section>

		<!-- Two -->
			<section id="two" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="content">
<div class="back-img back-img1">
<!--this is form for customer Login-->

<div class="divform">
	<h2><span class="glyphicon glyphicon-log-in"></span> Customer Login</h2>
	<form action="index.php?page=customer_login" method="post" name="f1">
		<div class="form-group">
			<label for="id">Email Id:</label>
			<input type="text" class="form-control" id="id" name="id" placeholder="Enter Id">
		</div>
		<div class="form-group">
			<label for="pwd">Password:</label>
			<input type="password" class="form-control" id="pwd" name="pass" placeholder="Enter password">
		</div>
		
		<br>
		<button type="submit" class="button special" name="sub">Login</button>
	</form>
</div>
</div>
</div>
</div>

<!--End this is form for customer Login-->
<?php
if ( isset( $_POST[ 'sub' ] ) ) {
	$id = $_POST[ 'id' ];
	$pas = $_POST[ 'pass' ];
	$sql= "select * from customer_info where cust_email='".$id."' and cust_pwd='".$pas."'"; //This  is query for login.
	$result = mysqli_query($con, $sql);
	if (mysqli_num_rows($result) > 0) {
    // output data of each row
    if($row = mysqli_fetch_assoc($result))
{
$_SESSION["uid"]=$row["cust_id"];
$_SESSION["name"]=$row["cust_Fname"];
}
header('Location:customer/');
} else {
    echo "<script> window.alert('Your input is invalid! Please Enter the Correct Id & Password! ');
	window.location.assign('index.php?page=customer_login')
</script>";
}}
mysqli_close($con);
?>