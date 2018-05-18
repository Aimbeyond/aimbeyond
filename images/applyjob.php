<!DOCTYPE html>
<html>
<?php
	include('header.php');
     $dbhost = 'localhost';
     $dbuser = 'root';
     $dbpass = 'root';
     $conn = mysqli_connect($dbhost, $dbuser, $dbpass,"Recruitment_process") or die (mysqli_error());
	 //$conn = mysql_select_db("recruitment_process");
   //echo "hi"; die();
   error_reporting(E_ALL);
   ini_set('display_errors', 1);
     $REG_ID=$_GET['id'];
     $fetch_data = "select * from applicant_detail where REG_ID=$REG_ID";
	    //echo $sql; die();
     $run_data = mysqli_query($conn,$fetch_data);
     
     
if (isset($_POST['apply_job']))

{



$reg_id=$_POST['1'];
$applicant_name=$_POST['2'];
$job_id=$_POST['3'];
$round_id=$_POST['4'];
$interview_date=$_POST['5'];


$insert = "INSERT INTO interview_schedule (JOB_ID,ROUND_ID,REG_ID,INTERVIEW_DATE) VALUES ('$job_id', '$round_id','$reg_id','$interview_date')";
//echo $insert; die();
$data = mysqli_query($conn,$insert);



header ("Location:bootstrapphpselect.php");

}
     ?> 

<button type="button" class="btn btn-danger"><a href="logout.php">Logout</a></button>
<div class="container">
<h1><center><bold>SCHEDULE INTERVIEW</bold></center></h1><br><br>
<form method="POST" action="" >
  <?php
  $row=mysqli_fetch_array($run_data);
?>


  <div class="form-group">
      <label>REG ID</label>
      <input type="number" name="1" class="form-control"  VALUE="<?php echo $row['REG_ID']?>">
    </div>
    <div class="form-group">
      <label>APPLICANT NAME</label>
      <input type="text" name="2" class="form-control"  VALUE="<?php echo $row['APPLICANT_NAME']?>">
    </div>


    <div class="form-group">
    <label>JOB PROFILE</label>
  
    <select class="dropdown" name="3">
    <option>select job profile</option>
    <?php 
    $fetch_job = "select * from job_detail";
    $fetch_job = mysqli_query($conn,$fetch_job);
    $data_job = mysqli_fetch_array($fetch_job);
    while($data_job = mysqli_fetch_array($fetch_job))
    {
    ?>
    
  
   
    
      <option value="<?php echo $data_job['JOB_ID'] ?>" ><?php echo $data_job['JOB_TITLE'] ?></option>
      
      <?php } ?>
      
      
      
    </select>
   
  </div>
  
 
  <div class="form-group">
    <label>INTERVIEW ROUND</label>
  
    <select class="dropdown" name="4">
    <option>Select Interview Round</option>
    <?php 
    $fetch_round = "select * from interview_round";
    $fetch_round = mysqli_query($conn,$fetch_round);
    $data_round = mysqli_fetch_array($fetch_round);
    while($data_round = mysqli_fetch_array($fetch_round))
    {
    ?>
   
  
   
    
      <option value="<?php echo $data_round['ROUND_ID'] ?>" ><?php echo $data_round['ROUND_NAME'] ?></option>
      
      <?php } ?>
      
   
      
      
    </select>
   
   
  </div>

  <div class="form-group">

      <label>INTERVIEW DATE AND TIME</label>
      <input type="datetime" name="5" class="form-control">
    </div>  
  


  <input type="submit" name="apply_job" value="Apply job" class="btn btn-primary">
  <button type="button" class="btn btn-info"><a style="color:white;" href="bootstrapphpselect.php">Cancel</a></button>
</form>
</div>
<div class="footer">
        <p>COPYRIGHT © 2018 | AIMBEYOND</p>
      </div>

    </body>
</html>