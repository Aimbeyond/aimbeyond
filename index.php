<?php
session_start();
include("header.php");


$sqlJob = 'SELECT * FROM JOB_DETAIL';
$resultJob = mysqli_query($conn, $sqlJob);
$countJob= mysqli_num_rows($resultJob);

$sqlTotalCandidate = 'SELECT * FROM APPLICANT_DETAIL';
$resultTotalCandidate = mysqli_query($conn, $sqlTotalCandidate);
$countTotalCandidate= mysqli_num_rows($resultTotalCandidate);


$sqlTotalInterviewer = 'SELECT * FROM INTERVIEWER';
$resultTotalInterviewer = mysqli_query($conn, $sqlTotalInterviewer);
$countTotalInterviewer= mysqli_num_rows($resultTotalInterviewer);


?>

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

<!-- Header-->
<header id="header" class="header">

    <div class="header-menu">


        <div class="col-sm-12">
        <a id="menuToggle" class="menutoggle pull-left"> <img src="images/menu_bar.png" ></a>
            <p>Dashboard</p>
        </div>
        

    </div>

</header>


       

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                  
                  <div class="col-lg-12">
                    <div class="card">
                      
                     
                    <div class="content mt-3">

            

 <a class="ancon" href="viewProfiles.php">
<div class="col-sm-6 col-lg-4">
     <div class="card text-white bg-flat-color-1">
         <div class="card-body pb-0">
             <div class="dropdown float-right">
                 
             </div>
             <h4 class="mb-0">
            <span class="count badge badge-success pull-right"><?php echo $countTotalCandidate;?></span>
             </h4>
             <p class="text-light">Total Number Of Candidates</p>

             <div class="chart-wrapper px-0" style="height:70px;" height="70">
                 
             </div>

         </div>

     </div>
 </div></a>
 <!--/.col-->
 <a class="ancon" href="viewJobs.php">
 <div class="col-sm-6 col-lg-4">
     <div class="card text-white bg-flat-color-2">
         <div class="card-body pb-0">
             <div class="dropdown float-right">
                 
             </div>
             <h4 class="mb-0">
             <span class="count badge badge-success pull-right"><?php echo $countJob;?></span>
             </h4>
             <p class="text-light">Total Number Of Jobs</p>

             <div class="chart-wrapper px-0" style="height:70px;" height="70">
                 <canvas id="widgetChart2"></canvas>
             </div>

         </div>
     </div>
 </div></a>
 <!--/.col-->
 <a class="ancon" href="viewInterviewerDetail.php">
 <div class="col-sm-6 col-lg-4">
     <div class="card text-white bg-flat-color-3">
         <div class="card-body pb-0">
             <div class="dropdown float-right">
                 
               
             </div>
             <h4 class="mb-0">
             <span class="count badge badge-success pull-right"><?php echo $countTotalInterviewer;?></span>
             </h4>
             <p class="text-light">Total Number Of Interviewer</p>

         </div>

             <div class="chart-wrapper px-0" style="height:70px;" height="70">
                 <canvas id="widgetChart3"></canvas>
             </div>
     </div>
 </div></a>
 <!--/.col-->

 <!--/.col-->





 <div class="col-lg-3 col-md-6">
     <div class="social-box facebook">
         <i class="fa fa-facebook"></i>
        
     </div>
     <!--/social-box-->
 </div><!--/.col-->


 <div class="col-lg-3 col-md-6">
     <div class="social-box twitter">
         <i class="fa fa-twitter"></i>
         
     </div>
     <!--/social-box-->
 </div><!--/.col-->


 <div class="col-lg-3 col-md-6">
     <div class="social-box linkedin">
         <i class="fa fa-linkedin"></i>
         
     </div>
     <!--/social-box-->
 </div><!--/.col-->


 <div class="col-lg-3 col-md-6">
     <div class="social-box google-plus">
         <i class="fa fa-google-plus"></i>
        
     </div>
     <!--/social-box-->
 </div><!--/.col-->





   <div class="col-xl-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-4">
                                <h4 class="card-title mb-0">JOBS</h4>
                              
                            </div>
                            <!--/.col-->
                        </div><!--/.row-->
                      

                    </div>
                    <?php 
                      
                                while($data=mysqli_fetch_array($resultJob))
                                {
                                  
                                ?>
                    <div class="card-footer">
                        
                                <div class="col-lg-4">
                                <div class="text-muted"><?php echo $data['JOB_TITLE']; ?></div>
                                </div>
                                <?php 
                                    $sql = "SELECT * FROM JOB_APPLY WHERE JOB_ID='".$data['JOB_ID']."'";
                                    $result_sql = mysqli_query($conn, $sql);
                                    $num_sql = mysqli_num_rows($result_sql);
                                    //echo $num_sql;die();
                             ?>
                             <div class="col-lg-4">
                            <a class="ancon" href="appliedCandidates.php?jobId=<?php echo $data['JOB_ID'];?>"><span class="badge badge-warning pull-right r-activity applied">Applied Candidate -<?php echo $num_sql; ?></span></a>
                             </div>
                                
                                
                    </div>
                    <?php  }  ?>
                </div>
            </div>









<!-- Right Panel -->

                      </div>
                    </div>
                   
                 


            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->

<script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>


<script src="assets/js/lib/chart-js/Chart.bundle.js"></script>
<script src="assets/js/dashboard.js"></script>
<script src="assets/js/widgets.js"></script>
<script src="assets/js/lib/vector-map/jquery.vmap.js"></script>
<script src="assets/js/lib/vector-map/jquery.vmap.min.js"></script>
<script src="assets/js/lib/vector-map/jquery.vmap.sampledata.js"></script>
<script src="assets/js/lib/vector-map/country/jquery.vmap.world.js"></script>
<script>
( function ( $ ) {
 "use strict";

 jQuery( '#vmap' ).vectorMap( {
     map: 'world_en',
     backgroundColor: null,
     color: '#ffffff',
     hoverOpacity: 0.7,
     selectedColor: '#1de9b6',
     enableZoom: true,
     showTooltip: true,
     values: sample_data,
     scaleColors: [ '#1de9b6', '#03a9f5' ],
     normalizeFunction: 'polynomial'
 } );
} )( jQuery );
</script>

</body>
</html>

