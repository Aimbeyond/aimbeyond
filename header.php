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
                 <label class=" label loginname">Username</label>
                 <label class=" label logout">Logout</label> 
                
            <div id="main-menu" class="main-menu collapse navbar-collapse">
          
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                    
                   
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Candidate Records</a>
                        <ul class="sub-menu children dropdown-menu">


                                           
                                           <?php

                            // if(($_SESSION["email_id"]=="hr@gmail.com"))
                            // {




                               
                                    $USER_TYPE_ID=$row['USER_TYPE_ID'];
                                    $EMAIL=$row['EMAIL_ID'];
                                    
                                    //$USER_ID=$row['USER_ID'];
                                      //echo $TYPE_ID;  
                                      
                                      



                                      $fetch_data= "SELECT * from APPLICANT_QUALIFICATION  WHERE REG_ID = '".$row['REG_ID']."'";
                                      
                                      $run_data= mysqli_query($conn, $fetch_data);
                                     
                                      $num = mysqli_num_rows($run_data);

                                 



                                if($TYPE_ID == 1)
                                {   
                                   
                                    ?>
                               
                                <li><i class="fa fa-puzzle-piece"></i><a href="Updatedata.php?id=<?php echo $row['USER_ID']?>&regs_id=<?php echo $row['REG_ID']?>">Update Candidate Info</a></li>
                                <?php if($num < 1) { ?>
                                <li><i class="fa fa-id-badge"></i><a href="Addqualification.php?id=<?php echo $row['REG_ID']?>">Add Qualification </a></li>
                                <?php } ?>
                                <li><i class="fa fa-id-badge"></i><a href="view.php?id=<?php echo $row['REG_ID']?>">View Candidate Info </a></li>
                                <?php
                                    
                                }


                               


                                else{

                                ?>


                                <li><i class="fa fa-puzzle-piece"></i><a href="AddCandidate.php">Add Candidates</a></li>
                                <li><i class="fa fa-id-badge"></i><a href="ViewCandidates.php">View Candidates</a></li>
                                <li><i class="fa fa-id-badge"></i><a href="post_job.php">Post Job</a></li>
                                <li><i class="fa fa-id-badge"></i><a href="view_all_jobs.php">View Jobs</a></li>
                                <?php

                                }
                                    
                               
                                    
                                   
                                    
                                     //echo $num; print_r($run_data); die(); 
                        ?>

  
                        </ul>
                    </li>


                    
                    
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->
