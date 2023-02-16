
<?php 
session_start();
include 'assets/includes/header.php';
include 'assets/includes/navbar.php';

?>
<!--==================== HOME ====================-->

              <body class="body">
                <section class="homelogin" id="home">
				
     <form class="form_login" action="login_check.php" method="post">
     	<h2 class="h2class"><b>LOG<span style="color: #b30000;"> IN</span></b></h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	   <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>
     	
     	<input class="inputclass" type="text" name="uname" placeholder="Enter User Name/ Email" required><br>

     	
     	<input class="inputclass" type="password" name="password" placeholder="Password"><br>
	
     	<button class="btn_login" name="login_btn" type="submit">Login</button>
          <a href="signup.php" class="ca">Create an account</a>
		  <a href="forgotpass.php" class="ca">Forgot Password</a>
     </form>
	
	</section>
			  </body>

                    
           
<?php 
include 'assets/includes/scriptwv.php';


?>