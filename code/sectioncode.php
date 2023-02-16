<?php
include '../security.php';
// $connection = mysqli_connect("localhost","root","","adminpanel");



if(isset($_POST['section_save']))
{
	$sname = $_POST['secname'];
	$stitle = $_POST['sectitle'];

	$sdescrip = $_POST['secdescrip'];
	$secbtn1 = $_POST['secbtn1'];
	$secbtn2 = $_POST['secbtn2'];


	$query = "INSERT INTO sections (sname,stitle,sdescrip,secbtn1,secbtn2) VALUES ('$sname','$stitle','$sdescrip','$secbtn1','$secbtn2')";

	$query_run = mysqli_query($connection,$query);

	if($query_run)
	{
		$_SESSION['status'] = "Section Succesfully Added";
		$_SESSION['status_code'] = "success";
		header('Location: ../sectionpage.php');
	}
	else
	{
		$_SESSION['status'] = "Section Not Added";
		$_SESSION['status_code'] = "error";
		header('Location: ../sectionpage.php');
	}
}


if(isset($_POST['secedit_btn']))
{

	$sid_edit = $_POST['secedit_id'];
	$sname_edit = $_POST['secedit_name'];
	$stitle_edit = $_POST['secedit_title'];
	
	$sdescrip_edit = $_POST['secedit_descrip'];
	$secedit_btn1 = $_POST['secedit_btn1'];
	$secedit_btn2 = $_POST['secedit_btn2'];


	$query = "UPDATE sections SET sname='$sname_edit', stitle= '$stitle_edit', sdescrip= '$sdescrip_edit', secbtn1='$secedit_btn1', secbtn2='$secedit_btn2' WHERE id='$sid_edit' ";
	$query_run = mysqli_query($connection, $query);

    if($query_run)
	{
		$_SESSION['status'] = "Section Succesfully Updated";
		$_SESSION['status_code'] = "success";
		header('Location: ../sectionpage.php');
	}
	else
	{
		$_SESSION['status'] = "Section Not Successfully Updated";
		$_SESSION['status_code'] = "error";
		header('Location: ../sectionpage.php');
	}
}

if(isset($_POST['secdelete_btn']))
{

	$id = $_POST['secdelete_id'];
	

	$query = "DELETE FROM sections WHERE id='$id' ";
	$query_run = mysqli_query($connection, $query);

	if($query_run)
	{
			$_SESSION['status'] ="Your Data is DELETED";
			$_SESSION['status_code'] = "success";
			header('Location: ../sectionpage.php');
	}
	else
	{
		
		$_SESSION['status'] ="Your is Data is not DELETED";
		$_SESSION['status_code'] = "error";
			header('Location: ../sectionpage.php');
	}
}


?>