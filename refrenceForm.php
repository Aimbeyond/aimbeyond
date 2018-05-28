<?php
include("connection.php");
include("refrenceFormSource.php");
include("header.php");
?>

    <!-- Right Panel -->
<div id="right-panel" class="right-panel">

<!-- Header-->
<header id="header" class="header">

    <div class="header-menu">


        <div class="col-sm-12">
        <a id="menuToggle" class="menutoggle pull-left"> <img src="images/menu_bar.png" ></a>
            <p>Refrence Form</p>
        </div>
        

    </div>

</header>
        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                  
                  <div class="col-lg-12">
                    <div class="card">
                      
                     
                        <div class="card-header top">
                        <strong>Refrence Form</strong> 
                        </div>
                      <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                          
                          <div class="row form-group">
                          
                            <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="employerName" class=" form-control-label">Employer Name</label>
                              <select name="employerName" id="employerName" class="form-control">
                            <option value="0" selected>Select Name</option>
                            <?PHP 
                             $fetch_employer = "SELECT * FROM INTERVIEWER";

                             $fetch_employer = mysqli_query($conn, $fetch_employer);
                           
                             while($data_employer = mysqli_fetch_array($fetch_employer))
                            {    
                              
                              ?>
                                    <option value="<?php echo $data_employer['EMPLOYER_ID'] ?>" ><?php echo $data_employer['EMPLOYER_NAME'] ?></option>
                            <?php }  ?>
                              </select>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="jobTitle" class=" form-control-label">Job Title</label>
                            <select name="jobTitle" id="jobTitle" class="form-control">
                            <option value="0" selected>Select Job Title</option>
                            <?PHP 
                             $fetch_job = "SELECT * FROM JOB_DETAIL";

                             $fetch_job = mysqli_query($conn, $fetch_job);
                           
                             while($data_job = mysqli_fetch_array($fetch_job))
                            {    
                              
                              ?>
                                    <option value="<?php echo $data_job['JOB_ID'] ?>" ><?php echo $data_job['JOB_TITLE'] ?></option>
                            <?php }  ?>
                            </select>
                            </div>


                            </div>

                            <div class="row form-group">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="applicantName" class=" form-control-label">Applicant Name</label>
                            <input type="text" id="applicantName" name="applicantName" value="" placeholder="" class="form-control">
                            </div>
                            
                        
                            <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="disabled-input" class="form-control-label">Applicant resume</label>
                        <div class="form-group resume">  
                        <input type="file" name="image" value="<?php echo $row['APPLICANT_RESUME'] ?>" id="resume">

                            </div>
                          </div>
                          </div>
                        
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                <button type="cancel" name="cancel" class="cancelmaster" onclick="window.history.go(-1); return false;">CANCEL</button>
                                </div>
                                
                                <div class="col-lg-6 col-md-6 col-sm-6">   
                                    <button type="submit" class="submitmaster" name="submit">SUBMIT </button>
                                </div>
                            </div>
                        </form>
                      </div>  
                  
                      </div>                
                   </div>

            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

   </div> <!-- Right Panel -->

<script>
			$('#resume').filestyle({
				buttonText : 'BROWSE',
                buttonName : 'btn'
               
			});                     
</script>
    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>

</body>
</html>
