<?php
session_start();
include('connection.php');
$emailId = $_POST['emailId'];
$psw = $_POST['psw'];


$query = "select * from USER where EMAIL_ID = '$emailId' && PASSWORD = '$psw'";
//echo $q; die();
$result = mysqli_query($conn,$query);
$num = mysqli_num_rows($result);
$row=mysqli_fetch_array($result);
$userStatus=$row['USER_STATUS_ID'];
if($userStatus == 1)
{
if($num == 1)
{
    $_SESSION['emailId'] = $emailId;
    header('location: updateProfile.php');
}
else
{
    $message = "EITHER EMAIL OR PASSWORD IS INCORRECT";
   echo "<script type='text/javascript'>  alert('$message');document.location='login.php' </script>";
     
}}

 
else
{
    $message = "USER IS INACTIVE";
   echo "<script type='text/javascript'>  alert('$message');document.location='login.php' </script>";
     
}

?>