


<?php 

include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$uname = validate($_POST['uname']);
	$pass = validate($_POST['password']);

	if (empty($uname)) {
		header("Location: login.php?error=User Name or Email is required");
	    exit();
	}else if(empty($pass)){
        header("Location: login.php?error=Password is required");
	    exit();
	}else{
		// hashing the password
        $pass = md5($pass);

        
		  // check if credentials are okay, and email is verified
		  $sql = "SELECT * FROM users WHERE email = '$uname'";
		  $result = mysqli_query($conn, $sql);
   
		  if (mysqli_num_rows($result) == 0)
		  {
			 header("Location: login.php?error=Email does not exist&$user_data");
			 exit();
		  }
   
		  $user = mysqli_fetch_object($result);
   
		  
   
		  if ($user->email_verified_at == null)
		  {
			  die("Please verify your email <a href='emailveri.php?email=" . $uname . "'>from here</a>");
		  }
   
		  else{
			$sql = "SELECT * FROM users WHERE email = '$uname'";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) === 1) {
				$row = mysqli_fetch_assoc($result);
				$email = $row['email'];
				$username = $row['user_name'];
				$password = $row['pass'];
	
				if ($email || $username == $uname && $password === $pass) {
					$_SESSION['user_name'] = $row['user_name'];
					$_SESSION['uemail'] = $row['email'];
					$_SESSION['name'] = $row['name'];
					$_SESSION['id'] = $row['id'];
					header("Location: index.php");
					
					exit();
				}
			}
			
             
          }
	}
	
}else{
	header("Location: login.php");
	exit();
}


if (isset($_POST["verify_email"]))
{
	$email = $_POST["email"];
	$verification_code = $_POST["verification_code"];



	// mark email as verified
	$sql = "UPDATE users SET email_verified_at = NOW() WHERE email = '" . $email . "' AND verification_code = '" . $verification_code . "'";
	$result  = mysqli_query($conn, $sql);

	if (mysqli_affected_rows($conn) == 0)
	{
		die("Verification code failed.");
	}

	echo "<p>You can login now.</p>";
	exit();
}
