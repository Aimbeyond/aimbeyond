<?php 
if(isset($_POST['submit']))
{
$location= $_POST['location'];

$sql= "INSERT INTO LOCATION(LOCATION,STATUS_ID) VALUES ('$location','0')";
$run=mysqli_query($conn,$sql);
}
if($run)
{
	echo "<script type= 'text/javascript'> alert('Location Inserted Successfully'); document.location='addLocation.php'</script>";
} 
?>

