
<?php 
session_start();
include 'assets/includes/header.php';
include 'assets/includes/navbar.php';

?>
<!--==================== HOME ====================-->

              <body class="body">
                <section class="homelogin" id="home">
               
     <form class="form_login" action="AccChangePassCode.php" method="post">
     	<h2 class="h2class"><b>CHANGE<r> PASSWORD</r></b></h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
		 <?php if (isset($_GET['success'])) { ?>
            <p class="success"><?php echo $_GET['success']; ?></p>
        <?php } ?>
        <?php
         require 'admin/database/dbconfig.php';
         ?>
     	<input class="inputclass" type="text" name="email" placeholder="Verify your email"  required><br>
         <input class="inputclass" type="password" name="pass" placeholder="Enter Your New Password" required><br>
		 <input class="inputclass" type="password" name="newpass" placeholder="Repeat Password" required><br>

     
	
     	<button class="btn_login" name="accchangepass_btn" type="submit">SUBMIT</button>
		 <a href="AccUpdate.php" class="ca">Go back </a>
     </form>
	</section>
			  </body>

                    
                     
<?php 
include 'assets/includes/scriptwv.php';


?>