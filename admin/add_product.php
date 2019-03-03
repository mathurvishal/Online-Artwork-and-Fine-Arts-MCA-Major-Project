<?php include("header/header.php");?>
<!--this is form for add product -->
<section id="One" class="wrapper style3">
   <div class="inner">
      <header class="align-center">
         <p>Admin</p>
         <h2>Add New Art</h2>
      </header>
   </div>
</section>
<section id="two" class="wrapper style2">
   <div class="content" style="overflow-x:auto">
      <div class="back-img back-img1">
         <div class="container divform">
            <h2>Add Product</h2>
            <form action="" method="post" name="f1" enctype="multipart/form-data">
               <div class="form-group">
                  <label for="artnm">Art Name:</label>
                  <input type="text" class="form-control" id="artnm" name="a1" placeholder="Enter Art Name" required>
               </div>
               <div class="form-group">
                  <label for="sel1">Art Category:</label>
                  <select class="form-control" id="sel1" name="a2" required>
                     <option value="">------Select------</option>
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
                  <label for="pr">Art Price(Rs.):</label>
                  <input type="text" class="form-control" id="pr" name="a3" placeholder="Enter Art Price" required>
               </div>
               <div class="form-group">
                  <label for="dis">Art Discount(Rs.):</label>
                  <input type="text" class="form-control" id="dis" name="a4" placeholder="Enter Art Discount" required>
               </div>
               <div class="form-group">
                  <label for="ph">Art Photo:</label>
                  <input type="file" class="form-control" id="ph" name="uploadedimage" required>
               </div>
               <div class="form-group">
                  <label for="det">Art Detail:</label>
                  <textarea class="form-control" id="det" name="a6" placeholder="Enter Art Detail" required></textarea>
               </div>
               <br>
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
         		 
         if (!empty($_FILES["uploadedimage"]["name"])) {
         
         	$file_name=$_FILES["uploadedimage"]["name"];
         	$temp_name=$_FILES["uploadedimage"]["tmp_name"];
         	$imgtype=$_FILES["uploadedimage"]["type"];
         	$ext= GetImageExtension($imgtype);
         	$imagename=date("d-m-Y")."-".time().$ext;
         	$target_path = "../img/".$imagename;
         	
         if(move_uploaded_file($temp_name, $target_path)) {
         
         echo "image success";	
         }
         	else{
         		echo "error";
         	}
         
         }
         	$sql = "INSERT INTO art_info (art_name, art_category, art_price, art_discount, art_photo, art_detail) VALUES ('$a11', '$a12', '$a13', '$a14', '$target_path', '$a16')"; // this is an insert query  for add product
         	if (mysqli_query($con, $sql)) {
             echo "<script>alert('Your Product has been added!');
         	window.location.assign('add_product.php')
         	</script>";
         } else {
             echo "Error: " . $sql . "<br>" . mysqli_error($con);
         }
         }
         mysqli_close($con);
         	?>
   </div>
</section>