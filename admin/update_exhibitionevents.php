<?php include("header/header.php");?>
<div class="back-img back-img1">
   <div class="container divform">
      <?php
         $r = $_GET[ 'id' ];
         $s = mysqli_query( $con, "select * from exhibition_events where ex_id=$r" ); // this is query for fetching detail of product who is updating.
         while ( $row = mysqli_fetch_array( $s ) ) {
         	?>
      <h2>Update Exhibition & Events Details</h2>
      <form action="" method="post" name="f1" enctype="multipart/form-data">
         <div class="form-group">
            <label for="artnm">Name:</label>
            <input type="text" class="form-control" id="artnm" name="a1" required value="<?php echo $row[1];?>">
         </div>
         <div class="form-group">
            <label for="artnm">About:</label>
            <input type="text" class="form-control" id="artab" name="a2" required value="<?php echo $row[2];?>">
         </div>
         <div class="form-group">
            <label for="sell">Category:</label>
            <select class="form-control" id="sel1" name="a3" required>
               <option value="<?php echo $row[3];?>" selected><?php echo $row[3];?></option>
               <option value="Art Deco">
                  Art Deco            
               </option>
               <option value="Fine Art">
                  Fine Art            
               </option>
               <option value="Folk">
                  Folk            
               </option>
               <option value="Pop Art">
                  Pop Art            
               </option>
               <option value="Street Art">
                  Street Art            
               </option>
            </select>
         </div>
         <div class="form-group">
            <label for="pr">Venue:</label>
            <input type="text" class="form-control" id="pr" name="a4" required value="<?php echo $row[4];?>">
         </div>
         <div class="form-group">
            <label for="dis">Date:</label>
            <input type="date" class="form-control" id="dis" name="a5" required value="<?php echo $row[5];?>">
         </div>
         <div class="form-group">
            <label for="ph">Time:</label>
            <input type="time" class="form-control" id="ph" name="a6" value="<?php echo $row[6];?>">
         </div>
         <div class="form-group">
            <label for="ph">Current Photo:</label>
            <img src="<?php echo $row[7];?>" class='img-responsive dp'><br/>
            <input type="file" class="form-control" id="uploadedimage" name="uploadedimage" value="<?php echo $row[7];?>">
         </div>
         <br/>
         <button type="Update" class="button special" name="sub">Submit</button>
      </form>
      <?php } ?>
   </div>
   <?php
      if ( isset( $_POST[ 'sub' ] ) ) 
              {
                                      $a = $_POST[ 'a1' ];
                                      $b = $_POST[ 'a2' ];
                                      $c = $_POST[ 'a3' ];
                                      $d = $_POST[ 'a4' ];
                                      $e = $_POST[ 'a5' ];
                                      $f = $_POST[ 'a6' ];
      	
      
                                      function GetImageExtension($imagetype)
                                       {
                                         if(empty($imagetype)) return false;
                                         switch($imagetype)
                                         {
                                             case 'image/bmp': return '.bmp';
                                             case 'image/gif': return '.gif';
                                             case 'image/jpeg': return '.jpg';
                                             case 'image/png': return '.png';
                                             default: return false;
                                         }
                                       }
      		 
                              if (!empty($_FILES["uploadedimage"]["name"]))
                              {
      
                                          $file_name=$_FILES["uploadedimage"]["name"];
                                          $temp_name=$_FILES["uploadedimage"]["tmp_name"];
                                          $imgtype=$_FILES["uploadedimage"]["type"];
                                          $ext= GetImageExtension($imgtype);
                                          $imagename=date("d-m-Y")."-".time().$ext;
                                          $target_path = "../img/eventimages/".$imagename;
                                          $target_path_disp = "img/eventimages/".$imagename;
      
                                          if(move_uploaded_file($temp_name, $target_path)) {
      
                                          echo "image success";	
                              }
                                     else
      
                                     {
                                         echo "error";
                                     }
      
                              }
      	$up = "update exhibition_events set 	event_name='$a', 	event_about='$b', 	event_category='$c', event_venue='$d', event_date='$e',event_time='$f', event_photo='$target_path', event_photo_disp='$target_path_disp' where ex_id='$r'"; // this query for updating Exhibition & Events Details1
      
      
      	if ( mysqli_query( $con, $up ) ) {
      		echo " 
      <script>
      
       	alert('Exhibition & Events Details Updated Successfully');
        
           window.location.assign('manage_exhibitionevents.php')
       
      
      </script>";
      	} else {
      		echo "Exhibition & Events Details Updated Occure Error";
      	}
      }
      mysqli_close( $con );
      ?>
</div>
<?php include( "../footer/footer.php" );?>