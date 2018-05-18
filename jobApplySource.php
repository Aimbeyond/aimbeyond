<?php 
session_start();

include('connection.php');
$id=$_GET['id'];
$regId=$_SESSION['regId'];
//echo $regId;die();
$query = "select * from JOB_APPLY where REG_ID = '$regId'";
//echo $q; die();
$result = mysqli_query($conn,$query);
$num = mysqli_num_rows($result);
if($num == 1)
{
    $message = "You have already Applied  ";
    echo "<script type='text/javascript'>alert('$message');document.location='jobApply.php' </script>";
}
else{
$sql = "INSERT INTO JOB_APPLY (REG_ID,JOB_ID)VALUES ('$regId','$id')";
 //echo $sql; die();
$run=mysqli_query($conn,$sql);


if ($run) {
    $message = "You have Applied Job Successfully";
    echo "<script type='text/javascript'>  alert('$message');document.location='jobApply.php' </script>";
  }
  
  
}   
        
?>