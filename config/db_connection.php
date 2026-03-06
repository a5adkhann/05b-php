<?php

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "crud";

$connection = mysqli_connect($hostname, $username, $password, $dbname);


if($connection){
    echo "<script>alert('DB Connected')</script>";
}
else {
    echo "<script>alert('Error')</script>";
}




?>