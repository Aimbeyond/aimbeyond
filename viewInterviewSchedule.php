<?php
include("header.php");

$sql = 'SELECT * FROM INTERVIEW_SCHEDULE';
$result = mysqli_query($conn, $sql);

?>

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

<!-- Header-->
<header id="header" class="header">

    <div class="header-menu">


        <div class="col-sm-12">
        <a id="menuToggle" class="menutoggle pull-left"> <img src="images/menu_bar.png" ></a>
            <p>View Interview Schedules</p>
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
                        <th class="th3">Job Title</th>
                        <th class="th4">Interview Round</th>
                        <th class="th5">Interviewer Name</th>
                        <th class="th6">Interview Date</th>
                        <th class="th7" >Action</th>
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
                                    <a href="interviewScheduleDetail.php?schId=<?php echo $data['SCHEDULE_ID'];?>" class="view-tag" ><img src="images/ico_view.png" alt="User Avatar"></a>
                          
                          
                                    <a href="#" class="edit-tag" ><img src="images/ico_edit.png" alt="User Avatar"></a>
                          
                        
                                    <a href="#" onclick="myFunction(<?php echo $data['SCHEDULE_ID']?>)"><img src="images/ico_delete.png" alt="User Avatar"></a>
                          </td>
                      </tr>
                      <?php $j++; }  ?>
                    
                   
                      
                    </tbody>
                    
        
                  </table>
                  <!-- pagination -->
                 
                    <div class="pag-float">
                  <div class="pagination">
  <a class="pre1" href="#">Previous</a>
  <a href="#">1</a>
  <a href="#">2</a>
  <a href="#">3</a>
  <a href="#">4</a>
  <a href="#">5</a>
  <a href="#">6</a>
  <a class="pre2" href="#">Next</a>
</div>
</div>

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

<script type="text/javascript">
        function myFunction(i) {
        if (confirm("Are you sure you want to delete data!!!!")) {

            window.location='deleteInterviewSchedule.php?id='+i;
                
            } else {
                window.location='viewInterviewSchedule.php';
            }
            
        }
        </script>