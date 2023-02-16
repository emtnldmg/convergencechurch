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
            $pass = $row['password'];
            $password = md5($pass);
             ?>
 
               
<form class="form_login" action="AccUpdateCode.php" method="post">
     	<h2 class="h2class"><b><r>update</r>  information</b></h2>
         <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
		 <?php if (isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>
         <input class="inputclass" type="hidden" 
                 name="id" value="<?php echo $row['id'];?>"
                 placeholder="Name"
                 required>
     	<label for=""><b>Name:</b></label>
        
          <input class="inputclass" type="text" 
                 name="name" value="<?php echo $row['name'];?>"
                 placeholder="Name"
                 required><br>
                 <label for=""><b>Username:</b></label>
                 <input class="inputclass" type="text" 
                 name="username" value="<?php echo $row['user_name'];?>"
                 placeholder="Username"
                 required><br>
                 <label for=""><b>Email:</b></label>
                 <input class="inputclass" type="text" 
                 name="email" value="<?php echo $row['email'];?>"
                 placeholder="Email"
                 required><br>
                 <input class="inputclass" type="hidden" 
                 name="password" value="<?php echo $row['password'];?>"
                 placeholder="Email"
                 required>
 
               
               
     	<button class="btn_login" type="submit" name="accupdate_btn">Update</button>
         <a href="AccChangePass.php" type="submit" class="ca">Change Password?</a>
     	<a href="account.php" type="submit" class="ca">Go back</a>
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