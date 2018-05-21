<?php 
include("connection.php");
$id=$_GET['id'];
 //echo $id;

 $sql = "SELECT * FROM JOB_DETAIL WHERE JOB_ID='".$id."'";
 //echo $sql;
 $retval = mysqli_query($conn, $sql);
 $data=mysqli_fetch_array($retval);

 if(! $retval ) {
    die('Could not get data: ' . mysqli_error());
 }
 if (isset($_POST['SUBMIT']))
{
 
$id = $_POST['id'];
//echo $id;
$JOB_TITLE = $_POST['job_title'];
//echo $JOB_TITLE;
$SALARY = $_POST['salary'];
$EXPERIENCE = $_POST['experience'];
$ROLES_AND_RESPONSIBLITIES = $_POST['roles_and_responsiblities'];
$KEYWORDS = $_POST['keywords'];
$location=$_POST['location'];
$Skills=$_POST['Skills'];
$Skills_arr=implode(",",$Skills);
//echo $Skills;
$query1="UPDATE JOB_DETAIL SET JOB_TITLE='$JOB_TITLE', SALARY='$SALARY', EXPERIENCE='$EXPERIENCE',ROLES_AND_RESPONSIBLITIES='$ROLES_AND_RESPONSIBLITIES', KEYWORDS='$KEYWORDS' WHERE JOB_ID='".$_GET['id']."'";
$query2="UPDATE JOB_LOCATION SET LOCATION_ID='$location' WHERE JOB_ID='".$_GET['id']."'";
$query3="UPDATE JOB_SKILL SET SKILL_ID='$Skills_arr' WHERE JOB_ID='".$_GET['id']."'";
//echo $query1;
//echo $query2;
//echo $query3;die();
$run1= mysqli_query($conn, $query1);
$run2= mysqli_query($conn, $query2);
$run3= mysqli_query($conn, $query3);
if ($run1) {
  $message = "JOB UPDATED SUCCESSFULLY";
  echo "<script type='text/javascript'>  alert('$message');document.location='viewJobs.php' </script>";
} else {
    echo "Error: " . $update_ad . "<br>" . $conn->error;
}
}
?>