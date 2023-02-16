
<?php 

include "db_conn.php";



// para sa account update
if (isset($_POST['accupdate_btn'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$username = validate($_POST['username']);
	$pass = validate($_POST['password']);
	$email = Validate($_POST['email']);
	$id = validate($_POST['id']);
	$name = validate($_POST['name']);

	$user_data = 'username='. $username. '&name='. $name;	


	if (empty($username)) {
		header("Location: AccUpdate.php?error=User Name is required&$user_data");
	    exit();
	}
	else if(empty($email)){
        header("Location: AccUpdate.php?error=email is required&$user_data");
	    exit();
	}



	else if(empty($name)){
        header("Location: AccUpdate.php?error=Name is required&$user_data");
	    exit();
	}

	

	else{

		// hashing the password
        $pass = md5($pass);

	    $sql = "SELECT * FROM users WHERE email ='$email' OR user_name ='$username' ";
		$result = mysqli_query($conn, $sql);

		if ($email === ['email']) {
			header("Location: AccUpdate.php?error=Your Email/Username is already taken try another&$user_data");
	        exit();
          
		}
       
        else {
           $sql2 = "UPDATE users SET user_name='$username', email ='$email', name='$name' WHERE id ='$id'";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: AccUpdate.php?success=Your account has been updated successfully");
	         exit();
           }else {
	           	header("Location: AccUpdate.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: AccUpdate.php");
	exit();
}
