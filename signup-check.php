<?php 

include "db_conn.php";
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
  

// echo "email address is valid";
if (isset($_POST['uname']) && isset($_POST['password'])
    && isset($_POST['name']) && isset($_POST['re_password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);
	$uemail = Validate($_POST['uemail']);
	$re_pass = validate($_POST['re_password']);
	$name = validate($_POST['name']);

	$user_data = 'uname='. $uname. '&name='. $name;	
	
	if	(strlen($pass) < 8 || strlen($pass) > 16 ){
		header("Location: signup.php?error=Password should be min 8 characters, atleast 1 number, Capital letter and special character&$user_data");
		exit();
	}
	else if (!preg_match("/\d/",$pass)){
		header("Location: signup.php?error=Password should be min 8 characters, atleast 1 number, Capital letter and special character&$user_data");
		exit();
		
	}
	else if (!preg_match("/[A-Z]/",$pass)){
		header("Location: signup.php?error=Password should be min 8 characters, atleast 1 number, Capital letter and special character&$user_data");
		exit();
		
	}
	else if (!preg_match("/[a-z]/",$pass)){
		header("Location: signup.php?error=Password should be min 8 characters, atleast 1 number, Capital letter and special character&$user_data");
		exit();
		
	}
	else if (!preg_match("/\W/",$pass)){
		header("Location: signup.php?error=Password should be min 8 characters, atleast 1 number, Capital letter and special character&$user_data");
		exit();
	
	}
	else if (preg_match("/\s/",$pass)){
		header("Location: signup.php?error=Password should not contain any white space&$user_data");
		exit();
		
	}


	else if (empty($uname)) {
		header("Location: signup.php?error=User Name is required&$user_data");
	    exit();
	}
	else if(empty($uemail)){
        header("Location: signup.php?error=email is required&$user_data");
	    exit();
	}
	else if(empty($pass)){
        header("Location: signup.php?error=Password is required&$user_data");
	    exit();
	}
	
	else if(empty($re_pass)){
        header("Location: signup.php?error=Re Password is required&$user_data");
	    exit();
	}

	else if(empty($name)){
        header("Location: signup.php?error=Name is required&$user_data");
	    exit();
	}

	else if($pass !== $re_pass){
        header("Location: signup.php?error=The confirmation password  does not match&$user_data");
	    exit();
	}

	else{

		// hashing the password
        $pass = md5($pass);

	    $sql = "SELECT * FROM users WHERE email ='$uemail' OR user_name ='$uname' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: signup.php?error=Your Email/Username is already taken try another&$user_data");
	        exit();
		}else {

			
				//Enable verbose debug output
				$mail->SMTPDebug = 0;//SMTP::DEBUG_SERVER;
	 
				//Send using SMTP
				$mail->isSMTP();
	 
				//Set the SMTP server to send through
				$mail->Host = 'smtp.gmail.com';
	 
				//Enable SMTP authentication
				$mail->SMTPAuth = true;
	 
				//SMTP username
				$mail->Username = 'jmangtomas@gmail.com';
	 
				//SMTP password
				$mail->Password = 'mfheopoeaaxeyawp';
	 
				//Enable TLS encryption;
				$mail->SMTPSecure = 'ssl';
	 
				//TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
				$mail->Port = 465;
	 
				//Recipients
				$mail->setFrom('jmangtomas@gmail.com', 'Convergence Church');
	 
				//Add a recipient
				$mail->addAddress($uemail, $uname);
	 
				//Set email format to HTML
				$mail->isHTML(true);
	 
				$verification_code = substr(number_format(time() * rand(), 0, '', ''), 0, 6);
	 
				$mail->Subject = 'Email verification';
				$mail->Body    = '<p>Your verification code is: <b style="font-size: 30px;">' . $verification_code . '</b></p>';
	 
				$mail->send();
				// echo 'Message has been sent';
           $sql2 = "INSERT INTO users (user_name, email ,password, name, verification_code, email_verified_at) VALUES('$uname','$uemail','$pass', '$name', '$verification_code', NULL)";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
			header("Location: emailveri.php?email=" . $uemail);
            exit();
			 
           }else {
	           	header("Location: signup.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: signup.php");
	exit();
}



   