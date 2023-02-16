   <!--==================== SPONSORS ====================-->
   <!-- <section class="sponsor section">
                <div class="sponsor__container container grid">
                    <div class="sponsor__content">
                        <img src="assets/img/sponsors1.png" alt="" class="sponsor__img">
                    </div>
                    <div class="sponsor__content">
                        <img src="assets/img/sponsors3.png" alt="" class="sponsor__img">
                    </div>
                    <div class="sponsor__content">
                        <img src="assets/img/sponsors4.png" alt="" class="sponsor__img">
                    </div>
                   
                
                </div>
            </section> -->
        
        </main>

        <!--==================== FOOTER ====================-->
        <footer class="footer section">
            <div class="footer__container container grid">
                <div class="footer__content grid">
                    <div class="footer__data">
                        <h3 class="footer__title">Convergence</h3>
                        <p class="footer__description">"Give thanks to the LORD,<br> for He is good; <br>his love endures forever."<br> - Psalm 107:1
                        </p>
                        <div>
                            <a href="https://www.facebook.com/convergencechurchph" target="_blank" class="footer__social">
                                <i class="ri-facebook-box-fill"></i>
                            </a>
                            <a href="https://twitter.com/CICFKawit2" target="_blank" class="footer__social">
                                <i class="ri-twitter-fill"></i>
                            </a>
                            <a href="https://www.instagram.com/convergencechurchph/" target="_blank" class="footer__social">
                                <i class="ri-instagram-fill"></i>
                            </a>
                            <a href="https://www.youtube.com/" target="_blank" class="footer__social">
                                <i class="ri-youtube-fill"></i>
                            </a>
                            
                        </div>
                    </div>
    
                    <div class="footer__data">
                        <h3 class="footer__subtitle">church events</h3>
                        <ul>
                            <li class="footer__item">
                                <a href="videosection.php" class="footer__link">Media Archive</a>
                            </li>
                            <li class="footer__item">
                                <a href="UpEvents.php#home" class="footer__link">Upcoming Events</a>
                            </li>
                       
                        </ul>
                    </div>
    
                    <div class="footer__data">
                        <h3 class="footer__subtitle">About</h3>
                        <ul>
                            <li class="footer__item">
                                <a href="About.php#whoweare" class="footer__link">Who We Are</a>
                            </li>
                            <li class="footer__item">
                                <a href="Connect.php#contact" class="footer__link">Contact Us</a>
                            </li>
                            <li class="footer__item">
                                <a href="About.php#faqs" class="footer__link">FAQ's</a>
                            </li>
                        </ul>
                    </div>
    
                    <div class="footer__data">
                        <h3 class="footer__subtitle">Join Us</h3>
                        <ul>
                            
<?php 
                        if (isset($_SESSION['user_name'])) {
                            echo '    <li class="footer__item">
                                <a href="Interest.php#home" class="footer__link">Join Us</a>
                            </li>
                    ';
                        }
                      
                        else
                        {
                            echo '    <li class="footer__item">
                                <a href="login.php" class="footer__link">Become a Member</a>
                            </li>
                        ';
                        }  
                        ?> 
                        
                        </ul>
                    </div>
                </div>

                <div class="footer__rights">
                    <p class="footer__copy">&#169; 2021 Convergence Church. All rights reserved.</p>
                    <div class="footer__terms">
                        <a href=" TermsAndAgreements.php#terms" class="footer__terms-link">Terms & Agreements</a>
                        <a href="privacy_policy.php#about" class="footer__terms-link">Privacy Policy</a>
                    </div>
                </div>
            </div>
        </footer>

       
    </body>
</html>