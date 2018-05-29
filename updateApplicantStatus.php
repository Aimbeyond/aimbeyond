<?php
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
            <p>Update Applicant Status</p>
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
                        <form action="updateApplicantStatusSource.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                          
                          <div class="row form-group">
                          
                          <div class="col-lg-6 col-md-6 col-sm-12">
     
                            <label for="applicant_id" class=" form-control-label">Applicant Name</label>
                              <select name="applicant_id" id="applicant_id" class="form-control">
                              <?php 
                            $fetch_app1 = "select * from APPLICANT_STATUS where REG_ID ='".$id."'";
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
                            <label for="roundName" class=" form-control-label">Round</label>
                              <select name="roundName" id="roundName" class="form-control"required>
                              <option value="0" selected>Select Interview Round</option>
                            <?PHP 
                             $fetch_round = "SELECT * FROM INTERVIEW_ROUND";

                             $fetch_round = mysqli_query($conn, $fetch_round);
                           
                             while($data_round = mysqli_fetch_array($fetch_round))
                            {    
                              
                              ?>
                                    <option value="<?php echo $data_round['ROUND_ID'] ?>" ><?php echo $data_round['ROUND_NAME'] ?></option>
                            <?php }  ?>
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
                        <th class="th4">Round Name</th>
                        <th class="th5">Status</th>
                        <th class="th6">Status Date</th>
                        
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                                $i=1;
                                $fetchAppReg = "SELECT * FROM APPLICANT_STATUS where REG_ID='".$id."'";
                                $result = mysqli_query($conn, $fetchAppReg);
                                while($data=mysqli_fetch_array($result))
                                {
                                  
                                ?>
                      <tr>
                     
                          <td><?php echo  $i; ?></td>
                          <?php 
                          $sqlDetail = "SELECT * FROM APPLICANT_DETAIL WHERE REG_ID='".$data['REG_ID']."'";

                          $resultDetail = mysqli_query($conn, $sqlDetail);
                          $rowDetail = mysqli_fetch_array($resultDetail)
                          ?>

                          <td><?php echo $rowDetail['APPLICANT_NAME']; ?></td>
                          <?php 
                          $sqlJobDetail = "SELECT * FROM JOB_DETAIL WHERE JOB_ID='".$data['JOB_ID']."'";

                          $resultJobDetail = mysqli_query($conn, $sqlJobDetail);
                          $rowJobDetail = mysqli_fetch_array($resultJobDetail)
                          ?>

                          <td><?php echo $rowJobDetail['JOB_TITLE']; ?></td>
                          <?php 
                          $sqlRoundDetail = "SELECT * FROM INTERVIEW_ROUND WHERE ROUND_ID='".$data['ROUND_ID']."'";

                          $resultRoundDetail = mysqli_query($conn, $sqlRoundDetail);
                          $rowRoundDetail = mysqli_fetch_array($resultRoundDetail)
                          ?>
                          <td><?php echo $rowRoundDetail['ROUND_NAME']; ?></td>
                          <?php 
                          $sqlStatusDetail = "SELECT * FROM INTERVIEW_STATUS WHERE INTERVIEW_STATUS_ID='".$data['INTERVIEW_STATUS_ID']."'";

                          $resultStatusDetail = mysqli_query($conn, $sqlStatusDetail);
                          $rowStatusDetail = mysqli_fetch_array($resultStatusDetail)
                          ?>
                          <td><?php echo $rowStatusDetail['INTERVIEW_STATUS']; ?></td>
                          <td><?php echo $data['STATUS_DATE']; ?></td>
                          
                      </tr>
                      
                   
                      <?php $i++; }  ?>
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
