<?php 
session_start();
include 'assets/includes/header.php';
include 'assets/includes/navbar.php';

include 'admin/database/dbconfig.php';
?>
       
                
              
      <!--======== HOME ====================-->
            <section class="home" id="home">
                <video autoplay loop class="vid">
                    <source src="assets/motion/motion2.mp4" type="video/mp4">
                </video>

                <div class="church__container container grid">
                    <div class="church__data">
                        <h1 class="church__data-title">  <b>SUNDAY SERVICE</b></h1>
                        
                        <span class="home__data-subtitle">"For where two or three are gathered in my name, there am I among them.”
                        <br>- Matthew 18:20</span>
                     
                       
                        
                    </div>

                   

                    
                </div>
            </section>

            <!--==================== join us button first====================-->
            <section class="about section" id="about">
                <div class="about__container container grid">
                    <div class="about__data">
                    <?php
                           
                            
                            $query = "SELECT * FROM sections where sname = '2.1Section'";
                            $query_run = mysqli_query($connection,$query);

                        if(mysqli_num_rows($query_run))
                        {
                            foreach($query_run as $row);
                            {
                                ?>
                             
                              
                       
                        <h2 class="section__title about__title"><b><?php echo  $row['stitle']; ?></b></h2>
                        <p class="about__description"><?php echo  $row['sdescrip']; ?>
                        </p>
                        <a href="<?php echo  $row['secbtn1']; ?>" class="button" target="_blank">Join us live</a>
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
                

                 $query = "SELECT * FROM photos where pname ='2.1Section' ";
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
                

                 $query = "SELECT * FROM photos where pname ='2.2Section' ";
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
                           
                            
                            $query = "SELECT * FROM sections where sname = '2.2Section'";
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
                        <a href="Reservation.php#home" class="button" >Reserve your spot</a>';
                        }
                      
                        else
                        {
                            echo '
                            <a href="login.php" class="button">Proceed to Login</a>';
                        }  
                        ?> <?php
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
     
            

            <section class="video section" id="media">
            <?php
                         
                            
                          $query = "SELECT * FROM sections where sname = '2.3Section'";
                          $query_run = mysqli_query($connection,$query);
                        if(mysqli_num_rows($query_run))
                        {
                            foreach($query_run as $row);
                            {
                                ?>
                <h2 class="section__title" data-sr-id="11" style="visibility: visible; opacity: 1; transform: matrix3d(1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 0, 0, 1); transition: opacity 2.8s cubic-bezier(0.5, 0, 0, 1) 0s, transform 2.8s cubic-bezier(0.5, 0, 0, 1) 0s;"><b><?php  echo  $row['stitle'];?> </b></h2>
                <p class="video__description"><?php echo  $row['sdescrip']; ?><a class="button" href="<?php echo  $row['secbtn1']; ?>"><b>Watch More</b></a>
                    </p>
                   
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
                        <video id="video-file">
                            <source src="assets/video/BANNERVID-WATCHMORE.mp4" type="video/mp4">
                        </video>

                        <button class="button button--flex video__button" id="video-button">
                            <i class="ri-play-line video__button-icon" id="video-icon"></i>
                        </button>
                    </div>
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


if (isset($_POST['submit'])) {
    $lname = $_POST['lname'];
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $address = $_POST['address'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $sertime = $_POST['serviceTime'];
    $resnum = $_POST['reserveNum'];

    if (isset($_POST['lname']) && isset($_POST['fname'])
        && isset($_POST['address']) && isset($_POST['number'])&& isset($_POST['email'])&& isset($_POST['serviceTime'])&& isset($_POST['reserveNum'])) {
        function validate($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
        $lname = validate($_POST['lname']);
        $fname = validate($_POST['fname']);
        $mname =validate($_POST['mname']);
        $address = validate($_POST['address']);
        $number = validate($_POST['number']);
        $email = validate($_POST['email']);
        $sertime = validate($_POST['serviceTime']);
        $resnum = validate($_POST['reserveNum']);

        if (empty($lname)) {
            echo "<script>alert('Please Fillup all Fields');</script>";
        } elseif (empty($fname)) {
            echo "<script>alert('Please Fillup all Fields');</script>";
        } elseif (empty($address)) {
            echo "<script>alert('Please Fillup all Fields');</script>";
        } elseif (empty($number)) {
            echo "<script>alert('Please Fillup all Fields');</script>";
        } elseif (empty($email)) {
            echo "<script>alert('Please Fillup all Fields');</script>";
        } elseif (empty($resnum)) {
            echo "<script>alert('Please Fillup all Fields');</script>";
        } elseif (empty($sertime)) {
            echo "<script>alert('Please Fillup all Fields');</script>";
        } else {
            
            $total= "SELECT SUM(resNum) AS total FROM reservation WHERE serTime = '08:00 - 09:30 am' AND status = '0'";
            $total2= "SELECT SUM(resNum) AS total FROM reservation WHERE serTime = '10:00 - 12:00 pm' AND status = '0'";
            $query_run = mysqli_query($connection, $total);
            $query_run2 = mysqli_query($connection, $total2); ?>
  <?php
          if (mysqli_num_rows($query_run) > 0) {
              while ($row = mysqli_fetch_assoc($query_run)) {
                  $sum = $row['total']; ?>

                  
<?php
if ($sertime == '08:00 - 09:30 am') {
                      if ($sum >50 + $resnum) {
                          echo "<script>alert('Sorry the reservation for today is already full');</script>";
                      } else {
                          echo "<script>alert('Your request is already sent');</script>";
    
                          $query = "INSERT INTO reservation (lname,fname,mname,address,num,email,serTime,resNum) VALUES ('$lname','$fname','$mname','$address','$number','$email','$sertime','$resnum')";

                          $query_run = mysqli_query($connection, $query);

                          if ($query_run) {
                          } else {
                              echo mysqli_error($connection);
                              exit;
                          }
                      }
                  } elseif ($sertime == '10:00 - 12:00 pm') {
                      if (mysqli_num_rows($query_run) > 0) {
                          while ($row = mysqli_fetch_assoc($query_run2)) {
                              $sum2 = $row['total'];
                              if ($sum2 >50 + $resnum) {
                                  echo "<script>alert('Sorry the reservation for today is already full');</script>";
                              } else {
                                  echo "<script>alert('Your request is already sent');</script>";
  
                                  $query = "INSERT INTO reservation (lname,fname,mname,address,num,email,serTime,resNum) VALUES ('$lname','$fname','$mname','$address','$number','$email','$sertime','$resnum')";

                                  $query_run = mysqli_query($connection, $query);

                                  if ($query_run) {
                                  } else {
                                      echo mysqli_error($connection);
                                      exit;
                                  }
                              }
                          }
                      }
                  }
                  else{
                    echo "<script>alert('Error! Please select the proper Service Time');</script>";
                  }
              }
          }else {
              header("Location: ChurchEvents.php#interest");
              exit();
          }
        }
    }
}
?>  


             

           

          
            <?php 
include 'assets/includes/script.php';
include 'assets/includes/footer.php';

?>