<?php 
if(isset($_POST['submit']))
{
$interviewRound= $_POST['interviewRound'];

$sql= "INSERT INTO INTERVIEW_ROUND(ROUND_NAME) VALUES ('$interviewRound')";
$run=mysqli_query($conn,$sql);

if($run)
{
	echo "<script type= 'text/javascript'> alert('Round Inserted Successfully'); </script>";
}} 
?>