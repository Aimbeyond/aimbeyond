<?php 
session_start();
//$regId=$_GET['regId'];
include("connection.php");
$_SESSION['emailId'] == $emailId;
$fetch_data = "select * from APPLICANT_DETAIL where EMAIL_ID = '".$_SESSION['emailId']."'";  

   //echo $fetch_data; die();
   //echo $emailId; die();
$run_data = mysqli_query($conn,$fetch_data);
$row=mysqli_fetch_array($run_data);
$REG_ID=$row['REG_ID'];
$fetch_location = "SELECT * FROM LOCATION";
$fetch_location = mysqli_query($conn, $fetch_location);
$fetch_loction = "select L.LOCATION, AD.REG_ID,AD.APPLICANT_NAME,AD.LOCATION_ID from APPLICANT_DETAIL AD JOIN LOCATION L ON L.LOCATION_ID = AD.LOCATION_ID && REG_ID=$REG_ID";
//echo $sql; die();
$fetch_loction = mysqli_query($conn,$fetch_loction);
$row_loc=mysqli_fetch_array($fetch_loction);
$fetch_skill = "SELECT * FROM SKILL";
$fetch_skill = mysqli_query($conn, $fetch_skill);
$fetch_qualification1 = "SELECT * FROM QUALIFICATION where QUALIFICATION_ID = 1";
$fetch_qualification1 = mysqli_query($conn, $fetch_qualification1);
$row_qual1=mysqli_fetch_array($fetch_qualification1);
$fetch_qualification2 = "SELECT * FROM QUALIFICATION where QUALIFICATION_ID = 2";
$fetch_qualification2 = mysqli_query($conn, $fetch_qualification2);
$row_qual2=mysqli_fetch_array($fetch_qualification2);
$fetch_qualification = "SELECT * FROM QUALIFICATION";
$fetch_qualification = mysqli_query($conn, $fetch_qualification);
$q= "select * from APPLICANT_QUALIFICATION where REG_ID=$REG_ID ";
$run_q = mysqli_query($conn,$q);
$num = mysqli_num_rows($run_q);

?>