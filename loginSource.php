<?php
error_reporting(E_ALL);
 ini_set('display_errors', 1);
session_start();
include('connection.php');

$emailId = $_POST['emailId'];
$psw = $_POST['psw'];


$query = "select * from USER where EMAIL_ID = '$emailId' && PASSWORD = '$psw'";
//echo $query; die();
$result = mysqli_query($conn,$query);
$num = mysqli_num_rows($result);
//echo $num;die();
$queryStatus = "select * from USER where EMAIL_ID = '$emailId'";
$resultStatus = mysqli_query($conn,$queryStatus);
$row=mysqli_fetch_array($resultStatus);
$userStatus=$row['USER_STATUS_ID'];
//echo $userStatus; die();
if($userStatus == 0)
{
    $message = "USER IS INACTIVE";
    //echo $message; die();
    echo "<script type='text/javascript'>  alert('$message');document.location='login.php' </script>";
} 
elseif($num == 1)

{ 
    $queryRegId = "select * from APPLICANT_DETAIL where EMAIL_ID = '$emailId'";
    $resultRegId = mysqli_query($conn,$queryRegId);
    $rowRegId=mysqli_fetch_array($resultRegId);
    $REG_ID=$rowRegId['REG_ID'];
    $_SESSION['regId'] = $REG_ID;
    //echo $_SESSION['regId'];die();
    $_SESSION['emailId'] = $emailId;
    header('location: updateProfile.php');
}
else
{
    
    $message = "EITHER EMAIL OR PASSWORD IS INCORRECT";
    //echo $message;die();
   echo "<script type='text/javascript'>  alert('$message');document.location='login.php' </script>";
     
}
     


?>