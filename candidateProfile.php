<?php
include("header.php");
$regId=$_GET['regId'];

include ("candidateProfileSource.php");
?>

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

<!-- Header-->
<header id="header" class="header">

    <div class="header-menu">


        <div class="col-sm-6">
            <a id="menuToggle" class="menutoggle pull-left"> <img src="images/menu_bar.png" ></a>
            <p>Candidate Profile</p> 
        </div>

    </div>

</header><!-- /header -->
<!-- Header-->

       

        <div class="content mt-3">
            <div class="animated fadeIn">


                <div class="row">
                  
                  <div class="col-lg-12">
                    <div class="card">
                      
                     
                        <div class="card-header top">
                        <strong>Personal Details</strong>  <button type="button" class="editProfile float-right" name="add" id="add">EDIT PROFILE</button>
                        </div>
                       
                      <div class="card-body card-block">
                      <?php $row = mysqli_fetch_array($retval) ?>
   
        <table class="table table-responsive table-detail">            
             <tbody>
                    <tr>
                          <td><label class=" form-control-label">Resume:</label></td>
                          <td><p><?php echo $row['APPLICANT_RESUME'] ?></p></td>
                    </tr>
                    <tr>
                          <td><label class=" form-control-label">Full name:</label></td>
                          <td><p><?php echo $row['APPLICANT_NAME'] ?></p></td>
                    </tr>
                    <tr>
                          <td><label class=" form-control-label">Email Address:</label></td>
                          <td><p><?php echo $row['EMAIL_ID'] ?></p></td>
                    </tr> 
                    <tr>
                          <td><label class=" form-control-label">Contact No.:</label></td>
                          <td><p><?php echo $row['CONTACT_NUMBER'] ?></p></td>
                    </tr>
            </tbody>
        </table>
                          



                         <div class="card-header experienceDetail">
                        <strong>Experience Details</strong> 
                      </div>
                            
                <table class="table table-responsive table-detail">      
                    <tbody>
                        <tr>
                          <td><label class=" form-control-label">Experience:</label></td>
                          <td><p><?php echo $row['EXPERIENCE_IN_YEAR']?> year <?php echo $row['EXPERIENCE_IN_MONTH']?> month </p></td>
                        </tr>
                        
                        <?PHP $sql1 = "SELECT * FROM SKILL WHERE SKILL_ID='".$row['SKILL_ID']."'";
                              $retval1 = mysqli_query($conn, $sql1);
                              $row1 = mysqli_fetch_array($retval1)
                         ?>
                        <tr>
                          <td><label class=" form-control-label">Skills:</label></td>
                          <td><p><?php echo $row1['SKILL_NAME']?></p></td>
                        </tr> 
                        <tr>
                          <td><label class=" form-control-label">Previous Package:</label></td>
                          <td><p><?php echo $row['PACKAGE']?></p></td>
                        </tr>
                        <tr>
                          <td><label class=" form-control-label">Notice Period:</label></td>
                          <td><p><?php echo $row['NOTICE_PERIOD']?></p></td>
                        </tr>
                    </tbody>
                </table>
                          
                <?PHP $select_10 = "SELECT * FROM APPLICANT_QUALIFICATION WHERE REG_ID='$regId'";    
                $retval_10 = mysqli_query($conn, $select_10) or die(mysqli_error());
                while($row_10 = mysqli_fetch_array($retval_10))
                {                    
                ?>
            <div class="card-header qualificationDetail">
                        <strong>Qualification Details</strong> 
            </div>
                <table class="table table-responsive table-detail">
                    <tbody>
                    <?php 
                     $quali = "SELECT * FROM QUALIFICATION WHERE QUALIFICATION_ID='".$row_10['QUALIFICATION_ID']."'";                     
                        $quali_data = mysqli_query($conn, $quali);
                        $row_quali = mysqli_fetch_array($quali_data)
                      ?>
                        <tr>
                            <td><label class=" form-control-label">Qualification:</label> </td>
                            <td><p><?php echo $row_10['QUALIFICATION']?></p></td>
                        </tr>
                        <tr>
                            <td><label class=" form-control-label">Institution:</label></td>
                            <td><p><?php echo $row_10['INSTITUTION']?></p></td>
                        </tr> 
                        <tr>
                            <td><label class=" form-control-label">Year of passing:</label></td>
                            <td><p> <?php echo $row_10['YEAR_OF_PASSING']?></p></td>
                        </tr>
                        <tr>
                            <td><label class=" form-control-label">Percentage:</label></td>
                            <td><p><?php echo $row_10['PERCENTAGE'] ?></p></td>
                        </tr>
                    </tbody>
                    
                </table>
                 <?php } ?> 
   
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
