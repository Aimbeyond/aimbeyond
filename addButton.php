<?php 
include("connection.php");
if(isset($_POST['SUBMIT']))
{       $jobId=$_POST['jobId'];
    echo $jobId;die();
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


 $sql = "INSERT INTO APPLICANT_DETAIL (APPLICANT_NAME, EMAIL_ID, CONTACT_NUMBER, EXPERIENCE_IN_MONTH, EXPERIENCE_IN_YEAR, LOCATION_ID, NOTICE_PERIOD, PACKAGE,SKILL_ID,APPLICANT_RESUME)VALUES ('$name','$email_id','$contact_number','$experience_month','$experience_year','$location', '$notice', '$package','$Skills_arr','$file_name')";

 $run=mysqli_query($conn,$sql);
 $REG_ID = mysqli_insert_id($conn);

$insert_10 = "INSERT INTO APPLICANT_QUALIFICATION (REG_ID, QUALIFICATION_ID, INSTITUTION, PERCENTAGE, YEAR_OF_PASSING )VALUES ('$REG_ID','1','$Institution_10','$Percentage_10','$YOP_10')";
$run1=mysqli_query($conn,$insert_10);
$insert_12 = "INSERT INTO APPLICANT_QUALIFICATION (REG_ID, QUALIFICATION_ID, INSTITUTION, PERCENTAGE, YEAR_OF_PASSING )VALUES ('$REG_ID','2','$Institution_12','$Percentage_12','$YOP_12')";
$run2=mysqli_query($conn,$insert_12);
$insert_G = "INSERT INTO APPLICANT_QUALIFICATION (REG_ID, QUALIFICATION_ID, INSTITUTION, PERCENTAGE, YEAR_OF_PASSING )VALUES ('$REG_ID','$DROPDOWN_G','$Institution_G','$Percentage_G','$YOP_G')";
$run3=mysqli_query($conn,$insert_G);
$insert_M = "INSERT INTO APPLICANT_QUALIFICATION (REG_ID, QUALIFICATION_ID, INSTITUTION, PERCENTAGE, YEAR_OF_PASSING )VALUES ('$REG_ID','$DROPDOWN_M','$Institution_M','$Percentage_M','$YOP_M')";
$run4=mysqli_query($conn,$insert_M);
$insert_O = "INSERT INTO APPLICANT_QUALIFICATION (REG_ID, QUALIFICATION_ID, INSTITUTION, PERCENTAGE, YEAR_OF_PASSING )VALUES ('$REG_ID','$DROPDOWN_O','$Institution_O','$Percentage_O','$YOP_O')";
$run5=mysqli_query($conn,$insert_O);



$query = "select * from JOB_APPLY where REG_ID = '$REG_ID'";
//echo $q; die();
$result = mysqli_query($conn,$query);
$num = mysqli_num_rows($result);
if($num == 1)
{
    $message = "You have already Applied  ";
    echo "<script type='text/javascript'>alert('$message');document.location='jobApply.php' </script>";
}
else{
$sql = "INSERT INTO JOB_APPLY (REG_ID,JOB_ID)VALUES ('$REG_ID','$jobId')";
 //echo $sql; die();
$run=mysqli_query($conn,$sql);


// if ($run) {
//     $message = "You have Applied Job Successfully";
//     echo "<script type='text/javascript'>  alert('$message');document.location='jobApply.php' </script>";
//   }
  
  
}   
     






if ($run) {
  $message = "RECORD INSERTED SUCCESSFULLY";
  echo "<script type='text/javascript'>  alert('$message');document.location='addProfile.php' </script>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
 }
?>