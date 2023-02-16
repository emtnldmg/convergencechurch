<?php 
session_start();
include 'assets/includes/header.php';
include 'assets/includes/navbar.php';
include 'admin/database/dbconfig.php';
?>
  <body class="body">
       
 <section class="homelogin" id="home">
      <?php
 require 'admin/database/dbconfig.php';
 if (isset($_SESSION['user_name'])) {
     $name = $_SESSION['user_name'];
     $query = "SELECT * FROM users where user_name ='$name' ";
     $query_run = mysqli_query($connection, $query);
     $check_faculty = mysqli_num_rows($query_run) > 0;
     if ($check_faculty) {
         while ($row = mysqli_fetch_array($query_run)) {
             ?>
 
               
<form class="form_login" action="AccUpdate.php" method="post">
     	<h2 class="h2class" require><b><?php echo $name?>'s Information</b></h2>
     	<label for=""><b>Name:</b></label>
          <input class="inputclass" type="text" 
                 name="name" value="<?php echo $row['name'];?>"
                 placeholder="Re_Password"
                 readonly><br>
                 <label for=""><b>Username:</b></label>
                 <input class="inputclass" type="text" 
                 name="username" value="<?php echo $row['user_name'];?>"
                 placeholder="Re_Password"
                 readonly><br>
                 <label for=""><b>Email:</b></label>
                 <input class="inputclass" type="text" 
                 name="email" value="<?php echo $row['email'];?>"
                 placeholder="Re_Password"
                 readonly>
 
               
          <input class="inputclass" type="hidden" 
                 name="re_password" value="<?php echo $row['password'];?>"
                 placeholder="Re_Password"
                 required><br>

     	<button class="btn_login" type="submit">Edit Info</button>
          
     </form>
     <?php
         }
     } 
    
 }
 else {
     echo '   <form class="form_login" action="signup-check.php" method="post">
     <h2 class="h2class"<b>No record found</b></h2>
     </form>';
  
 }
                 ?>
     </section>
  </body>
<?php 
include 'assets/includes/scriptwv.php';


?>