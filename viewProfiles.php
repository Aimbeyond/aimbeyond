<?php
include("header.php");

$sql = 'SELECT * FROM APPLICANT_DETAIL';

$result = mysqli_query($conn, $sql);

$record_per_page = 5;

if(isset($_GET["page"]))
{
 $page = $_GET["page"];
 $i=5*$page+1;
}
else
{
 $page = 1;
 $i=1;
}

$start_from = ($page-1)*$record_per_page;

$query = "SELECT * FROM APPLICANT_DETAIL order by REG_ID DESC LIMIT $start_from, $record_per_page";

$result = mysqli_query($conn, $query);



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
                        <th class="th2">Candidate Id</th>
                        <th class="th3">Name</th>
                        <th class="th4">Email Address</th>
                        <th class="th5">Experience</th>
                        <th class="th6">Contact No.</th>
                        <th class="th7" >Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                       
                                while($data=mysqli_fetch_array($result))
                                {
                                  
                                ?>
                      <tr>
                          <td><?php echo $i; ?></td>
                          <td><?php echo $data['REG_ID']; ?></td>
                          <td><?php echo $data['APPLICANT_NAME']; ?></td>
                          <td class="email-link"><?php echo $data['EMAIL_ID']; ?></td>
                          <td><?php echo $data['EXPERIENCE_IN_MONTH']; ?> Month <?php echo $data['EXPERIENCE_IN_YEAR']; ?> Year </td>
                          <td><?php echo $data['CONTACT_NUMBER']; ?></td>
                          <td>
                          <a href="candidateProfile.php?regId=<?php echo $data['REG_ID'];?>" class="view-tag" ><img src="images/ico_view.png" alt="User Avatar"></a>
                          
                          
                          <a href="updateProfile.php?regId=<?php echo $data['REG_ID'];?>"  class="edit-tag" ><img src="images/ico_edit.png" alt="User Avatar"></a>
                          
                        
                          <a href="#" onclick="myFunction(<?php echo $data['REG_ID']?>)"><img src="images/ico_delete.png" alt="User Avatar"></a>
                          </td>
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

        <script type="text/javascript">
        function myFunction(i) {
        if (confirm("Are you sure you want to delete data!!!!")) {

            window.location='deleteApplicant.php?id='+i;
                
            } else {
                window.location='viewProfiles.php';
            }
            
        }
        </script>


</body>
</html>
