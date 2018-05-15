<?php
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
                                <label for="job_title" class=" form-control-label">Employer Name</label>
                                <input type="text" id="job_title" name="job_title" placeholder="" class="form-control">
                            </div>

                            
                            <div class="col-lg-6 col-md-6 col-sm-12">
                            
                            <label for="disabledSelect" class=" form-control-label">Skills</label>
                              <select name="skills" id="skills" class="form-control skill">
                                <option value="0"></option>
                                <option value="1">Option #1</option>
                                <option value="2">Option #2</option>
                                <option value="3">Option #3</option>
                              </select>
                            
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
                                    <button type="submit" class="submitmaster">SUBMIT</button>
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
