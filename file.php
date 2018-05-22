<?php 
if(isset($_POST['save'])){
    $file_name = $_FILES['image']['name'];
    echo $file_name;
    echo "<pre>"; print_r($_POST); die();
}


?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

      <script type="text/javascript" src="assets/js/bootstrap-filestyle.min.js"> </script>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
<form method="POST" action="" enctype="multipart/form-data" name="form" >
<div class="container">
<h2>Bootstrap File upload demo</h2>
    <div class="form-group">
    <input type="text" name="name">
      <label>Select Multiple files</label>
      <input type="file" name="image" multiple="multiple" id="multipledemo">
     <button id="clear" class="btn btn-warning btn-xs">
      Clear the files selection
     </button>
    </div>
    <input type="submit" name="save">
</div>
</div>
</form>
<script>
$('#multipledemo').filestyle({
    buttonText : 'Multiple',
    buttonName : 'btn-primary'
});    
   $('#clear').click(function() {
    $('#multipledemo').filestyle('clear');
   });                   
             
</script>

</body>
</html>

