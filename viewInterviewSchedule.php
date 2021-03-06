<?php
include("header.php");

$sql = 'SELECT * FROM INTERVIEW_SCHEDULE';
$result = mysqli_query($conn, $sql);

$record_per_page = 5;

if(isset($_GET["page"]))
{
 $page = $_GET["page"];
 
}
else
{
 $page = 1;
 
}
if(isset($_GET["page"]) && $page>1){
    $j=5*($page-1)+1;
}
else{
    $j=1;
}

$start_from = ($page-1)*$record_per_page;

$query = "SELECT * FROM INTERVIEW_SCHEDULE order by SCHEDULE_ID DESC LIMIT $start_from, $record_per_page";

$result = mysqli_query($conn, $query);



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
                          
                          
                                    <a href="updateInterviewSchedule.php?id=<?php echo $data['SCHEDULE_ID']?>" class="edit-tag" ><img src="images/ico_edit.png" alt="User Avatar"></a>
                          
                        
                                    <a href="#" onclick="myFunction(<?php echo $data['SCHEDULE_ID']?>)"><img src="images/ico_delete.png" alt="User Avatar"></a>
                          </td>
                      </tr>
                      <?php $j++; }  ?>
                    
                   
                      
                    </tbody>
                    
        
                  </table>
                  <!-- pagination -->
                 

       
       <div class="pag-float">
                  
                  <?php
                      $page_query = "SELECT * FROM INTERVIEW_SCHEDULE ORDER BY SCHEDULE_ID ASC";
                      $page_result = mysqli_query($conn, $page_query);
                      $total_records = mysqli_num_rows($page_result);
                      $total_pages = ceil($total_records/$record_per_page);
                      $start_loop = $page;
                      $difference = $total_pages - $page;
                      if($difference <= 5)
                      {
                      $start_loop = $total_pages - 5;
                      }
                     $end_loop = $start_loop + 4;
                      $end_loop=$total_pages;
                      ?>
                      <ul class="pagination">
                      <?php
                      if($page > 1)
                      {?>
                     
                      <li><?php echo "<a href='viewInterviewSchedule.php?page=1'>First</a>"?></li>
                       
                       <li><?php  echo "<a href='viewInterviewSchedule.php?page=".($page - 1)."'><<</a>";?></li>
                           <?php
                      }
                      for($i=1; $i<=$total_pages; $i++)
                      {      ?>
                       <li><?php echo "<a href='viewInterviewSchedule.php?page=".$i."'>".$i."</a>"; ?></li>
                       <?php 
                      }
                      if($page <= $end_loop)
                      {?>
                        <li> <?php echo "<a href='viewInterviewSchedule.php?page=".($page + 1)."'>>></a>";?> </li>
                        <li>  <?php echo "<a href='viewInterviewSchedule.php?page=".$total_pages."'>Last</a>";?> </li></ul>
                        <?php
                      }
                      ?>
                        


                        </div>
                    </div>
                </div>
      


                </div>
            </div>

 
 </div><!-- /#right-panel -->

</div><!-- Right Panel -->


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