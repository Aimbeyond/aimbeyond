<?php
include("connection.php");
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
    $id=$_GET['id'];

$del3 = "DELETE FROM APPLICANT_DETAIL WHERE REG_ID= $id";
$run_del3= mysqli_query($conn, $del3);

$del2="DELETE FROM JOB_SKILL WHERE JOB_ID=$id";
$run_del2= mysqli_query($conn, $del2);

$del1="DELETE FROM INTERVIEWER_SKILL WHERE EMPLOYER_ID= $id";
$run_del1= mysqli_query($conn, $del1);


if($run_del1){
$del = "DELETE FROM SKILL WHERE SKILL_ID= $id";
$run_del= mysqli_query($conn, $del);

if($run_del)
{
    echo"<script>alert('data delete successfully')
    window.location='viewSkill.php';
    </script>";
   
}
}


?>