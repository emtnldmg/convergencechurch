<?php 
session_start();
include 'assets/includes/header.php';
include 'assets/includes/navbar.php';
include 'sendemail.php';

?>
       
            
            <!--==================== HOME ====================-->
            <section class="home" id="home">
                <video autoplay loop class="vid">
                    <source src="assets/motion/motion2.mp4" type="video/mp4">
                </video>

                <div class="church__container container grid">
                    <div class="church__data">
                        <h1 class="church__data-title">  <b>CONTACT US</b></h1>
                        
                       
                    </div>

                   

                    
                </div>
            </section>

  <!--alert messages start-->
  <?php echo $alert; ?>
            <!--alert messages end-->
            <section class="message-box section" id="contactus" >
               <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur, perspiciatis!</h2>
                <div class="contact-section">
                    <div class="contact-info">
                      <div><i class="fas fa-map-marker-alt"></i>Address, City, Country</div>
                      <div><i class="fas fa-envelope"></i>contact@email.com</div>
                      <div><i class="fas fa-phone"></i>+00 0000 000 000</div>
                      <div><i class="fas fa-clock"></i>Mon - Fri 8:00 AM to 5:00 PM</div>
                    </div>
                    <div class="contact-form">
                        
                      <form class="contact" action="" method="post">
                        <input type="text" name="name" class="text-box" placeholder="Your Name" required>
                        <input type="email" name="email" class="text-box" placeholder="Your Email" required>
                        <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
                        <input type="submit" name="contactus_btn" class="send-btn" value="Send">
                      </form>
                    </div>
                  </div>
                </section>
                
                 
                <?php 
include 'assets/includes/scriptwv.php';
include 'assets/includes/footer.php';

?>