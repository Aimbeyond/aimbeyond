<?php
include("header.php");

            $sql = 'SELECT * FROM JOB_DETAIL';

            $result = mysqli_query($conn, $sql);          
            
?>

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

<!-- Header-->
<header id="header" class="header">

    <div class="header-menu">


        <div class="col-sm-12">
        <a id="menuToggle" class="menutoggle pull-left"> <img src="images/menu_bar.png" ></a>
            <p>View Jobs</p>
        </div>
        

    </div>

</header><!-- /header -->
<!-- Header-->
<!-- table -->
<div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">

                <div class="col-md-12">
                    
                        <div class="card-body">
                  <table id="bootstrap-data-table" class="table table-striped table-bordered table-responsive">
                    <thead>
                      <tr class="tbhead">
                        <th class="th1">S No.</th>
                        <th class="th2">Job Title</th>
                        <th class="th3">Salary</th>
                        <th class="th4">Experience</th>
                        <th class="th5">Keywords</th>
                        <th class="th6">Candidates Applied</th>
                        <th class="th7" >Action</th>
                      </tr>
                    </thead>
                    <tbody>
                       <?php 
                       $i=1;
                                while($data=mysqli_fetch_array($result))
                                {
                                  
                                ?>
                      <tr>
                      
                          <td><?php echo $i; ?></td>
                          <td><?php echo $data['JOB_TITLE']; ?></td>
                          <td><?php echo $data['SALARY']; ?></td>
                          <td><?php echo $data['EXPERIENCE']; ?></td>
                          <td><?php echo $data['KEYWORDS']; ?></td>
                          <?php 
                                    $sql = "SELECT * FROM JOB_APPLY WHERE JOB_ID='".$data['JOB_ID']."'";
                                    $result_sql = mysqli_query($conn, $sql);
                                    $num_sql = mysqli_num_rows($result_sql);
                                    //echo $num_sql;die();
                             ?>
                          <td><a class="ancon" href="appliedCandidates.php?jobId=<?php echo $data['JOB_ID'];?>">Applied Candidate - <?php echo $num_sql; ?></a></td>
                          <td>
                          <a href="jobDescriptionDetail.php?jobId=<?php echo $data['JOB_ID'];?>" class="view-tag" ><img src="images/ico_view.png" alt="User Avatar"></a>
                          
                          
                                    <a href="updateJob.php?id=<?php echo $data['JOB_ID']?>" class="edit-tag" ><img src="images/ico_edit.png" alt="User Avatar"></a>
                          
                        
                                    <a href="#" onclick="myFunction(<?php echo $data['JOB_ID']?>)"><img src="images/ico_delete.png" alt="User Avatar"></a>
                          </td>
                      </tr>
              
                    
                   
                      <?php $i++; }  ?>
                    </tbody>
                    
        
                  </table>
                  <!-- pagination -->
                 
                    <div class="pag-float">
                  <div class="pagination">
  <a class="pre1" href="#">Previous</a>
  <a href="#">1</a>
  <a href="#">2</a>
  <a href="#">3</a>
  <a href="#">4</a>
  <a href="#">5</a>
  <a href="#">6</a>
  <a class="pre2" href="#">Next</a>
</div>
</div>

                        </div>
                    </div>
                </div>
      


                </div>
            </div>

 
 </div><!-- /#right-panel -->

<!-- Right Panel -->


<script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>



</body>
</html>

<script type="text/javascript">
        function myFunction(i) {
        if (confirm("Are you sure you want to delete data!!!!")) {

            window.location='deleteJob.php?id='+i;
                
            } else {
                window.location='viewJobs.php';
            }
            
        }
        </script>