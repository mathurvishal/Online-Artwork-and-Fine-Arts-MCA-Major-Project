<?php include("header/header.php");?>
<div class="back-img back-img1">
   <div class="container divform">
      <?php
         $r= $_GET['id'];
         $s=mysqli_query($con, "select * from exhibition_events where ex_id=$r"); // this query for displaying art record who is removing
         while($row=mysqli_fetch_array($s)){
         ?>
      <h2>Delete Product</h2>
      <form action="" method="post" name="f1" enctype="multipart/form-data">
         <div class="form-group">
            <label for="artid">ID:</label>
            <input type="text" class="form-control" id="artid" name="ai1" readonly value="<?php echo $row[0];?>">
         </div>
         <div class="form-group">
            <label for="artnm">Name:</label>
            <input type="text" class="form-control" id="artnm" name="a1" readonly value="<?php echo $row[1];?>">
         </div>
         <div class="form-group">
            <label for="sel1">About:</label>
            <input type="text" class="form-control" id="sel1" name="a2" readonly  value="<?php echo $row[2];?>">
         </div>
         <div class="form-group">
            <label for="pr">Catagory:</label>
            <input type="text" class="form-control" id="pr" name="a3" readonly value="<?php echo $row[3];?>">
         </div>
         <div class="form-group">
            <label for="dis">Venue:</label>
            <input type="text" class="form-control" id="dis" name="a4" readonly value="<?php echo $row[4];?>">
         </div>
         <div class="form-group">
            <label for="ph">Date:</label>
            <input type="text" class="form-control" id="ph" name="a5" readonly value="<?php echo $row[5];?>">
         </div>
         <div class="form-group">
            <label for="det">Time:</label>
            <input type="text" class="form-control" id="det" name="a6" readonly value="<?php echo $row[6];?>">
         </div>
         <div class="form-group">
            <label for="det">Photo:</label>
            <input type="text" class="form-control" id="det" name="uploadedimage" readonly value="<?php echo $row[7];?>">
         </div>
         <br>
         <button type="submit" class="button special-red" name="sub">Delete</button>
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
   	$h=$_POST['a5'];
   	
   
   	$up="delete from exhibition_events where ex_id='$a'"; // this is query for removing exhibition_events detail.
   	
   $run=mysqli_query($con, $up);
   	if($run){
   		if(file_exists($g)){
   			unlink($g);
   		}
   		
   		echo "
   <script>
   
    	confirm('Exhibition and Events Details Successfully Removed');
     
        window.location.assign('manage_exhibitionevents.php')
    
   
   </script>";
   	}
   	else{
   		echo "not ok";
   	}
   }
   mysqli_close($con);
   ?>