<?php 
if(isset($_POST['submit']))
{
$location= $_POST['location'];

$sql= "INSERT INTO LOCATION(LOCATION) VALUES ('$location')";
$run=mysqli_query($conn,$sql);
}
if($run)
{
	echo "<script type= 'text/javascript'> alert('Location Inserted Successfully'); </script>";
} 
?>

