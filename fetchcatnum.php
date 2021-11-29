<?php  
session_start() ; 
if(isset($_SESSION['Customer_ID'] )){

include 'loginConfig.php' ;
include 'product_config.php'  ;

$active_ID = $_SESSION['Customer_ID'];
$cart_num_sql = "SELECT * FROM addtocart WHERE `Add_E_Id` = '{$active_ID}'"  ;
$cartnum_result = mysqli_query( $login_conn , $cart_num_sql) OR die("Query failed") ;
$Cartnum = mysqli_num_rows($cartnum_result) ;

echo $Cartnum ; 

}else{ echo 0 ; }
?>