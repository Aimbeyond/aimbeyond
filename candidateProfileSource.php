<?php include("connection.php")?>
      <?php
 $id=$_GET['id'];

 
 $sql = "SELECT * FROM APPLICANT_DETAIL WHERE REG_ID='136'";

 $retval = mysqli_query($conn, $sql);

 if(! $retval ) {
    die('Could not get data: ' . mysqli_error());
 }?>

 