<?php 
if(isset($_POST['submit']))
{

$applicantName=$_POST['applicantName'];
$status=$_POST['status'];
$roundName=$_POST['roundName'];
$jobTitle=$_POST['jobTitle'];
$reason=$_POST['reason'];
$statusDate=$_POST['statusDate'];

$sql = "INSERT INTO APPLICANT_STATUS (REG_ID, STATUS_ID, ROUND_ID, JOB_ID, REASON, STATUS_DATE)VALUES ('$applicantName', '$status', '$roundName', '$jobTitle', '$reason', '$statusDate' )";
//echo $sql; die();
$run=mysqli_query($conn,$sql);
}

if ($run) 
{
echo "<script type= 'text/javascript'> alert('Record Inserted Successfully'); document.location='addApplicantStatus.php' </script>";

}   
?>