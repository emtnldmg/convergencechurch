<?php
session_start(); 
$sname= "localhost";
$unmae= "root";
// u610350202_
$password = "";
// Dreamteam2021
$db_name = "convergence";



$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}	