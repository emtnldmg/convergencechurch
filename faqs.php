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
                    <source src="assets/motion/motion.mp4" type="video/mp4">
                </video>

                <div class="church__container container grid">
                    <div class="church__data">
                        <h1 class="church__data-title">  <b>FAQ's</b></h1>
                        
                       
                    </div>

                   

                    
                </div>
            </section>
           
          

              <!--==================== frequently ask questions ====================-->
              <section class="about section" id="about">
                <div class="woweare__container container grid">
                    <div class="about__data">
                    <?php 
                

                $query = "SELECT * FROM sections where sname ='faqs' ";
                $query_run = mysqli_query($connection,$query);

                $check_faculty = mysqli_num_rows($query_run) > 0;
                if($check_faculty)
                {
                   while($row = mysqli_fetch_array($query_run))
                   {
                       ?>
                        <h2 class="what"><b><?php echo  $row['stitle']; ?></b></h2>
                        <p class="what__description"><?php echo  $row['sdescrip']; ?></p>
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

            
               
                <?php 
include 'assets/includes/scriptwv.php';
include 'assets/includes/footer.php';

?>