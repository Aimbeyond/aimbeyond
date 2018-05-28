<?php 
if(isset($_POST['submit']))
{
$interviewRound= $_POST['interviewRound'];

$sql= "INSERT INTO INTERVIEW_ROUND(ROUND_NAME,STATUS_ID) VALUES ('$interviewRound','0')";
$run=mysqli_query($conn,$sql);

if($run)
{
	echo "<script type= 'text/javascript'> alert('Round Inserted Successfully'); document.location='addInterviewRounds.php' </script>";
}} 
?>