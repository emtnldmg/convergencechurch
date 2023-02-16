
<?php 
session_start();
include 'assets/includes/header.php';
include 'assets/includes/navbar.php';

?>
<!--==================== HOME ====================-->

              <body class="body">
                <section class="homelogin" id="home">
					
     <form class="form_login" action="fotgotsmpt.php" method="post">
     	<h2 class="h2class"><b>RESET<r> PASSWORD</r></b></h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	
     	<input class="inputclass" type="email" name="email" placeholder="Enter Your Email" required><br>
         <input class="inputclass" type="text" name="username" placeholder="Enter Your Username" required><br>

     
	
     	<button class="btn_login" name="	" type="submit">SUBMIT</button>
          
     </form>
	</section>
			  </body>

                    
                     
<?php 
include 'assets/includes/scriptwv.php';


?>