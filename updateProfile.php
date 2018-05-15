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
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                          
                          <div class="row form-group">
                          
                          <div class="form-group col-lg-6 col-md-6 col-sm-12">    
                        <label for="disabled-input" class="form-control-label">Add resume</label>
                        <div class="form-group resume">  
                        <input type="file" id="resume">
                        </div>
                        <label class="attachment">(attached file should not more than 1MB)</label>
                        </div>


                            
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <label for="disabled-input" class=" form-control-label">Full name</label>
                                <input type="text" id="full_name" name="full_name" placeholder="" class="form-control">
                            </div>

                            </div>

                            <div class="row form-group">
                        
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="disabled-input" class=" form-control-label">Email address</label>
                            <input type="text" id="email_address" name="email_address" placeholder="" class="form-control">
                        </div>
                        
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="disabled-input" class=" form-control-label">Contact no.</label>
                            <input type="text" id="contact_no" name="contact_no" placeholder="" class="form-control">
                        </div>

                        </div>



                        <div class="row form-group">
                        
                       
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            
                            <label for="location" class=" form-control-label">Location</label>
                              <select name="location" id="location" class="form-control skill">
                                <option value="0"></option>
                                <option value="1">Option #1</option>
                                <option value="2">Option #2</option>
                                <option value="3">Option #3</option>
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
                            <select name="experience" id="experience" class="form-control">
                                <option value="0">Months</option>
                                <option value="1">Option #1</option>
                                <option value="2">Option #2</option>
                                <option value="3">Option #3</option>
                              </select>
                            </div>
                        
                        
                          
                            <!-- <label for="disabledSelect" class=" form-control-label experience">months</label> -->
                            
                            <div class="col-lg-6 col-md-6 col-sm-12 ">
                            <label for="disabledSelect" class=" form-control-label">&nbsp</label>
                            <select name="select" id="select" class="form-control ">
                                <option value="0">Years</option>
                                <option value="1">Option #1</option>
                                <option value="2">Option #2</option>
                                <option value="3">Option #3</option>
                              </select>
                            </div>
                        
                            <!-- <label for="disabledSelect" class=" form-control-label experience">years</label> -->
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
                            <label for="notice_period" class=" form-control-label">Notice period</label>
                            <input type="text" id="notice_period" name="notice_period" placeholder="" class="form-control">
                        </div>

                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="previous_package" class=" form-control-label">Previous package</label>
                            <input type="text" id="previous_package" name="previous_package" placeholder="" class="form-control">
                        </div>

                            </div>
                        
                        <div class="card-header qualificationDetail">
                        <strong>Qualification Details</strong> 
                      </div>

                        <div class="row form-group">
                        
                        <div class="col-12 col-md-6">
                            <label for="disabledSelect" class=" form-control-label">Qualification</label>
                              <select name="qualification1" id="qualification1" class="form-control">
                                <option value="0">select degree</option>
                                <option value="1">Option #1</option>
                                <option value="2">Option #2</option>
                                <option value="3">Option #3</option>
                              </select>
                            </div>
                            <div class="col-12 col-md-6">
                            <label for="disabledSelect" class=" form-control-label">Institution</label>
                              <select name="institution1" id="institution1" class="form-control">
                                <option value="0"></option>
                                <option value="1">Option #1</option>
                                <option value="2">Option #2</option>
                                <option value="3">Option #3</option>
                              </select>
                            </div>
                        </div>


                        <div class="row form-group">
                        <div class="col-lg-6 col-md-12 col-sm-12 yop1">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="disabledSelect" class=" form-control-label">Year of passing</label>
                              <select name="year_of_passing1" id="year_of_passing1" class="form-control">
                                <option value="0"></option>
                                <option value="1">Option #1</option>
                                <option value="2">Option #2</option>
                                <option value="3">Option #3</option>
                              </select>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="disabled-input" class=" form-control-label">Percentage</label>
                            <input type="text" id="percentage1" name="percentage1" placeholder="" class="form-control">
                        </div>
                        </div>
                        </div>


                            <div class="row form-group">

                            <div class="col-12 col-md-6">
                                <label for="disabledSelect" class=" form-control-label">Qualification</label>
                                <select name="qualification2" id="qualification2" class="form-control">
                                    <option value="0">select degree</option>
                                    <option value="1">Option #1</option>
                                    <option value="2">Option #2</option>
                                    <option value="3">Option #3</option>
                                </select>
                                </div>
                                <div class="col-12 col-md-6">
                                <label for="disabledSelect" class=" form-control-label">Institution</label>
                                <select name="institution2" id="institution2" class="form-control">
                                    <option value="0"></option>
                                    <option value="1">Option #1</option>
                                    <option value="2">Option #2</option>
                                    <option value="3">Option #3</option>
                                </select>
                                </div>
                            </div>



                            <div class="row form-group">
                            <div class="col-lg-6 col-md-12 col-sm-12 yop2">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <label for="disabledSelect" class=" form-control-label">Year of passing</label>
                                <select name="year_of_passing2" id="year_of_passing2" class="form-control">
                                    <option value="0"></option>
                                    <option value="1">Option #1</option>
                                    <option value="2">Option #2</option>
                                    <option value="3">Option #3</option>
                                </select>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                <label for="disabled-input" class=" form-control-label">Percentage</label>
                                <input type="text" id="percentage2" name="percentage2" placeholder="" class="form-control">
                            </div>
                            </div>
                            



                            
                            </div>
                            <hr>
                            <div id="dynamic_field">
                              </div>
                              <button type="button" class="addmore" name="add" id="add"><i class="fa fa-plus"></i>Add More</button>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                         <button type="submit" class="cancel">CANCEL</button>
                                </div>
                                
                                <div class="col-lg-6 col-md-6 col-sm-6">   
                                    <button type="submit" class="update">UPDATE </button>
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
	var i=1;
	$('#add').click(function(){
		i++; 
		$('#dynamic_field').append('<div id="row'+i+'"><div class="row"><button type="button" style="float:right; background-color:#939498;color:#ffffff;font-size: 14px;position: absolute;right: 22px; border: none !important;font-family: NotoSansBold;" name="remove" id="'+i+'" class="btn btn-success btn_remove">DELETE</button></div><span ><br></span><div class="row form-group"><div class="col-12 col-md-6"><label for="disabledSelect" class=" form-control-label">Qualification</label><select name="qualification1" id="qualification1" class="form-control"><option value="0">select degree</option><option value="1">Option #1</option><option value="2">Option #2</option><option value="3">Option #3</option></select></div><div class="col-12 col-md-6"><label for="disabledSelect" class=" form-control-label">Institution</label><select name="institution1" id="institution1" class="form-control"><option value="0"></option><option value="1">Option #1</option><option value="2">Option #2</option><option value="3">Option #3</option></select></div></div><div class="row form-group"><div class="col-lg-6 col-md-12 col-sm-12 yop1"><div class="col-lg-6 col-md-6 col-sm-12"><label for="disabledSelect" class=" form-control-label">Year of passing</label><select name="year_of_passing1" id="year_of_passing1" class="form-control"><option value="0"></option><option value="1">Option #1</option><option value="2">Option #2</option><option value="3">Option #3</option></select></div><div class="col-lg-6 col-md-6 col-sm-12"><label for="disabled-input" class=" form-control-label">Percentage</label><input type="text" id="percentage1" name="percentage1" placeholder="" class="form-control"></div></div></div>');
    
	});
	
	$(document).on('click', '.btn_remove', function(){
		var button_id = $(this).attr("id"); 
		$('#row'+button_id+'').remove();
	});
	
	$('#submit').click(function(){		
		$.ajax({
			url:"name.php",
			method:"POST",
			data:$('#add_name').serialize(),
			success:function(data)
			{
				alert(data);
				$('#add_name')[0].reset();
			}
		});
	});
	
});
</script>

</body>
</html>
