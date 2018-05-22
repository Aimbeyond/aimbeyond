<?php
include("addQualificationSource.php");
include("header.php");
?>

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

<!-- Header-->
<header id="header" class="header">

    <div class="header-menu">


        <div class="col-sm-6">
        <a id="menuToggle" class="menutoggle pull-left"> <img src="images/menu_bar.png" ></a>
            <p>Qualification</p>
        </div>
   
    </div>

</header><!-- /header -->
<!-- Header-->

       

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                  
                  <div class="col-lg-6 col-md-12 col-sm-12 master">
                    <div class="card cardmaster">
                      
                     
                        <div class="card-header top">
                        <strong>Add Qualification</strong> 
                        </div>
                      <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                          
                          <div class="row form-group">
                          

                            
                            <div class="col-lg-12 col-md-12">
                                <label for="disabled-input" class=" form-control-label">Qualification</label>
                                <input type="text" id="qualification" name="qualification" placeholder="Enter Qualification" class="form-control">
                            </div>
                            </div>
                            <div class="row form-group">
                        
                       
                            <div class="col-lg-12 col-md-6">
                            
                            <label for="location" class=" form-control-label">Qualification Type</label>
            
             
                              <select name="qualification_type" id="qualification_type" class="form-control" required>
                                <option value="0"></option>
                                <option value="Matric">Matric</option>
                                <option value="High School">High School</option>
                                <option value="Graduation">Graduation</option>
                                <option value="Post Graduation">Post Graduation</option>
                                <option value="Others">Others</option>
                              </select>
                            </div>
                        </div>

                           
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                         <button type="submit" class="cancelmaster">CANCEL</button>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">   
                                    <button type="submit" class="submitmaster" id="SUBMIT" name="SUBMIT">SUBMIT </button>
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
