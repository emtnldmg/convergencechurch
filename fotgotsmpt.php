


<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['username']) && isset($_POST['email'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$username = validate($_POST['username']);
	$email = validate($_POST['email']);

	if (empty($username)) {
		header("Location: login.php?error=User Name required");
	    exit();
	}else if(empty($email)){
        header("Location: login.php?error=email is required");
	    exit();
	}else{
		
        
		//$sql = "SELECT * FROM users WHERE user_name || email ='$username' AND email='$email'";
		$sql = "SELECT * FROM users WHERE user_name= '$username' AND email='$email'";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $username && $row['email'] === $email) {
            	
            	header("Location: changepass.php");
				
		        exit();
            }else{
				header("Location: forgotpass.php?error=Incorect User name or email");
		        exit();
			}
		}else{
			header("Location: forgotpass.php?error=No data found");
	        exit();
		}
	}
	
}else{
	header("Location: login.php");
	exit();
}

