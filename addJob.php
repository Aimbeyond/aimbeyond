<?php
include("connection.php");
include("addJobSource.php");
include("header.php");
?>

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

<!-- Header-->
<header id="header" class="header">

    <div class="header-menu">


        <div class="col-sm-12">
        <a id="menuToggle" class="menutoggle pull-left"> <img src="images/menu_bar.png" ></a>
            <p>Add Job</p>
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
                            <input type="text" id="job_title" name="job_title" placeholder="" class="form-control">
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="salary" class=" form-control-label">Salary</label>
                            <input type="text" id="salary" name="salary" placeholder="" class="form-control">
                            </div>

                            </div>

                            <div class="row form-group">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                            
                            <label for="Skills" class=" form-control-label">Skills</label>
                           <select name="skills" id="skills" class="form-control">
                            <option value="0" selected>Select Skills</option>
                            <?PHP 
                             $fetch_skill = "SELECT * FROM SKILL";

                             $fetch_skill = mysqli_query($conn, $fetch_skill);
                           
                             while($data_skill = mysqli_fetch_array($fetch_skill))
                            {    
                              
                              ?>
                                    <option value="<?php echo $data_skill['SKILL_ID'] ?>" ><?php echo $data_skill['SKILL_NAME'] ?></option>
                            <?php }  ?>
                            </select>
                            </div>
                            
                        

                        
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="experience" class=" form-control-label">Experience</label>
                            <input type="text" id="experience" name="experience" placeholder="" class="form-control">
                        </div>

                        </div>




                         <div class="row form-group">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                            
                            <label for="location" class=" form-control-label">Location</label>
                            <select name="location" id="location" class="form-control">
                            <option value="0" selected>Select Location</option>
                            <?PHP 
                             $fetch_location = "SELECT * FROM LOCATION";

                             $fetch_location = mysqli_query($conn, $fetch_location);
                           
                             while($data_location = mysqli_fetch_array($fetch_location))
                            {    
                              
                              ?>
                                    <option value="<?php echo $data_location['LOCATION_ID'] ?>" ><?php echo $data_location['LOCATION'] ?></option>
                            <?php }  ?>
                            </select>
                            </div>
                            
                        

                        
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="keywords" class=" form-control-label">Keywords</label>
                            <input type="text" id="keywords" name="keywords" placeholder="" class="form-control">
                        </div>

                        </div>
                        


                         <div class="row form-group">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="roles_and_responsiblities" class=" form-control-label">Roles and Responsiblities</label>
                            <textarea id="roles_and_responsiblities" name="roles_and_responsiblities" class="form-control" required></textarea>
                        </div>

                        </div>
                        
                            
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                         <button type="submit" class="cancelmaster">CANCEL</button>
                                </div>
                                
                                <div class="col-lg-6 col-md-6 col-sm-6">   
                                    <button type="submit" class="submitmaster" name= "submit">SUBMIT </button>
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

</body>
</html>
