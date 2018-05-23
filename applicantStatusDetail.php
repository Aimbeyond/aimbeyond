<?php
include("header.php");
$regId=$_GET['regId'];
//echo $regId;die();
$sql = "SELECT * FROM APPLICANT_STATUS WHERE REG_ID='$regId'";
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
            <p>Applicant Status</p>
        </div>
        

    </div>

</header>


       

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                  
                  <div class="col-lg-12">
                    <div class="card">
                      
                     
                        <div class="card-header top">
                        <strong>Applicant Status</strong><button type="button" class="editProfile float-right" name="add" id="add">EDIT</button> 
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
                                    <td><label class=" form-control-label">Status</label></td>
                                    <?php 
                                    $sqlStatusDetail = "SELECT * FROM INTERVIEW_STATUS WHERE STATUS_ID='".$row['STATUS_ID']."'";

                                    $resultStatusDetail = mysqli_query($conn, $sqlStatusDetail);
                                    $rowStatusDetail = mysqli_fetch_array($resultStatusDetail)
                                    ?>
                                    <td><p><?php echo $rowStatusDetail['STATUS']; ?></p></td>
                                    </tr>
                                    <tr>
                                    <td><label class=" form-control-label">Round</label></td>
                                    <?php 
                                        $sqlRoundDetail = "SELECT * FROM INTERVIEW_ROUND WHERE ROUND_ID='".$row['ROUND_ID']."'";

                                        $resultRoundDetail = mysqli_query($conn, $sqlRoundDetail);
                                        $rowRoundDetail = mysqli_fetch_array($resultRoundDetail)
                                        ?>
                                    <td><p><?php echo $rowRoundDetail['ROUND_NAME']; ?></p></td>
                                    </tr>
                                    <tr>
                                    <td><label class=" form-control-label">Job Title</label></td>
                                     <?php 
                                    $sqlJobDetail = "SELECT * FROM JOB_DETAIL WHERE JOB_ID='".$row['JOB_ID']."'";

                                    $resultJobDetail = mysqli_query($conn, $sqlJobDetail);
                                    $rowJobDetail = mysqli_fetch_array($resultJobDetail)
                                    ?>
                                    <td><p><?php echo $rowJobDetail['JOB_TITLE']; ?></p></td>
                                    </tr>
                                    <tr>
                                    <td><label class=" form-control-label">Reason</label></td>
                                    <td><p><?php echo $row['REASON']; ?></p></td>
                                    </tr>
                                    <tr>
                                    <td><label class=" form-control-label">Status Date</label></td>
                                    <td><p><?php echo $row['STATUS_DATE']; ?></p></td>
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
