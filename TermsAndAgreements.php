
<?php 
session_start();
include 'assets/includes/header.php';
include 'assets/includes/navbar.php';
// include 'sendemail.php';
include 'admin/database/dbconfig.php';
?>
       
       
            <!--==================== HOME ====================-->
            <section class="home">
                <video autoplay loop class="vid">
                    <source src="assets/motion/motion4.mp4" type="video/mp4">
                </video>

                <div class="church__container container grid">
                    <div class="church__data">
                        <h1 class="church__data-title">  <b>Terms And Agreements</b></h1>
                        
                       
                    </div>

                   

                    
                </div>
            </section>


           
          

                     <!--==================== join us button first====================-->
            <section class="about section" id="home">
                <div class="about__container container grid">
                    <div class="about__data">
                    <?php
                            
                            
                            $query = "SELECT * FROM sections where sname = 'TermsAndAgreements'";
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
                 

                 $query = "SELECT * FROM photos where pname ='TermsAndAgreements' ";
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

            
               
                <?php 
include 'assets/includes/scriptwv.php';
include 'assets/includes/footer.php';

?>