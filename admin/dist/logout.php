<?php
//Include GP config file
require_once 'connect1.php';

//Unset token and user data from session
unset($_SESSION['Email']);

//Destroy entire session
session_destroy();

//Redirect to homepage
header("Location:signlog.php");
?>