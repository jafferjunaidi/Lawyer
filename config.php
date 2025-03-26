<?php
$con=mysqli_connect("localhost","root","","db_lawyer");
if(!$con)
{
   echo "<script>alert('Error database not found')</script>";
}

?>