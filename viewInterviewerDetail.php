<?php
include("header.php");
$sql = 'SELECT * FROM INTERVIEWER';
$result = mysqli_query($conn, $sql);
?>

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

<!-- Header-->
<header id="header" class="header">

    <div class="header-menu">


        <div class="col-sm-12">
        <a id="menuToggle" class="menutoggle pull-left"> <img src="images/menu_bar.png" ></a>
            <p>View Interviewers</p>
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
                        <th class="th3">Interviewer Name</th>
                        <th class="th9">Designation</th>
                        <th class="th3">Proficiency</th>
                        <th class="th3">Skills</th>                       
                        <th class="th1" >Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php 
                    $j=1;
                    while($data=mysqli_fetch_array($result))
                    {
                                  
                    ?>
                      <tr>
                          <td><?php echo  $j; ?></td>
                          <td><?php echo $data['EMPLOYER_NAME']; ?></td>
                          <td><?php echo $data['DESIGNATION']; ?></td>
                          <?php 
                          $sqlProficiency = "SELECT * FROM INTERVIEWER_SKILL WHERE EMPLOYER_ID='".$data['EMPLOYER_ID']."'";
                          $resultProficiency = mysqli_query($conn, $sqlProficiency);
                          $dataProficiency=mysqli_fetch_array($resultProficiency);
                          ?>
                          <td><?php echo $dataProficiency['PROFICIENCY']; ?></td>

                          <td><?php      
                          $sql_skill = "SELECT * FROM INTERVIEWER_SKILL where EMPLOYER_ID='".$data['EMPLOYER_ID']."'";
                          $sql_skill = mysqli_query($conn, $sql_skill);
                          $row_skill=mysqli_fetch_array($sql_skill);
                          $skill= explode(",", $row_skill['SKILL_ID']);
                       
                           $count=count($skill); 
                          for($i=0;$i<$count; $i++){
                          $fetch_dataS = "SELECT * FROM SKILL WHERE SKILL_ID='".$skill[$i]."'";
                          $run_dataS = mysqli_query($conn, $fetch_dataS);
                          $rowS = mysqli_fetch_array($run_dataS);
                          echo $rowS['SKILL_NAME']; }  ?></td>
                        
                          <td>
                                   
                          
                                    <a href="#" class="edit-tag" ><img src="images/ico_edit.png" alt="User Avatar"></a>
                          
                        
                                    <a href="#" onclick="myFunction(<?php echo $data['EMPLOYER_ID']?>)"><img src="images/ico_delete.png" alt="User Avatar"></a>
                          </td>
                      </tr>
                      
                   
                      <?php $j++; }  ?>
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

            window.location='deleteInterviewerDetail.php?id='+i;
                
            } else {
                window.location='viewInterviewerDetail.php';
            }
            
        }
        </script>