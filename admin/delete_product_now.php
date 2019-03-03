<?php include("header/header.php");?>
<div class="back-img back-img1">
   <div class="container divform">
      <?php
         $r= $_GET['id'];
         $s=mysqli_query($con, "select * from art_info where art_id=$r"); // this query for displaying art record who is removing
         while($row=mysqli_fetch_array($s)){
         ?>
      <h2>Delete Product</h2>
      <!--this art info who is removing-->
      <form class="container divform" action="" method="post" name="f1" enctype="multipart/form-data">
         <div class="form-group">
            <label for="artid">Art ID:</label>
            <input type="text" class="form-control" id="artid" name="ai1" readonly value="<?php echo $row[0];?>">
         </div>
         <div class="form-group">
            <label for="artnm">Art Name:</label>
            <input type="text" class="form-control" id="artnm" name="a1" readonly value="<?php echo $row[1];?>">
         </div>
         <div class="form-group">
            <label for="sel1">Art Category:</label>
            <input type="text" class="form-control" id="sel1" name="a2" readonly  value="<?php echo $row[2];?>">
         </div>
         <div class="form-group">
            <label for="pr">Art Price(Rs.):</label>
            <input type="text" class="form-control" id="pr" name="a3" readonly value="<?php echo $row[3];?>">
         </div>
         <div class="form-group">
            <label for="dis">Art Discount(Rs.):</label>
            <input type="text" class="form-control" id="dis" name="a4" readonly value="<?php echo $row[4];?>">
         </div>
         <div class="form-group">
            <label for="ph">Art Photo:</label>
            <input type="text" class="form-control" id="ph" name="uploadedimage" readonly value="<?php echo $row[5];?>">
         </div>
         <div class="form-group">
            <label for="det">Art Detail:</label>
            <input type="text" class="form-control" id="det" name="a6" readonly value="<?php echo $row[6];?>">
         </div>
         <br/>
         <button type="submit" style="
            background-color: red;
            " class="a button special" name="sub">Delete</button>
      </form>
      <?php } ?>
   </div>
</div>
<?php include("../footer/footer.php");?>
<?php
   if ( isset( $_POST[ 'sub' ] ) ){
   	$a=$_POST['ai1'];
   	$b=$_POST['a1'];
   	$c=$_POST['a2'];
   	$d=$_POST['a3'];
   	$e=$_POST['a4'];
   	$f=$_POST['a6'];
   	$g=$_POST['uploadedimage'];
   	
   
   	$up="delete from art_info where art_id='$a'"; // this is query for removing art detail.
   	
   $run=mysqli_query($con, $up);
   	if($run){
   		if(file_exists($g)){
   			unlink($g);
   		}
   		
   		echo "
   <script>
   
    	confirm('successfully');
     
        window.location.assign('delete_modify_product.php')
    
   
   </script>";
   	}
   	else{
   		echo "not ok";
   	}
   }
   mysqli_close($con);
   ?>