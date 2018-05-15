


<!doctype html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Aimbeyond</title>
    <meta name="description" >
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">
   
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">


<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>


    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/css/login.css">
    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->









<style>


</style>
</head>
<body>

    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
       
            <div class="login-content">
               <div class="login-form form1">
                <div class="login-logo">
                    <a href="">
                        <img class="align-content" src="images/logo.png" alt="logo">
                        <p>Human Resources Management</p>
                       
                    </a>
                    <h2>Create an account</h2>
                </div>
                    <form action = "signupSource.php" method = "POST">
                     
                    <div class="form-group">
                            <br>
                            <input type="text" class="form-control fullName" placeholder="Full Name" name="name" required>
                        </div>
                        <div class="form-group">
                    
                            <input type="email" class="form-control Mail" placeholder="Email Address" name="emailId" required>
                        </div>
                        <div class="form-group">
                           
                            <input type="password" class="form-control Pass" placeholder="Password" name="psw" required>
                        </div>
                        <div class="form-group">
                            
                            <input type="password" class="form-control confirmPassword" placeholder="Confirm Password" name="confirmPsw" required> 
                        </div>
                        <?php   $today = date("Y-m-d H:i:s"); ?>
                        <div class="form-group">
                        <input type="text" class="form-control"  name="lastLogin" value="<?php echo "$today"; ?>"hidden>
                        <input type="int" class="form-control"  name="userStatus" value = "1" hidden>
                        <input type="int" class="form-control"  name="userType" value = "1" hidden>
                        <input type="int" class="form-control"  name="flag" value = "1" hidden>
                        </div>
                        
                        <button type="submit" class="btn btn btn-flat m-b-30 m-t-30 btn1">Cancel</button>
                        <button type="submit" class="btn btn btn-flat m-b-30 m-t-30 btn2">Register</button>
                       

                      <div class="register-link m-t-15 text-center">
                            <br>
                            <p class="ptag2">Already have account? then please<a href="login.php" class="href1"> Sign in</a></p>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        </div>
        


    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


</body>
</html>
