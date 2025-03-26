<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Lawyer Signup</title>
</head>
<body>
    
    <br><br><br><br><br><br><br><br><br>
   
    <!-- Button trigger modal -->
    <center>
<button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#staticBackdrop" id="#modalbutton">
  <i><b class="text-light">Lawyer Signup Modal</b></i>
  </button>
  </center>

  <!-----------starting modal-------------->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-2" id="staticBackdropLabel"><i>Signup</i></h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          
          <form method="post" enctype="multipart/form-data">
               
                <input type="text" class="form-control mb-2" placeholder="Full name" title="Enter your full name" required name="txtfn">
              
                <input type="email" class="form-control mb-2" placeholder="Email address" title="Enter your email" required name="txte">
           
                <input type="password" class="form-control mb-2" placeholder="Password" title="Enter your password" required name="txtp">

                <input type="password" class="form-control mb-2" placeholder="Repeat password" title="Repeat your password" required name="txtrp">
                 
                <input type="number" class="form-control mb-2" placeholder="CNIC number" title="Enter your CNIC number" required name="txtcnic">

                <input type="number" class="form-control mb-2" placeholder="Phone number" title="Enter your phone number" required name="txtpn">

                <input type="text" class="form-control mb-2" placeholder="City" title="Enter your city"  required name="txtc">

                <input type="text" class="form-control mb-2" placeholder="Qualification" title="Enter your qualification" required name="txtq">

                <input type="text" class="form-control mb-2" placeholder="Offering service" title="Enter your service" required name="txts">

                <input type="text" class="form-control mb-2" placeholder="Experience" title="Enter your experience level" required name="txtexp">

                <input type="file" name="txtf" required class="form-control mb-3" title="Upload your pic">

                <div class="d-grid gap-2">
                <input type="submit" name="btnreg" value="Register" class="btn btn-warning fw-bold text-light">
                </div>
              
                <p class="text-center text-muted mt-4 mb-0">Already have an account? <a href="lawyerlogin.php"
                    class="fw-bold text-body "><u style="color: orange;">Login here</u></a></p>
 
              </form>
              
           
        </div>
        

      </div>
    </div>
  </div>


 
    <!-----------closing modal------------->

<?php
if(isset($_POST['btnreg']))
{
  $fn=$_POST['txtfn'];
  $e=$_POST['txte'];
  $p=md5($_POST['txtp']);
  $rp=md5($_POST['txtrp']);
  $cnic=$_POST['txtcnic'];
  $pn=$_POST['txtpn'];
  $c=$_POST['txtc'];
  $q=$_POST['txtq'];
  $s=$_POST['txts'];
  $exp=$_POST['txtexp'];
  
  $f=$_FILES['txtf']['name'];
  $tmp=$_FILES['txtf']['tmp_name'];
  move_uploaded_file($tmp,"./lawyer_panel/pictures/" .$f);
  
  $insert=mysqli_query($con,"insert into lawyersignup values('null','$fn','$e','$p','$cnic','$pn','$c','$q','$s','$exp','$f')");

if($insert)
{
 echo '<div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
 <strong><center>Account has been created successfully!!</center></strong>
 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';

echo "<meta http-equiv='refresh' content='2; url=lawyerlogin.php'>";

}

}
?>
    
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>


