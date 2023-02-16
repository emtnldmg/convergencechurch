<?php
include '../security.php';
// $connection = mysqli_connect("localhost","root","","adminpanel");



if(isset($_POST['photo_save']))
{
	$pname = $_POST['photoname'];
	$ptitle = $_POST['phototitle'];
	$descrip = $_POST['descrip'];
    $secID = $_POST['secID'];
	$pphoto = $_FILES['pphoto']['name'];
	$plink = $_POST['link'];
  
    $allowed_extension = array('png','jpg','jpeg');
    $filename = $_FILES['pphoto']['name'];
    $file_extension = pathinfo($filename,PATHINFO_EXTENSION);
    if(!in_array($file_extension,$allowed_extension))
    {
        $_SESSION['status'] = "You are allowed with only jpg png jpeg";
        $_SESSION['status_code'] = "error";
        header('Location: ../photos.php');
    }
    else{
    if(file_exists("../upload/" .$_FILES['pphoto']['name']))
    {
        $filename = $_FILES['pphoto']['name'];
        $_SESSION['status'] = "image already Exists" . $filename;
        $_SESSION['status_code'] = "error";
        header('Location: ../photos.php');
	}
    
    else
    {

	$query = "INSERT INTO photos (pname,ptitle,pphoto,link,descrip,sectionID) VALUES ('$pname','$ptitle','$pphoto','$plink','$descrip','$secID')";

	$query_run = mysqli_query($connection,$query);

   

   
	if($query_run)
	{   
        move_uploaded_file($_FILES['pphoto']['tmp_name'], "../upload/".$_FILES['pphoto']['name']);
		$_SESSION['status'] = "Section for Photo is Succesfully Added";
		$_SESSION['status_code'] = "success";
		header('Location: ../photos.php');
	}
	else
	{
		$_SESSION['status'] = "Section for Photo is Not Added";
		$_SESSION['status_code'] = "error";
		header('Location: ../photos.php');
	}
    }
}
}

// update button
if(isset($_POST['pupdate_btn']))
{
    $uid = $_POST['photoedit_id'];
    $name = $_POST['pupdate_name'];
    $udescrip = $_POST['pup_descrip'];
    $usecID = $_POST['pup_secID'];
    $title = $_POST['pupdate_title'];
    $newphoto = $_FILES['pupdate_photo']['name'];
    $link = $_POST['pupdate_link'];
    $oldphoto = $_POST['old_pphoto'];


    if($newphoto != '')
    {
        $update_filename = $_FILES['pupdate_photo']['name'];   
    }
    else
    {
        $update_filename = $oldphoto;
    }

    if($_FILES['pupdate_photo']['name'] != '')
    { 
        if(file_exists("../upload/" .$_FILES['pupdate_photo']['name']))
        {
            $filename = $_FILES['pupdate_photo']['name'];
            $_SESSION['status'] = "image already Exists" . $filename;
            $_SESSION['status_code'] = "error";
            header('Location: ../photos.php');
        }
        else
    {
        // updating
        $query = "UPDATE photos SET pname = '$name', ptitle ='$title', pphoto = '$update_filename', link='$link', descrip='$udescrip', sectionID='$usecID' WHERE id = '$uid' ";
        $query_run = mysqli_query($connection,$query);

        if ($query_run)
        {
            # code...
            if ($_FILES['pupdate_photo']['name'] != '')
            {
                # code...
                move_uploaded_file($_FILES['pupdate_photo']['tmp_name'], "../upload/".$_FILES['pupdate_photo']['name']);
                unlink("../upload/".$oldphoto);
            }
            
            $_SESSION['status'] = "Section for Photo is Succesfully UPDATED";
            $_SESSION['status_code'] = "success";
            header('Location: ../photos.php');
        }   
        else 
        {
            # code...
            $_SESSION['status'] = "Section for Photo is Not UPDATED";
            $_SESSION['status_code'] = "error";
            header('Location: ../photos.php');
        }
    } 
	}
    else
    {
        // updating
        $query = "UPDATE photos SET pname = '$name', ptitle ='$title', pphoto = '$update_filename', link='$link', descrip='$udescrip', sectionID='$usecID' WHERE id = '$uid' ";
        $query_run = mysqli_query($connection,$query);
       
        if ($query_run)
        {
            # code...
            if ($_FILES['pupdate_photo']['name'] != '')
            {
                # code...
                move_uploaded_file($_FILES['pupdate_photo']['tmp_name'], "../upload/".$_FILES['pupdate_photo']['name']);
                unlink("../upload/".$oldphoto);
            }
            
            $_SESSION['status'] = "Section for Photo is Succesfully UPDATED";
            $_SESSION['status_code'] = "success";
            header('Location: ../photos.php');
        }   
        else 
        {
            # code...
            $_SESSION['status'] = "Section for Photo is Not UPDATED";
            $_SESSION['status_code'] = "error";
            header('Location: ../photos.php');
        }
    }
    

}

if(isset($_POST['photodelete_btn']))
{

	$id = $_POST['secdelete_id'];
	

	$query = "DELETE FROM photos WHERE id='$id' ";
	$query_run = mysqli_query($connection, $query);
    $oldphoto = $_POST['old_pphoto'];
	if($query_run)
	{
			$_SESSION['status'] ="Your Data is DELETED";
			$_SESSION['status_code'] = "success";
            unlink("../upload/".$oldphoto);
			header('Location: ../photos.php');
	}
	else
	{
		
		$_SESSION['status'] ="Your is Not Data is DELETED";
		$_SESSION['status_code'] = "error";
			header('Location: ../photos.php');
	}
}
?>