<?php
include("header.php");
$schId=$_GET['schId'];
//echo $schId;die();
$sql = "SELECT * FROM INTERVIEW_SCHEDULE WHERE SCHEDULE_ID='$schId'";
//echo $sql;die();

$result = mysqli_query($conn, $sql);
?>

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

<!-- Header-->
<header id="header" class="header">

    <div class="header-menu">


        <div class="col-sm-6">
            <a id="menuToggle" class="menutoggle pull-left"> <img src="images/menu_bar.png" ></a>
            <p>Interview Schedule Detail</p>
          
        </div>
      

    </div>

</header><!-- /header -->
<!-- Header-->

       

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                  
                  <div class="col-lg-12">
                    <div class="card">
                      
                     
                        <div class="card-header top">
                        <strong>Interview Schedule</strong><button type="button" class="editProfile float-right" name="add" id="add">EDIT</button>
                        </div>
                       
                      <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <table class="table table-responsive table-detail">
                                <tbody>
                                <?php 
                                $row = mysqli_fetch_array($result) 
                                ?>
                                    <tr>
                                    <td><label class=" form-control-label">Applicant Name</label></td>
                                    <?php 
                                        $sqlDetail = "SELECT * FROM APPLICANT_DETAIL WHERE REG_ID='".$row['REG_ID']."'";

                                        $resultDetail = mysqli_query($conn, $sqlDetail);
                                        $rowDetail = mysqli_fetch_array($resultDetail)
                                        ?>
                                    <td><p><?php echo $rowDetail['APPLICANT_NAME']; ?></p></td>
                                    </tr>
                                    <tr>
                                    <td><label class=" form-control-label">Job Title</label></td>
                                    <?php 
                                    $sqlJob = "SELECT * FROM JOB_DETAIL WHERE JOB_ID='".$row['JOB_ID']."'";

                                    $resultJob = mysqli_query($conn, $sqlJob);
                                    $rowJob = mysqli_fetch_array($resultJob)
                                    ?>
                                    <td><p><?php echo $rowJob['JOB_TITLE']; ?></p></td>
                                    </tr>
                                    <tr>
                                    <td><label class=" form-control-label">Round Name</label></td>
                                    <?php 
                                        $sqlRoundDetail = "SELECT * FROM INTERVIEW_ROUND WHERE ROUND_ID='".$row['ROUND_ID']."'";

                                        $resultRoundDetail = mysqli_query($conn, $sqlRoundDetail);
                                        $rowRoundDetail = mysqli_fetch_array($resultRoundDetail)
                                        ?>
                                    <td><p><?php echo $rowRoundDetail['ROUND_NAME']; ?></p></td>
                                    </tr>
                                    <tr>
                                    <td><label class=" form-control-label">Interviewer Name</label></td>
                                    <?php 
                                        $sqlInterviewerDetail = "SELECT * FROM INTERVIEWER WHERE EMPLOYER_ID='".$row['EMPLOYER_ID']."'";

                                        $resultInterviewerDetail = mysqli_query($conn, $sqlInterviewerDetail);
                                        $rowInterviewerDetail = mysqli_fetch_array($resultInterviewerDetail)
                                        ?>
                                    <td><p><?php echo $rowInterviewerDetail['EMPLOYER_NAME']; ?></p></td>
                                    </tr>
                                    <tr>
                                    <td><label class=" form-control-label">Interview Date</label></td>
                                    <?php 
                                        $sqlInterviewerDetail = "SELECT * FROM INTERVIEW_SCHEDULE WHERE SCHEDULE_ID='".$row['SCHEDULE_ID']."'";

                                        $resultInterviewerDetail = mysqli_query($conn, $sqlInterviewerDetail);
                                        $rowInterviewerDetail = mysqli_fetch_array($resultInterviewerDetail)
                                        ?>
                                    <td><p><?php echo $rowInterviewerDetail['INTERVIEW_DATE']; ?></p></td>
                                    </tr>
                                </tbody>
                            </table>
                          
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
