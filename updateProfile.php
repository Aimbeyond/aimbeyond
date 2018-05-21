<?php
session_start();

include("header.php");
include("updateProfileSource.php");

// if(isset($_POST['UPDATE']))
// {
// echo "<pre>";
// print_r($_POST);
// die();
// }
?>

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

<!-- Header-->
<header id="header" class="header">

    <div class="header-menu">


        <div class="col-sm-12">
        <a id="menuToggle" class="menutoggle pull-left"> <img src="images/menu_bar.png" ></a>
            <p>Update Profile</p>
        </div>
        

    </div>

</header>


       

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                  
                  <div class="col-lg-12">
                    <div class="card">
                      
                     
                        <div class="card-header top">
                        <strong>Personal Details</strong> 
                        </div>
                      <div class="card-body card-block">
                        <form action="updateButton.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                          
                          <div class="row form-group">
                          
                          <div class="form-group col-lg-6 col-md-6 col-sm-12">    
                        <label for="disabled-input" class="form-control-label">Add resume</label>
                        <div class="form-group resume">  
                        <input type="file" name="image" value="" id="resume">
                        </div>
                        <label class="attachment">(attached file should not more than 1MB)</label>
                        </div>

                        
                            
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <label for="disabled-input" class=" form-control-label">Full name</label>
                                <input type="text" id="full_name" name="full_name" value="<?php echo $row['APPLICANT_NAME'] ?>" placeholder="" class="form-control">
                            </div>

                            </div>

                            <div class="row form-group">
                        
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="disabled-input" class=" form-control-label">Email address</label>
                            <input type="text" id="email_address" name="email_address" value="<?php echo $row['EMAIL_ID'] ?>" placeholder="" class="form-control">
                        </div>
                        
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="disabled-input" class=" form-control-label">Contact no.</label>
                            <input type="text" id="contact_no" name="contact_no" value="<?php echo $row['CONTACT_NUMBER'] ?>" placeholder="" class="form-control">
                        </div>

                        </div>



                        <div class="row form-group">
                        
                       
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            
                            <label for="location" class=" form-control-label">Location</label>
            
             
                              <select name="location" id="location" class="form-control skill">
      
                                <option value="<?php echo $row_loc['LOCATION_ID'] ?>"selected><?php echo $row_loc['LOCATION'] ?></option>
                                <?PHP 
                            while($data_loc = mysqli_fetch_array($fetch_location))
            {    ?>
                                <option value="<?php echo $data_loc['LOCATION_ID'] ?>"><?php echo $data_loc['LOCATION'] ?></option>
            <?php } ?>
                              </select>
                            </div>
                        </div>


                         <div class="card-header experienceDetail">
                        <strong>Experience Details</strong> 
                      </div>
                            
                            <div class="row form-group">
                            <div class="col-lg-6 col-md-6 col-sm-12 experienceyear">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="disabledSelect" class=" form-control-label">Experience</label>
                            <input type="text" id="experience_year" name="experience_year" value="<?php echo $row['EXPERIENCE_IN_YEAR'] ?>" placeholder="Years" class="form-control">
                            
                            </div>
                        
                        
                          
                            <!-- <label for="disabledSelect" class=" form-control-label experience">months</label> -->
                            
                            <div class="col-lg-6 col-md-6 col-sm-12 ">
                            <label for="disabledSelect" class=" form-control-label">&nbsp</label>
                            <input type="text" id="experience_month" name="experience_month" value="<?php echo $row['EXPERIENCE_IN_MONTH'] ?>" placeholder="Months" class="form-control">
                            </div>
                        
                            <!-- <label for="disabledSelect" class=" form-control-label experience">years</label> -->
                            </div>
                        
                            <div class="col-lg-6 col-md-6 col-sm-12">
                            
                            <label for="disabledSelect" class=" form-control-label">Skills</label>
                            <div class="container">
<div class="example">

<select id="multi-select-demo" name="Skills[]" multiple="multiple">
<?php 
                        $skill= explode(",", $row['SKILL_ID']);

$count=count($skill); 

for($i=0;$i<$count; $i++){

$fetch_dataS = "SELECT * FROM SKILL WHERE SKILL_ID='".$skill[$i]."'";

//echo $fetch_dataS;die();

$run_dataS = mysqli_query($conn, $fetch_dataS);

$rowS = mysqli_fetch_array($run_dataS);

//echo $rowS['SKILL_NAME'];echo ", ";

 ?>
 
    <option value="<?php echo $rowS['SKILL_ID'] ?>"selected><?php echo $rowS['SKILL_NAME'] ?></option>
<?php }  while($data_skill = mysqli_fetch_array($fetch_skill))
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
                            <label for="notice_period" class=" form-control-label">Notice period</label>
                            <input type="text" id="notice_period" name="notice_period" value="<?php echo $row['NOTICE_PERIOD'] ?>" placeholder="" class="form-control">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="previous_package" class=" form-control-label">Previous package</label>
                            <input type="text" id="previous_package" name="previous_package" value="<?php echo $row['PACKAGE'] ?>" placeholder="" class="form-control">
                        </div>

                            </div>
                        
                        <div class="card-header qualificationDetail">
                        <strong>Qualification Details</strong> 
                      </div>
                      <?php  
          $q2= "select * from APPLICANT_QUALIFICATION where REG_ID=$REG_ID ";
          $run_q2 = mysqli_query($conn,$q2);
          $num2 = mysqli_num_rows($run_q2);
          if($num2 >=1)
          {  
              $fetch_10= "select * from APPLICANT_QUALIFICATION where QUALIFICATION_ID=1 && REG_ID=$REG_ID";
              $fetch_10 = mysqli_query($conn,$fetch_10);
              while($data10 = mysqli_fetch_array($fetch_10))
     
            { 
                ?>

                        <div class="row form-group">
                       
                        <div class="col-12 col-md-6">
                            <label for="disabledSelect" class=" form-control-label">Qualification</label>
                              <select name="qualification1" id="qualification1" class="form-control" disabled>
                                <option value="<?php echo $row_qual1['QUALIFICATION_ID']; ?>"><?php echo $row_qual1['QUALIFICATION']; ?></option>
                              </select>
                            </div>
                            
                            <div class="col-12 col-md-6">
                            <label for="disabledSelect" class=" form-control-label">Institution</label>
                            <input type="text" id="institute7" name="institute7" value="<?php echo $data10['INSTITUTION']; ?>" placeholder="" class="form-control">
                            </div>
                        </div>


                        <div class="row form-group">
                        <div class="col-lg-6 col-md-12 col-sm-12 yop1">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="disabledSelect" class=" form-control-label">Year of passing</label>
                            <input type="number" id="yop7" name="yop7" placeholder="" value="<?php echo $data10['YEAR_OF_PASSING']; ?>" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="disabled-input" class=" form-control-label">Percentage</label>
                            <input type="number" id="percentage7" name="percentage7" value="<?php echo $data10['PERCENTAGE']; ?>" placeholder="" class="form-control">
     
                        </div>
                        </div>
                        </div>
            <?php }  $fetch_12= "select * from APPLICANT_QUALIFICATION where QUALIFICATION_ID=2 && REG_ID=$REG_ID";
                     $fetch_12 = mysqli_query($conn,$fetch_12);
                    while($data12 = mysqli_fetch_array($fetch_12))
              { ?>
 
                            <div class="row form-group">

                            <div class="col-12 col-md-6">
                                <label for="disabledSelect" class=" form-control-label">Qualification</label>
                                <select name="qualification2" id="qualification2" class="form-control" disabled>
                                    <option value="<?php echo $row_qual2['QUALIFICATION_ID']; ?>"><?php echo $row_qual2['QUALIFICATION']; ?></option>
                                </select>
                                </div>
                               
                                <div class="col-12 col-md-6">
                                <label for="disabledSelect" class=" form-control-label">Institution</label>
                                <input type="text" id="institute8" name="institute8" value="<?php echo $data12['INSTITUTION']; ?>" placeholder="" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">
                            <div class="col-lg-6 col-md-12 col-sm-12 yop2">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <label for="disabledSelect" class=" form-control-label">Year of passing</label>
                                <input type="number" id="yop8" name="yop8" placeholder="" value="<?php echo $data12['YEAR_OF_PASSING']; ?>" class="form-control">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                <label for="disabled-input" class=" form-control-label">Percentage</label>
                                <input type="number" id="percentage8" name="percentage8" value="<?php echo $data12['PERCENTAGE']; ?>" placeholder="" class="form-control">
  
                            </div>
                            
                            </div>
                            </div>
              <?php } } else { ?>
                <div class="row form-group">
                       
                        <div class="col-12 col-md-6">
                            <label for="disabledSelect" class=" form-control-label">Qualification</label>
                              <select name="qualification1" id="qualification1" class="form-control" disabled>
                                <option value="<?php echo $row_qual1['QUALIFICATION_ID']; ?>"><?php echo $row_qual1['QUALIFICATION']; ?></option>
                              </select>
                            </div>
                            
                            <div class="col-12 col-md-6">
                            <label for="disabledSelect" class=" form-control-label">Institution</label>
                            <input type="text" id="institute1" name="institute1" value="" placeholder="" class="form-control">
                            </div>
                        </div>


                        <div class="row form-group">
                        <div class="col-lg-6 col-md-12 col-sm-12 yop1">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="disabledSelect" class=" form-control-label">Year of passing</label>
                            <input type="number" id="yop1" name="yop1" placeholder="" value="" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="disabled-input" class=" form-control-label">Percentage</label>
                            <input type="number" id="percentage1" name="percentage1" value="" placeholder="" class="form-control">
     
                        </div>
                        </div>
                        </div>
 
                            <div class="row form-group">

                            <div class="col-12 col-md-6">
                                <label for="disabledSelect" class=" form-control-label">Qualification</label>
                                <select name="qualification2" id="qualification2" class="form-control" disabled>
                                    <option value="<?php echo $row_qual2['QUALIFICATION_ID']; ?>"><?php echo $row_qual2['QUALIFICATION']; ?></option>
                                </select>
                                </div>
                               
                                <div class="col-12 col-md-6">
                                <label for="disabledSelect" class=" form-control-label">Institution</label>
                                <input type="text" id="institute2" name="institute2" value="" placeholder="" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">
                            <div class="col-lg-6 col-md-12 col-sm-12 yop2">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <label for="disabledSelect" class=" form-control-label">Year of passing</label>
                                <input type="number" id="yop2" name="yop2" placeholder="" value="" class="form-control">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                <label for="disabled-input" class=" form-control-label">Percentage</label>
                                <input type="number" id="percentage2" name="percentage2" value="" placeholder="" class="form-control">
  
                            </div>
                            
                            </div>
                            </div>
              <?php } ?>
                            <div id="grad"></div>
                            <hr>
                            <div id="pgrad"></div>
                            <div id="ograd"></div>
                            <div id="dynamic_field">
                              </div>
                              <button type="button" class="addmore" name="addgrad" id="addgrad"><i class="fa fa-plus"></i>Add UG</button>
                              <button type="button" class="addmore addpg" name="addpg" onclick="getPG()" id="addpg"><i class="fa fa-plus"></i>Add PG</button>
                              <button type="button" class="addmore addothers" name="addothers" onclick="getOTH()" id="addothers"><i class="fa fa-plus"></i>Add Others</button>
                              
                              <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                         <button type="submit" onclick="window.history.go(-1); return false;" class="cancel">CANCEL</button>
                                </div>
                                
                                <div class="col-lg-6 col-md-6 col-sm-6">   
                                    <button type="submit" name="UPDATE" class="update">UPDATE </button>
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
			$('#resume').filestyle({
				buttonText : 'BROWSE',
                buttonName : 'btn'
               
			});                     
</script>


<script>
$(document).ready(function(){
   $("#addgrad").click(function(){
    // $.get("grad1.php", function (data) {
    //                 $("#appendToThis").append(data);
    //             });
   $("#grad").load("grad.php");
   $("#addgrad").hide();  
   $("#addpg").show();   
   });
});
// $(document).ready(function(){
//    $("#addp").click(function(){
//    $("#pgrad").load("postgrad.php");
//    $("#addp").hide(); 
//    $("#addo").show();   
//    });
// });

$(document).ready(function() {
        $('#multi-select-demo').multiselect();
    });
    function getPG(){
        $("#pgrad").load("postgrad.php");
        $("#addpg").hide(); 
        $("#addothers").show();
    }
    function getOTH(){
        $("#ograd").load("others.php");
        $("#addothers").hide(); 
     }
</script>

</body>
</html>
