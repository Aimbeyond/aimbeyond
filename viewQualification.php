<?php
include("header.php");
$fetchQual="select * from QUALIFICATION where STATUS_ID=0";
$fetchQual=mysqli_query($conn,$fetchQual);

$sql = 'SELECT * FROM QUALIFICATION';

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

$query = "SELECT * FROM QUALIFICATION order by QUALIFICATION_ID DESC LIMIT $start_from, $record_per_page";

$result = mysqli_query($conn, $query);


?>

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

<!-- Header-->
<header id="header" class="header">

    <div class="header-menu">


        <div class="col-sm-12">
        <a id="menuToggle" class="menutoggle pull-left" > <img src="images/menu_bar.png" ></a>
            <p>View Qualifications</p>
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
                  <table id="bootstrap-data-table" class="table table-striped table-bordered loc">
                    <thead>
                      <tr class="tbhead">
  
                        <th class="th8">Qualification</th>
                        <th class="th9" >Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?PHP 
                    
                     
                        while($rowQual = mysqli_fetch_array($fetchQual))
                        {    ?>
                       <tr>
                          <td><?php echo $rowQual['QUALIFICATION'] ?></td>
                          <td>
                         <a href="#" onclick="myFunction(<?php echo $rowQual['QUALIFICATION_ID']?>)"><img src="images/ico_delete.png" alt="User Avatar"></a>
                          </td>
                      </tr>
                      <tr>
                        <?php } ?>
                         

                   
                      
                    </tbody>
                    
        
                  </table>
 
        
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

            window.location='deleteQualification.php?id='+i;
                
            } else {
                window.location='viewQualification.php';
            }
            
        }
        </script>