<?php
include 'config.php';
session_start();
?>

<?php
if(isset($_GET['A']))
{
    $id=$_GET['A'];
    $slt=mysqli_query($con,"select * from customersignup where Id='$id'");
    foreach($slt as $fetch)
    {
        $n=$fetch['Name'];
        $e=$fetch['Email'];
        $p=$fetch['Password'];
        $pn=$fetch['Phone_number'];
        $c=$fetch['City'];
        $img=$fetch['Pictures'];
    }
}
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
      <title>Edit profile</title>
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
      <!-- MaterialDesign-Webfont -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/css/materialdesignicons.css">

      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
     
<style>
         body {
    background-color: #f9f9fa
}

.padding {
    padding: 3rem !important
}

.user-card-full {
    overflow: hidden;
}

.card {
    border-radius: 5px;
    -webkit-box-shadow: 0 1px 20px 0 rgba(69,90,100,0.08);
    box-shadow: 0 1px 20px 0 rgba(69,90,100,0.08);
    border: none;
    margin-bottom: 30px;
}

.m-r-0 {
    margin-right: 0px;
}

.m-l-0 {
    margin-left: 0px;
}

.user-card-full .user-profile {
    border-radius: 5px 0 0 5px;
}

.bg-c-lite-green {
        background: -webkit-gradient(linear, left top, right top, from(#f29263), to(#ee5a6f));
    background: linear-gradient(to right, #ee5a6f, #f29263);
}

.user-profile {
    padding: 20px 0;
}

.card-block {
    padding: 1.25rem;
}

.m-b-25 {
    margin-bottom: 25px;
}

.img-radius {
    border-radius: 5px;
}


 
h6 {
    font-size: 14px;
}

.card .card-block p {
    line-height: 25px;
}

@media only screen and (min-width: 1400px){
p {
    font-size: 14px;
}
}

.card-block {
    padding: 1.25rem;
}

.b-b-default {
    border-bottom: 1px solid #e0e0e0;
}

.m-b-20 {
    margin-bottom: 20px;
}

.p-b-5 {
    padding-bottom: 5px !important;
}

.card .card-block p {
    line-height: 25px;
}

.m-b-10 {
    margin-bottom: 10px;
}

.text-muted {
    color: #919aa3 !important;
}

.b-b-default {
    border-bottom: 1px solid #e0e0e0;
}

.f-w-600 {
    font-weight: 600;
}

.m-b-20 {
    margin-bottom: 20px;
}

.m-t-40 {
    margin-top: 20px;
}

.p-b-5 {
    padding-bottom: 5px !important;
}

.m-b-10 {
    margin-bottom: 10px;
}

.m-t-40 {
    margin-top: 20px;
}

.user-card-full .social-link li {
    display: inline-block;
}

.user-card-full .social-link li a {
    font-size: 20px;
    margin: 0 10px 0 0;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}

     </style>
   </head>
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
    if(isset($_POST['btnupdate']))
    {
          $fn=$_POST['txtfn'];
          $e=$_POST['txte'];
          $p=md5($_POST['txtp']);
          $pn=$_POST['txtpn'];
          $c=$_POST['txtc'];

          $img=$_FILES['txtf']['name'];
          $tmp=$_FILES['txtf']['tmp_name'];
          move_uploaded_file($tmp, "../customer_panel/pictures/".$img);
            
          $update=mysqli_query($con,"update customersignup set Name='$fn', Email='$e', Password='$p', Phone_number='$pn', City='$c', Pictures='$img'");
          if($update)
          {
            echo "
            <div class='alert alert-success alert-dismissible fade show' role='alert'>
            <center><strong>Profile Updated Successfully!!</strong></center>
            </div>";

            echo "<meta http-equiv='refresh' content='1; url=myprofile.php'>";
          }

          else
          {
            echo "
            <div class='alert alert-danger alert-dismissible fade show' role='alert'>
            <center><strong>Profile not Updated.</strong></center>
            </div>";
          }

          }
    ?>

   <!-- starting profile -->
                                 <form method="post" enctype="multipart/form-data">
                                
                                  <div class="col-lg mt-5">
                                                <div class="card user-card-full">
                                                    <div class="row m-l-0 m-r-0">
                                                        <div class="col-sm-4 bg-c-lite-green user-profile">
                                                            <div class="card-block text-center text-white">
                                                                <div class="mt-5">
                                                                    <img src="pictures/pic.png" class="img-radius" height="180px" alt="User-Profile-Image">
                                                                </div>
                                                            </div>
                                                          
                                                            <!-- <a class="btn btn-danger text-light" href="myprofile.php" role="button" input type="submit">Save Profile</a> -->
                                                    ]
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <div class="card-block">
                                                                <h3 class="m-b-20 p-b-5 b-b-default f-w-600">Personal Information</h3>
                                                                <div class="row">

                                                                <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Full Name</p>
                                                                        <input class="form-control" type="text" name="txtfn" class="form-control mb-3" required autofocus>
                                                                    </div>

                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Email Address</p>
                                                                        <input class="form-control" type="email" name="txte" class="form-control mb-3" required>
                                                                    </div>
                                                                </div>
                                                          <hr>

                                                                <div class="row">
                                                                <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Password</p>
                                                                        <input class="form-control" type="password" name="txtp" class="form-control mb-3" required>
                                                                    </div>

                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Phone Number</p>
                                                                        <input class="form-control" type="number" name="txtpn" class="form-control mb-3" required>
                                                                    </div>
                                                                </div>
                                                            <hr>
                                                                <div class="row">
                                                                <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">City</p>
                                                                        <input class="form-control" type="text" name="txtc" class="form-control mb-3" required>
                                                                    </div>

                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-11 f-w-600">Upload Image</p>
                                                                        <input type="file" name="txtf" class="mb-3" required>
                                                                    </div>
                                                            </div>
                                                                    <center>
                                                                    <button type="submit" class="btn btn-danger mt-3" name="btnupdate"><i class="fa-solid fa-arrow-up-from-bracket"></i> Update Profile</button>
                                                                    </center>

                                                                    <!-- <a class='btn btn-danger mt-3' href='myprofile.php?A=$data[Id]' role='button' name='btnupdate'><i class='fa-solid fa-arrow-up-from-bracket'></i> Update Profile</a> -->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                                                 
   <!-- ending profile -->
  
            </div>
            </form>
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