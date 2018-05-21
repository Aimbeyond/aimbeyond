<?php 
if(isset($_POST['submit']))
{

$employer_name=$_POST['employer_name'];
$skills=$_POST['skills'];
$designation=$_POST['designation'];
$proficiency=$_POST['proficiency'];


$sql = "INSERT INTO INTERVIEWER (EMPLOYER_NAME, DESIGNATION)VALUES ('$employer_name', '$designation')";
//echo $sql; die();
$run=mysqli_query($conn,$sql);
$EMPLOYER_ID=mysqli_insert_id($conn);

$insert_employer = "INSERT INTO INTERVIEWER_SKILL (EMPLOYER_ID, SKILL_ID, PROFICIENCY )VALUES ('$EMPLOYER_ID','$skills','$proficiency')";
//echo $insert_skill; die();
$run1=mysqli_query($conn,$insert_employer);

}

if ($run) 
{
echo "<script type= 'text/javascript'> alert('Record Inserted Successfully'); document.location='viewInterviewer.php' </script>";

}   
?>