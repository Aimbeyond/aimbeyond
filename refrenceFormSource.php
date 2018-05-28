<?php 
if(isset($_POST['submit']))
{

$employerName=$_POST['employerName'];
$jobTitle=$_POST['jobTitle'];
$applicantName=$_POST['applicantName'];
$file_name = $_FILES['image']['name'];
$file_tmp =$_FILES['image']['tmp_name'];
move_uploaded_file($file_tmp,"resume/".$file_name);

$sql = "INSERT INTO REFRENCE_TABLE (EMPLOYER_ID, JOB_ID, APPLICANT_NAME, APPLICANT_RESUME)VALUES ('$employerName', '$jobTitle', '$applicantName', '$file_name')";
//echo $sql; die();
$run=mysqli_query($conn,$sql);
}

if ($run) 
{
echo "<script type= 'text/javascript'> alert('Record Inserted Successfully'); document.location='refrenceForm.php' </script>";

}   
?>