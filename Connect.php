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
                        
                        <h1 class="church__data-title">  <b>CONNECT WITH US </b></h1>
                        
                        <span class="home__data-subtitle">Christ chose some of us to be apostles, prophets, missionaries, pastors, and teachers, so that his people would learn to serve and his body would grow strong. This will continue until we are united by our faith and by our understanding of the Son of God. Then we will be mature, just as Christ is, and we will be completely like him.<br>
-Ephesians 4:11-13</span>
                        
                    </div>

                   

                    
                </div>
            </section>
                <!--==================== slider ====================-->
           <section class="discover section" id="discover">
            <?php
                         
                            
                          $query = "SELECT * FROM sections where sname = '3.1Section'";
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
                

                 $query = "SELECT * FROM photos where pname ='3.1.1Section' ";
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

                    </div>
                </div>
            </section>  



                  <!--==================== slider ====================-->
                  <section class="discover section" id="discover">
            <?php
                         
                            
                          $query = "SELECT * FROM sections where sname = '3.2Section'";
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
                           
                            
                            $query = "SELECT * FROM sections where sname = '3.3Section'";
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
                        if (isset($_SESSION['user_name'])) {
                            echo '
                        <a href="Interest.php#home" class="button">Be part of UNITE Youth</a>';
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

                    <div class="about__img">
                    <?php 
                

                 $query = "SELECT * FROM photos where pname ='3.3Section' ";
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
            

        <!--==================== join us image first====================-->
        <section class="about section" id="about">
                <div class="about__container container grid">
                   

                    <div class="about__img">
                    <?php 
                

                 $query = "SELECT * FROM photos where pname ='3.4Section' ";
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
                           
                            
                            $query = "SELECT * FROM sections where sname = '3.4Section'";
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
                        if (isset($_SESSION['user_name'])) {
                            echo '
                        <a href="Interest.php#home" class="button">Register Now</a>';
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
            
        
            
            
            <!--==================== EXPERIENCE ====================-->
            <section class="experience section" id="contact">
            <?php
                           
                            
                            $query = "SELECT * FROM sections where sname = '3.5Section'";
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
                <div class="contact__container container grid">
                    <div class="experience__content grid">
                    <?php 
                       

                        $query = "SELECT * FROM photos where pname ='3.5.1Section' ";
                        $query_run = mysqli_query($connection,$query);

                        $check_faculty = mysqli_num_rows($query_run) > 0;
                        if($check_faculty)
                        {
                            while($row = mysqli_fetch_array($query_run))
                            {
                         ?>
                    <div class="experience__data">
                        

                        <img class="xp_img" src="admin/upload/<?php echo $row['pphoto'];?>" alt="<?php echo $row['pphoto'];?>" srcset="">
                        <p class="experience__description"><b><?php echo  $row['ptitle']; ?></b></p>
                          
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
              <!--alert messages start-->
            <?php echo $alert; ?>
            <!--alert messages end-->

            <section class="message-box section" id="contactus" >
                <h2 class="section__title"><b> <r>PRAYER</r> CAN MOVE MOUNTAINS</b></h2>
                <p class="p">Praying for others is a form of love. Prayer for others allows us to grow in compassion while keeping us from <br> becoming pre-occupied with our own needs. And because we are called to pray for one another as a church, <br>feel free to send us your prayer requests so that the Lord can give us what He desires for us</p>
                <div class="contact-section">
                   
                    <div class="contact-form">
                        
                      <form class="contact" action="" method="post">
                        <input type="text" name="name" class="text-box" placeholder="Your Name" required>
                        <input type="email" name="email" class="text-box" placeholder="Your Email" required>
                        <textarea name="message" rows="5" placeholder="Your Prayer Request" required></textarea>
                        <input type="submit" name="submit" class="send-btn" value="Send">
                      </form>
                    </div>
                  </div>
                </section>
            
             <!--contact section end-->

                <script type="text/javascript">
                if(window.history.replaceState){
                window.history.replaceState(null, null, window.location.href);
                }
                </script>

           
<?php
include "databaseweb/dbconfigweb.php";
// $connection = mysqli_connect("localhost","root","","adminpanel");



if(isset($_POST['connectbtn']))
{
	$lname = $_POST['lname'];
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$address = $_POST['address'];
    $phoneNum = $_POST['number'];
	$email = $_POST['email'];
    $interest = $_POST['interest'];
    
    // $total= "SELECT SUM(resNum) as total FROM `reservation`";
	$query = "INSERT INTO connect (lname,fname,mname,address,phoneNum,email,interest) VALUES ('$lname','$fname','$mname','$address','$phoneNum','$email','$interest')";

	$query_run = mysqli_query($connection,$query);

	if($query_run)
	{
       echo "<script>alert('message sent succesfully');</script>";
       exit;
	}
	else
	{
		echo mysqli_error($connection);
        exit;
	}
}
?>  
                 
                <?php 
include 'assets/includes/scriptwv.php';
include 'assets/includes/footer.php';

?>