<div class="back-img back-img1">
   <?php include("header/header.php");?> 
   <div class="container-fluid" style="margin-top: 31px;" >
      <header class="align-center">
         <h2>Exhibition and Events Details</h2>
      </header>
   </div>
   <div class="container-fluid">
      <div class="row">
         <?php
            // all display Exhibition and Events Details 
                  $run=mysqli_query($con, "select * from  exhibition_events");
                if (mysqli_num_rows($run) >0){  
               // output data of each row
              while($result=mysqli_fetch_array($run))
            {
              echo "
              <div class='col-md-3 col-sm-6 alllist productlist'>
                  <div style='border: 2px solid #000;margin: 20px;text-align: -webkit-center;'>
                       <div><img src='$result[7]' style='height:230px;' class='img-responsive'></div>
                      <div style='background:green;color:#fff;font-size:16px;font-weight:bold;' class='text-center text-capitalize'><span>
                  $result[1] <br/>  <span>
              About : $result[2]</span> <br/> Category : $result[3]</span></div><div class='product-des' style='background:#000;color:#fff;font-size: 16px;height:50px;overflow-y:hidden;' class='text-center'><span>
            Venue:  $result[4] <br/> Date $result[5] | Time $result[6]</span></div><div class='text-center'style='background:green;font-size: 20px;'>
              </div></div></div>";
              
            }
                }
            mysqli_close($con);
            ?>
      </div>
   </div>
</div>
<?php include("../footer/footer.php"); ?>