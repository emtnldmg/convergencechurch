
<?php 
session_start();
include 'assets/includes/header.php';
include 'assets/includes/navbar.php';

?>
<!--==================== HOME ====================-->

              <body class="body">
                <section class="homelogin" id="home">
					
     <form class="form_login" action="changepasscode.php" method="post">
     	<h2 class="h2class"><b>CHANGE<r> PASSWORD</r></b></h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
		 <?php if (isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>
     	<input class="inputclass" type="email" name="email" placeholder="Enter Your Email" required><br>
         <input class="inputclass" type="password" name="pass" placeholder="Enter Your New Password" required><br>
		 <input class="inputclass" type="password" name="newpass" placeholder="Repeat Password" required><br>

     
	
     	<button class="btn_login" name="changepass_btn" type="submit">SUBMIT</button>
		 <a href="login.php" class="ca">Go back to Login Page	</a>
     </form>
	</section>
			  </body>

                    
                     
<?php 
include 'assets/includes/scriptwv.php';


?>