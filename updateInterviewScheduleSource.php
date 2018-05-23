<?php 
include("connection.php");
if (isset($_POST['UPDATE']))
{
 
$applicant_id = $_POST['applicant_id'];
$job_id = $_POST['job_id'];
$round_id = $_POST['round_id'];
$interviewer_id = $_POST['interviewer_id'];
$interviewDate = $_POST['interviewDate'];


$insertSchedule="insert into INTERVIEW_SCHEDULE (JOB_ID,REG_ID,ROUND_ID,INTERVIEW_DATE) value ('$job_id','$applicant_id','$round_id','$interviewDate')";
$query=mysqli_query($conn,$insertSchedule);
//echo $insertSchedule;
$SCHEDULE_ID = mysqli_insert_id($conn);
//echo $SCHEDULE_ID;

$insertInterviewer="insert into INTERVIEWER_SCHEDULE (SCHEDULE_ID,EMPLOYER_ID) value ('$SCHEDULE_ID','$interviewer_id')";
//echo $insertInterviewer;die();
$query2=mysqli_query($conn,$insertInterviewer);
if ($query) {
  $message = "INTERVIEW SCHEDULE UPDATED SUCCESSFULLY";
  echo "<script type='text/javascript'>  alert('$message');document.location='updateInterviewSchedule.php' </script>";
} else {
    echo "Error: " . $insertSchedule . "<br>" . $conn->error;
}
}
?>