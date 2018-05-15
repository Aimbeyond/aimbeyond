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
   <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
        <table class="table table-responsive table-detail">            
             <tbody>
                    <tr>
                          <td><label class=" form-control-label">Full name:</label></td>
                          <td><p>Divyanshu Bhardwaj</p></td>
                    </tr>
                    <tr>
                          <td><label class=" form-control-label">Email Address:</label></td>
                          <td><p>Divyanshu@gmail.com</p></td>
                    </tr> 
                    <tr>
                          <td><label class=" form-control-label">Contact No.:</label></td>
                          <td><p>9574865847</p></td>
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
                          <td><p>1 year</p></td>
                        </tr>
                        <tr>
                          <td><label class=" form-control-label">Skills:</label></td>
                          <td><p>HTML, CSS, MYSQL</p></td>
                        </tr> 
                        <tr>
                          <td><label class=" form-control-label">Previous Package:</label></td>
                          <td><p>Null</p></td>
                        </tr>
                        <tr>
                          <td><label class=" form-control-label">Notice Period:</label></td>
                          <td><p>Null</p></td>
                        </tr>
                    </tbody>
                </table>
                          

            <div class="card-header qualificationDetail">
                        <strong>Qualification Details</strong> 
            </div>
                <table class="table table-responsive table-detail">
                    <tbody>
                        <tr>
                            <td><label class=" form-control-label">Qualification:</label> </td>
                            <td><p>B.Tech(Computer Science)</p></td>
                        </tr>
                        <tr>
                            <td><label class=" form-control-label">Institution:</label></td>
                            <td><p>VCE</p></td>
                        </tr> 
                        <tr>
                            <td><label class=" form-control-label">Year of passing:</label></td>
                            <td><p>2017</p></td>
                        </tr>
                        <tr>
                            <td><label class=" form-control-label">Percentage:</label></td>
                            <td><p>64.6%</p></td>
                        </tr>
                    </tbody>
                </table>
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
