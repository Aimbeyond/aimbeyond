<?php

// Include phpmailer class
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true); 

// SMTP configuration

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
$mail->addAddress('priya.chaudhary@aimbeyond.com');




// Email subject
$mail->Subject = 'Email for Forget Password';

// Set email format to HTML
$mail->isHTML(true);

// Email body content
$mailContent = "<h3>Please find below the password</h3>
    <p>Password: </p>";
$mail->Body = $mailContent;

// Send email
if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent';
}
?>
<?php 
if(isset($_POST['submit']))
{
$email= $_POST['email'];

$sql= "INSERT INTO USER(EMAIL_ID) VALUES ('$email')";
$run=mysqli_query($conn,$sql);
}

?>