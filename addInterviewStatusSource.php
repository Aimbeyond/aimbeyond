<?php 
if(isset($_POST['submit']))
{
$interviewStatus= $_POST['interviewStatus'];

$sql= "INSERT INTO INTERVIEW_STATUS(INTERVIEW_STATUS,STATUS_ID) VALUES ('$interviewStatus','0')";
$run=mysqli_query($conn,$sql);

if($run)
{
	echo "<script type= 'text/javascript'> alert('Interview Status Inserted Successfully'); document.location='addInterviewStatus.php'</script>";
}} 
?>