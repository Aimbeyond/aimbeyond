<!doctype html>
<?php 
include("updateProfileSource.php");
?>
<html>
<body>
<?php
          $q= "select * from APPLICANT_QUALIFICATION where REG_ID=$REG_ID ";
          $run_q = mysqli_query($conn,$q);
          $num = mysqli_num_rows($run_q);
          if($num >=1)
          {
          $fetch_g = "select Q.QUALIFICATION,Q.QUALIFICATION_TYPE, AQ.REG_ID, AQ.QUALIFICATION_ID, AQ.INSTITUTION, AQ.YEAR_OF_PASSING, AQ.PERCENTAGE from  APPLICANT_QUALIFICATION AQ JOIN QUALIFICATION Q ON AQ.QUALIFICATION_ID = Q.QUALIFICATION_ID && Q.QUALIFICATION_TYPE='Graduation' && AQ.REG_ID = $REG_ID";
          $run_g = mysqli_query($conn,$fetch_g);
          while($datag = mysqli_fetch_array($run_g))
     
          {
        
      ?>
<div class="row form-group">
                       
                        <div class="col-12 col-md-6">
                            <label for="disabledSelect" class=" form-control-label">Qualification</label>
                              <select name="qualification5" id="qualification5" class="form-control">
                                <option  value="<?php echo $datag['QUALIFICATION_ID'];?>"><?php echo $datag['QUALIFICATION'];?></option>
                                <?php
                                
                               session_start();
                               $_POST['qualification5'] = $grad;
                               
                                while($data_qual = mysqli_fetch_array($fetch_qualification))
            {    
              if($data_qual['QUALIFICATION_TYPE']=='Graduation'){ ?>
<option value="<?php echo $data_qual['QUALIFICATION_ID']; ?>"><?php echo $data_qual['QUALIFICATION']; ?></option>
           <?php   } } ?>
                                
                              </select>
                            </div>
                            
                            <div class="col-12 col-md-6">
                            <label for="disabledSelect" class=" form-control-label">Institution</label>
                            <input type="text" id="institute5" name="institute5" value="<?php echo $datag['INSTITUTION'];?>" placeholder="" class="form-control">
                            </div>
                        </div>


                        <div class="row form-group">
                        <div class="col-lg-6 col-md-12 col-sm-12 yop1">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="disabledSelect" class=" form-control-label">Year of passing</label>
                            <input type="number" id="yop5" name="yop5" placeholder="" value="<?php echo $datag['YEAR_OF_PASSING'];?>" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="disabled-input" class=" form-control-label">Percentage</label>
                            <input type="number" id="percentage5" name="percentage5" value="<?php echo $datag['PERCENTAGE'];?>" placeholder="" class="form-control">
     
                        </div>
                        </div>
                        </div>
              <?php } 
               $fetch_pg = "select Q.QUALIFICATION,Q.QUALIFICATION_TYPE, AQ.REG_ID, AQ.QUALIFICATION_ID, AQ.INSTITUTION, AQ.YEAR_OF_PASSING, AQ.PERCENTAGE from  APPLICANT_QUALIFICATION AQ JOIN QUALIFICATION Q ON AQ.QUALIFICATION_ID = Q.QUALIFICATION_ID && Q.QUALIFICATION_TYPE='Post Graduation' && AQ.REG_ID = $REG_ID";
               $run_pg = mysqli_query($conn,$fetch_pg);
               while($datapg = mysqli_fetch_array($run_pg))
          
               { ?>
<div class="row form-group">

                            <div class="col-12 col-md-6">
                                <label for="disabledSelect" class=" form-control-label">Qualification</label>
                                <select name="qualification6" id="qualification6" class="form-control">
                                    <option  value="<?php echo $datapg['QUALIFICATION_ID'];?>"><?php echo $datapg['QUALIFICATION'];?></option>
                                    <?PHP 
                                    $pg_id=$datapg['QUALIFICATION_ID'];
                                     $fetch_qualification = "SELECT * FROM QUALIFICATION";
                                     $fetch_qualification = mysqli_query($conn, $fetch_qualification);
                                     session_start();
                                     $_POST['qualification6'] = $pgrad;
                                     while($data_qual = mysqli_fetch_array($fetch_qualification))
            {    
              if($data_qual['QUALIFICATION_TYPE']=='Post Graduation'){ ?>
                    <option value="<?php echo $data_qual['QUALIFICATION_ID'] ?>" ><?php echo $data_qual['QUALIFICATION'] ?></option>
                <?php }  } ?>
                                    
                                </select>
                                </div>
                               
                                <div class="col-12 col-md-6">
                                <label for="disabledSelect" class=" form-control-label">Institution</label>
                                <input type="text" id="institute6" name="institute6" value="<?php echo $datapg['INSTITUTION'];?>" placeholder="" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">
                            <div class="col-lg-6 col-md-12 col-sm-12 yop2">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <label for="disabledSelect" class=" form-control-label">Year of passing</label>
                                <input type="number" id="yop6" name="yop6" placeholder="" value="<?php echo $datapg['YEAR_OF_PASSING'];?>" class="form-control">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                <label for="disabled-input" class=" form-control-label">Percentage</label>
                                <input type="number" id="percentage6" name="percentage6" value="<?php echo $datapg['PERCENTAGE'];?>" placeholder="" class="form-control">
  
                            </div>
                            
                            </div>
                            </div>
              <?php } } 
              
              else { ?> 
                <div class="row form-group">
                       
                        <div class="col-12 col-md-6">
                            <label for="disabledSelect" class=" form-control-label">Qualification</label>
                              <select name="qualification3" id="qualification3" class="form-control">
                                <option value="0">Select Qualification</option>
                                <?php
                                while($data_qual = mysqli_fetch_array($fetch_qualification))
            {    
              if($data_qual['QUALIFICATION_TYPE']=='Graduation'){ ?>
<option value="<?php echo $data_qual['QUALIFICATION_ID']; ?>"><?php echo $data_qual['QUALIFICATION']; ?></option>
           <?php   } } ?>
                                
                              </select>
                            </div>
                            
                            <div class="col-12 col-md-6">
                            <label for="disabledSelect" class=" form-control-label">Institution</label>
                            <input type="text" id="institute3" name="institute3" value="" placeholder="" class="form-control">
                            </div>
                        </div>


                        <div class="row form-group">
                        <div class="col-lg-6 col-md-12 col-sm-12 yop1">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="disabledSelect" class=" form-control-label">Year of passing</label>
                            <input type="number" id="yop3" name="yop3" placeholder="" value="" class="form-control">
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="disabled-input" class=" form-control-label">Percentage</label>
                            <input type="number" id="percentage3" name="percentage3" value="" placeholder="" class="form-control">
     
                        </div>
                        </div>
                        </div>
 
<div class="row form-group">

                            <div class="col-12 col-md-6">
                                <label for="disabledSelect" class=" form-control-label">Qualification</label>
                                <select name="qualification4" id="qualification4" class="form-control">
                                    <option value="0">Select Post Graduation</option>
                                    <?PHP 
                                     $fetch_qualification = "SELECT * FROM QUALIFICATION";
                                     $fetch_qualification = mysqli_query($conn, $fetch_qualification);
                                     while($data_qual = mysqli_fetch_array($fetch_qualification))
            {    
              if($data_qual['QUALIFICATION_TYPE']=='Post Graduation'){ ?>
                    <option value="<?php echo $data_qual['QUALIFICATION_ID'] ?>" ><?php echo $data_qual['QUALIFICATION'] ?></option>
                <?php }  } ?>
                                    
                                </select>
                                </div>
                               
                                <div class="col-12 col-md-6">
                                <label for="disabledSelect" class=" form-control-label">Institution</label>
                                <input type="text" id="institute4" name="institute4" value="" placeholder="" class="form-control">
                                </div>
                            </div>
                            <div class="row form-group">
                            <div class="col-lg-6 col-md-12 col-sm-12 yop2">
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
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                         <button type="submit" class="cancel">CANCEL</button>
                                </div>
                                
                                <div class="col-lg-6 col-md-6 col-sm-6">   
                                    <button type="submit" name="UPDATE" class="update">UPDATE </button>
                                </div>
                            </div>
                                                  
                            
</body>
</html>