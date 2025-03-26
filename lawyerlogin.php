<?php
include 'header.php';
?>

<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.css"
  rel="stylesheet"/>
 
<br>

<?php
if(isset($_POST['btnlogin']))
{
  $e=$_POST['txte'];
  $p=md5($_POST['txtp']);
  
  $select=mysqli_query($con,"select * from lawyersignup where Email='$e' and Password='$p'");

if(mysqli_num_rows($select))
{
 echo '<div class="alert alert-success alert-dismissible fade show mt-3" role="alert">
 <strong><center>You have been login successfully!!</center></strong>
 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';

echo "<meta http-equiv='refresh' content='2; url=lawyer_panel/myappointments.php'>";
}

else
{
echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong><center>Wrong Email & Password Try Again..</center></strong>
 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';      
}

}
?>

       <!--------------startinglawyerlogin------------>

	   <section class="vh-100 bg-image"
  style="background-image: url('img/carousel-1.jpg');">
  <div class="mask d-flex align-items-center h-100">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center text-warning mb-5"><span style="color: black;">sign in</span> <b>Lawyer</b></h2>

              <form method="post">

                <div class="form-outline mb-4">
                  <input type="email" id="form3Example3cg" class="form-control form-control-lg" required autofocus name="txte"/>
                <label class="form-label" for="form3Example3cg">Email address</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="form3Example4cg" class="form-control form-control-lg" required data-mdb-showcounter="true" maxlength="20" name="txtp"/>
                  <label class="form-label" for="form3Example4cg">Password</label>
                  <div class="form-helper"></div>
                </div>


         <div class="form-check mb-2">
         <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
         <label class="form-check-label" for="flexCheckDefault">Remember me</label>
        </div>


                <div class="d-flex justify-content-center">
                  <button type="submit"
                  class="btn btn-warning btn-rounded" name="btnlogin">Login</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Don't have an account? <a href="lawyersignup.php"
                    class="fw-bold text-body"><u style="color: orange;">Signup here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

		<!--------------endinglawyerlogin------------>

<!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.1/mdb.min.js"
></script>


<?php
include 'footer.php';
?>