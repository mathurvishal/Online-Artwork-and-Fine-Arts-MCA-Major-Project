<?php include("header/header.php"); ?>
<div class="back-img back-img1">
   <div class="container divform">
      <h2><span class=""></span> Delete Customer Details</h2>
      <?php
         $r = $_GET[ 'id' ];
         $s = mysqli_query( $con, "select * from customer_info where cust_id=$r" ); // this query for displaying info who is removing.
         while ( $row = mysqli_fetch_array( $s ) ) {
         	?>
      <!--this is info for customer  who is removing -->
      <form action="#" method="post" name="f1">
         <div class="form-group">
            <label for="text">customer Id:</label>
            <input type="text" class="form-control" id="pwd1" name="rol" placeholder="Enter password" readonly value="<?php echo $row[0];?>">
         </div>
         <div class="form-group">
            <label for="text">customer password:</label>
            <input type="text" class="form-control" id="pwd11" name="nam" placeholder="Enter password" readonly value="<?php echo $row[1];?>">
         </div>
         <div class="form-group">
            <label for="text">customer Email:</label>
            <input type="email" class="form-control" id="pwd111" name="clas" placeholder="Enter password" readonly value="<?php echo $row[2];?>">
         </div>
         <div class="form-group">
            <label for="text">customer FirstName:</label>
            <input type="text" class="form-control" id="pwd1" name="rol1" placeholder="Enter password" readonly value="<?php echo $row[3];?>">
         </div>
         <div class="form-group">
            <label for="text">customer LastName:</label>
            <input type="text" class="form-control" id="pwd1" name="rol2" placeholder="Enter password" readonly value="<?php echo $row[4];?>">
         </div>
         <div class="form-group">
            <label for="text">customer sex:</label>
            <input type="text" class="form-control" id="pwd1" name="rol3" placeholder="Enter password" readonly value="<?php echo $row[5];?>">
         </div>
         <div class="form-group">
            <label for="text">customer Phone:</label>
            <input type="text" class="form-control" id="pwd1" name="rol4" placeholder="Enter password" readonly value="<?php echo $row[6];?>">
         </div>
         <div class="form-group">
            <label for="text">customer state:</label>
            <input type="text" class="form-control" id="pwd1" name="rol5" placeholder="Enter password" readonly value="<?php echo $row[7];?>">
         </div>
         <div class="form-group">
            <label for="text">customer Place:</label>
            <input type="text" class="form-control" id="pwd1" name="rol6" placeholder="Enter password" readonly value="<?php echo $row[8];?>">
         </div>
         <div class="form-group">
            <label for="text">customer Address:</label>
            <input type="text" class="form-control" id="pwd1" name="rol7" placeholder="Enter password" readonly value="<?php echo $row[9];?>">
         </div>
         <br/>
         <button type="submit" class="button special-red" name="sub">Delete</button>
      </form>
      <?php } ?>
   </div>
</div>
<?php include( "../footer/footer.php" );?> 
<?php
   if ( isset( $_POST[ 'sub' ] ) ) {
   	$a = $_POST[ 'rol' ];
   	$b = $_POST[ 'nam' ];
   	$c = $_POST[ 'clas' ];
   	$d = $_POST[ 'rol1' ];
   	$e = $_POST[ 'rol2' ];
   	$f = $_POST[ 'rol3' ];
   	$g = $_POST[ 'rol4' ];
   	$h = $_POST[ 'rol5' ];
   	$i = $_POST[ 'rol6' ];
   	$j = $_POST[ 'rol7' ];
   	$up = "delete from customer_info where cust_id='$a'"; // this query for deleting for customer details.
   	$run = mysqli_query( $con, $up );
   	if ( $run ) {
   		echo "
   <script>
   alert('successfully');
    
       window.location.assign('delete_customer_detail.php')
   
   
   </script>";
   	} else {
   		echo "not ok";
   	}
   }
   mysqli_close( $con );
   ?>