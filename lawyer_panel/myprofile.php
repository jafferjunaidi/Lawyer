<?php
$conn = new mysqli("localhost", "root", "", "db_lawyer");
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
      <title>Profile</title>
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
                        <a href="myappointments.php"><img class="logo_icon img-responsive" src="images/logo.png" alt="logo" /></a>
                     </div>
                  </div>
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        <div class="user_img"><img class="img-responsive" src="<?php echo "../lawyer_panel/pictures/" .$_SESSION['p'] ?>" alt="Lawyer Photo" /></div>
                        <div class="user_info">
                           <h6>Lawyer</h6>
                           <h6><?php echo $_SESSION['n']?></h6>
                           <p><span class="online_animation"></span> Online</p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sidebar_blog_2">
                  <ul class="list-unstyled components">
                     
                     <li class="active">
                        <a href="myappointments.php" aria-expanded="false"><i class="fa fa-legal"></i> <span>All Appointments</span></a>
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
                                    <a class="dropdown-toggle" data-toggle="dropdown"><img class="img-responsive rounded-circle" src="<?php echo "../lawyer_panel/pictures/" .$_SESSION['p'] ?>" alt="Lawyer Photo" /><span class="name_user"><?php echo $_SESSION['n']?></span></a>
                                    <div class="dropdown-menu">
                             
                                       <a class="dropdown-item" href="../lawyerlogin.php"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                    </div>
                </nav>
            </div>
            <!-- end topbar -->


<?php
$user_id = 1;
// Query to fetch user data
$sql = "SELECT * FROM lawyersignup WHERE Id = $user_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $username = $row['Lawyer_name'];
    $email = $row['Email'];
    $password = $row['Password'];
    $cnic = $row['CNIC'];
    $phone = $row['Phone_number'];
    $city = $row['City'];
    $qualification = $row['Qualification'];
    $Services = $row['Services'];
    $experience = $row['Year_Experience'];
    $pictures = $row['Pictures'];

} else {
    echo "User not found!";
}
?>


   <!-- starting profile -->

                                  <div class="col-lg mt-5">
                                                <div class="card user-card-full">
                                                    <div class="row m-l-0 m-r-0">
                                                        <div class="col-sm-4 bg-c-lite-green user-profile">
                                                            <div class="card-block text-center text-white">
                                                                <div class="mb-3 mt-5">
                                                                    <img src="<?php echo 'pictures/'.$pictures ?>" class="img-radius" height="160px" alt="User-Profile-Image">
                                                                </div>
                                                               
                                                            </div>
                                                            <center>
                                                            <a class="btn btn-danger text-light" href="editmyprofile.php" role="button"><i class=" mdi mdi-square-edit-outline feather icon-edit f-16"></i> Edit Profile</a>
                                                            </center>
                                                        </div>
                                                        <div class="col-sm-8">
                                                            <div class="card-block">
                                                                <h3 class="m-b-20 p-b-5 b-b-default f-w-600">Personal Information</h3>
                                                                <div class="row">

                                                                <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Full Name</p>
                                                                        <h6 class="text-muted f-w-400"><?php echo $username; ?></h6>
                                                                    </div>

                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Email Address</p>
                                                                        <h6 class="text-muted f-w-400"><?php echo $email; ?></h6>
                                                                    </div>
                                                                </div>

                                                          <hr>
                                
                                                                <div class="row">
                                                                <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Password</p>
                                                                        <h6 class="text-muted f-w-400"><?php echo $password; ?></h6>
                                                                    </div>

                                                                    <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">CNIC</p>
                                                                        <h6 class="text-muted f-w-400"><?php echo $cnic; ?></h6>
                                                                    </div>
                                                                </div>

                                                            <hr>

                                                                <div class="row">

                                                                <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Phone</p>
                                                                        <h6 class="text-muted f-w-400"><?php echo $phone; ?></h6>
                                                                    </div>

                                                                <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">City</p>
                                                                        <h6 class="text-muted f-w-400"><?php echo $city; ?></h6>
                                                                    </div>
                                                                </div>

                                                                <hr>

                                                                    <div class="row">

                                                                <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Qualification</p>
                                                                        <h6 class="text-muted f-w-400"><?php echo $qualification; ?></h6>
                                                                    </div>
                                                                
                                                                <div class="col-sm-6">
                                                                        <p class="m-b-10 f-w-600">Services</p>
                                                                        <h6 class="text-muted f-w-400"><?php echo $Services; ?></h6>
                                                                    </div>
                                                                    </div>

                                                                    <hr>

                                                                <div class="row">
                                                                
                                                                <div class="col-sm-6">
                                                                    <p class="m-b-10 f-w-600">Experience Years</p>
                                                                    <h6 class="text-muted f-w-400"><?php echo $experience; ?></h6>
                                                                </div>
                                                                
                                                                <!-- <div class="col-sm-6">
                                                                    <p class="m-b-10 f-w-600">Pictures</p>
                                                                    <h6 class="text-muted f-w-400"><?php echo  $pictures; ?></h6>
                                                                </div> -->
                                                                </div>

              


                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                                                 
   <!-- ending profile -->
  
            </div>
        </div>
    </div>

<?php
$conn->close();
?>


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