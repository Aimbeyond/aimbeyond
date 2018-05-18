<?php
session_start();
if(!isset($_SESSION['username'])){
header("location:ui.php");

}



$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'root';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass,"Recruitment_process") or die (mysqli_error());
$fetch_data = "select * from applicant_detail";

$run_data = mysqli_query($conn,$fetch_data);
?>
<!DOCTYPE html>
<!-- saved from url=(0077)file:///C:/Users/ABIT-DST-36/Desktop/JAVASCRIPT%20HTML/recruitment_form.html# -->
<html lang="en">


    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <title>Bootstrap Example</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="./Bootstrap Example_files/bootstrap.min.css">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
  <script src="./Bootstrap Example_files/jquery.min.js.download"></script>
  <script src="./Bootstrap Example_files/bootstrap.min.js.download"></script>
  <script type="text/javascript" charset="utf8" src="//code.jquery.com/jquery-1.12.4.js"></script>
  
      <script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
    
      
    .footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color:black;
   color: white;
   text-align: center;
   padding:10px;
}
a {
    color: white;
    text-decoration: none;
}
.container{
  padding-bottom:40px;
  width:1300px;
}
.btn-danger{
  float:right;
  
}
a{
  color:white;
}
.sidenav {
    height: 100%;
    width: 200px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #276fad;
    overflow-x: hidden;
    padding-top: 20px;
    
    
}

.sidenav a {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 22px;
    color: #14ce18;
    display: block;
}

.sidenav a:hover {
    color: #f1f1f1;
}
.pagination a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    transition: background-color .3s;
}

.pagination a:hover:not(.active) {background-color: #ddd;}

  </style>
</head>
<body>

<nav class="navbar navbar-inverse" style="Z-INDEX: 5;">
  <div class="container-fluid" >
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="file:///C:/Users/ABIT-DST-36/Desktop/JAVASCRIPT%20HTML/recruitment_form.html#">AIMBEYOND</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="file:///C:/Users/ABIT-DST-36/Desktop/JAVASCRIPT%20HTML/recruitment_form.html#">Home</a></li>
        <li><a href="file:///C:/Users/ABIT-DST-36/Desktop/JAVASCRIPT%20HTML/recruitment_form.html#">About</a></li>
        <li><a href="file:///C:/Users/ABIT-DST-36/Desktop/JAVASCRIPT%20HTML/recruitment_form.html#">Projects</a></li>
        <li><a href="file:///C:/Users/ABIT-DST-36/Desktop/JAVASCRIPT%20HTML/recruitment_form.html#">Contact</a></li>
      </ul>
      
    </div>
  </div>
</nav>
<button type="button" class="btn btn-danger"><a style="color:white;" href="logout.php">Logout</a></button>


<div class="sidenav">
<br>
<br>
  <a href="insert.php">ADD APPLICANT</a>
  <a href="insertjob.php">CREATE JOB</a>
  <a href="viewjobdetail.php">VIEW JOB DETAIL</a>
  <a href="#contact">CREATE SCHEDULE</a>
</div>

<div class="container">

<h1><center>LIST OF APPLICANTS</center></h1><BR><BR>
<center><a  class="btn btn-info" href="insert.php" >CREATE</a><a  class="btn btn-warning" href="filter.php" >FILTER</a><a  class="btn btn-primary" href="search2.php" >SEARCH</a></center>
<!-- <div class="pagination">
  <a href="bootstrapphpselect.php">&laquo;</a>
  <a href="bootstrapphpselect.php">1</a>
  <a href="bootstrapphpselect.php">2</a>
  <a href="bootstrapphpselect.php">3</a>
  <a href="bootstrapphpselect.php">4</a>
  <a href="bootstrapphpselect.php">5</a>
  <a href="bootstrapphpselect.php">6</a>
  <a href="bootstrapphpselect.php">&raquo;</a>
</div> -->
<table class="table" id="myTable">

   <thead> 

<tr> <th>REG_ID</th>

<th>APPLICANT_NAME</th>
<th>CONTACT_NUMBER</th>
<th>EMAIL_ID</th>

<th>EXPERIENCE_IN_MONTH</th>
<th>EXPERIENCE_IN_YEAR</th>
<th>LOCATION</th> 
<th><CENTER>VIEW</CENTER></th>
<th><CENTER>UPDATE</CENTER></th>
<th><CENTER>DELETE</CENTER></th>
<th><CENTER>APPLY JOB</CENTER></th>
<th><CENTER>UPDATE SCHEDULE</CENTER></th>

</tr>
</thead>
<tbody>
<?php 
while($data=mysqli_fetch_array($run_data))
{
?>
<tr>
<td>
<?php echo $data['REG_ID']; ?>
</td>

<td>

<?php echo $data['APPLICANT_NAME']; ?>

</td>

<td>

<?php echo $data['CONTACT_NUMBER']; ?>

</td>
<td>

<?php echo $data['EMAIL_ID']; ?>

</td>

<td>

<?php echo $data['EXPERIENCE_IN_MONTH']; ?>

</td>
<td>

<?php echo $data['EXPERIENCE_IN_YEAR']; ?>

</td>
<td>
<?php 
$fetch_data2 = "select * from location where LOCATION_ID='".$data['LOCATION_ID']."'";

$run_data2 = mysqli_query($conn,$fetch_data2);
while($data2=mysqli_fetch_array($run_data2))

{
?>

<?php echo $data2['LOCATION_NAME'];
  echo "<br>"; }?>

</td>
<td>

<button type="button"  name="view" id="button"

class="btn btn-success"><a  style="color:white;" href="view.php?id=<?php echo $data['REG_ID']?>">View</a></button>

</td>

<td>

<button type="button"  name="update" id="button"

class="btn btn-primary "><a  style="color:white;" href="update3.php?id=<?php echo $data['REG_ID']?>" >Update</a></button>

</td>

<td>
<button type="button"  name="delete" id="button"

class="btn btn-danger"><a  style="color:white;" href="delete.php?id=<?php echo $data['REG_ID']?>" >Delete</a></button>


</td>
<td>
<button type="button"  name="apply_job" id="button"

class="btn btn-warning"><a  style="color:white;" href="applyjob.php?id=<?php echo $data['REG_ID']?>" >Apply job</a></button>


</td>

<td>
<button type="button"  name="view_schedule" id="button"

class="btn btn-info"><a  style="color:white;" href="view_schedule.php?id=<?php echo $data['REG_ID']?>" >Update Schedule</a></button>


</td>


</tr>

<?php } ?>
</tbody>
</table>




</div>


<div class="footer" style="z-index: 5;">
        <p>COPYRIGHT © 2018 | AIMBEYOND</p>
      </div>
    <!-- paging --> 
    
<script type="text/javascript">
$(document).ready(function() {
    $('#myTable').DataTable();
} );
</script>



</body></html>