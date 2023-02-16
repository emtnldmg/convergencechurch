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

   
                  <!--==================== join us image first====================-->
                  <?php 
               

               $query = "SELECT * FROM photos where ptitle ='women'";
               $query_run = mysqli_query($connection,$query);

               $check_faculty = mysqli_num_rows($query_run) > 0;
               if($check_faculty)
               {
                  while($row = mysqli_fetch_array($query_run))
                  {
                      ?>
            <section class="about section" id="home">
        
                <div class="about__container container grid">
                   

                    <div class="about__img">
                 

                        <div class="about__img-overlay">
                        <img src="admin/upload/<?php echo $row['pphoto'];?>" alt="<?php echo $row['pphoto'];?>" class="about__img-two">
               
                        </div>
                    </div>

                    <div class="about__data">
                        
                           
                              
                        <h2 class="section__title about__title"><b><?php  echo  $row['ptitle'];?></b></h2>
                        <p class="about__description"><?php echo  $row['descrip']; ?>
                        </p>
                         <?php 
                        if (isset($_SESSION['user_name'])) {
                            echo '
                        <a href="Interest.php#home" class="button" >Join Us</a>';
                        }
                      
                        else
                        {
                            echo '
                            <a href="login.php" class="button">Proceed to Login</a>';
                        }  
                        ?> 
                       
                       
                      </div>
                </div>
               
            </section>

            <?php
                    }
                 }
                 else
                 {
                     echo "No record Found";
                 }
                 ?>

           

        
             
            <?php 
include 'assets/includes/scriptwv.php';
include 'assets/includes/footer.php';

?>