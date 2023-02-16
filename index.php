<?php 
session_start();
include 'assets/includes/header.php';
include 'assets/includes/navbar.php';

include 'admin/database/dbconfig.php';
?>
       
<!--==================== HOME ====================-->

            <section class="home" id="home">
                <video autoplay loop class="vid-home">
                    <source src="assets/video/BANNERVID-HOME.mp4" type="video/mp4">
                </video>
                <div class="home__container container grid">
               
                    <div class="home__data">
                  
                        <h1 class="home__data-title"> <b> THIS IS THE <br> CHURCH   <br> WHERE <span style="color: #b30000;"> YOU </span> <br> BELONG. </b></h1>
                     
                        <a href="About.php#whoweare" class="button">See what we believe</a>

                    </div>

                    <div class="home__social">
                        <a href="https://www.facebook.com/convergencechurchph
" target="_blank" class="home__social-link">
                            <i class="ri-facebook-box-fill"></i>
                        </a>
                        <a href="https://www.instagram.com/convergencechurchph/

" target="_blank" class="home__social-link">
                            <i class="ri-instagram-fill"></i>
                        </a>
                        <a href="https://twitter.com/CICFKawit2" target="_blank" class="home__social-link">
                            <i class="ri-twitter-fill"></i>
                        </a>
                    </div>

                    
                </div>
            </section>

            <!--==================== join us image first====================-->
           <section class="about section" id="about">
          
                <div class="about__container container grid">
                   

                    <div class="about__img">
                    <?php 
               

                 $query = "SELECT * FROM photos where pname ='1.1Section' ";
                 $query_run = mysqli_query($connection,$query);

                 $check_faculty = mysqli_num_rows($query_run) > 0;
                 if($check_faculty)
                 {
                    while($row = mysqli_fetch_array($query_run))
                    {
                        ?>

                        <div class="about__img-overlay">
                        <img src="admin/upload/<?php echo $row['pphoto'];?>" alt="<?php echo $row['pphoto'];?>" class="about__img-two">
                             <?php
                    }
                 }
                 else
                 {
                     echo "No record Found";
                 }
                 ?>
                        </div>
                    </div>

                    <div class="about__data">
                        <?php
                          
                            
                            $query = "SELECT * FROM sections where sname = '1.1Section'";
                            $query_run = mysqli_query($connection,$query);

                        if(mysqli_num_rows($query_run))
                        {
                            foreach($query_run as $row);
                            {
                                ?>
                             
                           
                              
                        <h2 class="section__title about__title"><b><?php  echo  $row['stitle'];?></b></h2>
                        <p class="about__description"><?php echo  $row['sdescrip']; ?>
                        </p>
                        <a href="<?php echo  $row['secbtn1']; ?>" class="button" target="_blank">Watch online</a>
                      <?php 
                        if (isset($_SESSION['user_name'])) {
                            echo '
                        <a href="Reservation.php#home" class="button" >Reserve your spot</a>';
                        }
                      
                        else
                        {
                            echo '
                            <a href="login.php" class="button">Proceed to Login</a>';
                        }  
                        ?> 
                        <?php
                            }
                        }
                        else
                        {
                            echo "No Record Found";
                        }

                        ?>
                      </div>
                </div>
            </section>
            
             <!--==================== slider ====================-->
            <section class="discover section" id="discover">
            <?php
                        
                            
                          $query = "SELECT * FROM sections where sname = '1.2Section'";
                          $query_run = mysqli_query($connection,$query);
                        if(mysqli_num_rows($query_run))
                        {
                            foreach($query_run as $row);
                            {
                                ?>
                             
                           
                <h2 class="section__title"><b><?php  echo  $row['stitle'];?> </b></h2>
                <p><?php  echo  $row['sdescrip'];?></p>
                <?php
                            }
                        }
                        else
                        {
                            echo "No Record Found";
                        }

                        ?>
                <div class="discover__container container swiper-container">
                    <div class="swiper-wrapper">
                        <!--==================== DISCOVER 1 ====================-->
                        <?php 
               

                 $query = "SELECT * FROM photos where pname ='1.2Section' ";
                 $query_run = mysqli_query($connection,$query);

                 $check_faculty = mysqli_num_rows($query_run) > 0;
                 if($check_faculty)
                 {
                    while($row = mysqli_fetch_array($query_run))
                    {
                        ?>
                        <div class="discover__card swiper-slide">
                        <a href="<?php echo $row['link'];?>">
                            <img src="admin/upload/<?php echo $row['pphoto'];?>" alt="<?php echo $row['pphoto'];?>"  class="discover__img">
                            <div class="discover__data">
                  
                                <h2 class="discover__title"><?php echo $row['ptitle'];?></h2>
                            </div>
                                </a>
                 
                        </div>
                        <?php
                    }
                 }
                 else
                 {
                     echo "No record Found";
                 }
                 ?>

            </section>

           
             <!--==================== join us button first====================-->
            <section class="about section" id="about">
                <div class="about__container container grid">
                    <div class="about__data">
                    <?php
                          
                            
                            $query = "SELECT * FROM sections where sname = '1.3Section'";
                            $query_run = mysqli_query($connection,$query);

                        if(mysqli_num_rows($query_run))
                        {
                            foreach($query_run as $row);
                            {
                                ?>
                             
                              
                       
                        <h2 class="section__title about__title"><b><?php echo  $row['stitle']; ?></b></h2>
                        <p class="about__description"><?php echo  $row['sdescrip']; ?>
                        </p>
                        <a href="<?php echo  $row['secbtn1']; ?>" class="button">Get to know us more</a>
                        <?php
                            }
                        }
                        else
                        {
                            echo "No Record Found";
                        }

                        ?>
                    </div>

                    <div class="about__img">
                    <?php 
               

                 $query = "SELECT * FROM photos where pname ='1.3Section' ";
                 $query_run = mysqli_query($connection,$query);

                 $check_faculty = mysqli_num_rows($query_run) > 0;
                 if($check_faculty)
                 {
                    while($row = mysqli_fetch_array($query_run))
                    {
                        ?>


                        <div class="about__img-overlay">
                            
                        <img src="admin/upload/<?php echo $row['pphoto'];?>" alt="<?php echo $row['pphoto'];?>" class="about__img-two">
                        </div>
                    </div>
                </div>
                <?php
                            }
                        }
                        else
                        {
                            echo "No Record Found";
                        }

                        ?>
            </section>
            

            <!--==================== VIDEO ====================-->
            <section class="video section">
            <?php
                          
                            
                            $query = "SELECT * FROM sections where sname = '1.4Section'";
                            $query_run = mysqli_query($connection,$query);

                        if(mysqli_num_rows($query_run))
                        {
                            foreach($query_run as $row);
                            {
                                ?>
                             
                             
                              
                              
                <h2 class="section__title"><b><?php echo  $row['stitle']; ?></b></h2>
                
                   
                    <?php
                            }
                        }
                        else
                        {
                            echo "No Record Found";
                        }

                        ?>
                <div class="video__container container">
                    

                    <div class="video__content">
                    <iframe src="https://www.facebook.com/plugins/video.php?&amp;href=https%3A%2F%2Fweb.facebook.com%2Fconvergencechurchph%2Fvideos%2F2145285595620096%2F" class="video" width="1000" height="600" style="border:none;overflow:hidden;border-radius: 5px;" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>

                       
                    </div>
                </div>
            </section>

<?php 
include 'assets/includes/scriptwv.php';
include 'assets/includes/footer.php';

?>