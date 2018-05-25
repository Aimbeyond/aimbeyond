<?php


include("header.php");
$regId=$_GET['regId'];
//echo $regId;die();


//search

if(isset($_POST['search'])) {
   
    $search=$_POST['search_keyword'];
    $searchSkill=$_POST['search_skill'];
   
    // $search=preg_replace("#[^0-9a-z]#i","",$search);
    // $searchSkill=preg_replace("#[^0-9a-z]#i","",$searchSkill);


  //$sql = "SELECT DISTINCT a.*, b.*,c.* FROM JOB_SKILL a  JOIN SKILL b ON a.SKILL_ID=b.SKILL_ID JOIN JOB_DETAIL c ON a.JOB_ID=c.JOB_ID WHERE c.KEYWORDS LIKE '%$search%' && b.SKILL_NAME LIKE '%$searchSkill%'";
    if($_POST['search_keyword'] != ""){
      $sql="SELECT DISTINCT  b.*,c.* FROM JOB_DETAIL as b JOIN  JOB_SKILL as c ON b.JOB_ID=c.JOB_ID WHERE b.KEYWORDS LIKE '%$search%'";
    }
    if($_POST['search_skill']!=""){  
      $sql1="select * from SKILL where SKILL_NAME LIKE '%$searchSkill%'" ;
        $skillresult=mysqli_query($conn,$sql1);
        $skillrow=mysqli_fetch_array($skillresult);
        $skillid=$skillrow['SKILL_ID'];
      $sql="SELECT DISTINCT  b.*,c.* FROM JOB_DETAIL as b JOIN  JOB_SKILL as c ON b.JOB_ID=c.JOB_ID WHERE c.SKILL_ID LIKE '%$skillid%'";
    }

 //echo $sql; die();
  
 // echo $sql; die();
  $result=mysqli_query($conn,$sql);
  $count_search=mysqli_num_rows($result);
  //echo $count_search;
  //echo $sql;die(); 
 




    // $result=mysqli_query($conn,"select * from JOB_DETAIL WHERE KEYWORDS LIKE '%$search%'");
    // //echo "select * from JOB_DETAIL WHERE KEYWORDS LIKE '%$search%'";
    // $count_search=mysqli_num_rows($result);

    
}
 else{
    $query = "select * from JOB_DETAIL";
    $result = mysqli_query($conn,$query);
    $count_search=mysqli_num_rows($result);
    //echo $count_search;die();
    $i=1;
 }





?>

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

<!-- Header-->
<header id="header" class="header">

    <div class="header-menu">


        <div class="col-sm-12">
        <a id="menuToggle" class="menutoggle pull-left"> <img src="images/menu_bar.png" ></a>
            <p>Job Listing</p>
        </div>
        

    </div>

</header>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="card">
                      
                        <div class="card-header top">
                        <strong>Search Job</strong> 
                        </div>
                       
                      <div class="card-body card-block">
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                          
                        <div class="row form-group">
                          
                            <div class="col-lg-4 col-md-6 col-sm-12">
                                <input type="text" id="search_keyword" name="search_keyword" placeholder="by keyword" class="form-control searchfield">
                            </div>

                            <div class="col-lg-4 col-md-6 col-sm-12">
                            <input type="text" id="search_skill" name="search_skill" placeholder="by skills" class="form-control searchfield">
                            </div>
                            <div class="col-lg-4 col-md-6 col-sm-12">
                            <button type="submit" class="searchbtn" name="search" id="search">Search</button>
                            </div>

                            </div>
                            </form>
                            </div>

                        <hr>

                      <div class="card-body card-block">
                     
                        <form action="" method="post" enctype="multipart/form-data" class="form-horizontal">
                          
                          <div class="row form-group">
                          <?php 
                          if($count_search > 0)
                          {
                                while($data=mysqli_fetch_array($result))
                                {
                                ?>
                             <div class="col-lg-4 col-md-12 col-sm-12">
                              
                             <table class="table table-responsive table-detail division">
                             <thead><th><p><?php echo $data['JOB_TITLE']; ?></p></thead>
                                <tbody>
                                    <tr>
                                    <td><label class=" form-control-label">Job Title</label></td>
                                    <td><p><?php echo $data['JOB_TITLE']; ?></p></td>
                                    </tr>
                                    <tr>
                                    <td><label class=" form-control-label">Salary</label></td>
                                    <td><p><?php echo $data['SALARY']; ?></p></td>
                                    </tr>


                                    <?php
                                        $jobquery = "select * from JOB_SKILL WHERE JOB_ID='".$data['JOB_ID']."'";
                                        //echo $jobquery; die();
                                        $jobresult = mysqli_query($conn,$jobquery);
                                        $dataSkill=mysqli_fetch_array($jobresult);
                                        ?>
                                    <tr>
                          <td><label class=" form-control-label">Skills:</label></td>
                          <td>
                          <?PHP 
                         $skill= explode(",", $dataSkill['SKILL_ID']);
                         $count=count($skill);  
                                         //echo $count;die();                             
                                         for($i=0;$i<$count; $i++){
                                         $fetch_dataS = "SELECT * FROM SKILL WHERE SKILL_ID='".$skill[$i]."'";
                                         //echo $fetch_dataS;die();
                                         $run_dataS = mysqli_query($conn, $fetch_dataS);
                                         $rowS = mysqli_fetch_array($run_dataS);
                         ?>
                          <?php echo $rowS['SKILL_NAME'];
                                          $x=$count-1;
                                         if($x==$i){echo "";}
                                         else{
                                            echo ",  ";
                                         }
                                         } 
                                         ?>
                                           
                                         </td>
                        </tr> 




                                    <tr>
                                    <td><label class=" form-control-label">Experience</label></td>
                                    <td><p><?php echo $data['EXPERIENCE']; ?></p></td>
                                    </tr>
                                    <tr>
                                    <td><a href="jobApplySource.php?id=<?php echo $data['JOB_ID'];?>&regId=<?php echo $regId;?>"><button type="button" class="apply" name="add_<?php echo $i;?>" id="add">APPLY</button></a></td>
                                    
                                    </tr>
                                </tbody>
                            </table>
                            </div>
                            
                            <?php $i++; } } else { ?>
                                <p>No Result Found</p>
                            <?php } ?>
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

    


</body>
</html>
