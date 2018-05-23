<?php
include("connection.php");
include("addSkillsSource.php");
include("header.php");
?>

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

<!-- Header-->
<header id="header" class="header">

    <div class="header-menu">


        <div class="col-sm-6">
        <a id="menuToggle" class="menutoggle pull-left"> <img src="images/menu_bar.png" ></a>
            <p>Skill</p>
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
                        <strong>Add Skills</strong> 
                        </div>
                      <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                          
                          <div class="row form-group">
                          

                            
                            <div class="col-lg-12 col-md-12">
                                <label for="disabled-input" class=" form-control-label">Skill</label>
                                <input type="text" id="skill" name="skill" placeholder="Enter Skill" class="form-control">
                            </div>

                            </div>

                           
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                         <button type="submit" class="cancelmaster">CANCEL</button>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">   
                                    <button type="submit" class="submitmaster" name="submit">SUBMIT </button>
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
