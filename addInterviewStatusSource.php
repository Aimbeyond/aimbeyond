<?php 
if(isset($_POST['submit']))
{
<<<<<<< HEAD
$interviewStatus= $_POST['interviewStatus'];

$sql= "INSERT INTO INTERVIEW_STATUS(STATUS) VALUES ('$interviewStatus')";
=======
$interviewRound= $_POST['interviewRound'];

$sql= "INSERT INTO INTERVIEW_ROUND(ROUND_NAME) VALUES ('$interviewRound')";
>>>>>>> master
$run=mysqli_query($conn,$sql);

if($run)
{
<<<<<<< HEAD
	echo "<script type= 'text/javascript'> alert('Interview Status Inserted Successfully'); </script>";
=======
	echo "<script type= 'text/javascript'> alert('Round Inserted Successfully'); </script>";
>>>>>>> master
}} 
?>