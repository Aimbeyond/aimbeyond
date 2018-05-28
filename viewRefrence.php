<?php
include("header.php");

$sql = 'SELECT * FROM REFRENCE_TABLE';

$result = mysqli_query($conn, $sql);



?> 

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

<!-- Header-->
<header id="header" class="header">

    <div class="header-menu">


        <div class="col-sm-12">
        <a id="menuToggle" class="menutoggle pull-left"> <img src="images/menu_bar.png" ></a>
            <p>View Profiles</p>
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
                        <th class="th2">Employer Name</th>
                       
                        <th class="th3">JOB_TITLE</th>
                      
                        <th class="th4">Applicant Name</th>
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
    $page_query = "SELECT * FROM APPLICANT_DETAIL ORDER BY REG_ID ASC";
    $page_result = mysqli_query($conn, $page_query);
    $total_records = mysqli_num_rows($page_result);
    $total_pages = ceil($total_records/$record_per_page);
    $start_loop = $page;
    $difference = $total_pages - $page;
    if($difference <= 5)
    {
     $start_loop = $total_pages - 5;
    }
    $end_loop = $start_loop + 4;?>
    <ul class="pagination">
    <?php
    if($page > 1)
    {?>
   
    <li><?php echo "<a href='viewProfiles.php?page=1'>First</a>"?></li>
     
     <li><?php  echo "<a href='viewProfiles.php?page=".($page - 1)."'><<</a>";?></li>
         <?php
    }
    for($i=$start_loop; $i<=$end_loop; $i++)
    {      ?>
     <li><?php echo "<a href='viewProfiles.php?page=".$i."'>".$i."</a>"; ?></li>
     <?php 
    }
    if($page <= $end_loop)
    {?>
      <li> <?php echo "<a href='viewProfiles.php?page=".($page + 1)."'>>></a>";?> </li>
      <li>  <?php echo "<a href='viewProfiles.php?page=".$total_pages."'>Last</a>";?> </li></ul
      <?php
    }
    ?>






                  <!-- pagination -->
                 
                    <!-- <div class="pag-float">
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
                    </div> -->
                </div>
      


                </div>
            </div>

 
 </div><!-- /#right-panel -->

<!-- Right Panel -->
</div>
</div>
</div>


<script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>

        


</body>
</html>
