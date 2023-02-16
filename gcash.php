
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
                    <source src="assets/motion/motion2.mp4" type="video/mp4">
                </video>

                <div class="church__container container grid">
                    <div class="church__data">
                        <h1 class="church__data-title">  <b>GIVE ONLINE</b></h1>
                        
                       
                    </div>

                   

                    
                </div>
            </section>
                    <!-- for the gcash info -->
                     <!--==================== join us image first====================-->
                <section class="gcash section" id="gcash">
                <?php 
            

            $query = "SELECT * FROM photos where pname ='gcashqr'";
            $query_run = mysqli_query($connection,$query);

            $check_faculty = mysqli_num_rows($query_run) > 0;
            if($check_faculty)
            {
               while($row = mysqli_fetch_array($query_run))
               {
                   ?>
                <h2 class="section__title"><?php echo $row['ptitle'];?></b></h2>
                <div class="center">
                <img src="admin/upload/<?php echo $row['pphoto'];?>" alt="<?php echo $row['pphoto'];?>" class="about__img-two">
                    
                </div>
                 <h2 class="section__title">0917-888-7310</b></h2>
                <?php
                            }
                        }
                        else
                        {
                            echo "No Record Found";
                        }

                        ?>
               
            </section>
           

            <section class="experience ">
          
                <div class="experience__container container grid">
                    <div class="gcash__content grid">
                    <?php 
                           

                            $query = "SELECT * FROM photos where pname ='gcash' ";
                            $query_run = mysqli_query($connection,$query);

                            $check_faculty = mysqli_num_rows($query_run) > 0;
                            if($check_faculty)
                            {
                                while($row = mysqli_fetch_array($query_run))
                                {
                             ?>
                        <div class="experience__data">
                            
                        <H4 class="mid"><?php  echo  $row['ptitle'];?></H4>
                            <p class="experience__description"><?php  echo  $row['descrip'];?></p>

                             <img src="admin/upload/<?php echo $row['pphoto'];?>" class="about__img-two" alt="" srcset="">
                           
                           
                         
                           
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

          
  <section class="gcash section" id="metrobank">
                <?php 
            

            $query = "SELECT * FROM photos where pname ='metrobank'";
            $query_run = mysqli_query($connection,$query);

            $check_faculty = mysqli_num_rows($query_run) > 0;
            if($check_faculty)
            {
               while($row = mysqli_fetch_array($query_run))
               {
                   ?>
                <h2 class="section__title"><?php echo $row['ptitle'];?></b></h2>
                <div class="center">
                <img src="admin/upload/<?php echo $row['pphoto'];?>" alt="<?php echo $row['pphoto'];?>" class="about__img-two">
                    
                </div>
                 <h2 class="section__title"><b><?php echo $row['descrip'];?></b></h2>
                <?php
                            }
                        }
                        else
                        {
                            echo "No Record Found";
                        }

                        ?>
               
            </section>
               

            
               
                <?php 
include 'assets/includes/scriptwv.php';
include 'assets/includes/footer.php';

?>