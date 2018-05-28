<?php
include("header.php");
$_SESSION['emailId'] == $emailId;
$emp="select * from INTERVIEWER where EMAIL_ID='".$_SESSION['emailId']."'";
//echo $emp; die();
$emp = mysqli_query($conn,$emp);
$rowEmp=mysqli_fetch_array($emp);
$EMP_ID=$rowEmp['EMPLOYER_ID'];
$sql = "select I_S.SCHEDULE_ID,I_S.JOB_ID,I_S.REG_ID,I_S.ROUND_ID,I_S.INTERVIEW_DATE,S.EMPLOYER_ID from INTERVIEW_SCHEDULE I_S JOIN INTERVIEWER_SCHEDULE S ON I_S.SCHEDULE_ID = S.SCHEDULE_ID && EMPLOYER_ID=$EMP_ID";
//echo $sql;die();
$result = mysqli_query($conn, $sql);

?>

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

<!-- Header-->
<header id="header" class="header">

    <div class="header-menu">


        <div class="col-sm-12">
        <a id="menuToggle" class="menutoggle pull-left"> <img src="images/menu_bar.png" ></a>
            <p>Your Scheduled Interviews</p>
        </div>
        

    </div>

</header><!-- /header -->
<!-- Header-->
<!-- table -->
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
                        <th class="th2">Interview Round</th>
                        <th class="th2">Interviewer Name</th>
                        <th class="th2">Interview Date</th>
                        <th class="th1" >Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                      $j=1;
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
                          <td>
                                    
                          
                          
                                    <a href="addInterviewerPanelStatus.php?id=<?php echo $data['SCHEDULE_ID']?>" class="edit-tag" ><img src="images/ico_edit.png" alt="User Avatar"></a>
                          
                        
                                    
                          </td>
                      </tr>
                      <?php $j++; }  ?>
                    
                   
                      
                    </tbody>
                    
        
                  </table>
                  <!-- pagination -->
                 
 

                        </div>
                    </div>
                </div>
      


                </div>
            </div>

 
 </div><!-- /#right-panel -->

<!-- Right Panel -->


<script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>



</body>
</html>
