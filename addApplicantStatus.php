<?php
include("connection.php");
include("addApplicantStatusSource.php");
include("header.php");
?>

<script type="text/javascript">
$(document).ready(function()
{
	$("#jobTitle").change(function()
	{
		var id=$(this).val();
		var dataString = 'id='+ id;
		$("#applicantName").find('option').remove();
		$.ajax
		({
			type: "POST",
			url: "getApplicantName.php",
			data: dataString,
			cache: false,
			success: function(html)
			{

				$("#applicantName").html(html);
			} 
		});
	});
	
});
</script>

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

<!-- Header-->
<header id="header" class="header">

    <div class="header-menu">


        <div class="col-sm-12">
        <a id="menuToggle" class="menutoggle pull-left"> <img src="images/menu_bar.png" ></a>
            <p>Add Applicant Status</p>
        </div>
        

    </div>

</header>
        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                  
                  <div class="col-lg-12">
                    <div class="card">
                      
                     
                        <div class="card-header top">
                        <strong>Applicant Status</strong> 
                        </div>
                      <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                          
                          <div class="row form-group">
                          
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
                            <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="applicantName" class=" form-control-label">Applicant Name</label>
                            <select name="applicantName" id="applicantName" class="form-control">
                            <option value="0" selected>Select Applicant Name</option>
                            <?PHP 
                             $fetch_name = "SELECT * FROM APPLICANT_DETAIL";

                             $fetch_name = mysqli_query($conn, $fetch_name);
                           
                             while($data_name = mysqli_fetch_array($fetch_name))
                            {    
                              
                              ?>
                                    <option value="<?php echo $data_name['REG_ID'] ?>" ><?php echo $data_name['APPLICANT_NAME'] ?></option>
                            <?php }  ?>
                            </select>
                            </div>


                            </div>

                            <div class="row form-group">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="roundName" class=" form-control-label">Round</label>
                              <select name="roundName" id="roundName" class="form-control ">
                            <option value="0" selected>Select Interview Round</option>
                            <?PHP 
                             $fetch_round = "SELECT * FROM INTERVIEW_ROUND";

                             $fetch_round = mysqli_query($conn, $fetch_round);
                           
                             while($data_round = mysqli_fetch_array($fetch_round))
                            {    
                              
                              ?>
                                    <option value="<?php echo $data_round['ROUND_ID'] ?>" ><?php echo $data_round['ROUND_NAME'] ?></option>
                            <?php }  ?>
                              </select>
                            </div>
                            
                        
                            <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="status" class=" form-control-label">Status</label>
                            <select name="status" id="status" class="form-control">
                            <option value="0" selected>Select Interview Status</option>
                            <?PHP 
                             $fetch_status = "SELECT * FROM INTERVIEW_STATUS";

                             $fetch_status = mysqli_query($conn, $fetch_status);
                           
                             while($data_status = mysqli_fetch_array($fetch_status))
                            {    
                              
                              ?>
                                    <option value="<?php echo $data_status['INTERVIEW_STATUS_ID'] ?>" ><?php echo $data_status['INTERVIEW_STATUS'] ?></option>
                            <?php }  ?>
                              </select>
                            </div>
                          </div>
                         <div class="row form-group">

                          <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="reason" class=" form-control-label">Reason</label>
                            <textarea id="reason" name="reason" class="form-control" required></textarea>
                        </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                            
                            <label for="statusDate" class=" form-control-label">Status Date</label>
                            <input type="date" id="statusDate" name="statusDate" placeholder="" class="form-control">
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
