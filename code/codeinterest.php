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


if(isset($_POST['interestaccept_btn']))
{

	$iid = $_POST['interestaccept_id'];
	$cdate = $_POST['date'];
	$lname = $_POST['lname'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
	$add = $_POST['address'];
	$phone = $_POST['phonenumber'];
	$email = $_POST['email'];
    $interest = $_POST['interest'];
    $istatus = $_POST['status'] +1 ;
   


	$query = "UPDATE connect SET lname='$lname', fname= '$fname', mname= '$mname', address='$add', phoneNum='$phone', email='$email', interest='$interest', status='$istatus', dcreated='$cdate' WHERE id='$iid' ";
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
		$mail->Subject = 'Message Received (Respond)';
		$mail->Body = "<h3>Hello! This is Convergence Church Bacoor <br> Your  request has been accepted, thankyou for joining us!<br>For inquiries, please do contact us on our Facebook page [https://web.facebook.com/convergencechurchph] or call us at (046)519-8413.<br><br>

You can also message us through our website cicfmain.com or email us at convergencechurchbacoor@gmail.com</h3>";
	
		$mail->send();
		
		$_SESSION['status'] = "User Successfully Accepted ";
		$_SESSION['status_code'] = "success";
		header('Location: ../interestpending.php');
		exit;
	}
	else
	{
		$_SESSION['status'] = "User is NOT Successfully Accepted ";
		$_SESSION['status_code'] = "error";
		header('Location: ../interestpending.php');
		exit;
	}
}

if(isset($_POST['done_btn']))
{

	$rid = $_POST['done_id'];
	$rdate = $_POST['date'];
	$rname = $_POST['name'];
	
	$radd = $_POST['address'];
	$rphone = $_POST['phonenumber'];
	$remail = $_POST['email'];
    $rsched = $_POST['schedule'];
    $rperson = $_POST['nperson'];
    $fname = $_POST['fname'];
    $rstatus = $_POST['status'] +2 ;
    $mname = $_POST['mname'];


	$query = "UPDATE reservation SET lname='$rname', fname= '$fname', mname= '$mname', address='$radd', num='$rphone', email='$remail', serTime='$rsched', resNum='$rperson', status='$rstatus' WHERE id='$rid' ";
	$query_run = mysqli_query($connection, $query);

    if($query_run)
	{
		$_SESSION['status'] = "Service Done ";
		$_SESSION['status_code'] = "success";
		header('Location: ../reservedone.php');
		exit;
	}
	else
	{
		$_SESSION['status'] = "Service NOT Successful";
		$_SESSION['status_code'] = "error";
		header('Location: ../reservedone.php');
		exit;
	}
}

// pag delete ng mga done service na 
if(isset($_POST['donedelete_btn']))
{

	$id = $_POST['donedelete_id'];
	

	$query = "DELETE FROM reservation WHERE id='$id' ";
	$query_run = mysqli_query($connection, $query);

	if($query_run)
	{
			$_SESSION['status'] ="Your Data is DELETED";
			$_SESSION['status_code'] = "success";
			header('Location: ../reservedone.php');
			exit;
	}
	else
	{
		
		$_SESSION['status'] ="Your is Data is not DELETED";
		$_SESSION['status_code'] = "error";
			header('Location: ../reservedone.php');
			exit;
	}
}

// para sa decline ng request


if(isset($_POST['interestdecline_btn']))
{

	$iid = $_POST['interestdecline_id'];
	$cdate = $_POST['date'];
	$lname = $_POST['lname'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
	$add = $_POST['address'];
	$phone = $_POST['phonenumber'];
	$email = $_POST['email'];
    $interest = $_POST['interest'];
    $istatus = $_POST['status'] -1 ;
   


	$query = "UPDATE connect SET lname='$lname', fname= '$fname', mname= '$mname', address='$add', phoneNum='$phone', email='$email', interest='$interest', status='$istatus', dcreated='$cdate' WHERE id='$iid' ";
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
		$mail->Subject = 'Message Received (Respond)';
		$mail->Body = "<h3>Hello! This is Convergence Church Bacoor <br> Your registration for joining our group has been declined for some reason. Register again and please fill the form orderly. <br>For inquiries, please do contact us on our Facebook page [https://web.facebook.com/convergencechurchph] or call us at (046)519-8413.<br><br>

                You can also message us through our website cicfmain.com or email us at convergencechurchbacoor@gmail.com</h3>";
	
		$mail->send();
		$_SESSION['status'] = "Declined data Successfully ";
		$_SESSION['status_code'] = "success";
		header('Location: ../interestpending.php');
		exit;
	}
	else
	{
		$_SESSION['status'] = "Declined data Not Successful";
		$_SESSION['status_code'] = "error";
		header('Location: ../interestpending.php');
		exit;
	}
}

// para sa pag decline ng mga nasa reserve spot na
if(isset($_POST['resblocked_btn']))
{

	$rid = $_POST['resblocked_id'];
	$rdate = $_POST['date'];
	$rname = $_POST['name'];
	
	$radd = $_POST['address'];
	$rphone = $_POST['phonenumber'];
	$remail = $_POST['email'];
    $rsched = $_POST['schedule'];
    $rperson = $_POST['nperson'];
    $fname = $_POST['fname'];
    $rstatus = $_POST['status'] -2 ;
    $mname = $_POST['mname'];


	$query = "UPDATE reservation SET lname='$rname', fname= '$fname', mname= '$mname', address='$radd', num='$rphone', email='$remail', serTime='$rsched', resNum='$rperson', status='$rstatus' WHERE id='$rid' ";
	$query_run = mysqli_query($connection, $query);

    if($query_run)
	{
		$_SESSION['status'] = "Declined data Successfully ";
		$_SESSION['status_code'] = "success";
		header('Location: ../respot.php');
		exit;
	}
	else
	{
		$_SESSION['status'] = "Declined data Not Successful";
		$_SESSION['status_code'] = "error";
		header('Location: ../respot.php');
		exit;
	}
}

// para sa pag delete ng mga nasa blocked list
if(isset($_POST['interest_del_btn']))
{

	$id = $_POST['int_del_id'];
	

	$query = "DELETE FROM connect WHERE id='$id' ";
	$query_run = mysqli_query($connection, $query);

	if($query_run)
	{
			$_SESSION['status'] ="Your Data is DELETED";
			$_SESSION['status_code'] = "success";
			header('Location: ../res_blocked.php');
			exit;
	}
	else
	{
		
		$_SESSION['status'] ="Your is Data is not DELETED";
		$_SESSION['status_code'] = "error";
			header('Location: ../res_blocked.php');
			exit;
	}
}


if(isset($_POST['interest_decline_del_btn']))
{

	$id = $_POST['interest_decline_del_id'];
	

	$query = "DELETE FROM connect WHERE id='$id' ";
	$query_run = mysqli_query($connection, $query);

	if($query_run)
	{
			$_SESSION['status'] ="Your Data is DELETED";
			$_SESSION['status_code'] = "success";
			header('Location: ../int_blocked.php');
			exit;
	}
	else
	{
		
		$_SESSION['status'] ="Your is Data is not DELETED";
		$_SESSION['status_code'] = "error";
			header('Location: ../int_blocked.php');
			exit;
	}
}
?>