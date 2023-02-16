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




if(isset($_POST['reserveedit_btn']))
{

	$rid = $_POST['reserve_id'];
	$rdate = $_POST['date'];
	$rname = $_POST['name'];
	$response = $_POST['respond-email'];
	$radd = $_POST['address'];
	$rphone = $_POST['phonenumber'];
	$remail = $_POST['email'];
    $rsched = $_POST['schedule'];
    $rperson = $_POST['nperson'];
    $fname = $_POST['fname'];
    $rstatus = $_POST['status'] +1 ;
    $mname = $_POST['mname'];


	$query = "UPDATE reservation SET lname='$rname', fname= '$fname', mname= '$mname', address='$radd', num='$rphone', email='$remail', serTime='$rsched', resNum='$rperson', status='$rstatus' WHERE id='$rid' ";
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
		$mail->addAddress($remail); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)
	
		$mail->isHTML(true);
		$mail->Subject = 'Message Received (Respond)';
		$mail->Body = "<h3>Hello! This is Convergence Church Bacoor <br><br> Your request for reservation spot has been accepted. See you there!<br>If you wish to cancel your reservation or other inquiries, please do contact us on our Facebook page [https://web.facebook.com/convergencechurchph] or call us at (046)519-8413.<br><br>

You can also message us through our website cicfmain.com or email us at convergencechurchbacoor@gmail.com</h3>";
	
		$mail->send();
	
	$query_run = mysqli_query($connection, $query);
		$_SESSION['status'] = "Request Successfully Accepted ";
		$_SESSION['status_code'] = "success";
		header('Location: ../reservepending.php');
	}
	else
	{
		$_SESSION['status'] = "Request is NOT Successfully Accepted ";
		$_SESSION['status_code'] = "error";
		header('Location: ../reservepending.php');
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
	}
	else
	{
		$_SESSION['status'] = "Service NOT Successful";
		$_SESSION['status_code'] = "error";
		header('Location: ../reservedone.php');
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
	}
	else
	{
		
		$_SESSION['status'] ="Your is Data is not DELETED";
		$_SESSION['status_code'] = "error";
			header('Location: ../reservedone.php');
	}
}

// para sa decline ng request


if(isset($_POST['decline_btn']))
{

	$rid = $_POST['decline_id'];
	$rdate = $_POST['date'];
	$rname = $_POST['name'];
	$response = $_POST['respond-email'];
	$radd = $_POST['address'];
	$rphone = $_POST['phonenumber'];
	$remail = $_POST['email'];
    $rsched = $_POST['schedule'];
    $rperson = $_POST['nperson'];
    $fname = $_POST['fname'];
    $rstatus = $_POST['status'] -1 ;
    $mname = $_POST['mname'];


	$query = "UPDATE reservation SET lname='$rname', fname= '$fname', mname= '$mname', address='$radd', num='$rphone', email='$remail', serTime='$rsched', resNum='$rperson', status='$rstatus' WHERE id='$rid' ";
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
		$mail->addAddress($remail); // Email address where you want to receive emails (you can use any of your gmail address including the gmail address which you used as SMTP server)
	
		$mail->isHTML(true);
		$mail->Subject = 'Message Received (Respond)';
		$mail->Body = "<h3>Hello! This is Convergence Church Bacoor <br><br> Your request has been declined due to certain issues. Please contact the church officer for the clarification <br><br>For inquiries, please do contact us on our Facebook page [https://web.facebook.com/convergencechurchph] or call us at (046)519-8413.<br>
            You can also message us through our website cicfmain.com or email us at convergencechurchbacoor@gmail.com<br></h3>";
	
		$mail->send();
		$_SESSION['status'] = "Declined data Successfully ";
		$_SESSION['status_code'] = "success";
		header('Location: ../reservepending.php');
	}
	else
	{
		$_SESSION['status'] = "Declined data Not Successful";
		$_SESSION['status_code'] = "error";
		header('Location: ../reservepending.php');
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
	}
	else
	{
		$_SESSION['status'] = "Declined data Not Successful";
		$_SESSION['status_code'] = "error";
		header('Location: ../respot.php');
	}
}

// para sa pag delete ng mga nasa blocked list
if(isset($_POST['blockeddelete_btn']))
{

	$id = $_POST['blockeddelete_id'];
	

	$query = "DELETE FROM reservation WHERE id='$id' ";
	$query_run = mysqli_query($connection, $query);

	if($query_run)
	{
			$_SESSION['status'] ="Your Data is DELETED";
			$_SESSION['status_code'] = "success";
			header('Location: ../res_blocked.php');
	}
	else
	{
		
		$_SESSION['status'] ="Your is Data is not DELETED";
		$_SESSION['status_code'] = "error";
			header('Location: ../res_blocked.php');
	}
}
?>