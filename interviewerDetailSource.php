<?php 
if(isset($_POST['submit']))
{

$employer_name=$_POST['employer_name'];
$Skills=$_POST['Skills'];
$Skills_arr=implode(",",$Skills);
$designation=$_POST['designation'];
$proficiency=$_POST['proficiency'];
$status_id=$_POST['status_id'];


$sql = "INSERT INTO INTERVIEWER (EMPLOYER_NAME, DESIGNATION, STATUS_ID)VALUES ('$employer_name', '$designation', $status_id)";
//echo $sql; die();
$run=mysqli_query($conn,$sql);
$EMPLOYER_ID=mysqli_insert_id($conn);

$insert_employer = "INSERT INTO INTERVIEWER_SKILL (EMPLOYER_ID, SKILL_ID, PROFICIENCY )VALUES ('$EMPLOYER_ID','$Skills_arr','$proficiency')";
//echo $insert_employer; die();
$run1=mysqli_query($conn,$insert_employer);

}

if ($run) 
{
echo "<script type= 'text/javascript'> alert('Record Inserted Successfully'); document.location='viewInterviewerDetail.php' </script>";

}   
?>