<?php
session_start();
//include("header.php");
//$jobId=$_GET['jobId'];
//echo $jobId;

?>
<?php
session_start();
include('connection.php');
// if(! $_SESSION['emailId']){
//     header("location:login.php");
//     }
$emailId=$_SESSION['emailId'];

$query = "select * from USER where EMAIL_ID = '$emailId'";
//echo $query; die();
$result = mysqli_query($conn,$query);
$row=mysqli_fetch_array($result);
$userType=$row['USER_TYPE_ID'];
//echo $userType;die();

$queryregId = "select * from APPLICANT_DETAIL where EMAIL_ID = '$emailId'";
//echo $queryregId;die();
$resultregId = mysqli_query($conn,$queryregId);
$rowregId=mysqli_fetch_array($resultregId);
$regId=$rowregId['REG_ID'];
//echo $regId;die();
?>
<!doctype html>
<html class="no-js" lang=""> 
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Aimbeyond</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">
    <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
  <script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>

 <script type="text/javascript" src="assets/js/bootstrap-filestyle.min.js"> </script>
  

  <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
    <link rel="stylesheet" href="assets/css/bootstrap-multiselect.css" type="text/css">
        <script type="text/javascript" src="assets/js/bootstrap-multiselect.js"></script>
    
    <link rel="stylesheet" href="assets/css/form.css">
    <link rel="stylesheet" href="assets/css/view.css">



    <style>

    .col-lg-9{
        margin:0px auto;
    }
    .view{
        margin:0px auto;
    }
    .fixed{
        color:red;
    }

    </style>


</head>
<body>



  <!-- Left Panel -->
<?php if($userType==2 ){?>
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default1">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href=""><img src="images/left_panel_logo.png" ></a>
              
            </div>
    `            
             
                 <label><a class="userimg"><img src="images/user.png" ></label>
                 <div class="name">
                 <label class=" label loginname"><?php echo $row['USER_NAME'];?></label>
                    </div>
                    <div class="logoutbtn">
                 <a href="logout.php"><label class=" label logout" id="logout">Logout</label></a>
                 </div>

                    <div id="main-menu" class="main-menu collapse navbar-collapse">
                            
                    <ul class="nav navbar-nav">
                                
              <?php if($userType==3){ ?>
                         <h4 class="menu-title">CANDIDATE</h4>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Your Schedule Interviews</a>
                        
                        <ul class="sub-menu children dropdown-menu">
              
                        <li> <i class="fa fa-plus"></i> <a href="interviewerPanel.php">View Sheduled Interviews</a> </li>
                                
                                
                        </ul>
                    </li>

<?php 
                    } if($userType==2) {
                    
                    ?>


                 <li class="active">
                  <a href="index.php"> <i class="menu-icon fa fa-dashboard dashboard"></i>Dashboard </a>
                 </li>
            


                    <h4 class="menu-title">CANDIDATE</h4>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Candidate Records</a>
                        
                        <ul class="sub-menu children dropdown-menu">
              
                        <li><i class="fa fa-plus"></i><a href="addProfile.php">Add Profile</a></li>
                                <li><i class="fa fa-building"></i><a href="viewProfiles.php">View Profile</a></li>
                        </ul>
                    </li>

                                            <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Qualification </a>
                        
                        <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-plus"></i><a href="addQualification.php">Add Qualification</a></li>
                        <li><i class="fa fa-building"></i><a href="viewQualification.php">View Qualification</a></li>
                        </ul>   
                    </li>

                                            <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Skills </a>
                        
                        <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-plus"></i><a href="addSkills.php">Add Skills</a></li>
                        <li><i class="fa fa-building"></i><a href="viewSkill.php">View Skills</a></li>
                        </ul>   
                    </li>

                        <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Applicant Status </a>
                        
                        <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-plus"></i><a href="addApplicantStatus.php">Add Applicant Status</a></li>
                        <li><i class="fa fa-building"></i><a href="viewStatus.php">View Applicant Status</a></li>
                        </ul>   
                    </li>


                        <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Refrence Form </a>
                        <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-plus"></i><a href="refrenceForm.php">Add Refrence Form</a></li>
                        <li><i class="fa fa-building"></i><a href="viewRefrence.php">View Refrence Form</a></li>
                        </ul> 
                        </li>

                        <h4 class="menu-title">JOB</h4>
                        
                        <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-puzzle-piece"></i> <a href="jobApply.php?id=<?php echo $regId?>">Jobs</a></li>
                        </ul>   
                    </li>

                        <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Job </a>
                        
                        <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-plus"></i><a href="addJob.php">Add Job</a></li>
                        <li><i class="fa fa-building"></i><a href="viewJobs.php">View Job</a></li>
                        </ul>   
                    </li>

                        <h4 class="menu-title">INTERVIEW</h4>

                        <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Interview Schedule </a>
                        
                        <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-plus"></i><a href="addInterviewSchedule.php">Add Schedule</a></li>
                        <li><i class="fa fa-building"></i><a href="viewInterviewSchedule.php">View Schedule</a></li>
                        </ul>   
                    </li>

                         <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Interviewer Detail </a>
                        
                        <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-plus"></i><a href="interviewerDetail.php">Add Detail</a></li>
                        <li><i class="fa fa-building"></i><a href="viewInterviewerDetail.php">View Detail</a></li>
                        </ul>   
                    </li>

                         <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Location </a>
                        
                        <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-plus"></i><a href="addLocation.php">Add Location</a></li>
                        <li><i class="fa fa-building"></i><a href="viewLocation.php">View Location</a></li>
                        </ul>   
                    </li>

                        <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Interview Round </a>
                        
                        <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-plus"></i><a href="addInterviewRounds.php">Add Round</a></li>
                        <li><i class="fa fa-building"></i><a href="viewRound.php">View Round</a></li>
                        </ul>   
                    </li>


                        <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Interview Status </a>
                        
                        <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-plus"></i><a href="addInterviewStatus.php">Add Interview Status</a></li>
                        <li><i class="fa fa-building"></i><a href="viewInterviewStatus.php">View Interview Status</a></li>
                        </ul>   
                    </li>
                    <?php } ?>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->
                    <?php } ?>
    <!-- Left Panel -->

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
                        <form action="addButton.php" method="post" name ="filterform" enctype="multipart/form-data" class="form-horizontal" onsubmit="return(validate())";>
                          
                          <div class="row form-group">
                          
                          <div class="form-group col-lg-6 col-md-6 col-sm-12">    
                        <label for="disabled-input" class="form-control-label">Add resume</label>
                        <div class="form-group resume">  
                        <input type="file" name="image" value="<?php echo $row['APPLICANT_RESUME'] ?>" id="resume">
                        </div>
                        <label class="attachment">(attached file should not more than 1MB)</label>
                        </div>

                        
                            
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <label for="disabled-input" class=" form-control-label">Full name</label>
                                <input type="text" id="full_name" name="full_name" value="" placeholder="" class="form-control">
                                <input type="hidden" class="form-control"  name ="jobId" id="jobId"   value=<?php echo $jobId ?> >
                            </div>

                            </div>

                            <div class="row form-group">
                        
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="disabled-input" class=" form-control-label">Email address</label>
                            <input type="Email" id="email_address" name="email_address" value="" placeholder="" class="form-control">
                        </div>
                        
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="disabled-input" class=" form-control-label">Contact no.</label>
                            <input type="number" id="contact_no" name="contact_no" value="" placeholder="" class="form-control" >
                        </div>

                        </div>



                        <div class="row form-group">
                        
                       
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            
                            <label for="location" class=" form-control-label">Location</label>
            
             
                              <select name="location" id="location" class="form-control skill" >
      
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
                            <input type="text" id="institute1" name="institute1" value="" placeholder="" class="form-control" >
                            </div>
                        </div>


                        <div class="row form-group">
                        <div class="col-lg-6 col-md-12 col-sm-12 yop1">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="disabledSelect" class=" form-control-label">Year of passing</label>
                            <input type="number" id="yop1" name="yop1" placeholder="" value="" class="form-control" >
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                            <label for="disabled-input" class=" form-control-label">Percentage</label>
                            <input type="number" id="percentage1" name="percentage1" value="" placeholder="" class="form-control" >
     
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
                                <input type="text" id="institute2" name="institute2" value="" placeholder="" class="form-control" >
                                </div>
                            </div>
                            <div class="row form-group">
                            <div class="col-lg-6 col-md-12 col-sm-12 yop2">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <label for="disabledSelect" class=" form-control-label">Year of passing</label>
                                <input type="number" id="yop2" name="yop2" placeholder="" value="" class="form-control" >
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                <label for="disabled-input" class=" form-control-label">Percentage</label>
                                <input type="number" id="percentage2" name="percentage2" value="" placeholder="" class="form-control" >
  
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
                                    <button type="submit" name="SUBMIT" id="SUBMIT" class="update">SUBMIT </button>
                                </div>
                            </div>
                          
                        </form>
                      </div>
                    </div>
                   
                 


            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->

<!------------------------------------------VALIDATION------------------------------------------------------>


<script type="text/javascript"> 
      function validate()
      {
        
         if( document.filterform.full_name.value == "" )
         {
            alert( "Please provide your name!" );
            document.filterform.full_name.focus() ;
            return false;
         }

                  if( document.filterform.email_address.value == "" )
         {
            alert( "Please provide your email address!" );
            document.filterform.email_address.focus() ;
            return false;
         }

                  if( document.filterform.contact_no.value == "" )
         {
            alert( "Please provide your contact number!" );
            document.filterform.contact_no.focus() ;
            return false;
         }

                  if( document.filterform.location.value == "" )
         {
            alert( "Please provide your Location!" );
            return false;
         }

                           if( document.filterform.experience_year.value == "" )
         {
            alert( "Please provide your experience in year!" );
            document.filterform.experience_year.focus() ;
            return false;
         }


                           if( document.filterform.institute1.value == "" )
         {
            alert( "Please provide your 10th institution" );
            document.filterform.institute1.focus() ;
            return false;
         }

                                    if( document.filterform.yop1.value == "0" )
         {
            alert( "Please provide your 10th year of passing!" );
            document.filterform.yop1.focus() ;
            return false;
         }

                           if( document.filterform.percentage1.value == "" )
         {
            alert( "Please provide your 10th percentage" );
            document.filterform.percentage1.focus() ;
            return false;
         }


                           if( document.filterform.institute2.value == "" )
         {
            alert( "Please provide your 12th institution!" );
            document.filterform.institute2.focus() ;
            return false;
         }

                                    if( document.filterform.yop2.value == "0" )
         {
            alert( "Please provide your 12th year of passing!" );
            document.filterform.yop2.focus() ;
            return false;
         }

                                    if( document.filterform.percentage2.value == "" )
         {
            alert( "Please provide your 12th percentage!" );
            document.filterform.percentage2.focus() ;
            return false;
         }

            var yop1= $("#yop1").val();

            var yop2 = $("#yop2").val();

            var yop3 = $("#yop3").val();

            var yop4 = $("#yop4").val();

            var yop5 = $("#yop5").val();

            if(yop1 >= yop2 )
            {

            alert('invalid year of passing ');

            return false;
            }
            if(yop2 >= yop3 )
            {

            alert('invalid year of passing ');

            return false;
            }
            if(yop3 >= yop4 )
            {

            alert('invalid year of passing ');

            return false;
            }
            if(yop2 >= yop5 )
            {

            alert('invalid year of passing ');

            return false;
            }


           return( true );     
        
    } 
             
</script>


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
