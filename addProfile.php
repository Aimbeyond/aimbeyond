<?php
session_start();
include("header.php");
?>

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

<!-- Header-->
<header id="header" class="header">

    <div class="header-menu">


        <div class="col-sm-12">
        <a id="menuToggle" class="menutoggle pull-left"> <img src="images/menu_bar.png" ></a>
            <p>Add Profile</p>
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
                        <form action="addButton.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                          
                          <div class="row form-group">
                          
                          <div class="form-group col-lg-6 col-md-6 col-sm-12">    
                        <label for="disabled-input" class="form-control-label">Add resume</label>
                        <div class="form-group resume">  
                        <input type="file" name="image" value="<?php echo $row['APPLICANT_RESUME'] ?>" id="resume" required>
                        </div>
                        <label class="attachment">(attached file should not more than 1MB)</label>
                        </div>

                        
                            
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <label for="disabled-input" class=" form-control-label">Full name</label>
                                <input type="text" id="full_name" name="full_name" value="" placeholder="" class="form-control" required>
                            </div>

                            </div>

                            <div class="row form-group">
                        
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="disabled-input" class=" form-control-label">Email address</label>
                            <input type="Email" id="email_address" name="email_address" value="" placeholder="" class="form-control" required>
                        </div>
                        
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="disabled-input" class=" form-control-label">Contact no.</label>
                            <input type="number" id="contact_no" name="contact_no" value="" placeholder="" class="form-control" required>
                        </div>

                        </div>



                        <div class="row form-group">
                        
                       
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            
                            <label for="location" class=" form-control-label">Location</label>
            
             
                              <select name="location" id="location" class="form-control skill" required>
      
                                <option value=""selected></option>
                                <?PHP $fetch_location = "SELECT * FROM LOCATION";
                            $fetch_location = mysqli_query($conn, $fetch_location);
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
<?php  $fetch_skill = "SELECT * FROM SKILL";
$fetch_skill = mysqli_query($conn, $fetch_skill); 
while($data_skill = mysqli_fetch_array($fetch_skill))
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
                            <input type="text" id="notice_period" name="notice_period" value="" placeholder="" class="form-control">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="previous_package" class=" form-control-label">Previous package</label>
                            <input type="text" id="previous_package" name="previous_package" value="" placeholder="" class="form-control">
                        </div>

                            </div>
                        
                        <div class="card-header qualificationDetail">
                        <strong>Qualification Details</strong> 
                      </div>
                <div class="row form-group">
                       
                        <div class="col-12 col-md-6">
                            <label for="disabledSelect" class=" form-control-label">Qualification</label>
                              <select name="qualification1" id="qualification1" class="form-control" disabled>
                              <?php $fetch_qualification1 = "SELECT * FROM QUALIFICATION where QUALIFICATION_ID = 1";
$fetch_qualification1 = mysqli_query($conn, $fetch_qualification1);
$row_qual1=mysqli_fetch_array($fetch_qualification1);  ?>
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
                                <?php $fetch_qualification2 = "SELECT * FROM QUALIFICATION where QUALIFICATION_ID = 2";
$fetch_qualification2 = mysqli_query($conn, $fetch_qualification2);
$row_qual2=mysqli_fetch_array($fetch_qualification2); ?>
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
                                    <button type="submit" name="SUBMIT" class="update">SUBMIT </button>
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
