
<?php 
session_start();
include 'assets/includes/header.php';
include 'assets/includes/navbar.php';
// include 'sendemail.php';
include 'admin/database/dbconfig.php';
?>
       
       
            <!--==================== HOME ====================-->
            <section class="home" id="home">
                <video autoplay loop class="vid">
                    <source src="assets/motion/motion.mp4" type="video/mp4">
                </video>

                <div class="church__container container grid">
                    <div class="church__data">
                        <h1 class="church__data-title">  <b>INFORMATION</b></h1>
                        
                       
                    </div>

                   

                    
                </div>
            </section>


           
          

                  <!--==================== join us image first====================-->
                  <?php 
               

               $query = "SELECT * FROM photos where pname ='information' ";
               $query_run = mysqli_query($connection,$query);

               $check_faculty = mysqli_num_rows($query_run) > 0;
               if($check_faculty)
               {
                  while($row = mysqli_fetch_array($query_run))
                  {
                      ?>
            <section class="about section" id="<?php echo $row['sectionID'];?>">
        
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
                        <a href="<?php echo  $row['link']; ?>" class="button">Join Us</a>
                      
                       
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