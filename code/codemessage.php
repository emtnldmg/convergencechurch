<?php 
include '../security.php';
require_once '../vendor2/autoload.php';
require_once '../vendor2/phpmailer/phpmailer/src/Exception.php';
require_once '../vendor2/phpmailer/phpmailer/src/PHPMailer.php';
require_once '../vendor2/phpmailer/phpmailer/src/SMTP.php';
// require_once 'phpmailer/Exception.php';
// require_once 'phpmailer/PHPMailer.php';
// require_once 'phpmailer/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
$mail = new PHPMailer(true);

$alert = '';
// $connection = mysqli_connect("localhost","root","","adminpanel");

if(isset($_POST['messagesend_btn']))
{
    
	$id = $_POST['mrespond_id'];
	$date = $_POST['date'];
	$message = $_POST['question'];
    $respond = $_POST['answer'];
    $email = $_POST['email'];
	$status = $_POST['status'] + 1;
	
   
	
	try{
		$mail->isSMTP();
		$mail->Host = 'smtp.hostinger.com';
		$mail->SMTPAuth = true;
		$mail->Username = 'convergencechurchbacoor@cicfmain.com'; // Gmail address which you want to use as SMTP server
		$mail->Password = 'Dreamteam2021'; // Gmail address Password
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
		$mail->Port = '587';
	
		$mail->setFrom('convergencechurchbacoor@cicfmain.com'); // Gmail address which you used as SMTP server
		$mail->addAddress($email); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)
	
		$mail->isHTML(true);
		$mail->Subject = 'Our response';
		$mail->Body = "<h3>Hello! This is Convergence Church Bacoor <br><br>Message : $respond</h3>";
	
		$mail->send();
		$alert = '<div class="alert-success">
					 <span>Your message has been sent</span>
					</div>';
					$query = "UPDATE questions SET email='$email', message= '$message', status= '$status', qsent='$date', respond='$respond' WHERE id='$id' ";
	$query_run = mysqli_query($connection, $query);
    
    if($query_run)
    {
        $_SESSION['status'] = " Your message has been sent succesfully ";
		$_SESSION['status_code'] = "success";
		header('Location:../messagenotif.php');
	}
	else
	{
        $_SESSION['status'] = "Your message not sent ";
        $_SESSION['status_code'] = "error";
        header('Location:../messagenotif.php');
    }
	  } catch (Exception $e){
		$alert = '<div class="alert-error">
					<span>'.$e->getMessage().'</span>
				  </div>';
				  $_SESSION['status'] = "Your message not sent ";
				  $_SESSION['status_code'] = "error";
				  header('Location:../messagenotif.php');
	  }

	

   
}



if(isset($_POST['messagedecline_btn']))
{


	$id = $_POST['decline_id'];
	$date = $_POST['date'];
	$message = $_POST['question'];
    $respond = $_POST['answer'];
    $email = $_POST['email'];
	$status = $_POST['status'] -1;
	
   
   

	$query = "UPDATE questions SET email='$email', message= '$message', status= '$status', qsent='$date', respond='$respond' WHERE id='$id' ";
	$query_run = mysqli_query($connection, $query);
    
    if($query_run)
    {
     
       $mail->isSMTP();
		$mail->Host = 'smtp.hostinger.com';
		$mail->SMTPAuth = true;
		$mail->Username = 'convergencechurchbacoor@cicfmain.com'; // Gmail address which you want to use as SMTP server
		$mail->Password = 'Dreamteam2021'; // Gmail address Password
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
		$mail->Port = '587';
	
		$mail->setFrom('convergencechurchbacoor@cicfmain.com'); // Gmail address which you used as SMTP server
		$mail->addAddress($email); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)
	
		$mail->isHTML(true);
		$mail->Subject = 'Message Declined';
		$mail->Body = "<h3>Hello! This is Convergence Church Bacoor <br>We're sorry but your message for us has been declined for some reason. Message us again and please fill the form orderly<br>For inquiries, please do contact us on our Facebook page [https://web.facebook.com/convergencechurchph] or call us at (046)519-8413.<br><br>

You can also message us through our website cicfmain.com or email us at convergencechurchbacoor@gmail.com</h3>";
	
		$mail->send();
        $_SESSION['status'] = " declined message succesfully ";
		$_SESSION['status_code'] = "success";
		header('Location:../messagenotif.php');
	}
	else
	{
        $_SESSION['status'] = "declined message not succesful ";
        $_SESSION['status_code'] = "error";
        header('Location:../messagenotif.php');
    }
}


// para sa pag delete ng mga nasa blocked list
if(isset($_POST['message_done_btn']))
{

	$id = $_POST['message_done_id'];
	

	$query = "DELETE FROM questions WHERE id='$id' ";
	$query_run = mysqli_query($connection, $query);

	if($query_run)
	{
			$_SESSION['status'] ="Your Data is DELETED";
			$_SESSION['status_code'] = "success";
			header('Location: ../message_done.php');
			exit;
	}
	else
	{
		
		$_SESSION['status'] ="Your is Data is not DELETED";
		$_SESSION['status_code'] = "error";
			header('Location: ../message_done.php');
			exit;
	}
}

if(isset($_POST['message_block_del_btn']))
{

	$id = $_POST['message_block_del_id'];
	

	$query = "DELETE FROM questions WHERE id='$id' ";
	$query_run = mysqli_query($connection, $query);

	if($query_run)
	{
			$_SESSION['status'] ="Your Data is DELETED";
			$_SESSION['status_code'] = "success";
			header('Location: ../message_blocked.php');
			exit;
	}
	else
	{
		
		$_SESSION['status'] ="Your is Data is not DELETED";
		$_SESSION['status_code'] = "error";
			header('Location: ../message_blocked.php');
			exit;
	}
}
?>
