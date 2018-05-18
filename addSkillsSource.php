<?php 
if(isset($_POST['submit']))
{
$skill= $_POST['skill'];

$sql= "INSERT INTO SKILL(SKILL_NAME) VALUES ('$skill')";
$run=mysqli_query($conn,$sql);
}

if($run)
{
	echo "<script type= 'text/javascript'> alert('Skill Inserted Successfully'); document.location='addSkills.php' </script>";
} 
?>