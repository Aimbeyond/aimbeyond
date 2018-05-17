<?php include("connection.php")?>
      <?php
 $regId=$_GET['regId'];
 $sql = "SELECT * FROM APPLICANT_DETAIL WHERE REG_ID='$regId'";

 $retval = mysqli_query($conn, $sql);

 if(! $retval ) {
    die('Could not get data: ' . mysqli_error());
 }?>

 