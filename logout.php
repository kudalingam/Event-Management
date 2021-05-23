<?php
//Include GP config file
require_once 'connect.php';

//Unset token and user data from session
unset($_SESSION['Email']);

//Destroy entire session
session_destroy();

//Redirect to homepage
header("Location:log1.php");
?>