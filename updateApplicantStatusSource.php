<?php 
include("connection.php");
if (isset($_POST['SUBMIT']))
{
 
$applicant_id = $_POST['applicant_id'];
$jobTitle = $_POST['jobTitle'];
$roundName = $_POST['roundName'];
$status = $_POST['status'];
$statusDate = $_POST['statusDate'];
$reason = $_POST['reason'];

$insertAppStatus="INSERT INTO APPLICANT_STATUS (REG_ID, INTERVIEW_STATUS_ID, ROUND_ID, JOB_ID, REASON, STATUS_DATE)VALUES ('$applicant_id', '$status', '$roundName', '$jobTitle', '$reason', '$statusDate' )";
$query=mysqli_query($conn,$insertAppStatus);
//echo $insertAppStatus;die();
$query2=mysqli_query($conn,$insertInterviewer);
if ($query) {
  $message = "APPLICANT STATUS UPDATED SUCCESSFULLY";
  echo "<script type='text/javascript'>  alert('$message');document.location='viewStatus.php' </script>";
} else {
    echo "Error: " . $insertAppStatus . "<br>" . $conn->error;
}
}
?>