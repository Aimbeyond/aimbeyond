<?php
include("header.php");

$sql = 'SELECT * FROM JOB_DETAIL';
$result = mysqli_query($conn, $sql);          
$record_per_page = 5;

if(isset($_GET["page"]))
{
 $page = $_GET["page"];
 
}
else
{
 $page = 1;
 
}
if(isset($_GET["page"]) && $page>1){
    $j=5*($page-1)+1;
}
else{
    $j=1;
}

$start_from = ($page-1)*$record_per_page;

$query = "SELECT * FROM JOB_DETAIL order by JOB_ID DESC LIMIT $start_from, $record_per_page";

$result = mysqli_query($conn, $query);
            
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
                  
                  <?php
                      $page_query = "SELECT * FROM JOB_DETAIL ORDER BY JOB_ID ASC";
                      $page_result = mysqli_query($conn, $page_query);
                      $total_records = mysqli_num_rows($page_result);
                      $total_pages = ceil($total_records/$record_per_page);
                      $start_loop = $page;
                      $difference = $total_pages - $page;
                      if($difference <= 5)
                      {
                      $start_loop = $total_pages - 5;
                      }
                     $end_loop = $start_loop + 4;
                      $end_loop=$total_pages;
                      ?>
                      <ul class="pagination">
                      <?php
                      if($page > 1)
                      {?>
                     
                      <li><?php echo "<a href='viewJobs.php?page=1'>First</a>"?></li>
                       
                       <li><?php  echo "<a href='viewJobs.php?page=".($page - 1)."'><<</a>";?></li>
                           <?php
                      }
                      for($i=1; $i<=$total_pages; $i++)
                      {      ?>
                       <li><?php echo "<a href='viewJobs.php?page=".$i."'>".$i."</a>"; ?></li>
                       <?php 
                      }
                      if($page <= $end_loop)
                      {?>
                        <li> <?php echo "<a href='viewJobs.php?page=".($page + 1)."'>>></a>";?> </li>
                        <li>  <?php echo "<a href='viewJobs.php?page=".$total_pages."'>Last</a>";?> </li></ul>
                        <?php
                      }
                      ?>
                        


                        </div>
                    </div>
                </div>
      


                </div>
            </div>

 
 </div><!-- /#right-panel -->

</div><!-- Right Panel -->

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