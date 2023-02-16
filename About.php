
<?php 
session_start();
include 'assets/includes/header.php';
include 'assets/includes/navbar.php';
include 'sendemail.php';
include 'admin/database/dbconfig.php';
?>
       
            <!--==================== HOME ====================-->
            <section class="home" id="home">
                <video autoplay loop class="vid">
                    <source src="assets/motion/motion4.mp4" type="video/mp4">
                </video>

                <div class="church__container container grid">
                    <div class="church__data">
                        <h1 class="church__data-title">  <b>who we are</b></h1>
                        
                        <span class="home__data-subtitle">Don’t you know that you yourselves are God’s temple and that God’s Spirit dwells in your midst? <br>
-1 Corinthians 3:16</span>
                      
                        
                    </div>

                   

                    
                </div>
            </section>


                <!--==================== join us button first====================-->
            <section class="about section" id="whoweare">
                <div class="about__container container grid">
                    <div class="about__data">
                    <?php
                         
                            
                            $query = "SELECT * FROM sections where sname = '4.2Section'";
                            $query_run = mysqli_query($connection,$query);

                        if(mysqli_num_rows($query_run))
                        {
                            foreach($query_run as $row);
                            {
                                ?>
                             
                              
                       
                        <h2 class="section__title about__title"><b><?php echo  $row['stitle']; ?></b></h2>
                        <p class="about__description"><?php echo  $row['sdescrip']; ?>
                        </p>
                       
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
                

                 $query = "SELECT * FROM photos where pname ='4.2Section' ";
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
               
             <!--==================== HISTORY BLAH BLAH ====================-->
             <section class="experience section">
                

                <div class="experience__container container grid">
                    <div class="about__content grid">
                    <?php
                           
                            
                            $query = "SELECT * FROM sections where sname = '4.3Section'";
                            $query_run = mysqli_query($connection,$query);

                        if(mysqli_num_rows($query_run))
                        {

                            
                            while($row = mysqli_fetch_array($query_run))
                            {
                                ?>
                        <div class="experience__data">
                    
                            <h2 class="about-title"><b><?php  echo  $row['stitle'];?></b></h2><p class="experience__description histoty"><?php  echo  $row['sdescrip'];?></p>
                            
                        </div>
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
            

          <!--==================== join us image first====================-->
          <section class="about section" id="about">
                <div class="about__container container grid">
                   

                    <div class="about__img">
                    <?php 
                

                 $query = "SELECT * FROM photos where pname ='4.4Section' ";
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
                           
                            
                            $query = "SELECT * FROM sections where sname = '4.4Section'";
                            $query_run = mysqli_query($connection,$query);

                        if(mysqli_num_rows($query_run))
                        {
                            foreach($query_run as $row);
                            {
                                ?>
                             
                           
                              
                        <h2 class="section__title about__title"><b><?php  echo  $row['stitle'];?></b></h2>
                        <p class="about__description"><?php echo  $row['sdescrip']; ?>
                        </p>
                                
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
            
             <!--==================== join us image first====================-->
          <section class="about section" id="about">
                <div class="about__container container grid">
                   

                    <div class="about__data">
                        <?php
                           
                            
                            $query = "SELECT * FROM sections where sname = '4.7Section'";
                            $query_run = mysqli_query($connection,$query);

                        if(mysqli_num_rows($query_run))
                        {
                            foreach($query_run as $row);
                            {
                                ?>
                             
                           
                              
                        <h2 class="section__title about__title"><b><?php  echo  $row['stitle'];?></b></h2>
                        <p class="about__description"><?php echo  $row['sdescrip']; ?>
                        </p>
                                
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
                

                 $query = "SELECT * FROM photos where pname ='4.7Section' ";
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

                </div>
            </section>


            <!--==================== MEET THE PASTORS ====================-->
            <section class="experience section">
            <?php
               
                
                $query = "SELECT * FROM sections where sname = 'Pastors'";
                $query_run = mysqli_query($connection,$query);
                if(mysqli_num_rows($query_run))
                {
                foreach($query_run as $row);
                {
            ?>
                <h2 class="section__title"><b><?php  echo  $row['stitle'];?></b></h2>
                <p class="pastor"><?php  echo  $row['sdescrip'];?></p>
            <?php
                }
                }
                else
                {
                    echo "No Record Found";
                }

            ?>  
                <div class="contact__container container grid">
                    <div class="pastors__content grid">
                    <?php 
                           

                            $query = "SELECT * FROM photos where pname ='Pastor' ";
                            $query_run = mysqli_query($connection,$query);

                            $check_faculty = mysqli_num_rows($query_run) > 0;
                            if($check_faculty)
                            {
                                while($row = mysqli_fetch_array($query_run))
                                {
                             ?>
                        <div class="experience__data">
                            
                             <img src="admin/upload/<?php echo $row['pphoto'];?>" class="xp_img" alt="" srcset="">
                           
                           
                            <H4><?php  echo  $row['ptitle'];?></H4>
                            <p class="experience__description"><?php  echo  $row['link'];?></p>
                           
                        </div>

                        
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
            </section>

              <!--==================== frequently ask questions ====================-->
              <section class="about section" id="faqs">
                <div class="woweare__container container grid">
                    <div class="about__data">
                    <?php
                               
                                
                                $query = "SELECT * FROM sections where sname = '4.5Section'";
                                $query_run = mysqli_query($connection,$query);
                                if(mysqli_num_rows($query_run))
                                {
                                foreach($query_run as $row);
                                {
                             ?>
                        <h2 class="section__title"><b><?php  echo  $row['stitle'];?></b></h2>
                        <?php
                                }
                                }
                                else
                                {
                                    echo "No Record Found";
                                }

                            ?> 
                             
                               <?php
                               
                                
                                $query = "SELECT * FROM sections where sname = '4.5.1Section'";
                                $query_run = mysqli_query($connection,$query);
                                if(mysqli_num_rows($query_run))
                                {
                                    while($row = mysqli_fetch_array($query_run))
                                {
                             ?>
                        <h2 class="what"><b><?php  echo  $row['stitle'];?></b></h2>
                        <p class="what__description"><?php  echo  $row['sdescrip'];?></p>
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

            <section class="about section" id="ask" >
                <div class="message-box">
                    <!--alert messages start-->
            <?php echo $alert; ?>
            <!--alert messages end-->
            <?php
                               
                                
                                $query = "SELECT * FROM sections where sname = '4.6Section'";
                                $query_run = mysqli_query($connection,$query);
                                if(mysqli_num_rows($query_run))
                                {
                                foreach($query_run as $row);
                                {
                             ?>                   
                <h2 class="section__title" ><b><?php  echo  $row['stitle'];?></b></h2>
                <P>You can message us directly and ask a question through this</a></b>
                <?php
                                    }
                                    }
                                    else
                                    {
                                        echo "No Record Found";
                                    }

                                ?>  
              
                <div class="contact-section" >
                   
                    <div class="contact-form" >
                        
                      <form class="contact" action="" method="post" >
                        
                        <input type="email" name="email" class="aboutemail" placeholder="Your Email" required>
                        <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
                        <input type="submit" name="submitquestions" class="send-btn" value="Send">
                      </form>
                    </div>
                  </div>
                  </div>
                </section>
            
                <script type="text/javascript">
                if(window.history.replaceState){
                window.history.replaceState(null, null, window.location.href);
                }
                
                </script>

<?php



if(isset($_POST['submitquestions']))
{
	$email = $_POST['email'];
	$msg = $_POST['message'];
	
    
    // $total= "SELECT SUM(resNum) as total FROM `reservation`";
	$query = "INSERT INTO questions (email,message) VALUES ('$email','$msg')";

	$query_run = mysqli_query($connection,$query);

}
?>  


                <?php 
include 'assets/includes/scriptwv.php';
include 'assets/includes/footer.php';

?>