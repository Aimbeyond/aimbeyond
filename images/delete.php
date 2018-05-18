<?php
	
     $dbhost = 'localhost';
     $dbuser = 'root';
     $dbpass = 'root';
     $conn = mysqli_connect($dbhost, $dbuser, $dbpass,"Recruitment_process") or die (mysqli_error());
     $REG_ID=$_GET['id'];
     $del_data = "delete from applicant_detail where REG_ID=$REG_ID";
	   // echo $del_data; die();
     $run_del = mysqli_query($conn,$del_data);
     if($run_del)
     {
         echo "<script>alert ('data is successfully deleted')</script>";
         header("Location: bootstrapphpselect.php");
     }
     
     ?>