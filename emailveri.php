
<?php 

include 'assets/includes/header.php';
include 'assets/includes/navbar.php';
include "db_conn.php";
?>
<!--==================== HOME ====================-->

              <body class="body">
                <section class="homelogin" id="home">

<form class="form_login" action="emailvericode.php" method="POST">
<h2 class="h2class"><b>verification<span style="color: #b30000;"> code</span></b></h2>
          <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>
   
          
            <input class="inputclass" type="hidden" name="email" value="<?php echo $_GET['email']; ?>">


            <input  class="inputclass" type="text" name="verification_code" placeholder="Enter verification code" required><br>
        
            <input class="btn_login" type="submit"name="verify_email" value="Verify Email">

            

</form>
	</section>
			  </body>

                    
         
<?php 
include 'assets/includes/scriptwv.php';


?>