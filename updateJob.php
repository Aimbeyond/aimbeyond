<?php
include("updateProfileSource.php");
include("header.php");

?>

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

<!-- Header-->
<header id="header" class="header">

    <div class="header-menu">


        <div class="col-sm-12">
        <a id="menuToggle" class="menutoggle pull-left"> <img src="images/menu_bar.png" ></a>
            <p>Update Job</p>
        </div>
        

    </div>

</header>


       

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                  
                  <div class="col-lg-12">
                    <div class="card">
                      
                     
                        <div class="card-header top">
                        <strong>Job Details</strong> 
                        </div>
                      <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                          
                          <div class="row form-group">
                          
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <label for="job_title" class=" form-control-label">Job Title</label>
                                <input type="text" id="job_title" name="job_title" value="<?php echo $data['JOB_TITLE']?>" placeholder="" class="form-control">
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="salary" class=" form-control-label">Salary</label>
                            <input type="text" id="salary" name="salary" placeholder="" value="<?php echo $data['SALARY']?>" class="form-control">
                            </div>

                            </div>

                            <div class="row form-group">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                            
                            <label for="disabledSelect" class=" form-control-label">Skills</label>
                            <div class="container">
<div class="example">

                              <select name="Skills[]" id="multi-select-demo" multiple="multiple">
                              <?php 
                               $fetch_data = "select * from JOB_SKILL where JOB_ID=$id";
                               $run_data = mysqli_query($conn,$fetch_data);
                               $row=mysqli_fetch_array($run_data);
$skill= explode(",", $row['SKILL_ID']);
$count=count($skill); 
for($i=0;$i<$count; $i++){
$fetch_dataS = "SELECT * FROM SKILL WHERE SKILL_ID='".$skill[$i]."'";
$run_dataS = mysqli_query($conn, $fetch_dataS);
$rowS = mysqli_fetch_array($run_dataS);
 ?>
                                <option value="<?php echo $rowS['SKILL_ID'] ?>"selected><?php echo $rowS['SKILL_NAME'] ?></option>
                                <?php } 
                                $fetch_skill = "SELECT * FROM SKILL";
                                $fetch_skill = mysqli_query($conn, $fetch_skill); 
                                while($data_skill = mysqli_fetch_array($fetch_skill))
                                {   ?>
    <option value="<?php echo $data_skill['SKILL_ID'] ?>"><?php echo $data_skill['SKILL_NAME'] ?></option>
            <?php } ?>
                                
                              </select>
                            </div>
                            </div>
                            </div>
                            
                        

                        
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="experience" class=" form-control-label">Experience</label>
                            <input type="text" id="experience" name="experience" placeholder="" value="<?php echo $data['EXPERIENCE']?>" class="form-control">
                        </div>

                        </div>




                         <div class="row form-group">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                            
                            <label for="location" class=" form-control-label">Location</label>
                              <select name="location" id="location" class="form-control location">
<?php 
$fetch_loction = "select L.LOCATION, JL.JOB_ID  from JOB_LOCATION JL JOIN LOCATION L ON L.LOCATION_ID=JL.LOCATION_ID && JOB_ID=$id";
//echo $sql; die();
$fetch_loction = mysqli_query($conn,$fetch_loction);
$row_loc=mysqli_fetch_array($fetch_loction);
?>
                              <option value="<?php echo $row_loc['LOCATION_ID'] ?>"selected><?php echo $row_loc['LOCATION'] ?></option>
                                <?PHP 
                                $fetch_location = "SELECT * FROM LOCATION";
                                $fetch_location = mysqli_query($conn, $fetch_location);
                            while($data_loc = mysqli_fetch_array($fetch_location))
            {    ?>
                                <option value="<?php echo $data_loc['LOCATION_ID'] ?>"><?php echo $data_loc['LOCATION'] ?></option>
            <?php } ?>
                              </select>
                            </div>
                            
                        

                        
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="keywords" class=" form-control-label">Keywords</label>
                            <input type="text" id="keywords" name="keywords" placeholder="" value="<?php echo $data['KEYWORDS']?>" class="form-control">
                        </div>

                        </div>
                        


                         <div class="row form-group">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="roles_and_responsiblities" class=" form-control-label">Roles and Responsiblities</label>
                            <textarea id="roles_and_responsiblities" name="roles_and_responsiblities" class="form-control" required><?php echo $data['ROLES_AND_RESPONSIBLITIES']?></textarea>
                        </div>

                        </div>
                        
                            
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                         <button type="submit" class="cancelmaster">CANCEL</button>
                                </div>
                                
                                <div class="col-lg-6 col-md-6 col-sm-6">   
                                    <button type="submit" class="submitmaster" name="SUBMIT" id="SUBMIT">SUBMIT </button>
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
    <script>
    $(document).ready(function() {
        $('#multi-select-demo').multiselect();
    });
    </script>

</body>
</html>
