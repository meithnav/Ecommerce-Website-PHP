<?php 
session_start() ;

if(isset($_SESSION['Customer_ID'] )){
include 'config.php' ;
include 'loginConfig.php' ;

$add_userId = $_SESSION['Customer_ID'] ;
if(isset($_GET['page'])){  
    $product_pageno = $_GET['page']; 
}else{ $product_pageno = 0 ;}

//copy all the info.
$product_sku = $_GET['SKU'];
$product_cat = $_GET['CATEGORY'];
$product_type = $_GET['category'];
$date = date("d-M-Y");
//$subpage = $_GET['subpage'];

//Dont add if already added.
$check_sql = "SELECT * FROM `addtocart` WHERE Add_E_ID = '{$add_userId}' AND  Add_SKU = '{$product_sku}' " ;
$check_result = mysqli_query( $login_conn , $check_sql) OR die("check query Failed") ; 
if(mysqli_num_rows($check_result) > 0){

    echo -1  ; 
    //passing value=1 as a flag to show product already present.
   // header('Location:'.$hostname.$subpage.'?category='.$product_type.'&CATEGORY='.$product_cat.'&page='.$product_pageno.'&SKU='.$product_sku) ;

}else{

//insert this product into cart database

$sql = "INSERT INTO `addtocart`(`Add_E_ID`, `Add_SKU`, `add_CATCODE`, `Add_Date`) 
        VALUES ( '{$add_userId}' , '{$product_sku}' , '{$product_cat}' , '{$date}' )" ;


$result = mysqli_query( $login_conn , $sql) OR die("query Failed") ; 
echo 1  ; 


//header('Location:'.$hostname.$subpage.'?category='.$product_type.'&CATEGORY='.$product_cat.'&page='.$product_pageno.'&SKU='.$product_sku) ;
}

}else{echo 'Not logged in ' ;}


?>