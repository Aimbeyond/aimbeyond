<?php 
if(isset($_POST['submit']))
{

$job_title=$_POST['job_title'];
$salary=$_POST['salary'];
//echo $salary;die();
$Skills=$_POST['Skills'];
$Skills_arr=implode(",",$Skills);
$experience=$_POST['experience'];
$location=$_POST['location'];
$keywords=$_POST['keywords'];
$roles_and_responsiblities=$_POST['roles_and_responsiblities'];

$sql = "INSERT INTO JOB_DETAIL (JOB_TITLE, SALARY, EXPERIENCE, KEYWORDS, ROLES_AND_RESPONSIBLITIES, STATUS_ID)VALUES ('$job_title', '$salary', '$experience', '$keywords', '$roles_and_responsiblities','0' )";
//echo $sql; die();
$run=mysqli_query($conn,$sql);
$JOB_ID=mysqli_insert_id($conn);

$insert_skill = "INSERT INTO JOB_SKILL (JOB_ID, SKILL_ID )VALUES ('$JOB_ID','$Skills_arr')";
//echo $insert_skill; die();
$run1=mysqli_query($conn,$insert_skill);
//echo $insert_10; 
$insert_location = "INSERT INTO JOB_LOCATION (JOB_ID, LOCATION_ID )VALUES ('$JOB_ID','$location')";
$run2=mysqli_query($conn,$insert_location);
}

if ($run) 
{
echo "<script type= 'text/javascript'> alert('Record Inserted Successfully'); document.location='viewJobs.php' </script>";

}   
?>