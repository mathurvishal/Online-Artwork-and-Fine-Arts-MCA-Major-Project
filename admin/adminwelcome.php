<?php include("header/header.php"); ?>
<?php
   if($_SESSION["adminid"] == ""  ||  $_SESSION["adminid"]==NULL)
   {
   header('Location:../index.php?page=admin_login');
   }
   else{
   	$a=$_SESSION["adminid"];
   	?>
<!-- Banner -->
<section class="banner full">
   <article>
      <img src="../img/admin/bg-4.jpg" alt="" />
      <div class="inner">
         <header>
            <h2>
               ** Admin Panel ** 
            </h2>
            <p><?php echo "<div class='text-center wel-div'>Welcome "." " .$_SESSION["admin"]. "</div>"; ?> </p>
         </header>
      </div>
   </article>
</section>
<?php
   }
   mysqli_close($con);
   ?>
<?php include("../footer/footer.php"); ?>