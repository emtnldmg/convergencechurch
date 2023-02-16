
            <?php 
include 'admin/database/dbconfig.php';
            ?>
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
            $total= "SELECT SUM(resNum) AS total FROM reservation WHERE status = '0' AND serTime='7:00 - 10:00 am' || '3:00 - 5:00 pm'";
            $query_run = mysqli_query($connection, $total); ?>
  <?php
          if (mysqli_num_rows($query_run) > 0) {
              while ($row = mysqli_fetch_assoc($query_run)) {
                  $sum = $row['total'];
                  ?>
<?php
    if ($sum >50 + $resnum) {
        
        echo "<script>alert('Sorry the reservation for today is already full');</script>";
    } else {
        echo "<script>alert('Your request is already sent');</script>";
    
        $query = "INSERT INTO reservation (lname,fname,mname,address,num,email,serTime,resNum) VALUES ('$lname','$fname','$mname','$address','$number','$email','$sertime','$resnum')";

        $query_run = mysqli_query($connection, $query);

        if ($query_run) {
            echo "<script>alert('message sent succesfully');</script>";
        } else {
            echo mysqli_error($connection);
             header("Location: ChurchEvents.php#interest");
            exit;
        }
    }
              }
          } else {
              header("Location: ChurchEvents.php#interest");
              exit();
          }
        }
    }
}
?>  