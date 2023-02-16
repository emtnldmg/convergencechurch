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

             <!--==================== reservation ====================-->
     <section class="reservation section" id="home">
               
   
               <div class="container__reserve">
               <?php 
                        if(isset($_SESSION['user_name']))
                        {
                         echo '
                         <form class="contact" action="ChurchEvents.php" method="post">
                         <div class="user-details">
                             <h2 class="reserve-title"><b><span style="color: #b30000;">RESERVE </span> YOUR SPOT</b></h2>
                            <p class="footer__terms-link"><r>Your email address will not be published. Required fields are marked (*)</r></p>
                             <input type="text" name="lname" class="text-box" placeholder="Last Name *" required>
                             <input type="text" name="fname" class="text-box" placeholder="First Name *" required>
                             <input type="text" name="mname" class="text-box" placeholder="Middle Initial" >
                             <input type="text" name="address" class="text-box1" placeholder="Address *" required>
                             <input type="text" name="number"class="text-box2" placeholder="Cellphone/ Telephone Number *" onkeyup="numberonly(this)" required>
                             <input type="email" name="email" class="text-box2" placeholder="Email Address *" required>
                             <input list="time" name="serviceTime" class="text-box2" placeholder="Prefered Service Time *" required>
                             <datalist id="time">
                             <option value="08:00 - 09:30 am"></option>
                             <option value="10:00 - 12:00 pm"></option>
                             
                             </datalist>
                             
                             <input list="number" onkeyup="numberonly(this)" name="reserveNum" class="text-box2" placeholder="Number to be Reserved (*)" required>  
                             <datalist id="number">
                                 <option value="1 person"></option>
                                 <option value="2 person"></option>
                                 <option value="3 persons"></option>
                                 <option value="4 persons"></option>
                                 <option value="5 persons"></option>
                             </datalist>
                          
                             <input type="submit" name="submit" class="button" value="Send">
                             <a href="other_services.php#home" class="button">Other Services</a>
                      
                             ';
                        }
                        else
                        {
                            
                            echo ' <form class="contact" action="login.php" method="post">
                            <div class="user-details">
                            <h2 class="reserve-title"><b><span style="color: #b30000;">RESERVE </span> YOUR SPOT</b></h2>
                            <p><r>You need to login first</r></p>
                            <input type="text" name="lname" class="text-box" placeholder="Last Name" readonly>
                           <input type="text" name="fname" class="text-box" placeholder="First Name" readonly>
                           <input type="text" name="mname" class="text-box" placeholder="Middle Initial" readonly>
                           <input type="text" name="address" class="text-box1" placeholder="Address" readonly>
                           <input type="text" name="number"class="text-box2" placeholder="Cellphone/ Telephone Number" onkeyup="numberonly(this)" readonly>
                           <input type="email" name="email" class="text-box2" placeholder="Email Address" readonly>
                           <input list="time" name="serviceTime" class="text-box2" placeholder="Prefered Service Time" readonly>
                           <datalist id="time">
                               <option value="08:00 - 09:30 am"></option>
                               <option value="10:00 - 12:00 pm"></option>
                               
                           </datalist>
                           <input list="number" onkeyup="numberonly(this)" name="reserveNum" class="text-box2" placeholder="Number to be Reserved" readonly>  
                           <datalist id="number">
                               <option value="1 person"></option>
                               <option value="2 person"></option>
                               <option value="3 persons"></option>
                               <option value="4 persons"></option>
                               <option value="5 persons"></option>
                           </datalist>
                           <input type="submit" name="submit" class="send-btn" value="Send">';
                        }
                        ?>
                           </div>  
                   </form>
               </div>
           </section>
           
 <p class="pastor"><r>Reminders:</r>  "When you submit your reservation response, it is<br> directly entered into the website's database. For cancellation,  <br>please contact the church officer directly <a href="Connect.php#contact" class="m-link"><b>here.</b> </a>"</p>
      
        
             
            <?php 
include 'assets/includes/scriptwv.php';
include 'assets/includes/footer.php';

?>