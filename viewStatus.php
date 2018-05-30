<?php
include("header.php");
 $sql = 'SELECT * FROM APPLICANT_STATUS';
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

$query = "SELECT * FROM APPLICANT_STATUS order by REG_ID DESC LIMIT $start_from, $record_per_page";

$result = mysqli_query($conn, $query);



?>

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

<!-- Header-->
<header id="header" class="header">

    <div class="header-menu">


        <div class="col-sm-12">
        <a id="menuToggle" class="menutoggle pull-left"> <img src="images/menu_bar.png" ></a>
            <p>View Applicant Status</p>
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
                        <th class="th2">Name</th>
                        <th class="th3">Job Title</th>
                        <th class="th4">Round Name</th>
                        <th class="th5">Status</th>
                        <th class="th6">Status Date</th>
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
                     
                          <td><?php echo  $i; ?></td>
                          <?php 
                          $sqlDetail = "SELECT * FROM APPLICANT_DETAIL WHERE REG_ID='".$data['REG_ID']."'";

                          $resultDetail = mysqli_query($conn, $sqlDetail);
                          $rowDetail = mysqli_fetch_array($resultDetail)
                          ?>

                          <td><?php echo $rowDetail['APPLICANT_NAME']; ?></td>
                          <?php 
                          $sqlJobDetail = "SELECT * FROM JOB_DETAIL WHERE JOB_ID='".$data['JOB_ID']."'";

                          $resultJobDetail = mysqli_query($conn, $sqlJobDetail);
                          $rowJobDetail = mysqli_fetch_array($resultJobDetail)
                          ?>

                          <td><?php echo $rowJobDetail['JOB_TITLE']; ?></td>
                          <?php 
                          $sqlRoundDetail = "SELECT * FROM INTERVIEW_ROUND WHERE ROUND_ID='".$data['ROUND_ID']."'";

                          $resultRoundDetail = mysqli_query($conn, $sqlRoundDetail);
                          $rowRoundDetail = mysqli_fetch_array($resultRoundDetail)
                          ?>
                          <td><?php echo $rowRoundDetail['ROUND_NAME']; ?></td>
                          <?php 
                          $sqlStatusDetail = "SELECT * FROM INTERVIEW_STATUS WHERE INTERVIEW_STATUS_ID='".$data['INTERVIEW_STATUS_ID']."'";

                          $resultStatusDetail = mysqli_query($conn, $sqlStatusDetail);
                          $rowStatusDetail = mysqli_fetch_array($resultStatusDetail)
                          ?>
                          <td><?php echo $rowStatusDetail['INTERVIEW_STATUS']; ?></td>
                          <td><?php echo $data['STATUS_DATE']; ?></td>
                          <td>
                                 <a href="applicantStatusDetail.php?regId=<?php echo $data['REG_ID'];?>" class="view-tag" ><img src="images/ico_view.png" alt="User Avatar"></a>
                          
                          
                                    <a href="updateApplicantStatus.php?id=<?php echo $data['REG_ID']?>" class="edit-tag" ><img src="images/ico_edit.png" alt="User Avatar"></a>
                          
                        
                                    <a href="#"><img src="images/ico_delete.png" alt="User Avatar"></a>
                          </td>
                      </tr>
                      
                   
                      <?php $i++; }  ?>
                    </tbody>
                    
        
                  </table>
                  <div class="pag-float">
                  
                  <?php
                      $page_query = "SELECT * FROM APPLICANT_STATUS ORDER BY REG_ID ASC";
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
                     
                      <li><?php echo "<a href='viewStatus.php?page=1'>First</a>"?></li>
                       
                       <li><?php  echo "<a href='viewStatus.php?page=".($page - 1)."'><<</a>";?></li>
                           <?php
                      }
                      for($i=1; $i<=$total_pages; $i++)
                      {      ?>
                       <li><?php echo "<a href='viewStatus.php?page=".$i."'>".$i."</a>"; ?></li>
                       <?php 
                      }
                      if($page <= $end_loop)
                      {?>
                        <li> <?php echo "<a href='viewStatus.php?page=".($page + 1)."'>>></a>";?> </li>
                        <li>  <?php echo "<a href='viewStatus.php?page=".$total_pages."'>Last</a>";?> </li></ul>
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
