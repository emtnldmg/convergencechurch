<?php 

include 'assets/includes/header.php';
include 'assets/includes/navbar.php';

?>
  <body class="body">
 <section class="homelogin" id="home">
<form class="form_login" action="signup-check.php" method="post">
     	<h2 class="h2class" require><b>SIGN <span style="color: #b30000;"> UP </span></b></h2>
          
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>

         
          <?php if (isset($_GET['name'])) { ?>
               <input class="inputclass" type="text" 
                      name="name" 
                      placeholder="Name*"
                      value="<?php echo $_GET['name']; ?>" required><br>
          <?php }else{ ?>
               <input class="inputclass" type="text" 
                      name="name" 
                      placeholder="Name*" required><br>
          <?php }?>

        
          <?php if (isset($_GET['uname'])) { ?>
               <input class="inputclass" type="text" 
                      name="uname"  
                      placeholder="User Name*"
                      value="<?php echo $_GET['uname']; ?>" required><br>
          <?php }else{ ?>
               <input class="inputclass" type="text" 
                      name="uname" 
                      placeholder="User Name*" required><br>
          <?php }?>

     	<input class="inputclass" type="email" 
                 name="uemail" 
                 placeholder="Email*" required><br>    

     	<input class="inputclass" type="password" 
                 name="password" 
                 placeholder="Password*" required><br>

       
          <input class="inputclass" type="password" 
                 name="re_password" 
                 placeholder="Re_Password*"
                 required><br>

                 <div class="checkbox">
		<input  class="inputclass" id="remember" type="checkbox" placeholder="Terms and Agreements" required> 
		<a class="aa" href="privacy_policy.php">	
		Terms and Agreements
		</a>
		</div>
     	<button class="btn_login" name="register" type="submit">Sign Up</button>
          <a href="login.php" class="ca">Already have an account?</a>
          <p class="footer__terms-link"><r>Your email address will not be published. Required fields are marked (*)</r></p>
            
     </form>
     </section>
  </body>
<?php 
include 'assets/includes/scriptwv.php';


?>