<?php
include("header.php");
if (isset($_POST['submit']))
{
  $apllicantName=$_POST['apllicantName'];
  $jobTitle=$_POST['jobTitle'];
  $roundName=$_POST['roundName'];
  $interviewerName=$_POST['interviewerName'];
  $interviewDate=$_POST['interviewDate'];
  $interviewDate=date ("Y-m-d H:i:s", strtotime($interviewDate));

  $insert_data ="insert into INTERVIEW_SCHEDULE (REG_ID,JOB_ID,ROUND_ID,INTERVIEW_DATE) VALUES ('$apllicantName','$jobTitle','$roundName','$interviewDate')";
  //echo $insert_data; die();
  $run_data= mysqli_query($conn, $insert_data);
  $SCHEDULE_ID= mysqli_insert_id($conn);
  //echo $SCHEDULE_ID;die();
  

  $insert_employer ="insert into INTERVIEWER_SCHEDULE (SCHEDULE_ID,EMPLOYER_ID) VALUES ('$apllicantName','$interviewerName')";
  //echo $insert_data; die();
  $run_employer= mysqli_query($conn, $insert_employer);
 


}


?>
<script type="text/javascript">
$(document).ready(function()
{
	$("#apllicantName").change(function()
	{
		var id=$(this).val();
		var dataString = 'id='+ id;
		$("#jobTitle").find('option').remove();
		$.ajax
		({
			type: "POST",
			url: "getJobTitle.php",
			data: dataString,
			cache: false,
			success: function(html)
			{

				$("#jobTitle").html(html);
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
            <p>Add Interview Schedule</p>
        </div>
        

    </div>

</header>


       

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                  
                  <div class="col-lg-12">
                    <div class="card">
                      
                     
                        <div class="card-header top">
                        <strong>Interview Details</strong> 
                        </div>
                      <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                          
                          <div class="row form-group">
                          <?php
                          

                          ?>
                             <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="apllicantName" class=" form-control-label">Applicant Name</label>
                              <select name="apllicantName" id="apllicantName" class="form-control">
                              <?php 
                              $fetch_data= "Select * from APPLICANT_DETAIL";
                              $run_data= mysqli_query($conn, $fetch_data);
                              ?>
                           
                              <option>Select a Name</option>
                              <?php
                                while( $row=mysqli_fetch_array($run_data))
                                {
                                ?>
                              <option value="<?php echo $row['REG_ID'] ?>"><?php echo $row['APPLICANT_NAME'] ?></option>
                                          <?php 
                                        }  ?>

                              </select>
                            </div>

                            <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="jobTitle" class=" form-control-label">Job Title</label>
                              <select name="jobTitle"  id="jobTitle" class="form-control">
                              <?php 
                              $fetch_job= "Select * from JOB_DETAIL";
                              $run_job= mysqli_query($conn, $fetch_job);
                              ?>
                           
                              <option>Select a Job</option>
                              <?php

                                
                                
                                while( $row_job=mysqli_fetch_array($run_job))
                                {
                                 
                                  
                                ?>
           
                        
                              <option value="<?php echo $row_job['JOB_ID'] ?>" ><?php echo $row_job['JOB_TITLE'] ?></option>
                                          <?php }  ?>

                              </select>
                            </div>

                            </div>

                            <div class="row form-group">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="roundName" class=" form-control-label">Round Name</label>
                              <select name="roundName" id="roundName" class="form-control ">
                              <?php 
                              $fetch_round= "Select * from INTERVIEW_ROUND";
                              $run_round= mysqli_query($conn, $fetch_round);
                              ?>
                           
                              <option>Select a Round</option>
                              <?php
                                while( $row_round=mysqli_fetch_array($run_round))
                                {

                                ?>
           
                        
                              <option value="<?php echo $row_round['ROUND_ID'] ?>" ><?php echo $row_round['ROUND_NAME'] ?></option>
                                          <?php }  ?>

                              </select>
                            </div>
                            
                        

                          <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="interviewerName" class=" form-control-label">Interviewer Name</label>
                              <select name="interviewerName" id="interviewerName" class="form-control">
                              <?php 
                              $fetch_emp= "Select * from INTERVIEWER";
                              $run_emp= mysqli_query($conn, $fetch_emp);
                              ?>
                           
                              <option>Select a Name</option>
                              <?php
                                while( $row_emp=mysqli_fetch_array($run_emp))
                                {

                                ?>
           
                        
                              <option value="<?php echo $row_emp['EMPLOYER_ID'] ?>" ><?php echo $row_emp['EMPLOYER_NAME'] ?></option>
                                          <?php }  ?>

                              </select>
                            </div>

                        </div>




                         <div class="row form-group">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                            
                            <label for="interviewDate" class=" form-control-label">Interview Date</label>
                            <input type="text" id="interviewDate" name="interviewDate" placeholder="" class="form-control">
                            </div>
                            
                        
                        </div>
                        
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                         <button type="submit" class="cancelmaster">CANCEL</button>
                                </div>
                                
                                <div class="col-lg-6 col-md-6 col-sm-6">   
                                    <button type="submit" class="submitmaster" name="submit" >SUBMIT </button>
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
