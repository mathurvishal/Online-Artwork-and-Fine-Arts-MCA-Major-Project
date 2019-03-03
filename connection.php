<?php
// Create connection
$con = mysqli_connect( "localhost", "root", "", "artwork" );
// Check connection
if ( !$con ) {
	die( "Connection failed: " . mysqli_connect_error() );
}
?>
