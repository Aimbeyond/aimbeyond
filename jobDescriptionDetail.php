<?php
include("header.php");
$jobId=$_GET['jobId'];
$sql = "SELECT * FROM JOB_DETAIL  WHERE JOB_ID='$jobId'";
$result = mysqli_query($conn, $sql);
?>

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

<!-- Header-->
<header id="header" class="header">

    <div class="header-menu">


        <div class="col-sm-6">
            <a id="menuToggle" class="menutoggle pull-left"> <img src="images/menu_bar.png" ></a>
            <p>Job Description</p>
          
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
                        <strong>Job Details</strong>  <button type="button" class="editProfile float-right" name="add" id="add">EDIT</button>
                        </div>
                       
                      <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                            <table class="table table-responsive table-detail">
                                <tbody>
                                <?php 
                                $row = mysqli_fetch_array($result) 
                                ?>
                                    <tr>
                                    <td><label class=" form-control-label">Job Title</label></td>
                                    <td><p><?php echo $row['JOB_TITLE']; ?></p></td>
                                    </tr>
                                    <tr>
                                    <td><label class=" form-control-label">Salary</label></td>
                                    <td><p><?php echo $row['SALARY']; ?></p></td>
                                    </tr>
                                    <tr>
                                    <td><label class=" form-control-label">Skills</label></td>
                                    <?php 
                                    $sqlJobDetail = "SELECT * FROM JOB_SKILL WHERE JOB_ID='".$row['JOB_ID']."'";

                                    //echo $sqlJobDetail;die();   
                                    $resultJobDetail = mysqli_query($conn, $sqlJobDetail);
                                    
                       
                                    while($data=mysqli_fetch_array($resultJobDetail))
                                    {
                                    
                                    
                                    $skill= explode(",", $data['SKILL_ID']);
                                    $count=count($skill);  
                                                    //echo $count;die();                             
                                                    for($i=0;$i<$count; $i++){
                                                    $fetch_dataS = "SELECT * FROM SKILL WHERE SKILL_ID='".$skill[$i]."'";
                                                    //echo $fetch_dataS;die();
                                                    $run_dataS = mysqli_query($conn, $fetch_dataS);
                                                    $rowS = mysqli_fetch_array($run_dataS)
                                                           




                                    ?>
                                    <td><p><?php echo $rowS['SKILL_NAME']; 
                                    $x=$count-1;
                                    if($x==$i){echo "";}
                                    else{
                                       echo ",";
                                    }
                                    }}?></p></td>
                                    </tr>
                                    <tr>
                                    <td><label class=" form-control-label">Experience</label></td>
                                    <td><p><?php echo $row['EXPERIENCE']; ?></p></td>
                                    </tr>
                                    <tr>
                                    <td><label class=" form-control-label">Location</label></td>
                                    <?php

                                    $sqlJobLocation = "SELECT * FROM JOB_LOCATION  WHERE JOB_ID='$jobId'";
                                    //echo $sqlJobLocation;die();
                                    $resultJobLocation = mysqli_query($conn, $sqlJobLocation);
                                    $rowJobLocation= mysqli_fetch_array($resultJobLocation);
                                    //echo $rowJobLocation['JOB_ID'];die();
                                    $sqlLocation = "SELECT * FROM LOCATION  WHERE LOCATION_ID='".$rowJobLocation['LOCATION_ID']."'";
                                    //echo $sqlLocation;die();
                                    $resultLocation = mysqli_query($conn, $sqlLocation);
                                    $rowLocation= mysqli_fetch_array($resultLocation);
                                    ?>
                                    <td><p><?php echo $rowLocation['LOCATION']; ?></p></td>
                                    </tr>
                                    <tr>
                                    <td><label class=" form-control-label">Keywords</label></td>
                                    <td><p><?php echo $row['KEYWORDS']; ?></p></td>
                                    </tr>
                                    <tr>
                                    <td><label class=" form-control-label">Roles and Responsiblities</label></td>
                                    <td><p><?php echo $row['ROLES_AND_RESPONSIBLITIES']; ?></p></td>
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
