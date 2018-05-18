<?php

// Include phpmailer class
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';
include 'connection.php';

if(isset($_POST['submit']))
{


$mail = new PHPMailer(true); 

// SMTP configuration
$email= $_POST['email'];

$sql= "SELECT * FROM USER WHERE EMAIL_ID = '".$email."'";
$run=mysqli_query($conn,$sql);

$data=mysqli_fetch_array($run);

//echo "<pre>"; print_r($data);die();

$mail->SMTPDebug = 3;
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'aimbeyondinfotech@gmail.com';
$mail->Password = 'ICICI@123';
$mail->SMTPSecure = 'ssl';
$mail->Port = 465;

$mail->smtpConnect(
    array(
        "ssl" => array(
            "verify_peer" => false,
            "verify_peer_name" => false,
            "allow_self_signed" => true
        )
    )
);
$mail->setFrom('aimbeyondinfotech@gmail.com', 'Forget Password');


// Add a recipient
$mail->addAddress($data['EMAIL_ID']);


// Email subject
$mail->Subject = 'Email for Forget Password';

// Set email format to HTML
$mail->isHTML(true);

// Email body content
$mailContent = "Hi <br/><p>Please find below the password for Aimbeyond Infotech Login</p>
    <h3>Password: ".$data['PASSWORD']." </h3><br/><br/><br/><h3>Thank you</h3>";
$mail->Body = $mailContent;

// Send email
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo "<script type= 'text/javascript'> alert('Password sent Successfully'); document.location='login.php'</script>";
}
}
?>
