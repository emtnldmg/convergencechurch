
    <!-- Custom styles for this template-->
    <link href="../css/stylesheett.css" rel="stylesheet">
<?php

$server_name = "localhost";
$db_username = "root";
// u610350202_root
$db_password = "";
// Dreamteam2021
$db_name = "convergence";



$connection = mysqli_connect($server_name,$db_username,$db_password);
$dbconfig = mysqli_select_db($connection,$db_name);

if($dbconfig)
{
    //echo "Database is Connected";

}
else
{
    echo '
    <div class="container">
    <div class="row">
    <div class="col-md-8 mr-auto ml-auto text-center py-5 py-5">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title bg-danger404"> Database Connection Failed</h1>
                <h2 class="card-title"> Database Failure </h2>
                <p class="card-text"> Please Check your Databse Connection</p>
                <a href="#" class="btn btn-primary" >:(</a>
            </div>
        </div>
    </div>
    
    </div>
    
    </div>
    ';
}
?>