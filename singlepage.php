<?php
session_start();
include 'header.php';
?>
<br>


<?php
  $select=mysqli_query($con,"select * from lawyersignup");
  $fetch=mysqli_fetch_assoc($select);
  
  if(mysqli_num_rows($select))
  {
   $_SESSION['n']= $fetch['Lawyer_name'];
   $_SESSION['e']= $fetch['Email'];
   $_SESSION['pn']= $fetch['Phone_number'];
   $_SESSION['exp']= $fetch['Year_Experience'];
   $_SESSION['q']= $fetch['Qualification'];
   $_SESSION['c']= $fetch['City'];
   $_SESSION['p']= $fetch['Pictures'];
  }
?>





<div class="card text-center">
  <div class="card-header">
   <p class="h3 text-warning text-uppercase">attorney information</p>
  </div>
  <div class="card-body">
      <img src="<?php echo "./lawyer_panel/pictures/" .$_SESSION['p'] ?>" alt="">
      <h4 class="card-title mt-2"><?php echo $_SESSION['n']?></h4>
      <p class="card-text"><?php echo $_SESSION['e']?></p>
      <p class="card-text"><?php echo $_SESSION['q']?></p>
      <p class="card-text">Experience: <?php echo $_SESSION['exp']?> Years</p>
      <p class="card-text"><?php echo $_SESSION['pn']?></p>
      <p class="card-text"><?php echo $_SESSION['c']?></p>
    <a href="./customer_panel/bookappointments.php" class="btn btn-dark text-light">Book Appointment</a>
  </div>
</div>








<?php
include 'footer.php';
?>
