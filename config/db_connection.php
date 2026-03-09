<?php
session_start();

$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "05b_auth";

$connection = mysqli_connect($hostname, $username, $password, $dbname);
?>