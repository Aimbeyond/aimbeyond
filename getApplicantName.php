<?php
include('connection.php');
if($_POST['id'])
{
	$id=$_POST['id'];
    
    $jobsqsl="select a.*,b.*,c.* from APPLICANT_DETAIL as a join JOB_APPLY as b  on a.REG_ID=b.REG_ID join APPLICANT_STATUS as c on a.REG_ID=c.REG_ID  where b.JOB_ID=$id  &&c.STATUS_ID !=2";
    //echo $jobsqsl; die();
    $result=mysqli_query($conn,$jobsqsl);
      
	?>
	<option selected="selected">Select Name :</option>
	<?php
	while($row=mysqli_fetch_array($result))
	{
		?>
        	<option value="<?php echo $row['REG_ID']; ?>"><?php echo $row['APPLICANT_NAME']; ?></option>
        <?php
	}
}
?>