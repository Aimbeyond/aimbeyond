<?php 
session_start();
include("connection.php");
//include("updateProfileSource.php");
$_SESSION['emailId'] == $emailId;
$REG_ID=$_GET['REG_ID'];
$fetch_data = "select * from APPLICANT_DETAIL where REG_ID = $REG_ID";
$run_data = mysqli_query($conn,$fetch_data);
$row=mysqli_fetch_array($run_data);
$REG_ID=$row['REG_ID'];
if (isset($_POST['UPDATE']))
{

//echo "<pre>"; print_r($_POST); die();
$name=$_POST['full_name'];
$contact_number=$_POST['contact_no'];
$email_id=$_POST['email_address'];
$location=$_POST['location'];
$experience_month=$_POST['experience_month'];
$experience_year=$_POST['experience_year'];
$Skills=$_POST['Skills'];
$Skills_arr=implode(",",$Skills);
$notice=$_POST['notice_period'];
$package=$_POST['previous_package'];
$file_name = $_FILES['image']['name'];
$file_tmp =$_FILES['image']['tmp_name'];
move_uploaded_file($file_tmp,"resume/".$file_name);
$update_ad ="UPDATE APPLICANT_DETAIL SET APPLICANT_NAME='$name' ,CONTACT_NUMBER='$contact_number', EMAIL_ID='$email_id' ,EXPERIENCE_IN_MONTH='$experience_month' , EXPERIENCE_IN_YEAR='$experience_year' ,LOCATION_ID = '$location',NOTICE_PERIOD = '$notice',PACKAGE='$package',SKILL_ID='$Skills_arr',APPLICANT_RESUME='$file_name' WHERE REG_ID=$REG_ID";
$run_ad= mysqli_query($conn, $update_ad);
$Institution_10=$_POST['institute1'];
$YOP_10=$_POST['yop1'];
$Percentage_10=$_POST['percentage1'];
$Institution_12=$_POST['institute2'];
$YOP_12=$_POST['yop2'];
$Percentage_12=$_POST['percentage2'];
$DROPDOWN_G=$_POST['qualification3'];
$Institution_G=$_POST['institute3'];
$YOP_G=$_POST['yop3'];
$Percentage_G=$_POST['percentage3'];
$DROPDOWN_M=$_POST['qualification4'];
$Institution_M=$_POST['institute4'];
$YOP_M=$_POST['yop4'];
$Percentage_M=$_POST['percentage4'];
$DROPDOWN_O=$_POST['qualification5'];
$Institution_O=$_POST['institute5'];
$YOP_O=$_POST['yop5'];
$Percentage_O=$_POST['percentage5'];
// loop 
$Institution_10_1=$_POST['institute7'];
$YOP_10_1=$_POST['yop7'];
$Percentage_10_1=$_POST['percentage7'];
$Institution_12_1=$_POST['institute8'];
$YOP_12_1=$_POST['yop8'];
$Percentage_12_1=$_POST['percentage8'];
$DROPDOWN_G_1=$_POST['qualification9'];
$Institution_G_1=$_POST['institute9'];
$YOP_G_1=$_POST['yop9'];
$Percentage_G_1=$_POST['percentage9'];
$DROPDOWN_M_1=$_POST['qualification10'];
$Institution_M_1=$_POST['institute10'];
$YOP_M_1=$_POST['yop10'];
$Percentage_M_1=$_POST['percentage10'];
$DROPDOWN_O_1=$_POST['qualification11'];
$Institution_O_1=$_POST['institute11'];
$YOP_O_1=$_POST['yop11'];
$Percentage_O_1=$_POST['percentage11'];

$insert_10 = "INSERT INTO APPLICANT_QUALIFICATION (REG_ID, QUALIFICATION_ID, INSTITUTION, PERCENTAGE, YEAR_OF_PASSING )VALUES ('$REG_ID','1','$Institution_10','$Percentage_10','$YOP_10')";
$run10=mysqli_query($conn,$insert_10);
//echo $insert_10; 
$insert_12 = "INSERT INTO APPLICANT_QUALIFICATION (REG_ID, QUALIFICATION_ID, INSTITUTION, PERCENTAGE, YEAR_OF_PASSING )VALUES ('$REG_ID','2','$Institution_12','$Percentage_12','$YOP_12')";
$run12=mysqli_query($conn,$insert_12);
//echo $insert_12; 
$insert_G = "INSERT INTO APPLICANT_QUALIFICATION (REG_ID, QUALIFICATION_ID, INSTITUTION, PERCENTAGE, YEAR_OF_PASSING )VALUES ('$REG_ID','$DROPDOWN_G','$Institution_G','$Percentage_G','$YOP_G')";
$rung=mysqli_query($conn,$insert_G);
$insert_M = "INSERT INTO APPLICANT_QUALIFICATION (REG_ID, QUALIFICATION_ID, INSTITUTION, PERCENTAGE, YEAR_OF_PASSING )VALUES ('$REG_ID','$DROPDOWN_M','$Institution_M','$Percentage_M','$YOP_M')";
$runM=mysqli_query($conn,$insert_M);
$insert_O = "INSERT INTO APPLICANT_QUALIFICATION (REG_ID, QUALIFICATION_ID, INSTITUTION, PERCENTAGE, YEAR_OF_PASSING )VALUES ('$REG_ID','$DROPDOWN_O','$Institution_O','$Percentage_O','$YOP_O')";
$runO=mysqli_query($conn,$insert_O);
$update_data2 ="UPDATE APPLICANT_QUALIFICATION SET PERCENTAGE='$Percentage_10_1' ,YEAR_OF_PASSING='$YOP_10_1', INSTITUTION='$Institution_10_1'  WHERE REG_ID=$REG_ID && QUALIFICATION_ID=1";
$run_data2 = mysqli_query($conn, $update_data2);
//echo $update_data2 ; die();
$update_data3 ="UPDATE APPLICANT_QUALIFICATION SET PERCENTAGE='$Percentage_12_1' ,YEAR_OF_PASSING='$YOP_12_1', INSTITUTION='$Institution_12_1'  WHERE REG_ID=$REG_ID && QUALIFICATION_ID=2";
$run_data3 = mysqli_query($conn, $update_data3);
//echo $update_data3;die();
$update_data4 ="UPDATE APPLICANT_QUALIFICATION AQ JOIN QUALIFICATION Q ON  AQ.QUALIFICATION_ID = Q.QUALIFICATION_ID 
SET AQ.PERCENTAGE='$Percentage_G_1' ,AQ.YEAR_OF_PASSING='$YOP_G_1', AQ.INSTITUTION='$Institution_G_1',AQ.QUALIFICATION_ID='$DROPDOWN_G_1'
WHERE Q.QUALIFICATION_TYPE = 'Graduation' && AQ.REG_ID=$REG_ID";
$run_data4 = mysqli_query($conn, $update_data4);
//echo $update_data4;die();
$update_data5 ="UPDATE APPLICANT_QUALIFICATION AQ JOIN QUALIFICATION Q ON  AQ.QUALIFICATION_ID = Q.QUALIFICATION_ID 
SET AQ.PERCENTAGE='$Percentage_M_1' ,AQ.YEAR_OF_PASSING='$YOP_M_1', AQ.INSTITUTION='$Institution_M_1',AQ.QUALIFICATION_ID='$DROPDOWN_M_1'
WHERE Q.QUALIFICATION_TYPE = 'Post Graduation' && AQ.REG_ID=$REG_ID";
$run_data5 = mysqli_query($conn, $update_data5);
//echo $update_data5;
$update_data6 ="UPDATE APPLICANT_QUALIFICATION AQ JOIN QUALIFICATION Q ON  AQ.QUALIFICATION_ID = Q.QUALIFICATION_ID 
SET AQ.PERCENTAGE='$Percentage_O_1' ,AQ.YEAR_OF_PASSING='$YOP_O_1', AQ.INSTITUTION='$Institution_O_1',AQ.QUALIFICATION_ID='$DROPDOWN_O_1'
WHERE Q.QUALIFICATION_TYPE = 'Others' && AQ.REG_ID=$REG_ID";
$run_data6 = mysqli_query($conn, $update_data6);
//echo $update_data6; die();

if ($run_ad) {
  $message = "RECORD UPDATED SUCCESSFULLY";
  echo "<script type='text/javascript'>  alert('$message');document.location='viewProfiles.php' </script>";
} else {
    echo "Error: " . $update_ad . "<br>" . $conn->error;
}
}
error_reporting(E_ALL & ~E_NOTICE);
ini_set('display_errors', 1);

?>