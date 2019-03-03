<?php include("header/header.php");?>
<!--this is form for add product -->
<section id="One" class="wrapper style3">
   <div class="inner">
      <header class="align-center">
         <p>ADD</p>
         <h2>Exhibition & Events Details</h2>
      </header>
   </div>
</section>
<section id="two" class="wrapper style2">
   <div class="content" style="overflow-x:auto">
      <div class="back-img back-img1">
         <div class="container divform">
            <h2>Add Exhibition & Events</h2>
            <form action="" method="post" name="f1" enctype="multipart/form-data">
               <div class="form-group">
                  <label for="artnm">Name</label>
                  <input type="text" class="form-control" id="artnm" name="a1" placeholder="Enter Name of Exhibition & Events " required>
               </div>
               <div class="form-group">
                  <label for="artnm">About</label>
                  <textarea rows="6" type="text" class="form-control" id="a2" name="a2" placeholder="Enter About of Exhibition & Events " required></textarea>
               </div>
               <div class="form-group">
                  <label for="sel1">Category of Exhibition & Events</label>
                  <select class="form-control" id="sel1" name="a3" required>
                     <option value="">------Select ------</option>
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
                  <label for="pr">Venue</label>
                  <input type="text" class="form-control" id="pr" name="a4" placeholder="Enter Venue of Exhibition & Events " required>
               </div>
               <div class="form-group">
                  <label for="dis">Date</label>
                  <input type="date" class="form-control" id="dis" name="a5" placeholder="Enter Date of Exhibition & Events " required>
               </div>
               <div class="form-group">
                  <label for="dis">Time</label>
                  <input type="time" class="form-control" id="dis" name="a6" placeholder="Enter Time of Exhibition & Events " required>
               </div>
               <div class="form-group">
                  <label for="ph">Photo of Exhibition & Events</label>
                  <input type="file" class="form-control" id="a7" name="uploadedimage" required>
               </div>
               <br/>
               <button type="submit" class="btn btn-primary" name="sub">Submit</button>
            </form>
         </div>
      </div>
      <?php include( "../footer/footer.php" );?>
      <?php
         if ( isset( $_POST[ 'sub' ] ) ){
         	$a11=$_POST['a1'];
         	$a12=$_POST['a2'];
         	$a13=$_POST['a3'];
         	$a14=$_POST['a4'];
         	$a15=$_POST['a5'];	
             $a16=$_POST['a6'];	
           
         	
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
                                             
         
                                             if(move_uploaded_file($temp_name, $target_path)) 
                                             {
         
                                         echo "image success";	
                                             }
         	               else
                                {
                                         echo "error";
                                 }
         
                             }
         	$sql = "INSERT INTO exhibition_events (event_name, event_about, event_category, event_venue, event_date, event_time, event_photo) VALUES ('$a11', '$a12', '$a13', '$a14', '$a15', '$a16','$target_path')"; // this is an insert query  for add product
         	if (mysqli_query($con, $sql)) {
             echo "<script>alert('Your Exhibition & Events has been added!');
         	window.location.assign('add_exhibitionevents.php')
         	</script>";
         } else {
             echo "Error: " . $sql . "<br>" . mysqli_error($con);
         }
         }
         mysqli_close($con);
         	?>
   </div>
</section>