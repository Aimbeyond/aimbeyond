<?php 
include('connection.php');
//include('updateProfileSource.php');
$grad_quali="select * from QUALIFICATION where QUALIFICATION_TYPE ='Post Graduation'";
 $grad_query = mysqli_query($conn,$grad_quali);
 $REG_ID=$_GET['REG_ID'];
 $q= "select * from APPLICANT_QUALIFICATION where REG_ID=$REG_ID";
 $run_q = mysqli_query($conn,$q);
 $num = mysqli_num_rows($run_q);
 //echo $q;
 if($num >=1)
 {
 $fetch_g = "select Q.QUALIFICATION,Q.QUALIFICATION_TYPE, AQ.REG_ID, AQ.QUALIFICATION_ID, AQ.INSTITUTION, AQ.YEAR_OF_PASSING, AQ.PERCENTAGE from  APPLICANT_QUALIFICATION AQ JOIN QUALIFICATION Q ON AQ.QUALIFICATION_ID = Q.QUALIFICATION_ID && Q.QUALIFICATION_TYPE='Post Graduation' && AQ.REG_ID = $REG_ID";
 //echo $fetch_g; die();
 $run_g = mysqli_query($conn,$fetch_g);
 while($datag = mysqli_fetch_array($run_g))

 {

?>
<div class="row form-group">
              
               <div class="col-12 col-md-6">
                   <label for="disabledSelect" class=" form-control-label">Qualification</label>
                     <select name="qualification10" id="qualification10" class="form-control">
                       <option  value="<?php echo $datag['QUALIFICATION_ID'];?>"><?php echo $datag['QUALIFICATION'];?></option>
                       <?php
                      while($row_grad=mysqli_fetch_array($grad_query)){ ?>
<option value="<?php echo $row_grad['QUALIFICATION_ID']; ?>"><?php echo $row_grad['QUALIFICATION']; ?></option>
  <?php   }  ?>
                       
                     </select>
                   </div>
                   
                   <div class="col-12 col-md-6">
                   <label for="disabledSelect" class=" form-control-label">Institution</label>
                   <input type="text" id="institute10" name="institute10" value="<?php echo $datag['INSTITUTION'];?>" placeholder="" class="form-control">
                   </div>
               </div>


               <div class="row form-group">
               <div class="col-lg-6 col-md-12 col-sm-12 yop1">
               <div class="col-lg-6 col-md-6 col-sm-12">
                   <label for="disabledSelect" class=" form-control-label">Year of passing</label>
                   <input type="number" id="yop10" name="yop10" placeholder="" value="<?php echo $datag['YEAR_OF_PASSING'];?>" class="form-control">
                   </div>
                   <div class="col-lg-6 col-md-6 col-sm-12">
                   <label for="disabled-input" class=" form-control-label">Percentage</label>
                   <input type="number" id="percentage10" name="percentage10" value="<?php echo $datag['PERCENTAGE'];?>" placeholder="" class="form-control">

               </div>
               </div>
               </div>
    
     <?php } } 
     else { ?>
<div class="row form-group">
                       
                       <div class="col-12 col-md-6">
                           <label for="disabledSelect" class=" form-control-label">Qualification</label>
                             <select name="qualification4" id="qualification4" class="form-control">
                               <option value="0">Select Post Graduation</option>
                               <?php
                               while($row_grad=mysqli_fetch_array($grad_query)){ ?>
<option value="<?php echo $row_grad['QUALIFICATION_ID']; ?>"><?php echo $row_grad['QUALIFICATION']; ?></option>
          <?php   } ?>
                               
                             </select>
                           </div>
                           
                           <div class="col-12 col-md-6">
                           <label for="disabledSelect" class=" form-control-label">Institution</label>
                           <input type="text" id="institute4" name="institute4" value="" placeholder="" class="form-control">
                           </div>
                       </div>


                       <div class="row form-group">
                       <div class="col-lg-6 col-md-12 col-sm-12 yop1">
                       <div class="col-lg-6 col-md-6 col-sm-12">
                           <label for="disabledSelect" class=" form-control-label">Year of passing</label>
                           <input type="number" id="yop4" name="yop4" placeholder="" value="" class="form-control">
                           </div>
                           <div class="col-lg-6 col-md-6 col-sm-12">
                           <label for="disabled-input" class=" form-control-label">Percentage</label>
                           <input type="number" id="percentage4" name="percentage4" value="" placeholder="" class="form-control">
    
                       </div>
                       </div>
                       </div>
                               <?php } ?>