<?php
include("connection.php");
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
    $id=$_GET['id'];



    $update_data ="UPDATE QUALIFICATION  SET STATUS_ID ='1' WHERE QUALIFICATION_ID=$id";
    //echo $update_data ; die();
   $run_data= mysqli_query($conn, $update_data);
   

    
    if($run_data)
    {
        echo"<script>alert('data delete successfully')
        window.location='viewQualification.php';
        </script>";
    
    }
        

?>