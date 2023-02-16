<?php
include '../security.php';
// $connection = mysqli_connect("localhost","root","","adminpanel");



if(isset($_POST['media_Save']))
{
	$title = $_POST['title'];
	$descrip = $_POST['descrip'];
    $month = $_POST['month'];

	$media = $_FILES['media']['name'];
	$link = $_POST['link'];
  
    $allowed_extension = array('png','jpg','jpeg');
    $filename = $_FILES['media']['name'];
    $file_extension = pathinfo($filename,PATHINFO_EXTENSION);
    if(!in_array($file_extension,$allowed_extension))
    {
        $_SESSION['status'] = "You are allowed with only jpg png jpeg";
        $_SESSION['status_code'] = "error";
        header('Location: ../media.php');
    }
    else{
    if(file_exists("../upload/" .$_FILES['media']['name']))
    {
        $filename = $_FILES['media']['name'];
        $_SESSION['status'] = "image already Exists" . $filename;
        $_SESSION['status_code'] = "error";
        header('Location: ../media.php');
	}
    
    else
    {

	$query = "INSERT INTO archives (month,title,descrip,aimage,link) VALUES ('$month','$title','$descrip','$media','$link')";

	$query_run = mysqli_query($connection,$query);

   

   
	if($query_run)
	{   
        move_uploaded_file($_FILES['media']['tmp_name'], "../upload/".$_FILES['media']['name']);
		$_SESSION['status'] = "Section for Photo is Succesfully Added";
		$_SESSION['status_code'] = "success";
		header('Location: ../media.php');
	}
	else
	{
		$_SESSION['status'] = "Section for Photo is Not Added";
		$_SESSION['status_code'] = "error";
		header('Location: ../media.php');
	}
    }
}
}

// update button
if(isset($_POST['umedia_btn']))
{
    $id = $_POST['mediaupd_id'];
    $title = $_POST['utitle'];
    $descrip = $_POST['udescrip'];
    $month = $_POST['umonth'];
    $newphoto = $_FILES['uimage']['name'];
    $link = $_POST['ulink'];
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
            header('Location: ../media.php');
        }
        else
    {
        // updating
        $query = "UPDATE archives SET month ='$month' , title = '$title', descrip ='$descrip', aimage = '$update_filename', link='$link' WHERE id = '$id' ";
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
            
            $_SESSION['status'] = "Archive Photo is Succesfully UPDATED";
            $_SESSION['status_code'] = "success";
            header('Location: ../media.php');
        }   
        else 
        {
            # code...
            $_SESSION['status'] = "Archive Photo is Not UPDATED";
            $_SESSION['status_code'] = "error";
            header('Location: ../media.php');
        }
    } 
	}
    else
    {
        // updating
        $query = "UPDATE archives SET  month ='$month', title = '$title', descrip ='$descrip', aimage = '$update_filename', link='$link' WHERE id = '$id'" ;
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
            
            $_SESSION['status'] = "Archive Photo is Succesfully UPDATED";
            $_SESSION['status_code'] = "success";
            header('Location: ../media.php');
        }   
        else 
        {
            # code...
            $_SESSION['status'] = "Archive Photo is Not UPDATED";
            $_SESSION['status_code'] = "error";
            header('Location: ../media.php');
        }
    }
    

}

if(isset($_POST['photodelete_btn']))
{

	$id = $_POST['secdelete_id'];
	

	$query = "DELETE FROM archives WHERE id='$id' ";
	$query_run = mysqli_query($connection, $query);
    $oldphoto = $_POST['old_media'];
	if($query_run)
	{
			$_SESSION['status'] ="Your Data is DELETED";
			$_SESSION['status_code'] = "success";
            unlink("../upload/".$oldphoto);
			header('Location: ../media.php');
	}
	else
	{
		
		$_SESSION['status'] ="Your is Not Data is DELETED";
		$_SESSION['status_code'] = "error";
			header('Location: ../media.php');
	}
}
?>