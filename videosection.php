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
                        
                        <h1 class="church__data-title">  <b>MEDIA  ARCHIVES </b></h1>
                        
                       
                    </div>

                   

                    
                </div>
            </section>

                <section class="section">
                <div class="container-card">
         <div class="card-content" style="display: none;" >
         <?php 
             

                 $query = "SELECT * FROM archives ORDER BY id DESC";
                 $query_run = mysqli_query($connection,$query);

                 $check_faculty = mysqli_num_rows($query_run) > 0;
                 if($check_faculty)
                 {
                    while($row = mysqli_fetch_array($query_run))
                    {
                        ?>
                        <a href="<?php  echo  $row['link'];?>" target="_blank">
             <div class="card">

             <div class="card-image"><iframe src=" <?php  echo  $row['secbtn1'];?>" class="video" width="330px" height="300px" style="border:none;overflow:hidden;border-radius: 5px;" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
</div>
             <div class="card-info">
                 <h3><?php  echo  $row['title'];?></h3>
                 <p><?php echo  $row['descrip']; ?></p>
             </div>
             </div>
             </a>
             <?php
                    }
                 }
                 else
                 {
                     echo "No record Found";
                 }
                 ?>

             
         </div>
         <div class="pagination">
             <!-- <li class="page-item previous-page disable "><a href="#" class="page-link">Prev</a></li>
             <li class="page-item current-page active"><a href="#" class="page-link">1</a></li>
             <li class="page-item dots"><a href="#" class="page-link">...</a></li>
             <li class="page-item current-page"><a href="#" class="page-link">5</a></li>
             <li class="page-item current-page"><a href="#" class="page-link">6</a></li>
             <li class="page-item dots"><a href="#" class="page-link">...</a></li>
             <li class="page-item current-page"><a href="#" class="page-link">10</a></li>
             <li class="page-item next-page"><a href="#" class="page-link">Next</a></li>
              -->
         </div>
     </div>
                </section>
               
            <?php 
include 'assets/includes/scriptcard.php';
include 'assets/includes/footer.php';

?>