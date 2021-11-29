<?php  

session_start() ; 
include 'loginConfig.php'  ;

$noOfProducts = 0 ;
if(isset($_SESSION['Customer_ID'] )){
   $add_userId = $_SESSION['Customer_ID'] ;

$check_sql = "SELECT * FROM `wishlist` WHERE W_EID = '{$add_userId}' " ;
$check_result = mysqli_query( $login_conn , $check_sql) OR die("check query Failed") ; 
//this we will also pass in place order so al products are stored in loop.
$noOfProducts = mysqli_num_rows($check_result) ;

if($noOfProducts > 0){
    $output  = '<h1> My WISHLIST </h1>
    <div class="grid" id="grid">' ;


    while($check_row = mysqli_fetch_assoc($check_result)){
        //print_r($check_row) ;   
        $sku = $check_row['W_SKU'];
         //getting all the data
         include 'product_config.php' ;
         $product_sql = " SELECT * FROM image i
                         LEFT JOIN details d 
                         ON i.SKU_code = d.SKU
                         LEFT JOIN category_table c
                         ON i.Category_Code = c.`Cat-Code`
                         WHERE i.SKU_code = '{$sku}' " ;
         
        $product_result  = mysqli_query($conn , $product_sql) ;
     //saving the file name and it's info
        while($row = mysqli_fetch_assoc($product_result)){       
             $porduct_filename = $row['filename'];
             $porduct_title = $row['title'];
             $porduct_weight = $row['Weight'];
             $porduct_real_price = $row['RealPrice'];
             $porduct_fake_price = $row['FakePrice'];
             $porduct_dimensions =  $row['Dimensions'];
             $porduct_category =  $row['Cat-Code'];
             $porduct_type =  $row['C_Name'];
     

    $output .= ' <div class="items">' ;

    $output .= '<div class="cross"><a data-sku="'.$sku.'" id="remove"> X </a></div>

                <a href="product_page.php?category='.$porduct_type.'&CATEGORY='.$porduct_category.'&SKU='.$sku.'">
                <img src="Database/images/'.$porduct_type.'/'.$porduct_filename.'/pic.jpg"></a>' ;

    $output .= '<div class="buy">
            <a class="buybtn" href="buynow.php?category='.$porduct_type.'&CATEGORY='.$porduct_category.'&SKU='.$sku.'" >
            <h2>BUY NOW</h2></a>

            <div class="imgicons">' ;

            if(isset($_SESSION['Customer_ID'] )){
                $open = '' ;
                }else{  //if not logged in.   
                $open = 'onclick="signin()"' ;
              
                } 

    $output .= '<a name="addtocart" id="addtocart" data-sku="'.$sku.'" data-category='.$porduct_type.'" data-type="'.$porduct_category.'" '.$open.'>
    <i class="fa fa-shopping-cart" ></i> </a>
      
        </div>
      </div>
      </div>' ;
          
        }
    } 
    $output .= '</div>' ;

}else{ $output = "<h1 class='norecord' >No product added to your WISHLIST.</h1>" ; } //close the num_rows =>if start after left 
            
}else{  $output = "<h1 class='norecord' >Please <span onclick='signin()'> login </span> to see see your WISHLIST. Not a member yet?<a href='signuppage.php'>  Sign UP..</a></h1>" ;}  //close isset sessions => if-else 

//more wala part too 
$output .= ' <div class="more">
            <a href="shopping-page.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i>  Go to the CART</a>
            <a href="main-page.php"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Continue SHOPPING </a>
            </div>';


echo $output ; 

?>