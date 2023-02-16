<?php
require_once 'vendor/autoload.php';
require_once 'vendor/phpmailer/phpmailer/src/Exception.php';
require_once 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
require_once 'vendor/phpmailer/phpmailer/src/SMTP.php';
// require_once 'phpmailer/Exception.php';
// require_once 'phpmailer/PHPMailer.php';
// require_once 'phpmailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
$mail = new PHPMailer(true);

$alert = '';

if(isset($_POST['submit'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'jmangtomas@gmail.com'; // Gmail address which you want to use as SMTP server
    $mail->Password = 'mfheopoeaaxeyawp'; // Gmail address Password
    $mail->SMTPSecure = 'ssl';
    $mail->Port = '465';

    $mail->setFrom('jmangtomas@gmail.com'); // Gmail address which you used as SMTP server
    $mail->addAddress('jmangtomas@gmail.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    $mail->isHTML(true);
    $mail->Subject = 'Message Received (Prayer Request)';
    $mail->Body = "<h3>Name : $name <br>Email: $email <br>Prayer Request : $message</h3>";

    $mail->send();
    $alert = '<div class="alert-success">
                 <span>Prayer Request Sent! Thank you and God bless!.</span>
                </div>';
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  }
}


if(isset($_POST['contactus_btn'])){
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'jmangtomas@gmail.com'; // Gmail address which you want to use as SMTP server
    $mail->Password = 'mfheopoeaaxeyawp'; // Gmail address Password
    $mail->SMTPSecure = 'ssl';
    $mail->Port = '465';

    $mail->setFrom('jmangtomas@gmail.com'); // Gmail address which you used as SMTP server
    $mail->addAddress('jmangtomas@gmail.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    $mail->isHTML(true);
    $mail->Subject = 'Message Received (Contact Page)';
    $mail->Body = "<h3>Name : $name <br>Email: $email <br>Message : $message</h3>";

    $mail->send();
    $alert = '<div class="alert-success">
                 <span>Message Sent! Thank you for contacting us.</span>
                </div>';
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  }
}

if(isset($_POST['submitquestions'])){
  
  $email = $_POST['email'];
  $message = $_POST['message'];

  try{
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'jmangtomas@gmail.com'; // Gmail address which you want to use as SMTP server
    $mail->Password = 'mfheopoeaaxeyawp'; // Gmail address Password
    $mail->SMTPSecure = 'ssl';
    $mail->Port = '465';

    $mail->setFrom('jmangtomas@gmail.com'); // Gmail address which you used as SMTP server
    $mail->addAddress('jmangtomas@gmail.com'); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)

    $mail->isHTML(true);
    $mail->Subject = 'Message Received (Question Page)';
    $mail->Body = "<h3> 'QUESTIONS' <br>Email: $email <br>Message : $message</h3>";

    $mail->send();
    $alert = '<div class="alert-success">
                 <span>Question Sent! Please wait for our response, Thankyou!.</span>
                </div>';
  } catch (Exception $e){
    $alert = '<div class="alert-error">
                <span>'.$e->getMessage().'</span>
              </div>';
  }
}
?>
      