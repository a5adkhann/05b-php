<?php

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "crud";

$connection = mysqli_connect($hostname, $username, $password, $dbname);


if($connection){
    echo "DB Connected Succesfully";
}
else {
    echo "Error Connecting Database";
}




?>