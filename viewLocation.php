<?php
include("header.php");

$sql = 'SELECT * FROM LOCATION where STATUS_ID=0';

$result = mysqli_query($conn, $sql);



?>

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

<!-- Header-->
<header id="header" class="header">

    <div class="header-menu">


        <div class="col-sm-12">
        <a id="menuToggle" class="menutoggle pull-left"> <img src="images/menu_bar.png" ></a>
            <p>View Locations</p>
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
                        
                        <th class="th8">Location</th>
                        <th class="th9" >Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                     
                                while($data=mysqli_fetch_array($result))
                                {
                                  
                                ?>
                      <tr>                    
                          <td><?php echo $data['LOCATION']; ?></td>
                          <td>
                         <a href="#" onclick="myFunction(<?php echo $data['LOCATION_ID']?>)"><img src="images/ico_delete.png" alt="User Avatar"></a>
                          </td>
                      </tr>
                      <?php 
                                }
                                ?>
                    
                   
                      
                    </tbody>
                    
        
                  </table>

                  <!-- pagination -->
                 
                    

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

            window.location='deleteLocation.php?id='+i;
                
            } else {
                window.location='viewLocation.php';
            }
            
        }
        </script>