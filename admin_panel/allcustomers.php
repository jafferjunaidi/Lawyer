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
      <title>Customers</title>
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
   </head>
   <body class="dashboard dashboard_1">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
            <nav id="sidebar">
               <div class="sidebar_blog_1">
                  <div class="sidebar-header">
                     <div class="logo_section">
                        <a href="allappointments.php"><img class="logo_icon img-responsive" src="images/logo.png" alt="logo" /></a>
                     </div>
                  </div>
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        <div class="user_img"><img class="img-responsive" src="<?php echo "../admin_panel/pictures/" .$_SESSION['p'] ?>" alt="Admin photo" /></div>
                        <div class="user_info">
                           <h6>Admin</h6>
                           <h6><?php echo $_SESSION['n']?></h6>
                           <p><span class="online_animation"></span> Online</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sidebar_blog_2">
                  <ul class="list-unstyled components">
                     <li class="active">
                        <a href="allappointments.php" aria-expanded="false"><i class="fa-solid fa-calendar-check"></i> <span>All Appointments</span></a>
                     </li>

                     <li class="active">
                        <a href="allcustomers.php" aria-expanded="false"><i class="fa-solid fa-users"></i> <span>All Customers</span></a>
                     </li>

                     <li class="active">
                        <a href="alllawyers.php" aria-expanded="false"><i class="fa-solid fa-gavel"></i> <span>All Lawyers</span></a>
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
                                    <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="<?php echo "../admin_panel/pictures/" .$_SESSION['p'] ?>" alt="Admin Photo" /><span class="name_user"><?php echo $_SESSION['n']?></span></a>
                                    <div class="dropdown-menu">
                                    <a class="dropdown-item" href="myprofile.php">My Profile</a>
                                       <a class="dropdown-item" href="../adminlogin.php"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                    </div>
                </nav>
            </div>
            <!-- end topbar -->
            <h2 class="mt-5 text-center text-uppercase">all Customers</h2>
<br>
<table class="table table-danger text-dark">
         <thead>
             <tr>
                <th>Id</th>
                <th>Full_name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Phone_number</th>
                <th>City</th>
               
             </tr>
         </thead>
         <!-- <td>$data[Pictures]</td> -->
         <tbody>
             <?php
          $select=mysqli_query($con,"select * from customersignup");
          foreach($select as $data)
          {
              echo 
            "
            <tr>
            <td>$data[Id]</td>
            <td>$data[Name]</td>
            <td>$data[Email]</td>
            <td>$data[Password]</td>
            <td>$data[Phone_number]</td>
            <td>$data[City]</td>
                    
            </tr>
            ";
          }
          ?>
<?php
  $select=mysqli_query($con,"select * from customersignup");
  $fetch=mysqli_fetch_assoc($select);
  
  if(mysqli_num_rows($select))
  {
   
   $_SESSION['pic']= $fetch['Pictures'];
  }
?>

         </tbody>
    
      </table>

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
