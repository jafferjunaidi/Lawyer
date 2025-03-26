<?php
include 'header.php';
?>

<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.css"
  rel="stylesheet"
/>
            <!-- About Start -->
            <div class="about">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-6">
                            <div class="about-img">
                                <img src="img/about.jpg" alt="Image">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="section-header">
                                <h2>About Attorneys</h2>
                            </div>
                            <div class="about-text">
                                <p class="text-justify">
                                    Attorneys are professional trained in the intricate principles of law and justice, serving as an advocate, counselor, and defender of individuals, organizations, and society as a whole. Lawyers provide legal guidance, represent clients in various legal proceedings, and strive to ensure that justice is upheld. They are tasked with interpreting and applying complex legal codes, researching case precedents, negotiating settlements, and presenting compelling arguments in court. Beyond their legal expertise, lawyers must exhibit ethical conduct, a commitment to fairness, and a dedication to upholding the rule of law, making them essential pillars of a just and orderly society.
                                </p>
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->


            <!-- Team Start -->
            <div class="team">
                <div class="container">
                    <div class="section-header">
                        <h2>Meet Our Expert Attorneys</h2>
                    </div>
<br>
  <form method="post">
<div class="input-group">
  <div class="form-outline">
    <input type="search" id="form1" name="txts" class="form-control" />
    <label class="form-label" for="form1">Search</label>
  </div>
  <button type="submit" class="btn btn-warning" name="btns">
    <i class="fas fa-search"></i>
  </button>
</div>       
 </form>
<br>

           <div class="row">
             <?php

            if(isset($_POST['btns']))
            {
                $search=$_POST['txts'];
                $select=mysqli_query($con, "select * from lawyersignup where Lawyer_name like '%$search%'");
                foreach($select as $data)
                {
               ?>
                 
                 <div class="col-lg-3 col-md-6">
                   <div class="team-item">
                       <div class="team-img">
                           <img src="<?php echo './lawyer_panel/pictures/'.$data['Pictures'] ?>" height=250 alt="Team Image">
                       </div>
                       <div class="team-text">
                           <h2><?php echo $data['Lawyer_name'] ?></h2>
                           <p><?php echo $data['Services'] ?></p>
                           <a href="singlepage.php" class="btn btn-warning text-light mt-2">More Details</a>
                        
                       </div>
                   </div>
               </div>

                 <?php
                }
              

            }
            else
            {
                $select=mysqli_query($con, "select * from lawyersignup");
                foreach($select as $data)
                {
               ?>
                 
                 <div class="col-lg-3 col-md-6">
                   <div class="team-item">
                       <div class="team-img">
                           <img src="<?php echo './lawyer_panel/pictures/'.$data['Pictures'] ?>" height=250 alt="Team Image">
                       </div>
                       <div class="team-text">
                           <h2><?php echo $data['Lawyer_name'] ?></h2>
                           <p><?php echo $data['Services'] ?></p>

                           <a href="singlepage.php" class="btn btn-warning text-light mt-2">More Details</a>
                       </div>
                   </div>
               </div>

                 <?php
                }
               

            }

?>

                     
                    </div>
                </div>
            </div>
            <!-- Team End -->


            <!-- Newsletter Start -->
            <div class="newsletter">
                <div class="container">
                    <div class="section-header">
                        <h2>Subscribe Our Newsletter</h2>
                    </div>
                    <div class="form">
                        <input class="form-control" placeholder="Email here">
                        <button class="btn">Submit</button>
                    </div>
                </div>
            </div>
            <!-- Newsletter End -->

<?php
include 'footer.php';
?>

            
            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
 <!-- MDB -->
<script
  type="text/javascript"
  src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.2/mdb.min.js"
></script>

    </body>
</html>
