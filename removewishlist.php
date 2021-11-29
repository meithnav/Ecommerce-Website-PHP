<?php 
session_start() ; 
include 'loginConfig.php'  ;

$sku = $_GET['SKU'];
$userID = $_SESSION['Customer_ID']  ;


$sql = "DELETE FROM `wishlist` WHERE  W_SKU = '{$sku}'  AND W_EID = '{$userID}' " ;
$result = mysqli_query( $login_conn , $sql) OR die("check query Failed") ; 
header('Location:'.$hostname.'wishlist.php') ;

mysqli_close($login_conn) ;

?>