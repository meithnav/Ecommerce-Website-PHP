<?php  
include 'config.php';
session_start();

session_unset();

session_destroy();
header('Location:'.$hostname.'Database/login.php');

?>