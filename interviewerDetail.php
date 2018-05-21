<?php
include("connection.php");
include("interviewerDetailSource.php");
include("header.php");
?>

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

<!-- Header-->
<header id="header" class="header">

    <div class="header-menu">


        <div class="col-sm-12">
        <a id="menuToggle" class="menutoggle pull-left"> <img src="images/menu_bar.png" ></a>
            <p>Add Interviewer</p>
        </div>
        

    </div>

</header>


       

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                  
                  <div class="col-lg-12">
                    <div class="card">
                      
                     
                        <div class="card-header top">
                        <strong>Interviewer Details</strong> 
                        </div>
                      <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                          
                          <div class="row form-group">
                          
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <label for="employer_name" class=" form-control-label">Employer Name</label>
                                <input type="text" id="employer_name" name="employer_name" placeholder="" class="form-control">
                            </div>

                            
                            <div class="col-lg-6 col-md-6 col-sm-12">
                            
                            <label for="disabledSelect" class=" form-control-label">Skills</label>
                            <div class="container">
                            <div class="example">

                            <select id="multi-select-demo" name="Skills[]" multiple="multiple">

 
                            <option value="0"selected></option>
                            <?php   
                            $fetch_skill= "select * from SKILL";
                            $fetch_skill= mysqli_query($conn,$fetch_skill);
                            while ($data_skill = mysqli_fetch_array($fetch_skill))
                            {   ?>
                            <option value="<?php echo $data_skill['SKILL_ID'] ?>"><?php echo $data_skill['SKILL_NAME'] ?></option>
                            <?php } ?>
                            </select>
                            </div>
                            </div>


                            </div>

                            </div>

                            <div class="row form-group">
                             
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="designation" class=" form-control-label">Designation</label>
                            <input type="text" id="designation" name="designation" placeholder="" class="form-control">
                        </div>
                            
                        

                        
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="proficiency" class=" form-control-label">Proficiency</label>
                            <input type="text" id="proficiency" name="proficiency" placeholder="" class="form-control">
                        </div>

                        </div>


                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                         <button type="submit" class="cancelmaster">CANCEL</button>
                                </div>
                                
                                <div class="col-lg-6 col-md-6 col-sm-6">   
                                    <button type="submit" class="submitmaster" name="submit">SUBMIT</button>
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
