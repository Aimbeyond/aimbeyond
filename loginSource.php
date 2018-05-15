<?php
session_start();
include('connection.php');
$emailId = $_POST['emailId'];
$psw = $_POST['psw'];


$query = "select * from USER where EMAIL_ID = '$emailId' && PASSWORD = '$psw'";
//echo $q; die();
$result = mysqli_query($conn,$query);
$num = mysqli_num_rows($result);

if($num == 1)
{
    $_SESSION['emailId'] = $emailId;
    header('location: addProfile.php');
}
else
{
    $message = "EITHER EMAIL OR PASSWORD IS INCORRECT";
   echo "<script type='text/javascript'>  alert('$message');document.location='login.php' </script>";
   

   
}

 

?>