<?php
session_start(); 
if(isset($_GET['id'])){
$_SESSION["adminid"]=="";
unset($_SESSION["adminid"]); 	// remove  session variables/
header('Location:../admin/');
}
mysqli_close($con);
?>