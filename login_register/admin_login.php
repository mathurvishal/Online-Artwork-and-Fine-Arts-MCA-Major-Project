<!--this is form for admin Login-->
<section id="One" class="wrapper style3"  style="
    margin-top: -2%;
">
				<div class="inner">
					<header class="align-center">
						<p>Admin Login</p>
						<h2>Admin Login</h2>
						
					</header>
				</div>
</section>

		<!-- Two -->
			<section id="two" style="
    margin-top: -5%;
" >
				<div class="inner">
					<div class="box">
						<div class="content">
<section>
<div>
<div class="container divform" style="margin-top: 3em;">
	<h2><span class="glyphicon glyphicon-log-in"></span> Admin Login</h2>
	<form action="index.php?page=admin_login" method="post" name="f1">
		<div class="form-group">
			<label for="id">Admin Id / Username:</label>
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
	</div></div>
</div>

</section>
<!--End this is form for admin Login-->
<?php
if ( isset( $_POST[ 'sub' ] ) ) {
	$id = $_POST[ 'id' ];
	$pas = $_POST[ 'pass' ];
	$sql= "select * from admin_info where admin_id='".$id."' and admin_pwd='".$pas."'"; //This  is query for login.
	$result = mysqli_query($con, $sql);
	if (mysqli_num_rows($result) > 0) {	
    // output data of each row
    $row = mysqli_fetch_assoc($result);

$_SESSION["admin"]=$row["admin_name"];
$_SESSION["adminid"]=$row["admin_id"];

header('Location:admin/');
} else {
     echo "<script> window.alert('Your input is invalid! Please Enter the Correct Id & Password! ');
	window.location.assign('admin/')
</script>";
}}
mysqli_close($con);
?>