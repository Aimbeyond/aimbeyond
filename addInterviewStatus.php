<?php
include("header.php");
?>

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

<!-- Header-->
<header id="header" class="header">

    <div class="header-menu">


        <div class="col-sm-6">
        <a id="menuToggle" class="menutoggle pull-left"> <img src="images/menu_bar.png" ></a>
            <p>Interview Status</p>
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
                        <strong>Add Interview Status</strong> 
                        </div>
                      <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                          
                          <div class="row form-group">
                          

                            
                            <div class="col-lg-12 col-md-12">
                                <label for="disabled-input" class=" form-control-label">Interview Status</label>
                                <input type="text" id="interviewStatus" name="interviewStatus" placeholder="Enter Interview Status" class="form-control">
                            </div>

                            </div>

                           
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                         <button type="submit" class="cancelmaster">CANCEL</button>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">   
                                    <button type="submit" class="submitmaster " name="submit">SUBMIT </button>
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
$(document).ready(function(){
	var i=1;
	$('#add').click(function(){
		i++; 
		$('#dynamic_field').append('<div id="row'+i+'"><button type="button" style="float:right; background-color:#939498;color:#ffffff;font-size: 14px; border: none !important;font-family: NotoSansBold;" name="remove" id="'+i+'" class="btn btn-success btn_remove">DELETE</button><div class="row form-group"><div class="col-12 col-md-6"><label for="disabledSelect" class=" form-control-label">Qualification</label><select name="qualification'+i+'" id="qualification2" class="form-control"><option value="0">select degree</option> <option value="1">Option #1</option> <option value="2">Option #2</option> <option value="3">Option #3</option></select> </div><div class="col-12 col-md-6"> <label for="disabledSelect" class=" form-control-label">Institution</label><select name="institution2" id="institution2" class="form-control"><option value="0"></option> <option value="1">Option #1</option> <option value="2">Option #2</option> <option value="3">Option #3</option></select></div></div><div class="row form-group"><div class="col-12 col-md-2"><label for="disabledSelect" class=" form-control-label">Year of passing</label><select name="year_of_passing2" id="year_of_passing2" class="form-control"> <option value="0"></option> <option value="1">Option #1</option> <option value="2">Option #2</option><option value="3">Option #3</option> </select></div><div class="col-8 col-md-2"><label for="disabled-input" class=" form-control-label">Percentage</label> <input type="text" id="percentage2" name="percentage2" placeholder="" class="form-control"></div></div></div>');
    
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
