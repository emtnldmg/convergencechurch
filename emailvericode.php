<?php
   include "db_conn.php";
 if (isset($_POST["verify_email"]))
 {
     $email = $_POST["email"];
     $verification_code = $_POST["verification_code"];

    

     // mark email as verified
     $sql = "UPDATE users SET email_verified_at = NOW() WHERE email = '$email' AND verification_code = '$verification_code'";
     $result  = mysqli_query($conn, $sql);

     if (mysqli_affected_rows($conn) == 0)
     {
        die("Verification code failed.");
     }

     header("Location: login.php?success=Your account has been created successfully");
     exit();
 }

?>