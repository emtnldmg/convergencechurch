<?php
include 'database/dbconfig.php';
?>

   <!-- Sidebar -->
   <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
  <div class="sidebar-brand-icon rotate-n-15">
    <i class="fas fa-globe"></i>
  </div>
  <div class="sidebar-brand-text mx-3">CONVERGENCE </div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
  <a class="nav-link" href="index.php">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  Interface
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
    <i class="fas fa-fw fa-square"></i>
    <span>Web pages</span>
  </a>
  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Web components:</h6>
      <!-- <a class="collapse-item" href="aboutus.php">Home Page</a>
      <a class="collapse-item" href="faculty.php">Faculty</a> -->
     
      <a class="collapse-item" href="homepage.php">Home Page</a>
      <a class="collapse-item" href="churcheventspage.php">Church Events Page</a>
      <a class="collapse-item" href="connectpage.php">Connect Page</a>
      <a class="collapse-item" href="aboutpage.php">About Page</a>
      <a class="collapse-item" href="givepage.php">Give Page</a>
      <a class="collapse-item" href="informationpage.php">Information Page</a>
     
      <!-- <a class="collapse-item" href="#">Give</a> -->
      

      <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">All Web Components:</h6>
      <!-- <a class="collapse-item" href="aboutus.php">Home Page</a>
      <a class="collapse-item" href="faculty.php">Faculty</a> -->
      <a class="collapse-item" href="sectionpage.php">Section Page</a>
     
      <a class="collapse-item" href="photos.php">Photos</a>
      <a class="collapse-item" href="media.php">Media Archives</a>
      <!-- <a class="collapse-item" href="#">Give</a> -->
      
    </div>
    </div>
  </div>
</li>




<li class="nav-item">
  <a class="nav-link" href="register.php">
    <i class="fas fa-fw fa-user"></i>
    <span>Registered Admin</span></a>
</li>





<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
  Tasks
</div>

<!-- Nav Item - Pages Collapse Menu -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
    <i class="fas fa-fw fa-calendar"></i>
    <span>Reservation Spot</span>
  </a>
  <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Accepted Request:</h6>
      <a class="collapse-item" href="respot.php">Reserved Spot</a>
      <a class="collapse-item" href="reservedone.php">Done Service </a>
      <div class="collapse-divider"></div>
      <h6 class="collapse-header">Declined Request:</h6>
      <a class="collapse-item" href="res_blocked.php">Blocked Users</a>

    </div>
  </div>
</li>

<!-- interest -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#interest" aria-expanded="true" aria-controls="collapsePages">
    <i class="fas fa-fw fa-heart"></i>
    <span>Users Interest</span>
  </a>
  <div id="interest" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Accepted Request:</h6>
      <a class="collapse-item" href="interestlist.php">Accepted Users</a>
     
      <div class="collapse-divider"></div>
      <h6 class="collapse-header">Declined Request:</h6>
      <a class="collapse-item" href="int_blocked.php">Declined Users</a>

    </div>
  </div>
</li>

<!-- messages -->
<li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#messages" aria-expanded="true" aria-controls="collapsePages">
    <i class="fas fa-fw fa-envelope"></i>
    <span>Messages</span>
  </a>
  <div id="messages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
    <div class="bg-white py-2 collapse-inner rounded">
      <h6 class="collapse-header">Accepted Messages:</h6>
      <a class="collapse-item" href="message_done.php">Respond History</a>
     
      <div class="collapse-divider"></div>
      <h6 class="collapse-header">Declined Messages:</h6>
      <a class="collapse-item" href="message_blocked.php">Block Messages</a>

    </div>
  </div>
</li>



<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
  <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

          <!-- Sidebar Toggle (Topbar) -->
          <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>

        

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <?php

                $sql_get = mysqli_query($connection,"SELECT * FROM reservation WHERE status = '0'");
                $count = mysqli_num_rows($sql_get);
                $sql_getconnect = mysqli_query($connection,"SELECT * FROM connect WHERE status = '0'");
                $countconnect = mysqli_num_rows($sql_getconnect);
                ?>
                <span class="badge badge-danger badge-counter"><?php echo $count + $countconnect ; ?></span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                      <h6 class="dropdown-header">
                        Notifications
                      </h6>
              <?php 
                  $sql_get1 = mysqli_query($connection,"SELECT * FROM reservation WHERE status = '0'");
                   mysqli_num_rows($sql_get1);
                  if ( mysqli_num_rows($sql_get1)>0)
                  {
                    # code...
                    while($result = mysqli_fetch_assoc($sql_get1))
                    {
                    
                    echo '<a class="dropdown-item d-flex align-items-center" name="res_btn" href="reservepending.php">
                    <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fa fa-calendar text-white"></i>
                    </div>
                  </div>
                    <input type="hidden" name="res_id" value=" '.$result['id'].'" >
                    <div>
                      
                      <span class="font-weight-bold">'.$result['email'].'</span>
                      <div class="small text-gray-500">'.$result['date'].'</div>
                    </div>
                  </a>';
                    }
                  } else {
                    # code...
                    echo '    <div>
                    
                    <span class="font-weight-bold">Sorry '.$_SESSION['username'].' You Dont Have New Notification</span>
                  </div>';
                  }
                  
              ?>

<?php 
                  $sql_get1 = mysqli_query($connection,"SELECT * FROM connect WHERE status = '0'");
                   mysqli_num_rows($sql_get1);
                  if ( mysqli_num_rows($sql_get1)>0)
                  {
                    # code...
                    while($result = mysqli_fetch_assoc($sql_get1))
                    {
                    
                    echo '<a class="dropdown-item d-flex align-items-center" name="res_btn" href="interestpending.php">
                    <div class="mr-3">
                    <div class="icon-circle bg-danger">
                      <i class="fa fa-heart text-white"></i>
                    </div>
                  </div>
                    <input type="hidden" name="res_id" value=" '.$result['id'].'" >
                    <div>
                      
                      <span class="font-weight-bold">'.$result['email'].'</span>
                      <div class="small text-gray-500">'.$result['dcreated'].'</div>
                    </div>
                  </a>';
                    }
                  } else {
                    # code...
                    echo '    <div>
                    
                    <span class="font-weight-bold">Sorry '.$_SESSION['username'].' You Dont Have New Notification</span>
                  </div>';
                  }
                  
              ?>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <?php

                  $sql_get = mysqli_query($connection,"SELECT * FROM questions WHERE status = '0'");
                  $count = mysqli_num_rows($sql_get);
                ?>
                <span class="badge badge-danger badge-counter"><?php echo $count; ?></span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <?php 
                  $sql_get1 = mysqli_query($connection,"SELECT * FROM questions WHERE status = '0'");
                   mysqli_num_rows($sql_get1);
                  if ( mysqli_num_rows($sql_get1)>0)
                  {
                    # code...
                    while($result = mysqli_fetch_assoc($sql_get1))
                    {
                    
                    echo '<a class="dropdown-item d-flex align-items-center" href="messagenotif.php">
                    <div class="mr-3">
                    <div class="icon-circle bg-info">
                      <i class="fa fa-comments text-white"></i>
                    </div>
                  </div>
                    <input type="hidden" name="res_id" value=" '.$result['id'].'" >
                    <div>
                      
                      <span class="font-weight-bold">'.$result['email'].'</span>
                      <div class="small text-gray-500">'.$result['qsent'].'</div>
                    </div>
                  </a>';
                    }
                  } else {
                    # code...
                    echo '    <div>
                    
                    <span class="font-weight-bold">Sorry '.$_SESSION['username'].' You Dont Have New Notification</span>
                  </div>';
                  }
                  
              ?>
          
                
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                  
                  
                </span>
                <?php 

                 require 'database/dbconfig.php';
                $profile = $_SESSION ['username'];
                 $query = "SELECT * FROM register where email ='$profile' ";
                 $query_run = mysqli_query($connection,$query);

                 $check_faculty = mysqli_num_rows($query_run) > 0;
                 if($check_faculty)
                 {
                    while($row = mysqli_fetch_array($query_run))
                    {
                        ?>

                <img class="img-profile rounded-circle" src="<?php echo "upload/". $row['image'] ?>">
                <?php
                    }
                 }
                 else
                 {
                     echo "No record Found";
                 }
                 ?>
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="admin_profile.php">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
               
                <a class="dropdown-item" href="activity_log.php">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>

          </ul>

        </nav>
        <!-- End of Topbar -->


  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  
  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>

          <form action="logout.php" method="POST"> 
          
            <button type="submit" name="logout_btn" class="btn btn-primary">Logout</button>
         
          </form>


        </div>
      </div>
    </div>
  </div>