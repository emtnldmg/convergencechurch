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
                             <h2 class="reserve-title"><b><span style="color: #b30000;">EVENT </span> RESERVATION</b></h2>
                            <p class="footer__terms-link"><r>Your email address will not be published. Required fields are marked (*)</r></p>
                             <input type="text" name="name" class="text-box1" placeholder="Your fullname *" required>
                            
                             <input type="email" name="address" class="text-box1" placeholder="Email address *" required>
                             <input type="text" name="number"class="text-box1" placeholder="Cellphone/ Telephone Number *" onkeyup="numberonly(this)" required>
                             
                <input id="effective-date" class="text-box2" type="date" name="effective-date" minlength="1" maxlength="64" placeholder=" " autocomplete="nope" required="required"></input>
        
                             
                             <input list="number" name="reserveNum" class="text-box2" placeholder="Event to be reserve (*)" required>  
                             <datalist id="number">
                                 <option value="Christening"></option>
                                 <option value="Wedding"></option>
                                 <option value="Other"></option>
                                 
                             </datalist>
                          
                             <input type="submit" name="submit" class="button" value="DONE">
                             
                      
                             ';
                        }
                       
                        ?>
                           </div>  
                   </form>
               </div>
           </section>
           
 <p class="pastor"><r>Reminders:</r>  "When you submit your reservation response, it is<br> directly entered into the website's database. For cancellation,  <br>please contact the church officer directly <a href="Connect.php#contact" class="m-link"><b>here.</b> </a>"</p>
      

  <style media="screen">
  
  
  input[type=date]:invalid::-webkit-datetime-edit
  {
  color:hsl(0deg 0% 46%);
  }

  ::-webkit-calendar-picker-indicator
  {
    filter: invert(1);
    color:hsl(0deg 0% 46%);
  }
  </style>
  
  
            <?php 
include 'assets/includes/scriptwv.php';
include 'assets/includes/footer.php';

?>