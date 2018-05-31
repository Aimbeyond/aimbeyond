<?php
session_start();
include('connection.php');
if(! $_SESSION['emailId']){
    header("location:login.php");
    }
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
                         <h4 class="menu-title">WELCOME <?php echo $row['USER_NAME'];?></h4>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Your Schedule Interviews</a>
                        
                        <ul class="sub-menu children dropdown-menu">
              
                        <li> <i class="fa fa-plus"></i> <a href="interviewerPanel.php">View Scheduled Interviews</a> </li>
                                
                                
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
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Applicant Status </a>
                        
                        <ul class="sub-menu children dropdown-menu">
                        <li><i class="fa fa-plus"></i><a href="addApplicantStatus.php">Add Applicant Status</a></li>
                        <li><i class="fa fa-building"></i><a href="viewStatus.php">View Applicant Status</a></li>
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
                    
    <!-- Left Panel -->
