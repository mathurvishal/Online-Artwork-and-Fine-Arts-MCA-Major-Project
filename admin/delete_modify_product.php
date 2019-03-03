<?php include("header/header.php");?>
<section id="One" class="wrapper style3">
   <div class="inner">
      <header class="align-center">
         <p>MANAGE</p>
         <h2>All Products</h2>
      </header>
   </div>
</section>
<section id="two" class="wrapper style2">
   <div class="content" style="overflow-x:auto">
      <?php
         $sql="select * from art_info"; // this is query for displaying all product
         $run=mysqli_query($con,$sql);
         // this table  of all arts 
         echo "<table class='container divform'>
         <tr>
         <th>Art ID:</th>
         <th>Art Name</th>
         <th>Art Category</th>
         <th>Art Price(Rs.)</th>
         <th>Art Discount(Rs.)</th>
         <th>Art Photo</th>
         <th>Art Detail</th>
         <th>Delete</th>
         <th>Edit</th>
         
         </tr>";
         while($result=mysqli_fetch_array($run))
         {
         	echo "<tr>
         	<td>$result[0]</td>
         <td>$result[1]</td>
         <td>$result[2]</td>
         <td>$result[3]</td>
         <td>$result[4]</td>
         <td><img src='$result[5]' class='img-responsive dp'></td>
         <td><div style='width:300px'>$result[6]</div></td>
         <td><a class='button special-red' href='delete_product_now.php?id=$result[0]' class='btn btn-danger'>delete</a></td>
         <td><a class='button special' href='update_product_now.php?id=$result[0]' class='btn btn-danger'>Edit</a></td>
         	</tr>";
         }
         echo "</table>";
         mysqli_close($con);
         ?>
   </div>
</section>
<?php include("../footer/footer.php");?>