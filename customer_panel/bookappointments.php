<?php
include 'config.php';
session_start();
?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Book appointment</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- site icon -->
      <link rel="icon" href="images/logo.png" type="image/png" />
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css" />
      <!-- site css -->
      <link rel="stylesheet" href="style.css" />
      <!-- responsive css -->
      <link rel="stylesheet" href="css/responsive.css" />
      <!-- color css -->
      <link rel="stylesheet" href="css/colors.css" />
      <!-- select bootstrap -->
      <link rel="stylesheet" href="css/bootstrap-select.css" />
      <!-- scrollbar css -->
      <link rel="stylesheet" href="css/perfect-scrollbar.css" />
      <!-- custom css -->
      <link rel="stylesheet" href="css/custom.css" />
      <!-- font-awesome -->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
      
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <style>
         .divider-text {
    position: relative;
    text-align: center;
    margin-top: 15px;
    margin-bottom: 15px;
}
.divider-text span {
    padding: 7px;
    font-size: 12px;
    position: relative;   
    z-index: 2;
}
.divider-text:after {
    content: "";
    position: absolute;
    width: 100%;
    border-bottom: 1px solid #ddd;
    top: 55%;
    left: 0;
    z-index: 1;
}
     </style>
   </head>

<?php
  $select=mysqli_query($con,"select * from customersignup");
  $fetch=mysqli_fetch_assoc($select);
  
  if(mysqli_num_rows($select))
  {
   $_SESSION['n']= $fetch['Name'];
   $_SESSION['p']= $fetch['Pictures'];
  }
?>

   
   <body class="dashboard dashboard_1">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
               <div class="sidebar_blog_1">
                  <div class="sidebar-header">
                     <div class="logo_section">
                        <a href="bookappointments.php"><img class="logo_icon img-responsive" src="images/logo.png" alt="logo" /></a>
                     </div>
                  </div>
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        <div class="user_img"><img class="img-responsive" src="<?php echo "../customer_panel/pictures/" .$_SESSION['p'] ?>" alt="Customer Photo" /></div>
                        <div class="user_info">
                           <h6>Customer</h6>
                           <h6><?php echo $_SESSION['n']?></h6>
                           <p><span class="online_animation"></span> Online</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sidebar_blog_2">
                  <ul class="list-unstyled components">
                     <li class="active">
                        <a href="bookappointments.php" aria-expanded="false"><i class="fa-solid fa-calendar-check"></i> <span>Book Appointment</span></a>
                     </li>
                     
                     <li class="active">
                        <a href="myappointments.php" aria-expanded="false"><i class="fa fa-legal"></i> <span>My Appointments</span></a>
                     </li>
                     
                     <li class="active">
                        <a href="myprofile.php" aria-expanded="false"><i class="fa-solid fa-user-tie"></i> <span>My Profile</span></a>
                     </li>

                  </ul>
               </div>
            </nav>
            <!-- end sidebar -->
            
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
               <div class="topbar">
                  <nav class="navbar navbar-expand-lg navbar-light">
                     <div class="full">
                        <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                        <!-- <div class="logo_section">
                           <a href="index.html"><img class="img-responsive" src="images/logo/logo.png" alt="#" /></a>
                        </div> -->
                        <div class="right_topbar">
                           <div class="icon_info">

                              <ul class="user_profile_dd">
                                 <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="<?php echo "../customer_panel/pictures/" .$_SESSION['p'] ?>" alt="Customer Photo" /><span class="name_user"><?php echo $_SESSION['n']?></span></a>
                                    <div class="dropdown-menu">
                                      
                                       <a class="dropdown-item" href="../customerlogin.php"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                    </div>
                </nav>
            </div>
            <!-- end topbar -->
 <br>
   <?php
    if(isset($_POST['btnsubmit']))
    {
          $fn=$_POST['txtfn'];
          $cn=$_POST['txtcn'];
          $ad=$_POST['txtad'];
          $as=$_POST['txtas'];
          $ln=$_POST['txtln'];

          $insert=mysqli_query($con,"insert into allappointments values('null','$fn','$cn','$ad','$as','$ln','under review')");
          if($insert>0)
          {
            echo "
            <div class='alert alert-success alert-dismissible fade show' role='alert'>
            <center><strong>Done! Your application is under review you will be notified very soon..</strong></center>
            </div>";

            echo "<meta http-equiv='refresh' content='1; url=myappointments.php'>";
          }

    }
    ?>
        
   <!-- starting form -->
<article class="card-body mx-auto" style="max-width: 450px;">
	<h3 class="card-title mt-5 text-center">Book Appointment</h3>
   
	<form method="post">
	<div class="form-group input-group">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa-solid fa-user"></i> </span>
		 </div>
        <input class="form-control" placeholder="Full Name" type="text" title="Enter your full name" name="txtfn" autofocus required>
    </div> <!-- form-group// -->


    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa-solid fa-phone"></i> </span>
		</div>
    	<input class="form-control" placeholder="Contact Number" type="number" title="Enter your contact number" name="txtcn" required>
    </div> <!-- form-group// -->

      <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa-solid fa-calendar-days"></i> </span>
		 </div>
        <input class="form-control" placeholder="Appointment Date" type="date" title="Enter appointment date" name="txtad" required>
    </div> 

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa-solid fa-calendar-check"></i> </span>
		 </div>
       <select class="form-select form-select-sm form-control" name="txtas" required>
          <option hidden>Appointment Service</option>
          <option value="Affidavit Consultant">Affidavit Consultant</option>
          <option value="Criminal Consultant">Criminal Consultant</option>
          <option value="Civil Consultant">Civil Consultant</option>
          <option value="Divorce Consultant">Divorce Consultant</option>
       </select>
    </div> <!-- form-group// -->

    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa-solid fa-gavel"></i> </span>
		 </div>
       
     <select class="form-select form-select-sm form-control" name="txtln" required>
          <option hidden>Select Lawyer</option>
          <option value="Dylan Phillps">Dylan Phillps</option>
          <option value="Adam Phillp">Adam Phillp</option>
          <option value="Gloria Edwards">Gloria Edwards</option>
          <option value="Josh Dunn">Josh Dunn</option>
       </select>  

        <!-- <input class="form-control" placeholder="Lawyer Name" type="text" name="txtln" required> -->
    </div> 

    <!-- form-group// -->


    <!-- <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa-solid fa-gavel"></i> </span>
		 </div>
       <select name="txtln"> 
         <option value="">Adam Phillips</option>
         <option value="">Gloria Evans</option>
         <option value="">John Michael</option>
       </select>
        
    </div> -->





                                    
    <div class="form-group">
        <button type="submit" class="btn btn-danger btn-block" name="btnsubmit"> Submit </button>
    </div> <!-- form-group// -->      
                                                                   
</form>
</article>
   <!-- ending form -->
            </div>
        </div>
    </div>


    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <!-- wow animation -->
      <script src="js/animate.js"></script>
      <!-- select country -->
      <script src="js/bootstrap-select.js"></script>
      <!-- owl carousel -->
      <script src="js/owl.carousel.js"></script> 
      <!-- chart js -->
      <script src="js/Chart.min.js"></script>
      <script src="js/Chart.bundle.min.js"></script>
      <script src="js/utils.js"></script>
      <script src="js/analyser.js"></script>
      <!-- nice scrollbar -->
      <script src="js/perfect-scrollbar.min.js"></script>
      <script>
         var ps = new PerfectScrollbar('#sidebar');
      </script>
      <!-- custom js -->
      <script src="js/custom.js"></script>
      <script src="js/chart_custom_style1.js"></script>
    </body>
</html>