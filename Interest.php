<?php 
session_start();
include 'assets/includes/header.php';
include 'assets/includes/navbar.php';
// include 'sendemail.php';
include 'admin/database/dbconfig.php';
?>
       
            <!--==================== HOME ====================-->
            <section class="home" >
               <div class="vid3"></div>

            

                    
                </div>
            </section>

            <!--==================== Reservation ====================-->
            <section class="reservation section" id="home" >
               
                   
                <div class="container__reserve">
                <?php 
                        if (isset($_SESSION['user_name'])) {
                            echo '
           <form class="contact" action="Connect.php" method="post">
                            <div class="user-details">
                                <h2 class="reserve-title"><b><span style="color: #b30000;">CONNECT </span>WITH US</b></h2>
                                <p class="footer__terms-link"><r>Your email address will not be published. Required fields are marked (*)</r></p>
                                <input type="text" name="lname" class="text-box" placeholder="Last Name *" required>
                                <input type="text" name="fname" class="text-box" placeholder="First Name *" required>
                                <input type="text" name="mname" class="text-box" placeholder="Middle Initial" required>
                                <input type="text" name="address" class="text-box1" placeholder="Address *" required>
                                <input type="text" name="number"class="text-box2" placeholder="Cellphone/ Telephone Number *" onkeyup="numberonly(this)" required>
                                <input type="email" name="email" class="text-box2" placeholder="Email Address *" required>
                                <input list="inte" name="interest" class="text-box1" placeholder="Interest *" required>
                                <datalist id="inte">
                                    <option value="Ministry Dance"></option>
                                    <option value="Ministry Worship"></option>
                                    <option value="Ministry Usher"></option>
                                    <option value="Ministry Sunflower"></option>
                                    <option value="Ministry Prayer"></option>
                                    <option value="Ministry Marshal"></option>
                                    <option value="Life Group Alpha"></option>
                                    <option value="Life Group Beta"></option>
                                    <option value="Life Group Mile"></option>
                                    <option value="Life Group Men"></option>
                                    <option value="Life Group Women"></option>
                                    <option value="Life Group Children"></option>

                                </datalist>
                                
                               
                                <input type="submit" name="connectbtn" class="send-btn" value="Send">';
                        }
                        else
                        {
                            echo '<form class="contact" action="login.php" method="post">
                            <div class="user-details">
                                <h2 class="reserve-title"><b><span style="color: #b30000;">CONNECT </span>WITH US</b></h2>
                                <p><r>You need to login first</r></p><input type="text" name="lname" class="text-box" placeholder="Last Name" required readonly>
                                <input type="text" name="fname" class="text-box" placeholder="First Name" required readonly>
                                <input type="text" name="mname" class="text-box" placeholder="Middle Initial" required readonly>
                                <input type="text" name="address" class="text-box1" placeholder="Address" required readonly>
                                <input type="text" name="number"class="text-box2" placeholder="Cellphone/ Telephone Number" onkeyup="numberonly(this)" required readonly>
                                <input type="email" name="email" class="text-box2" placeholder="Email Address" required readonly>
                                <input list="inte" name="interest" class="text-box1" placeholder="Interest" required readonly>
                                <datalist id="inte">
                                    <option value="Ministry Dance"></option>
                                    <option value="Ministry Worship"></option>
                                    <option value="Ministry Usher"></option>
                                    <option value="Ministry Sunflower"></option>
                                    <option value="Ministry Prayer"></option>
                                    <option value="Ministry Marshal"></option>
                                    <option value="Life Group Alpha"></option>
                                    <option value="Life Group Beta"></option>
                                    <option value="Life Group Mile"></option>
                                    <option value="Life Group Men"></option>
                                    <option value="Life Group Women"></option>
                                    <option value="Life Group Children"></option>

                                </datalist>
                                 
                               
                                <input type="submit" name="connectbtn" class="send-btn" value="Send">';
                        }
                                ?>
                                </div>  
                        </form>
                        
            </section>  
           
 <p class="pastor"><r>Reminders:</r>  "When you submit your reservation response, it is<br> directly entered into the website's database. For cancellation,  <br>please contact the church officer directly <a href="Connect.php#contact" class="m-link"><b>here.</b> </a>"</p>
      
        
             
            <?php 
include 'assets/includes/scriptwv.php';
include 'assets/includes/footer.php';

?>