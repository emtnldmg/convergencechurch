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

           
           <!--==================== slider ====================-->
           <section class="discover section" id="home">
            <?php
                       
                            
                          $query = "SELECT * FROM sections where sname = '2.4Section'";
                          $query_run = mysqli_query($connection,$query);
                        if(mysqli_num_rows($query_run))
                        {
                            foreach($query_run as $row);
                            {
                                ?>
                             
                           
                <h2 class="section__title" ><b><?php  echo  $row['stitle'];?> </b></h2>
                <p><?php  echo  $row['sdescrip'];?></p>
                <p class="footer__terms-link"><r>This feature is just a preview and not clickable.</r></p>
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
                

                 $query = "SELECT * FROM photos where pname ='2.4Section' ";
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

           

        
             
            <?php 
include 'assets/includes/scriptwv.php';
include 'assets/includes/footer.php';

?>