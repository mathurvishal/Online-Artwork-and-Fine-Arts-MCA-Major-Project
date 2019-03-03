<?php include("header/header.php"); ?>
<section id="One" class="wrapper style3">
   <div class="inner">
      <header class="align-center">
         <p>MANAGE</p>
         <h2>All Feedback</h2>
      </header>
   </div>
</section>
<section id="two" class="wrapper style2">
   <div class="content" style="overflow-x:auto">
      <?php
         $sql="select * from feedback_info"; // this query for displaying all feedback 
         $run=mysqli_query($con,$sql);
         // this is table for feedback to all customer 
         echo "<table class='container divform'>
         <tr>
         <th>Feedback ID:</th>
         <th>Customer ID</th>
         <th>Email Id</th>
         <th>Feedback Status</th>
         <th>Feedback Response</th>
         <th>Feedback Type</th>
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
         <td>$result[5]</td>
         <td><a class='button special-red' href='delete_feedback.php?id=$result[0]' class='btn btn-danger'>delete</a></td>
         <td><a class='button special' href='modify_feedback.php?id=$result[0]' class='btn btn-danger'>Edit</a></td>
         	</tr>";
         }
         echo "</table>";
         ?>
   </div>
</section>
<?php include("../footer/footer.php"); ?>