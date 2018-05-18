<?php 
if(isset($_POST['submit']))
{
$interviewStatus= $_POST['interviewStatus'];

$sql= "INSERT INTO INTERVIEW_STATUS(STATUS) VALUES ('$interviewStatus')";
$run=mysqli_query($conn,$sql);

if($run)
{
	echo "<script type= 'text/javascript'> alert('Interview Status Inserted Successfully'); </script>";
}} 
?>