<?php

session_start();  // variable access/variable activate
session_destroy();  // variable finish/empty

header("location: login.php");

?>