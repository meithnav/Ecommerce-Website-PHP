<?php 
session_start() ;
include 'product_config.php' ;
include 'loginConfig.php'  ;

if(isset($_SESSION['Customer_ID'] )){
    $order_ID = $_GET['orderID'] ;
    $status = $_GET['action'] ;

    $fetch_product =" SELECT * FROM `orders` WHERE OrderNo = '{$order_ID }' " ;
    $fetch_result = mysqli_query($login_conn  , $fetch_product ) ;
    $fetch_data = mysqli_fetch_assoc($fetch_result) ;
    $qnty = $fetch_data['Order_qnty']  ;
    $price = $fetch_data['FinalPrice']  ;
    $date = date("Y/m/d");

    if($status == 'return'){

    $sql = "UPDATE `orders` SET `Status`= 'returned' WHERE OrderNo = '{$order_ID }' ; " ;

    $sql .= "INSERT INTO `return orders`(`ReturnOrderNo`, `R_CusID`, `RQnty`, `RPrice`, `ReturnDate`) 
              VALUES ('{$order_ID}' , '{$_SESSION['Customer_ID']}' , ' {$qnty}' , '{$price}' , '{$date}' )" ;

    $result = mysqli_multi_query($login_conn  , $sql ) ;


}elseif($status == 'cancel'){

    $sql = "UPDATE `orders` SET `Status`= 'cancelled' WHERE OrderNo = '{$order_ID }'  " ;
    $result = mysqli_query($login_conn  , $sql ) ;

}

header('Location:'.$hostname.'myorder.php') ;
}
?>