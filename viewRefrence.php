<?php
include("header.php");

$sql = 'SELECT * FROM REFRENCE_TABLE';

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

$query = "SELECT * FROM REFRENCE_TABLE order by REFRENCE_ID DESC LIMIT $start_from, $record_per_page";

$result = mysqli_query($conn, $query);




?> 

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

<!-- Header-->
<header id="header" class="header">

    <div class="header-menu">


        <div class="col-sm-12">
        <a id="menuToggle" class="menutoggle pull-left"> <img src="images/menu_bar.png" ></a>
            <p>View References</p>
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
                        <th class="th3">Employer Name</th>
                       
                        <th class="th3">JOB_TITLE</th>
                      
                        <th class="th8">Applicant Name</th>
                        <th class="th5">Resume</th>
                        
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
                          <td><?php echo $data['EMPLOYER_NAME']; ?></td>
                          <?PHP 
                             $fetch_job = "SELECT * FROM JOB_DETAIL where JOB_ID='".$data['JOB_ID']."'";

                             $fetch_job = mysqli_query($conn, $fetch_job);
                           
                             while($data_job = mysqli_fetch_array($fetch_job))
                            {    
                              
                              ?>

                          <td><?php echo $data_job['JOB_TITLE'] ?></td>
                          <?php }  ?>
                          
                          <td><?php echo $data['APPLICANT_NAME']; ?></td>
                          <td><a href="resume/<?php echo $data['APPLICANT_RESUME'] ?>" target="_blank" style="margin-left:2%;"><?php echo $data['APPLICANT_RESUME']; ?></a></td>
                          
                      </tr>
                        
                      <?php $i++; }  ?>
                   
                      
                    </tbody>
                    
        
                  </table>

                    
                    <div class="pag-float">
                  
                  <?php
                      $page_query = "SELECT * FROM REFRENCE_TABLE ORDER BY REFRENCE_ID ASC";
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
                     
                      <li><?php echo "<a href='viewRefrence.php?page=1'>First</a>"?></li>
                       
                       <li><?php  echo "<a href='viewRefrence.php?page=".($page - 1)."'><<</a>";?></li>
                           <?php
                      }
                      for($i=1; $i<=$total_pages; $i++)
                      {      ?>
                       <li><?php echo "<a href='viewRefrence.php?page=".$i."'>".$i."</a>"; ?></li>
                       <?php 
                      }
                      if($page <= $end_loop)
                      {?>
                        <li> <?php echo "<a href='viewRefrence.php?page=".($page + 1)."'>>></a>";?> </li>
                        <li>  <?php echo "<a href='viewRefrence.php?page=".$total_pages."'>Last</a>";?> </li></ul>
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
