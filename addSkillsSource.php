<?php 
if(isset($_POST['submit']))
{
$skill= $_POST['skill'];

$sql= "INSERT INTO SKILL(SKILL_NAME,STATUS_ID) VALUES ('$skill','0')";
$run=mysqli_query($conn,$sql);
}

if($run)
{
	echo "<script type= 'text/javascript'> alert('Skill Inserted Successfully'); document.location='addSkills.php' </script>";
} 
?>