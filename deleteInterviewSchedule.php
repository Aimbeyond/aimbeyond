<?php
include("connection.php");
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
    $id=$_GET['id'];

$del1="DELETE FROM INTERVIEWER_SCHEDULE WHERE SCHEDULE_ID= $id";
$run_del1= mysqli_query($conn, $del1);


if($run_del1){
$del = "DELETE FROM INTERVIEW_SCHEDULE WHERE SCHEDULE_ID= $id";
$run_del= mysqli_query($conn, $del);

if($run_del)
{
    echo"<script>alert('data delete successfully')
    window.location='viewInterviewSchedule.php';
    </script>";  
}
}
?>