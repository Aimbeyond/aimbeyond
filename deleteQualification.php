<?php
include("connection.php");
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
    $id=$_GET['id'];

    $del1="DELETE FROM APPLICANT_QUALIFICATION WHERE REG_ID= $id";
    $run_del1= mysqli_query($conn, $del1);
    
    if($run_del1){

    $del = "DELETE FROM QUALIFICATION WHERE QUALIFICATION_ID= $id";
    $run_del= mysqli_query($conn, $del);
    
    if($run_del)
    {
        echo"<script>alert('data delete successfully')
        window.location='viewQualification.php';
        </script>";
    
    }
        }

?>