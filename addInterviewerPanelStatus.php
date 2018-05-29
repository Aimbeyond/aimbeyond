<?php
include("connection.php");
$id=$_GET['id'];
if (isset($_POST['SUBMIT']))
{
 
$applicant_id = $_POST['applicant_id'];
$jobTitle = $_POST['jobTitle'];
$roundName = $_POST['roundName'];
$status = $_POST['status'];
$statusDate = $_POST['statusDate'];
$reason = $_POST['reason'];

$insertAppStatus="INSERT INTO APPLICANT_STATUS (REG_ID, INTERVIEW_STATUS_ID, ROUND_ID, JOB_ID, REASON, STATUS_DATE)VALUES ('$applicant_id', '$status', '$roundName', '$jobTitle', '$reason', '$statusDate' )";
$query=mysqli_query($conn,$insertAppStatus);
//echo $insertAppStatus;die();
$query2=mysqli_query($conn,$insertInterviewer);
if ($query) {
  $message = "APPLICANT STATUS UPDATED SUCCESSFULLY";
  echo "<script type='text/javascript'>  alert('$message');document.location='interviewerPanel.php' </script>";
} else {
  $message2 = "APPLICANT STATUS IS ALREADY UPDATED";
  echo "<script type='text/javascript'>  alert('$message2');document.location='interviewerPanel.php' </script>";
}
}
include("header.php");
?>

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

<!-- Header-->
<header id="header" class="header">

    <div class="header-menu">


        <div class="col-sm-12">
        <a id="menuToggle" class="menutoggle pull-left"> <img src="images/menu_bar.png" ></a>
            <p>Add Applicant Status</p>
        </div>
        

    </div>

</header>


       

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                  
                  <div class="col-lg-12">
                    <div class="card">
                      
                     
                        <div class="card-header top">
                        <strong>Applicant Status</strong> 
                        </div>
                      <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                          
                          <div class="row form-group">
                          
                          <div class="col-lg-6 col-md-6 col-sm-12">
     
                            <label for="applicant_id" class=" form-control-label">Applicant Name</label>
                              <select name="applicant_id" id="applicant_id" class="form-control">
                              <?php 
                            $fetch_app1 = "select * from INTERVIEW_SCHEDULE where SCHEDULE_ID ='".$id."'";
                            $fetch_app1= mysqli_query($conn,$fetch_app1);
                            $row1= mysqli_fetch_array($fetch_app1);
                            $fetch_app2 = "select * from  APPLICANT_DETAIL where REG_ID='".$row1['REG_ID']."'";
                            $fetch_app2= mysqli_query($conn,$fetch_app2);
                            $row2= mysqli_fetch_array($fetch_app2);
?>
                                <option value="<?php echo $row1['REG_ID'];?>"><?php echo $row2['APPLICANT_NAME'];?></option>
                               
                              </select>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="jobTitle" class=" form-control-label">Job Title</label>
                              <select name="jobTitle" id="jobTitle" class="form-control" required>
                              <?php 
      $fetch_job2 = "select * from  JOB_DETAIL where JOB_ID='".$row1['JOB_ID']."'";
      $fetch_job2= mysqli_query($conn,$fetch_job2);
      $row3= mysqli_fetch_array($fetch_job2);
?>
                                <option value="<?php echo $row1['JOB_ID'] ?>"><?php echo $row3['JOB_TITLE'] ?></option>
                              
                              </select>
                            </div>
                       

                            </div>

                            <div class="row form-group">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="roundName" class=" form-control-label">Round</label>
                              <select name="roundName" id="roundName" class="form-control"required>
                              <?php  $fetch_round = "select * from  INTERVIEW_ROUND where ROUND_ID='".$row1['ROUND_ID']."'";
                                     $fetch_round= mysqli_query($conn,$fetch_round);
                                     $row3= mysqli_fetch_array($fetch_round);  ?>
                              <option value="<?php echo $row1['ROUND_ID'] ?>" selected><?php echo $row3['ROUND_NAME'] ?></option>
                              </select>
                            </div>
                            
                            <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="status" class=" form-control-label">Status</label>
                              <select name="status" id="status" class="form-control" required>
                                <option value="0" selected>Select Interview Status</option>
                                <?PHP 
                             $fetch_status = "SELECT * FROM INTERVIEW_STATUS";

                             $fetch_status = mysqli_query($conn, $fetch_status);
                           
                             while($data_status = mysqli_fetch_array($fetch_status))
                            {    
                              
                              ?>
                                      <option value="<?php echo $data_status['INTERVIEW_STATUS_ID'] ?>" ><?php echo $data_status['INTERVIEW_STATUS'] ?></option>
                            <?php }  ?>
                              
                              </select>
                            </div>

                       

                        </div>




                         <div class="row form-group">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                            
                            <label for="statusDate" class=" form-control-label">Status Date</label>
                            <input type="date" id="statusDate" name="statusDate" placeholder="" class="form-control" required>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="reason" class=" form-control-label">Reason</label>
                            <textarea id="reason" name="reason" class="form-control" required></textarea>
                        </div>
                            
                        
                        </div>
                        
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                         <button type="submit" onclick="window.history.go(-1); return false;"  class="cancelmaster">CANCEL</button>
                                </div>
                                
                                <div class="col-lg-6 col-md-6 col-sm-6">   
                                    <button type="submit" class="submitmaster" name="SUBMIT">SUBMIT </button>
                                </div>
                            </div>
                        </form>
                      </div>
                 
                      
                        
                     
                    </div>
                    

                 


            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>
