<?php

?>

            <nav class="nav container">
              
               <img class="img-profile rounded-circle " src="admin/upload/logo1.png"><a href="index.php" class="nav__logo "  >&emsp; &ensp; onvergence Church</a>

                <div class="nav__menu" id="nav-menu">
                    <?php $page=basename($_SERVER['PHP_SELF']);?>
                    <ul class="nav__list">
                        <li class="nav__item <?php if($page=='index.php'){echo 'active-link';} ?>">
                            <a href="index.php" class="nav__link ">Home</a>
                        </li>
                        <li class="nav__item  <?php if($page=='ChurchEvents.php') :echo 'active-link'; endif;?>">
                            <a href="ChurchEvents.php" class="nav__link">Church Events</a>
                        </li>
                        <li class="nav__item <?php if($page =='Connect.php'):echo 'active-link'; endif;?>">
                            <a href="Connect.php" class="nav__link">Connect</a>
                        </li>
                        <li class="nav__item <?php if($page == 'About.php'):echo 'active-link'; endif;?>">
                            <a href="About.php" class="nav__link ">About</a>
                        </li>
                        <li class="nav__item 
                        <?php 
                        if($page=='Give.php'){echo 'active-link';} ?>">
                            <a href="Give.php" class="nav__link">Give</a>
                        </li>
                        
                            <?php
                             require 'admin/database/dbconfig.php';
                            if (isset($_SESSION['user_name'])) {
                                $name = $_SESSION['user_name'];
                                $query = "SELECT * FROM users where user_name ='$name' ";
                                $query_run = mysqli_query($connection, $query);
                                if (mysqli_num_rows($query_run) === 1) {
                                } ?>
                        <div class="dropdown">
  <button class="dropbtn nav__link1 <?php if ($page=='login.php'||$page=='account.php') {
                                    echo 'active-link';
                                } ?>" onclick="myFunction()">Profile
  
  </button>
  <div class="dropdown-content" id="myDropdown">
    <a href="account.php" class="nav__link">Acount</a>
    <!-- <a href="#" class="nav__link">Link 2</a> -->
    <?php
                        if (isset($_SESSION['user_name'])) {
                            echo "<a href='logout.php' class='nav__link'>Logout</a>
                        ";
                        } else {
                            echo "<a href='login.php' class='nav__link'>LogIn</a>
                        ";
                        }
                        
                        ?>
                        
  </div>
  </div> 
  </li>
  <?php     }
                        else{
                            echo'<li class="nav__item ">
                            <a href="login.php" class="nav__link">Login</a>
                        </li>';
                        }
                        ?>


                        
                       
                       
                        
                                        </ul>
                                        

                    <div class="nav__dark">
                        <!-- Theme change button -->
                        <span class="change-theme-name">Dark mode</span>
                        <i class="ri-moon-line change-theme" id="theme-button"></i>
                    </div>

                    <i class="ri-close-line nav__close" id="nav-close"></i>
                </div>

                <div class="nav__toggle" id="nav-toggle">
                    <i class="ri-function-line"></i>
                </div>
            </nav>
        </header>
        <main class="main">
        <script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(e) {
  if (!e.target.matches('.dropbtn')) {
  var myDropdown = document.getElementById("myDropdown");
    if (myDropdown.classList.contains('show')) {
      myDropdown.classList.remove('show');
    }
  }
}
</script>