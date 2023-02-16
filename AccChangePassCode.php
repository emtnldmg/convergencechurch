

<?php 
session_start(); 
include "db_conn.php";
// for changing password
if (isset($_POST['accchangepass_btn'])) {

   

if (isset($_POST['email']) && isset($_POST['pass'])
    && isset($_POST['newpass'])) {

    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $email = validate($_POST['email']);   
    $pass = validate($_POST['pass']);
    $newpass = validate($_POST['newpass']);
    
    if(empty($email)){
      header("Location: AccChangePass.php?error=Username is required");
      exit();
    }else if(empty($pass)){
      header("Location: AccChangePass.php?error=New Password is required");
      exit();
    }else if($pass !== $newpass){
      header("Location: AccChangePass.php?error=The confirmation password  does not match");
      exit();
    }else {
        // hashing the password
        $email = $_POST['email'];
        $pass = md5($pass);
       

        $sql = "SELECT *
                FROM users WHERE 
                email='$email'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) === 1){
            
            $sql_2 = "UPDATE users 
                      SET password='$pass'
                      WHERE email='$email'";
            mysqli_query($conn, $sql_2);
            header("Location: AccChangePass.php?success=Your password has been changed successfully");
            exit();

        }else {
            header("Location: AccChangePass.php?error=Incorrect password");
            exit();
        }

    }

    
}else{
    header("Location: AccChangePass.php");
    exit();
}

}else{
     header("Location: AccChangePass.php");
     exit();
}
