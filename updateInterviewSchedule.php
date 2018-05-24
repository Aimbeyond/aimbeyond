<?php
//include("updateInterviewScheduleSource.php");
include("header.php");
$id=$_GET['id'];
?>

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

<!-- Header-->
<header id="header" class="header">

    <div class="header-menu">


        <div class="col-sm-12">
        <a id="menuToggle" class="menutoggle pull-left"> <img src="images/menu_bar.png" ></a>
            <p>Update Interview Schedule</p>
        </div>
        

    </div>

</header>


       

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                  
                  <div class="col-lg-12">
                    <div class="card">
                      
                     
                        <div class="card-header top">
                        <strong>Interview Details</strong> 
                        </div>
                      <div class="card-body card-block">
                        <form action="updateInterviewScheduleSource.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                          
                          <div class="row form-group">
                          
                          <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="apllicantName" class=" form-control-label">Applicant Name</label>
                            <select name="applicant_id" id="applicant_id" class="form-control">
                            <?php 
                            $fetch_app1 = "select * from INTERVIEW_SCHEDULE where SCHEDULE_ID ='".$id."'";
                            $fetch_app1= mysqli_query($conn,$fetch_app1);
                            $row1= mysqli_fetch_array($fetch_app1);
                            $fetch_app2 = "select * from  APPLICANT_DETAIL where REG_ID='".$row1['REG_ID']."'";
                            $fetch_app2= mysqli_query($conn,$fetch_app2);
                            $row2= mysqli_fetch_array($fetch_app2);
?>
      <option value="<?php echo $row1['REG_ID'] ?>"selected><?php echo $row2['APPLICANT_NAME'] ?></option>
    </select>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="jobTitle" class=" form-control-label">Job Title</label>
                            <select name="job_id" id="job_id" class="form-control">
      <?php 
      $fetch_job2 = "select * from  JOB_DETAIL where JOB_ID='".$row1['JOB_ID']."'";
      $fetch_job2= mysqli_query($conn,$fetch_job2);
      $row3= mysqli_fetch_array($fetch_job2);
?>
      <option value="<?php echo $row1['JOB_ID'] ?>"selected><?php echo $row3['JOB_TITLE'] ?></option>
    </select>
                            </div>

                            </div>

                            <div class="row form-group">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="roundName" class=" form-control-label">Round Name</label>
                            <select name="round_id" id="round_id" class="form-control" required>
      <?php 
      $fetch_round = "select * from  INTERVIEW_ROUND where ROUND_ID='".$row1['ROUND_ID']."'";
      $fetch_round= mysqli_query($conn,$fetch_round);
      $row4= mysqli_fetch_array($fetch_round);
      ?>
      <option value="<?php echo $row1['ROUND_ID'] ?>"selected><?php echo $row4['ROUND_NAME'] ?></option>
      <?PHP 
      $fetch_round2 = "select * from  INTERVIEW_ROUND";
      $fetch_round2= mysqli_query($conn,$fetch_round2);
      while($row5 = mysqli_fetch_array($fetch_round2))
{    ?>
      <option value="<?php echo $row5['ROUND_ID'] ?>"><?php echo $row5['ROUND_NAME'] ?></option>
<?php } ?>
    </select>
                            </div>
                            
                        

                          <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="interviewerName" class=" form-control-label">Interviewer Name</label>
                              <select name="interviewer_id" id="interviewer_id" class="form-control" required>
                              <?php 
                              $fetchInt = "select * from  INTERVIEWER_SCHEDULE where SCHEDULE_ID='".$row1['SCHEDULE_ID']."'";
                              $fetchInt= mysqli_query($conn,$fetchInt);
                              $row6= mysqli_fetch_array($fetchInt); 
                              $fetchIntName = "select * from  INTERVIEWER where EMPLOYER_ID='".$row6['EMPLOYER_ID']."'";
                              $fetchIntName= mysqli_query($conn,$fetchIntName);
                              $row7= mysqli_fetch_array($fetchIntName);
                          ?>
                              <option value="<?php echo $row6['EMPLOYER_ID'] ?>"selected><?php echo $row7['EMPLOYER_NAME'] ?></option>
      <?PHP 
      $fetchInterviewer = "select * from  INTERVIEWER";
      $fetchInterviewer= mysqli_query($conn,$fetchInterviewer);
      while($row8 = mysqli_fetch_array($fetchInterviewer))
{    ?>
      <option value="<?php echo $row8['EMPLOYER_ID'] ?>"><?php echo $row8['EMPLOYER_NAME'] ?></option>
<?php } ?>
    </select>
                            </div>

                        </div>




                         <div class="row form-group">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                            
                            <label for="interviewDate" class=" form-control-label">Interviewer Date</label>
                            <input type="datetime-local" id="interviewDate" value="<?php $date = date("Y-m-d\TH:i:s", strtotime($row1['INTERVIEW_DATE'] )); echo $date ?>" name="interviewDate" placeholder="" class="form-control">
                         
                            </div>
                            
                        
                        </div>
                       
                    
                        
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                         <button type="submit" onclick="window.history.go(-1); return false;" class="cancelmaster">CANCEL</button>
                                </div>
                                
                                <div class="col-lg-6 col-md-6 col-sm-6">   
                                    <button type="submit" name="UPDATE" class="submitmaster">UPDATE</button>
                                </div>
                            </div>
                        </form>
                      </div>
                 
                      
                        
                     
                    </div>
                   
                    <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered table-responsive">
                    <thead>
                      <tr class="tbhead">
                        <th class="th1">S No.</th>
                        <th class="th2">Name</th>
                        <th class="th2">Job Title</th>
                        <th class="th4">Round Name</th>
                        <th class="th5">Interviewer Name</th>
                        <th class="th6">Interview Date</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                      $j=1;
                      $result= "select *from INTERVIEW_SCHEDULE where REG_ID='".$row1['REG_ID']."'";
                      $result = mysqli_query($conn, $result);
                      
                     while($data=mysqli_fetch_array($result))
                     {  
                     ?>
                      <tr>
                         <td><?php echo $j; ?></td>
                         <?php 
                          $sqlApplicant = "SELECT * FROM APPLICANT_DETAIL WHERE REG_ID='".$data['REG_ID']."'";
                         // echo $sqlApplicant;die();
                          $resultApplicant = mysqli_query($conn, $sqlApplicant);
                          $dataApplicant=mysqli_fetch_array($resultApplicant);
                          ?>
                          <td><?php echo $dataApplicant['APPLICANT_NAME'];?></td>
                          <?php 
                          $sqlJob = "SELECT * FROM JOB_DETAIL WHERE JOB_ID='".$data['JOB_ID']."'";
                         // echo $sqlApplicant;die();
                          $resultJob = mysqli_query($conn, $sqlJob);
                          $dataJob=mysqli_fetch_array($resultJob);
                          ?>
                          <td><?php echo $dataJob['JOB_TITLE'];?></td>
                          <?php 
                          $sqlRound = "SELECT * FROM INTERVIEW_ROUND WHERE ROUND_ID='".$data['ROUND_ID']."'";
                         // echo $sqlApplicant;die();
                          $resultRound = mysqli_query($conn, $sqlRound);
                          $dataRound=mysqli_fetch_array($resultRound);
                          ?>
                          <td><?php echo $dataRound['ROUND_NAME'];?></td>
                          <?php 

                            $sqlEmployer = "SELECT * FROM INTERVIEWER_SCHEDULE WHERE SCHEDULE_ID='".$data['SCHEDULE_ID']."'";
                            // echo $sqlEmployer;die();
                            $resultEmployer = mysqli_query($conn, $sqlEmployer);
                            $dataEmployer=mysqli_fetch_array($resultEmployer);


                          $sqlEmp = "SELECT * FROM INTERVIEWER WHERE EMPLOYER_ID='".$dataEmployer['EMPLOYER_ID']."'";
                         // echo $sqlApplicant;die();
                          $resultEmp = mysqli_query($conn, $sqlEmp);
                          $dataEmp=mysqli_fetch_array($resultEmp);
                          ?>

                          <td><?php echo $dataEmp['EMPLOYER_NAME'];?></td>
                          <td><?php echo $data['INTERVIEW_DATE'];?></td>
                          
                      </tr>
                      <?php 
                        $j++; }
                        ?>
                    
                   
                    </tbody>
                    
        
                  </table>
                  <!-- pagination -->
       

                        </div>
                    </div>
                </div>
      


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
