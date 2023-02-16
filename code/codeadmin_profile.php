<?php
include '../security.php';
// $connection = mysqli_connect("localhost","root","","adminpanel");


// update button
if(isset($_POST['adminsave_btn']))
{
    $id = $_POST['admin_upid'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $newphoto = $_FILES['uimage']['name'];
    $login = $_POST['login'];
    $logout = $_POST['logout'];

    $oldphoto = $_POST['old_image'];


    if($newphoto != '')
    {
        $update_filename = $_FILES['uimage']['name'];   
    }
    else
    {
        $update_filename = $oldphoto;
    }

    if($_FILES['uimage']['name'] != '')
    { 
        if(file_exists("../upload/" .$_FILES['uimage']['name']))
        {
            $filename = $_FILES['uimage']['name'];
            $_SESSION['status'] = "image already Exists" . $filename;
            $_SESSION['status_code'] = "error";
            header('Location: ../admin_profile.php');
            exit;
        }
        else
    {
        // updating
        $query = "UPDATE register SET username ='$username' , email = '$email', password ='$password', image = '$update_filename' WHERE id = '$id' ";
        $query_run = mysqli_query($connection,$query);

        if ($query_run)
        {
            # code...
            if ($_FILES['uimage']['name'] != '')
            {
                # code...
                move_uploaded_file($_FILES['uimage']['tmp_name'], "../upload/".$_FILES['uimage']['name']);
                unlink("../upload/".$oldphoto);
            }
            
            $_SESSION['status'] = "Your Profile is Succesfully UPDATED";
            $_SESSION['status_code'] = "success";
            header('Location: ../admin_profile.php');
            exit;
        }   
        else 
        {
            # code...
            $_SESSION['status'] = "Your Profile is Not UPDATED";
            $_SESSION['status_code'] = "error";
            header('Location: ../admin_profile.php');
            exit;
        }
    } 
	}
    else
    {
        // updating
        $query1 = "UPDATE register SET username ='$username' , email = '$email', password ='$password', image = '$update_filename' WHERE id = '$id' ";
        $query_run1 = mysqli_query($connection,$query1);
       
        if ($query_run1)
        {
            # code...
            if ($_FILES['uimage']['name'] != '')
            {
                # code...
                move_uploaded_file($_FILES['uimage']['tmp_name'], "../upload/".$_FILES['uimage']['name']);
                unlink("../upload/".$oldphoto);
            }
            
            $_SESSION['status'] = "Your Profile is Succesfully UPDATED";
            $_SESSION['status_code'] = "success";
            header('Location: ../admin_profile.php');
            exit;
        }   
        else 
        {
            # code...
            $_SESSION['status'] = "Your Profile is Not UPDATED";
            $_SESSION['status_code'] = "error";
            header('Location: ../admin_profile.php');
            exit;
        }
    }
    

}

if(isset($_POST['photodelete_btn']))
{

	$id = $_POST['secdelete_id'];
	

	$query = "DELETE FROM archives WHERE id='$id' ";
	$query_run = mysqli_query($connection, $query);
    $oldphoto = $_POST['old_admin_profile'];
	if($query_run)
	{
			$_SESSION['status'] ="Your Data is DELETED";
			$_SESSION['status_code'] = "success";
            unlink("../upload/".$oldphoto);
			header('Location: ../admin_profile.php');
            exit;
	}
	else
	{
		
		$_SESSION['status'] ="Your is Not Data is DELETED";
		$_SESSION['status_code'] = "error";
			header('Location: ../admin_profile.php');
            exit;
	}
}
?>