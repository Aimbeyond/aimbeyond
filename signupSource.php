<?php
session_start();
include('connection.php');
$today = date("Y-m-d H:i:s");
$name = $_POST['name'];
$emailId = $_POST['emailId'];
$psw = $_POST['psw'];
$confirmPsw = $_POST['confirmPsw'];
$lastLogin = $_POST['lastLogin'];
$userStatus = $_POST['userStatus'];
$userType = $_POST['userType'];
$flag = $_POST['flag'];


$query = "select * from USER where EMAIL_ID = '$emailId'";
//echo $q; die();
$result = mysqli_query($conn,$query);
$num = mysqli_num_rows($result);
if($num == 1)
{
    $message = "THIS DATA IS DUPLICATE";
    echo "<script type='text/javascript'>alert('$message');document.location='signup.php' </script>";
}

else if($psw==$confirmPsw)
{

    
    $query = "insert into USER (USER_NAME,PASSWORD,CONFIRM_PASSWORD,EMAIL_ID,LAST_LOGIN,USER_STATUS_ID,USER_TYPE_ID,FLAG) values('$name','$psw','$confirmPsw','$emailId','$lastLogin','$userStatus','$userType','$flag')";
    //echo $query;die();
   $result= mysqli_query($conn,$query);
   $last_id = mysqli_insert_id($conn);
   $insert  = "insert into APPLICANT_DETAIL (USER_ID,APPLICANT_NAME,EMAIL_ID) values('$last_id','$name','$emailId')";
   $result= mysqli_query($conn,$insert);
   $reg_id = mysqli_insert_id($conn);
   $message = "Account Generated..... WELCOME";
   echo "<script type='text/javascript'>  alert('$message');document.location='login.php' </script>";
}
else{
    $message = "Password Incorrect";
   echo "<script type='text/javascript'>  alert('$message');document.location='signup.php' </script>";
}

?>
