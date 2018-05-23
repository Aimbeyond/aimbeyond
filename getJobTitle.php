<?php
include('connection.php');
if($_POST['id'])
{
	$id=$_POST['id'];
    
    $jobsqsl="select a.*,b.* from JOB_DETAIL as a join JOB_APPLY as b on a.JOB_ID=b.JOB_ID where b.REG_ID=$id";
    //echo $jobsqsl; die();
    $result=mysqli_query($conn,$jobsqsl);
      
	?><?php
	while($row=mysqli_fetch_array($result))
	{
		?>
        	<option value="<?php echo $row['JOB_ID']; ?>"><?php echo $row['JOB_TITLE']; ?></option>
        <?php
	}
}
?>