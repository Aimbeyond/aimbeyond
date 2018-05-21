<?php 
include("connection.php");
if(isset($_POST['SUBMIT']))
{
$qualification= $_POST['qualification'];
$qualification_type= $_POST['qualification_type'];
$sql= "INSERT INTO QUALIFICATION(QUALIFICATION,QUALIFICATION_TYPE) VALUES ('$qualification','$qualification_type')";
$run=mysqli_query($conn,$sql);
}
if($run)
{
	echo "<script type= 'text/javascript'> alert('Qualification Inserted Successfully'); document.location='addQualification.php'</script>";
} 
?>