<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'root';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,"Recruitment_process") or die (mysqli_error());
$fetch_data = "select * from applicant_detail";

$run_data = mysqli_query($conn,$fetch_data);
include ('header.php');  
?>

<button type="button" class="btn btn-danger"><a href="logout.php">Logout</a></button>
<div class="container" style="width:100%;">
<form action="filteredresult4.php" method="POST">
<center>NAME:<input  type="text" name="name" >LOCATION:<input  type="text" name="location">EXPERIENCE:<input  type="text" name="experience">INSTITUTION:<input  type="text" name="institution">
	      <input type="submit"  value="Filter" name="Filter"  class="btn btn-primary" style="width:13%;"></center>

<h1><center>FILTER</center></h1><BR><BR>

<table class="table">

   

<tr> <th>REG_ID</th>

<th>APPLICANT_NAME</th>
<th>CONTACT_NUMBER</th>
<th>EMAIL_ID</th>

<th>EXPERIENCE_IN_MONTH</th>
<th>EXPERIENCE_IN_YEAR</th>
<th>10_DETAIL</th>
<th>12TH DETAIL</th>
<th>GRADUATION_DETAIL</th>
<th>LOCATION</th>


</tr>

<?php 

while($data=mysqli_fetch_array($run_data))

{
?>

<tr>

<td>

<?php echo $reg_id=$data['REG_ID']; ?>

</td>

<td>

<?php echo $data['APPLICANT_NAME']; ?>

</td>

<td>

<?php echo $data['CONTACT_NUMBER']; ?>

</td>
<td>

<?php echo $data['EMAIL_ID']; ?>

</td>

<td>

<?php echo $data['EXPERIENCE_IN_MONTH']; ?>

</td>
<td>

<?php echo $data['EXPERIENCE_IN_YEAR']; ?>

</td>


<td>
<?php 
$fetch_data1 = "select * from applicant_qualification where REG_ID='".$data['REG_ID']."'";

$run_data1 = mysqli_query($conn,$fetch_data1);
while($data1=mysqli_fetch_array($run_data1))

{
?>

<?php echo $data1['INSTITUTION'];
  echo "<br>"; }?>
  
<td>
<?php 
$fetch_data1 = "select * from applicant_qualification where REG_ID='".$data['REG_ID']."'";

$run_data1 = mysqli_query($conn,$fetch_data1);
while($data1=mysqli_fetch_array($run_data1))

{
?>

<?php echo $data1['PER'];
  echo "<br>"; }?>

  </td>



<td>
<?php 
$fetch_data1 = "select * from applicant_qualification where REG_ID='".$data['REG_ID']."'";

$run_data1 = mysqli_query($conn,$fetch_data1);
while($data1=mysqli_fetch_array($run_data1))

{
?>

<?php echo $data1['YEAR_OF_PASSING'];
  echo "<br>"; }?>

</td>
<td>
<?php 
$fetch_data2 = "select * from location where LOCATION_ID='".$data['LOCATION_ID']."'";

$run_data2 = mysqli_query($conn,$fetch_data2);
while($data2=mysqli_fetch_array($run_data2))

{
?>

<?php echo $data2['LOCATION_NAME'];
  echo "<br>"; }?>

</td>


<?php } ?>



</tr>



</table>


</form>

</div>

<div class="footer">
        <p>COPYRIGHT © 2018 | AIMBEYOND</p>
      </div>

    




</body></html>