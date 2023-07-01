<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

include "db.php";

if(isset($_POST['send-message'])){
  
$name =$_POST['sender_name'];
$email=$_POST['sender_email'];
$phone=$_POST['sender_phone'];
$message=$_POST['message'];
date_default_timezone_set("Asia/Karachi");
$date=date('d-m-Y h:i:s');
$sql1="INSERT INTO web_messages(name,email,phone,message,date) 
  VALUES('$name','$email','$phone','$message','$date')";
   if(mysqli_query($conn,$sql1)){

$html='Name: '.$name.'<br>Email: '.$email.'<br>'.'Phone: '.$phone.'<br>Message: '.$message;

include_once 'PHPMailerAutoload.php';
  $mail = new PHPMailer;
  try {
$mail->isSMTP();                                 
$mail->Host = 'mail.aliwebdeveloper.tech'; 
$mail->SMTPAuth = true;              
$mail->Username = 'info@aliwebdeveloper.tech';
$mail->Password = 'k_*}jL:{m-';    
$mail->SMTPSecure = 'ssl';       
$mail->Port = 465;            
$mail->setFrom('info@aliwebdeveloper.tech', 'Website Message');
$mail->addAddress('info@aliwebdeveloper.tech');
$mail->isHTML(true);
$mail->Subject = 'A Message From Your Website';
$mail->Body    =  $html;
$mail->send();
?>
<script type="text/javascript">
    alert('Message Has Been Sent Succesffully.');
    window.location.href='Contact.html';
</script>
<?php
 }
 catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

}
else{
   echo mysqli_error($conn);
}
}