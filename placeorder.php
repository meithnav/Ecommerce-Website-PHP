<?php 

session_start() ;

 

if(isset($_SESSION['Customer_ID'] )){
include 'product_config.php' ;
include 'loginConfig.php' ;

$add_userId = $_SESSION['Customer_ID'] ;

$qnty =   unserialize($_GET['orderqnty']) ;
//print_r($qnty) ;
$totalproducts = $_GET['totalproducts']; //in all total ordered
$link = $_GET['link'];
$promodiscount = $_GET['promo'];
$GST = 0.20 ; //20%
$date = date("Y/m/d");

//die("<br>date") ;

if($link == 'buynow'){
    //copy all the info.
$product_sku = $_GET['SKU'];
$total =$_GET['total'];
$individual_qnty= $qnty[$product_sku];

//Make Order ID 
$orderID = 'ORD'.rand( 100 , 999).rand(100 , 999).rand(10 , 99);

//To remove it from the cart.
$check_sql = "SELECT * FROM `addtocart` WHERE Add_E_ID = '{$add_userId}' AND  Add_SKU = '{$product_sku}' " ;
$check_result = mysqli_query( $login_conn , $check_sql) OR die("check query Failed") ; 
if(mysqli_num_rows($check_result) > 0){

   $sql .= "DELETE FROM `addtocart` WHERE Add_E_ID = '{$add_userId}' AND  Add_SKU = '{$product_sku}' ;" ;

}

//insert this product into order database

$sql = "INSERT INTO `orders`(`OrderNo`, `Cus_ID`, `Order_product_SKU`, `Order_qnty`, `FinalPrice`, `Date`) 
            VALUES('{$orderID}' , '{$add_userId}' , '{$product_sku}' , '{$individual_qnty}' , '{$total}'  , '{$date}' ) " ;



$product = 0  ;
mysqli_multi_query( $login_conn , $sql) OR die("Data is being added // Cart quer Failed") ; 

}elseif($link == 'cart'){

    $check_sql = "SELECT * FROM `addtocart` WHERE Add_E_ID = '{$add_userId}' " ;
    $check_result = mysqli_query( $login_conn , $check_sql) OR die("check query Failed") ; 
    $noOfProducts =mysqli_num_rows($check_result) ;
   $add ='addsql' ;  $i=0 ; 
    if( $noOfProducts > 0){
        while($row = mysqli_fetch_assoc(  $check_result )){
        //Make Order ID 
        $orderID = 'ORD'.rand(100 , 999).rand(100 , 999).rand(10 , 99);
        //Qnty Ordered
        $individual_qnty= $qnty[$row['Add_SKU']];
        //Fetch its price.
        $price_sql = "SELECT RealPrice FROM `details` WHERE SKU = '{$row['Add_SKU']}' " ;
        $price_result = mysqli_query( $conn , $price_sql) OR die("price query Failed") ; 
        $fetchprice = mysqli_fetch_assoc($price_result) ;
        //add GST and check for offer or discount .

        $finalprice = ($fetchprice['RealPrice']*$individual_qnty*(1 + $GST)) - ceil(($promodiscount/$totalproducts)*$individual_qnty);
            //Add to order database.
        
        $addsql =  $add.$i ;
      $i++ ;
        $addsql ="INSERT INTO `orders`(`OrderNo`, `Cus_ID`, `Order_product_SKU`, `Order_qnty`, `FinalPrice`, `Date`) 
                 VALUES('{$orderID}' , '{$add_userId}' , '{$row['Add_SKU']}' , '{$individual_qnty}' , '{$finalprice}'  , '{$date}' ) ; " ;
        //Delete it from cart after order placed
       $addsql .= "DELETE FROM `addtocart` WHERE Add_E_ID = '{$add_userId}' AND  Add_SKU = '{$row["Add_SKU"]}' " ;
        
       mysqli_multi_query( $login_conn , $addsql) OR die("Data is being added // Cart quer Failed") ; 
        // This is important to store multiple rows data.
     mysqli_next_result($login_conn) ;

       //this is to reload the page to store each data . <<TEMPORARY SOLN >>
     //echo '<meta http-equiv="refresh" content="0; URL="placeorder.php">';

    }

  }

}

header('Location:'.$hostname.'main-page.php') ;

}else{echo 'Not logged in ' ;}


?>