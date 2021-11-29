<?php 
session_start() ; 
$userID =   $_SESSION['Customer_ID'] ;

include 'loginConfig.php'  ;

$sku = $_GET['SKU'];


$sql = "DELETE FROM `addtocart` WHERE  Add_SKU = '{$sku}'  AND Add_E_ID = '{$userID}' " ;
 if(mysqli_query( $login_conn , $sql)){
     echo 1; 
 }else{
     echo -1 ;
 }

// header('Location:http://localhost/Rhydhm Database/shopping-page.php');

mysqli_close($login_conn) ;

?>