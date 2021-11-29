
<?php 
 include 'loginConfig.php'  ;
   if(!isset($_SESSION['Customer_ID'] )){
    header('Location'.$hostname.'shopping-page.php') ;
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <!--SLICK SLIDER Plugin-->
<link rel="stylesheet" href="./Plugins/slick/slick-theme.css">
<link rel="stylesheet" href="./Plugins/slick/slick.css">

<!--JQuery-->
<script type="text/javascript" src="./jQuery/jquery.js"></script>
<!--Font Awesome-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--Font Awesome-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!--Font used in header-->
<link href="https://fonts.googleapis.com/css2?family=Mukta:wght@500&display=swap" rel="stylesheet">
<!--Font Shopping bag-->
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@600&display=swap" rel="stylesheet">
<!--Font Details-->
<link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@600&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
<!--Font Price-->
<link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
<!--Font Left-->
<link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@600&display=swap" rel="stylesheet">
<!--Font Norecords-->
<link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@700&display=swap" rel="stylesheet">


    <title>MN/Checkout Page</title>
    <link rel="stylesheet" href="shopping-page.css">
</head>
<body>
<header>
        <div class="innerheader">
            <div class="logo"><a href="main-page.php" ><span>MN</span></a></div>
            <div class="sidebartbtn" onclick="sidebar()" >
                <div class="p">
                <p id="bar1"></p>
                <p id="bar2"></p>
                <p id="bar3">  </p>
            </div>
                 </div>
            <nav>
             <div class="menu">
                <!--AT HOME PAGE we donot show HOME option*/  -->
                <div class="home" id="home"><a href="main-page.php" >Home</a></div>  
                <div id="Catalogue"><a href="#" class="underline">Catalogue</a></div>
                <div id="men"><a href="#" class="underline" >men</a></div> 
                <!--DEAL OF THE DAY animation-->
                <div class="deal" id="deal">
                    <a href="#" class="underline">
                    <h1> <span class="diamond"> <i class="fa fa-diamond" > </i></span>  </h1>
                    <h1> <span>D</span> 
                      <span>E</span>
                     <span>A</span>
                     <span>L</span>
                  </h1>
          
                  <h1>
                     <span>O</span>
                     <span>F </span>
                  </h1>
          
                  <h1>
                     <span>T</span>
                     <span>H</span>
                     <span>E </span>
                  </h1>
          
                   <h1>
                     <span>D</span>
                     <span>A</span>
                     <span>Y</span>
                  </h1>
                </a></div> <!--DOD closes-->

                <div id="wedding" class="wedding" > <a href="subpage.php?category=bridal&CATEGORY=BRI" class="underline">Wedding Collection</a></div>
                <div class="store"><a href="storelocator.php" class="underline" >Store Locator</a></div>
                <?php  //php FOR LOGIN BOX.
                   
                    session_start() ;

                    if(!isset($_SESSION['Customer_ID'] )){
                            $active_name = "Login" ;
                            $link = "" ;
                            $onclick = "onclick='signin()' " ;
                           

                    }else{  

                            $active_ID = $_SESSION['Customer_ID'];
                            $link = 'href="logout.php"' ; 
                            $onclick = "" ;                          
                            $active_name = $_SESSION['Name'] ;                           
                                if(strlen($active_name) > 5){
                                  $active_name = substr($_SESSION['Name'] , 0 , 4).'..' ;
                               
                                 }
                         //storing no. of products stored in his cart.
                                $cart_num_sql = "SELECT * FROM addtocart WHERE `Add_E_Id` = '{$active_ID}'"  ;
                                $cartnum_result = mysqli_query( $login_conn , $cart_num_sql) OR die("Query failed") ;
                                $Cartnum = mysqli_num_rows($cartnum_result) ;
                            
                        }

                ?>
                <div class="login" <?php echo $onclick ; ?> ><i class="fa fa-user-circle " ></i><a class="underline" <?php echo $link ; ?> class="logintxt"> 
                <?php echo $active_name ; ?>
                </a></div>
                <div class="icons">
                    <a href="store_locator.php"><i class="fa fa-location-arrow" aria-hidden="true"></i></a>
                    <a href="trackingOrder.php"><i class="fa  fa-truck" ></i></a>
                    <a href="shopping-page.php" class="cart"><i class="fa fa-shopping-cart " ></i> <span class="cartnum"></span></a>
                    <a href="customercare.php"><i class="fa fa-phone" aria-hidden="true"></i></a>
                </div>
            </div>
             </nav>
           
            <div class="headerempty"></div>
    
        </div>
    
    </header>
    <!--SUB MENU (appears on hover)-->
    <!-- 0) CATALOGUE-->
    <div class="hover_menu sub_catalogue">
        <div class="left">
            <div class="sub_menu">
                <h1>Necklace</h1>
                <p> Kundan Necklaces</p>
                <p>Choker Necklaces</p> 
                <p>Bridal Jewellery Sets</p> 
                <p> Scarf Necklaces</p>
                <p>Mangalsutra</p> 
                <p>Temple Necklaces</p>  
                <p>Doli Necklace Sets</p> 
                <p>New exclusive ITALIAN </p>
                <p> Pearl Collection</p>
                <p> Peacock Collection</p> 
                <p>Jalebi Collection</p>    
                   
                 
            </div>
            <div class="sub_menu">
               <h1>Earrings</h1>  
            <p>New Arrivals</p>  
            <p> Chand Bali</p>
            <p> Jhumki</p> 
            <p>Ear Cuffs</p>  
            <p>Trendy Earrings</p> 
    
             <h1> Bangles</h1>
           <p>Bracelets</p>
           <p> Kada</p>
           <p>Bangle Set of 2</p> 
           <p> Bangle Set of 4</p>
            </div>
            <div class="sub_menu">
               <h1>Rings</h1> 
           <p>Engagement Rings</p> 
           <p>CZ Rings</p> 
           <p>Cocktail Rings</p> 
           <p> Solitaire Rings</p>
           
           <h1>EXCLUSIVE DESIGNS</h1>
           <p>PEZZO D'ARTE</p>
           <p>WHISPERS FROM THE VALLEY</p>
           <p>MUSEE DU LUXE</p> 
           <p>AWADH</p> 
           <p>ESPANA</p>
            </div>
    
    
        </div>
        
        <div class="right">
            <img src="Database/images/Bridal/Bridal10/pic.jpg" alt="">
        </div>
        
    </div>
    
    <!-- 1) MEN -->
    <div class="hover_menu sub_men ">
            <div class="sub_menu1">
                <h1>Bracelets</h1>
               <a href="#"> <img src="Database/images/Men/Braclet/braclet.jpg" style="margin-left: 10px;"></a>
            </div>
            <div class="sub_menu1">
              
             <h1>Chain and Pendant</h1>
            <a href="#"> <img src="Database/images/Men/Pendant/Pendant1.jpg"  alt=""></a>
    
            </div>
            <div class="sub_menu1">
            <h1>Rings</h1> 
           <a href="#"> <img src="Database/images/Men/Ring/Ring2/pic.jpg"  alt=""></a>
            </div>
            <div class="sub_menu1">
            <h1>Wedding</h1>
           <a href="#"><img src="Database/images/Men/Wedding/Wedding.jpg"  alt=""></a> 
            </div>
        
        
    </div>
    
    <!-- 2) DEAL OF THE DAY-->
    <div class="hover_menu sub_deal sub_catalogue">
        <div class="left">
            <div class="sub_menu">
                <h1>COMBOS</h1>
                <p> Bridal Set</p>
                <p>Necklace Set (set of 3)</p> 
                <p>Necklace Set (set of 4)</p> 
                <p>Ring-Earring Combo</p>
                <p>Marriage Ring Twinning</p> 
            </div>
            <div class="sub_menu">
              
             <h1>OFFERS</h1>
           <p>20% off</p>
           <p>40% off</p>
           <p>80% off</p> 
           <p>End of Season Sale</p>
           <p>FLASH SALE!! </p>
            </div>
            <div class="sub_menu">
            <h1>Festive Season Sale</h1> 
           <p>Rakhsha Bandhan</p>
           <p>Diwali</p>
           <p>Navratri</p> 
           <p>Christmas Bonanza</p> 
           <p>Bride-BrideGroom Combo</p>
           <h1 onclick="open_game()">PLAY AND WIN 
            <i class="fa fa-gift" aria-hidden="true" style="animation: deal 2s linear infinite; font-size: 25px;"></i></h1>
    
            </div>
    
    
        </div>
        
        <div class="right">
            <img src="Database/images/Extras/offer1.jpg"  alt="">
        </div>
        
    </div>
    

<!-- Now here we are creating sign-up login pop up.-->
<?php if(!isset($_SESSION['Customer_ID'])){  ?>
<div class="loginbox" id="loginbox">
<div class="close" id="close" onclick="closelogin()"> <i class="fa fa-times" aria-hidden="true"></i>
    </div>
<div class="signin">
    <h1>SIGN IN</h1>
    <div class="links">
       <div><i class="fa fa-google-plus" aria-hidden="true"></i></div> 
       <div> <i class="fa fa-facebook"></i></div> 
       <div> <i class="fa fa-linkedin" ></i></div> 
    </div>
    <h5>Or log in with </h5>
    <form action= "<?php $_SERVER['PHP_SELF']  ?>" method="POST">
    <input type="text" placeholder="Username" id="username" name="l_username" required>
    <input type="password" placeholder="Password" id="Password" name= "l_password" required ><i class="fa fa-eye" aria-hidden="true" id="eye" onclick="showpass()"></i>
   <div class="remember"> <input type="checkbox" name="" id="remember" onclick="rememberalert()"> <p>Remember me</p></div>
    <input type="submit" class="button" name='l_submit' value="Sign In">
    <p class="forgot"><a href="#">Forgot Password? </a></p>
</form>
<?php   //Verifying his details
if(isset($_POST['l_submit'])){
    $typed_user = $_POST['l_username'] ;
    $typed_pass = $_POST['l_password'] ;

    $CHECK_active_sql = "SELECT * FROM `signup details` WHERE username = '{$typed_user}' AND Password = '{$typed_pass}' " ;   
    $CHECK_active_result = mysqli_query($login_conn ,  $CHECK_active_sql ) ; 
    if(mysqli_num_rows($CHECK_active_result) > 0){
    $active_data_row = mysqli_fetch_assoc($CHECK_active_result) ; 

    session_start() ;
    //Storing Active users data
    $_SESSION['Customer_ID'] = $active_data_row['Customer_Id'];
    $_SESSION['Name'] = $active_data_row['Name'];
    $_SESSION['username'] = $active_data_row['username']; 

    //header('Location:'.$hostname.'main-page.php') ;
     //Method 2 of re-directing
     $url = $hostname.'shopping-page.php?category=';
     echo '<meta http-equiv="refresh" content="0; URL="'.$url.'">' ;
    }
}
?>
</div>
<div class="signup">
    <h2>Hello Friend!</h2>
    <h3>Not a member yet?<span>Sign Up and Join our community now.</span></h3>

    <button onclick="loginpage()"><span>Sign Up</span></button>
</div>

</div> <!--close LoginBox--> <?php } //closing isset ka } . ?>


<!--MAIN BODY-->
<div class="mainbody">

    <!--if want to add leftside and slider-->
<!--SIDEBAR-->
<div class="leftside" id="leftside">

       
<div class=" sidebar " id="sidebar">
            <h2>Jewellery</h2>

            <ul class="list1">
        <li><a href="subpage.php?category=Necklace&CATEGORY=NEC"><i class="fa fa-"></i>Necklace</a></li>
        <li><a href="subpage.php?category=Ring&CATEGORY=RIN"><i class="fa fa"></i>Rings</a></li>
        <li><a href="subpage.php?category=Bangle&CATEGORY=BAN"><i class="fa fa-"></i>Bangles</a></li>
        <li><a href="subpage.php?category=Earring&CATEGORY=EAR"><i class="fa fa"></i>Earrings</a></li>
        <li><a href="subpage.php?category=Bridal&CATEGORY=BRI"><i class="fa fa"></i>Bridal Jewellery</a></li>
        <li><a href="subpage.php?category=Temple&CATEGORY=TEM"><i class="fa fa-"></i>Temple Jewellery</a></li>
        <li><a href="sale.php?ccategory=Sale&CATEGORY=SAL"><i class="fa fa-"></i>End of Season Sale!</a></li>
            </ul>

        <h2>Account</h2>
        <ul class="list2">

            <li><a href="myProfile.php"><i class="fa fa-user"></i>Profile</a></li>
            <li><a href="wishlist.php"><i class="fa fa-heart"></i>Wishlist</a></li>
            <li><a href="myorder.php"><i class="fa fa-shopping-cart"></i>My Orders</a></li>
            <li><a href="#"><i class="fa fa-gift"></i>Promo Code</a></li>
            <li><a href="#"><i class="fa fa-university"></i>Payment</a></li>
            <li><a href="#"><i class="fa fa-question "></i>FAQs</a></li>
            <li><a href="trackingOrder.php"><i class="fa fa-truck "></i>Shipping</a></li>

       </ul>
       
       
        <div class="sociallinks">
            <a href="#"><i class="fa fa-  fa-cog"></i></a>

            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="customercare.php"><i class="fa fa-phone" aria-hidden="true"></i></a>
          
        </div>
     </div><!--SIDEBAR closed-->



</div> <!--closes leftside-->

<div class="subbody">
    <div class="left">

<?php   
// get all the data of user from cart page.
//declaring total price and fake price variables for summary table
$totalprice = 0 ;
$finalprice = 0 ;
$noOfProducts = 0 ;
$totalorderqnty = 0;
//got quantity from shopping page.
$orderqnty = $_GET["qntyorder"] ;
//print_r($orderqnty) ;
$link = $_GET["link"]  ;

if(isset($_SESSION['Customer_ID'] )){

    include 'loginConfig.php' ;
    include 'product_config.php' ;
   $add_userId = $_SESSION['Customer_ID'] ;


if($link == 'cart'){

$check_sql = "SELECT * FROM `addtocart` WHERE Add_E_ID = '{$add_userId}' " ;
$check_result = mysqli_query( $login_conn , $check_sql) OR die("cart check query Failed") ; 
//this we will also pass in place order so al products are stored in loop.
$noOfProducts = mysqli_num_rows($check_result) ;

}elseif($link == 'buynow'){
    $sku =$_GET["SKU"] ;
    $check_sql = "SELECT * FROM `image` WHERE  SKU_code = '{$sku}' " ;
    $check_result = mysqli_query( $conn , $check_sql) OR die("buy check query Failed") ; 
    //this we will also pass in place order so al products are stored in loop.
    $noOfProducts = mysqli_num_rows($check_result) ;
}

if($noOfProducts > 0){
 
?> 
<h1>Your Purchase Bag</h1>

<?php

while($check_row = mysqli_fetch_assoc($check_result)){
   //print_r($check_row) ;  
   if($link == 'cart'){
       //since for cart with each row sku will change
     $sku = $check_row['Add_SKU']; 
   }
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
        $porduct_qnty = $orderqnty[$sku] ;


?>

            <div class="product">
                <div class="pro">
                    <div class="image">
                        <a href="#"> <img src="Database/images/<?php echo $porduct_type ; ?>/<?php echo $porduct_filename ; ?>/pic.jpg" alt=""> </a>
                     </div>
                     <div class="details">
                         <h2><span >MN </span><?php echo $porduct_type ; ?></h2>
                         <h3><?php echo $porduct_title ; ?></h3>
     
                         <div class="quantity">
                            <div class="qntybox"> QNTY </div>
                            <input type="number"  value="<?php echo $porduct_qnty ; ?>"  disabled >
                            
                         </div>

                     </div>
                     <div class="price">
                         <span>Rs.<?php echo $porduct_real_price ; ?></span>
                         <h7>Rs.<?php echo $porduct_fake_price ; ?></h7>                         
                         <?php  
                         $discount = $porduct_fake_price -  $porduct_real_price ;
                         $percentage = ceil(($discount / $porduct_real_price)*100) ;
                         
                         ?>
                         <h5>Save Rs.<?php echo $discount ; ?> (<?php echo $percentage ; ?>% off)</h5>
                         <h6>(Price Each Product)</h6>

                     </div>
                </div>
               
                <div class="bar">
                    <p><a id="remove" data-sku="<?php echo $sku; ?>">REMOVE</a> </p>


                </div>
            </div><!--close Product-->
            <?php 
           
            //storing sum of prices of each product in the loop for summary
                $totalprice += $porduct_fake_price*$porduct_qnty ;
                $finalprice += $porduct_real_price*$porduct_qnty  ;
                $totalorderqnty += $porduct_qnty ;
             
                }  } 
            }else{ echo "<h1 class='norecord' >No product added to the cart.</h1>" ; } //close the num_rows =>if start after left 
            
            }else{ echo "<h1 class='norecord' >Please <span onclick='signin()'> login </span> to see see your CART. Not a member yet?<a href='signuppage.php'>  Sign UP..</a></h1>" ;}  //close isset sessions => if-else 
           
           ?>

           

        <div class="more">
            <a href="#"><i class="fa fa-bookmark-o" aria-hidden="true"></i>  Add from the WISHLIST</a>
            <a href="main-page.php"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Continue SHOPPING </a>


        </div>
       
        </div> <!--close LEFT-->
 

        <div class="right">

            <div class="gift">
                <h1><i class="fa fa-gift" aria-hidden="true"></i>   Gifting and personalisation</h1>

               <div class="giftbox" > 
                   <div class="ribbon"><img src="./Database/images/Extras/ribbon.png" alt=""></div>

                <p> <span>Buying for loved ones ?</span> 
                Gift wrap and personalised message on a card for just <b>Rs.25</b>
                  <a href="#">ADD a gift wrap</a> </p>
                </div> 

            </div>
            
            <div class="coupons">
                <h1><i class="fa fa-tag" aria-hidden="true"></i>   Coupons</h1>
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                    <input type="text" placeholder="Enter Promo Code" name="promocode"> 
                    <button  name="promo"> Apply</button>
                 </form>
                 <?php if(isset($_POST['promo'])){
                        $promoapplied = true ;
                        if($_POST['promocode'] == 'DiwaliwithRhydhm'){
                            $promodiscount = 300;
                            echo '<h2 class="activepromo"> Promocode Applied.</h2>';
                        }elseif($_POST['promocode'] == 'Meith'){
                            $promodiscount = 600;
                            echo '<h2 class="activepromo"> Promocode Applied.</h2>';
                        }else{
                            $promodiscount = 0 ;
                            echo '<h2 class="activepromo">Wrong Promocode.</h2>';
                        }

                    }else{
                        $promoapplied = false ;
                        $promodiscount = 0 ;
                     } 
                    
                    
                    ?>
            </div>

            <div  class="summary">
                <h1><i class="fa fa-shopping-bag" aria-hidden="true"></i>   Summary</h1>

                <div class="total">
                    <?php 
                  
                    //$delivery = 99 ;
                    $online_handling = 99 ;
                    $final_discount = $totalprice - $finalprice ;
                    $GST_rate = 0.2 ; //20%
                    $GST = ceil($GST_rate*$finalprice) ;
                    $total= ($totalprice -  $final_discount - $promodiscount +$GST) ;
                    $total = max( $total , 0); 
                     
                    
                    ?>
                    <div class="group">
                        <div class="label">Bag Total</div>
                        <div class="value">Rs.<?php  echo $totalprice ;?></div>
                    </div>
                    <div class="group">
                        <div class="label">Discount</div>
                        <div class="value">Rs.<?php  echo $final_discount ;?></div>
                    </div>
                    <div class="group">
                        <div class="label">GST + CGST </div>
                        <div class="value">Rs.<?php  echo $GST ; ?></div>
                    </div>
                    <div class="group">
                        <div class="label">Platform Handling Fee</div>
                        <?php if($noOfProducts > 0){
                        ?>
                        <div class="value"><p>Rs.<?php  echo $online_handling ;?></p> <span>FREE</span></div>
                        <?php }else{ ?>
                            <div class="value"><span>None </span></div>
                            <?php } ?>
                    </div>
                    <div class="group">
                        <div class="label">Coupon Discount</div>
                        <?php 
                            if($promoapplied ){
                        ?>
                        <div class="value activecoupon">Rs.<?php  echo $promodiscount ;?></div>
                        <?php }else{ ?>
                            <div class="value"><h5> <a href="#">Apply Coupon</a></h5></div>

                             <?php } ?>
                    </div>
                    <div class="group">
                        <div class="label">Delivery</div>
                        <div class="value"><span>FREE</span></div>
                    </div>
                    <div class="group">
                        <div class="label final ">Total</div>
                        <div class="value  final">Rs.<?php  echo $total ;?></div>
                    </div>

                </div>

            </div >
            
            <div class="order">
            <?php  //if not logged in then login will prompt up else order will be placed.
            if(isset($_SESSION['Customer_ID'] )){
                if($noOfProducts <1){
                    //if empty cart
                    $open = 'onclick="emptycart()"' ;
                }else{
                    $open = 'href="placeorder.php?link='.$link.'&promo='.$promodiscount.'&orderqnty='.htmlentities(serialize($orderqnty)).'&totalproducts='.$totalorderqnty.'&total='.$total.'&SKU='.$sku.'"' ;
                }
              
            }else{
                $open = 'onclick="signin()"' ;
            }
            
            ?>
            <a name="place" type="submit" class="placeorder"  <?php echo $open ; ?> > Place Order </a>
            </div>



        </div> <!--close RIGHT-->

     

    </div> <!--closes SUBBODY-->

    <div class="recommend">
        <h1>RECOMMENDED FOR YOU</h1>
        <div class="categoryslider">

            <!--the arrows on the image-->
            <a class="prev"  id="prev" >&#10094;</a>
            <a class="next" > &#10095;</a>

        <div class="images">
          <div class="s_items carousel-cell" id="slide"><a href="temple.html"><img alt="" src="Database/images/Necklace/Necklace1/pic.jpg" id="s_img1"></a>
            <a href="#"><button id="text1">TEMPLE JEWELLERY</button></a>
        </div>
          <div  class="s_items carousel-cell" id="slide"><a href="oxidised.html"><img src="Database/images/Necklace/Necklace10/pic.jpg" alt="" id="s_img2"></a>
            <a href="#"><button>OXIDISED JEWELLERY</button></a>

        </div>
          <div  class="s_items carousel-cell" id="slide"><a href="kundan.html"><img src="Database/images/Necklace/Necklace11/pic.jpg" alt="" id="s_img3"></a>
            <a href="#"><button>KUNDHAN JEWELLERY</button></a>

        </div>   
    
          <div  class="s_items carousel-cell" id="slide"><a href="doli.html"><img src="Database/images/Necklace/Necklace12/pic.jpg" alt=""></a>
            <a href="#"><button>DOLI JEWELLERY</button></a>
        </div>
          <div class="s_items carousel-cell" id="slide"><a href="lehriya.html"><img src="Database/images/Necklace/Necklace2/pic.jpg" alt=""></a>
            <a href="#"><button>LEHRIYA JEWELLERY</button></a>
            </div>
          <div  class="s_items carousel-cell" id="slide"><a href="durga.html"><img src="Database/images/Necklace/Necklace5/pic.jpg" alt=""></a>
            <a href="#"><button>DURGA JEWELLERY</button></a>
        </div>
      </div>
    </div>

    </div> <!--closes RECOMMEND SLIDER-->

</div> <!--closes MAIN BODY-->

<!--FOOTER-->
<div class="footer">

    <div class="innerfooter">
        <div class="logo">
        <img src="Database/images/Logo/palashlogo1.jpg"><br>
           <div class="address">
               <span>D-334B RHYDHM CREATIONS,<br>
                     Diamond Lane,<br>
                     BANDRA KURLA COMPLEX,<br>
                     Mumbai-400070.<br>
                    

             </span></div> 

        </div>

        
        
        
        <div class="info">
            <h1> NEED  ANY  Help?</h1>
            <a href="#" >Terms and Condition</a>
            <a href="#" >Privacy Policy</a>
            <a href="#">Reviews</a>
            <a href="#">About us</a>

        </div>
        
        
        <div class="info">
            <h1>More</h1>  
            <a href="#" >Partnering</a>
            <a href="#">Investment</a>
            <a href="#">Bulk Orders</a>
            <a href="#">Carrer</a>

        </div>
        <div class="info">
            <h1>Other Brands</h1>  
            <a href="#" >Rhydhm Creations</a>
            <a href="www.sukkhi.com">Sukkhi</a>
            <a href="#">Meith </a>
            <a href="#">Trushi</a>
            <a href="#">Dhishil</a>

        </div>
       
       
        <div class="info">
        
            <h2>
                Mail: rhydhmcreations@gmail.com <br>Contact us
           </h2>
            <form>
                
                <input type="email" placeholder="email" class="contactinput" size="28"><br><br>
                <textarea name="message" class="contactinput" cols="30" rows="5" placeholder="Comments"></textarea>
               <br>
                 <input type="file" class="file">
               <input type="submit" class="submit">

            </form>
         
        </div>
        
        <div class="copyright"> <i class="fa fa-copyright"></i>Made by MEITH NAVLAKHA</div>
        
        <div class="footerpayment">
                <img src="Database/images/Logo/googlepay3.png" class="Payment1">
                <img src="Database/images/Logo/bitcoin1.png" class="Payment">
                <img src="Database/images/Logo/mastercard.png" class="Payment2">
                <img src="Database/images/Logo/visa.png" class="Payment">
                <img src="Database/images/Logo/paytm.png" class="Payment">

        </div>
    </div>
   
</div><!--closes FOOTER-->



<!--SIDEBAR  JAVASCRIPT-->
<script>
 function sidebar(){
        //document.getElementById('sidebar').classList.toggle('sidebar');
     
        document.getElementById('bar1').classList.toggle('bar1');
        document.getElementById('bar2').classList.toggle('bar2');
        document.getElementById('bar3').classList.toggle('bar3');
        var sidebar = document.getElementById('leftside') ;
        var m =   sidebar.style.width;
    
     if(m =="0px")
        {  sidebar.style.width="300px";
     console.log(m);
     
    }
    else if(m =="300px")
        {  sidebar.style.width="0px";
     console.log(m);
     
    }
    
    
    else{    sidebar.style.width="300px";
     console.log(m);
     
    }
    
    }

</script>

<!--HEADER  + LOGINBOX JAVASCRIPT-->
<script>

// LOGIN BOX
    
function signin(){
    
    // alert("Thanks for signing in")
   var loginbox = document.getElementById("loginbox");
   //document.getElementById("body").style.opacity=0.5;
   loginbox.style.display="block";
   
   }
   
   // to close login box
   function closelogin(){
       var loginbox = document.getElementById("loginbox");
       var closebtn = document.getElementById("close");

       loginbox.style.display="none";  
   }
   
   
   /*Tried to close login box on clicking anywhere else*/
   /*var loginbox = document.getElementById("loginbox");
   loginbox.onblur = function(){
   
       loginbox.style.display="none";  
   
   }
   */
   
   
   
   function loginpage(){
            window.open("Signup Page/signuppage.php");
   }
   
   function showpass() {
      var pass= document.getElementById('Password');
      var icon=  document.getElementById('eye');
       if(pass.type == "password"){
           pass.type="text";
          icon.classList.replace("fa-eye" , "fa-eye-slash");
       }
       else{pass.type = "password"
       icon.classList.replace("fa-eye-slash" , "fa-eye");
   
       
       }
   }
   
   function rememberalert(){
       var box= document.getElementById("remember");
       var user=document.getElementById("username").value ;
       if(box.checked == true){
               alert("We will remember you  @"+ user);
               console.log("We will remeber your Password" + user);
       }
   
   
   }

function open_game(){

   window.open("housie.html");

}


//HOVER OVER SUBMENU
var catalogue = document.getElementById('Catalogue');
var dealOfDay = document.getElementById('deal');
var men = document.getElementById("men");
var wedding = document.getElementById('wedding');
var home = document.getElementById('home');

var sub_menu = document.getElementsByClassName("hover_menu"); //all the sub_menu stored in an array.

console.log(sub_menu);
//HOVER


    catalogue.addEventListener( "mouseover" , function(){
    
    for(var i =0; i<sub_menu.length ; i++){
        sub_menu[i].style.display="none";

    }
    sub_menu[0].style.display="flow-root";

    }) ;

   men.addEventListener( "mouseover" , function(){
    
    for(var i =0; i<sub_menu.length ; i++){
        sub_menu[i].style.display="none";

    }
    sub_menu[1].style.display="flow-root";

    }) ;

dealOfDay.addEventListener( "mouseover" , function(){
  //  document.getElementsByClassName("sub_deal")[0].style.display="flow-root";
  for(var i =0; i<sub_menu.length ; i++){
        sub_menu[i].style.display="none";

    }
    sub_menu[2].style.display="flow-root";

    }) ;



//Display none else where

document.getElementsByClassName("mainbody")[0].addEventListener( "mouseover" , function(){
    for(var i =0; i<sub_menu.length ; i++){
        sub_menu[i].style.display="none";

    }
}) ;
document.getElementsByClassName("logo")[0].addEventListener( "mouseover" , function(){
    for(var i =0; i<sub_menu.length ; i++){
        sub_menu[i].style.display="none";

    }
}) ;
document.getElementsByClassName("icons")[0].addEventListener( "mouseover" , function(){
    for(var i =0; i<sub_menu.length ; i++){
        sub_menu[i].style.display="none";
    }
}) ;
document.getElementsByClassName("headerempty")[0].addEventListener( "mouseover" , function(){
    for(var i =0; i<sub_menu.length ; i++){
        sub_menu[i].style.display="none";
    }
}) ;
wedding.addEventListener( "mouseover" , function(){
    for(var i =0; i<sub_menu.length ; i++){
        sub_menu[i].style.display="none";
    }
}) ;

home.addEventListener( "mouseover" , function(){
    for(var i =0; i<sub_menu.length ; i++){
        sub_menu[i].style.display="none";
    }
}) ;

</script>
<!--SLIDER JAVASCRIPT-->
<script src="./Plugins/slick/slick.min.js"></script>
<!--CATEGORY SLIDER-->
  <script type="text/javascript">

    $(document).ready(function(){
     
$('.images')
//this not is helpful
.not('.slick-initialized')
.slick({
  centerMode: true,
  centerPadding: '60px',
  slidesToShow: 3,
  arrows: true,
  autoplay:true,
  autoplaySpeed: 2000,

//giving our next/prev btn as default btns
prevArrow:".categoryslider  .prev",
nextArrow:".categoryslider .next",


  responsive: [
    {
      breakpoint: 768,
      settings: {
        arrows: true,
  autoplay:true,
  autoplaySpeed: 2000,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 2
      }
    },
    {
      breakpoint: 480,
      settings: {
        arrows: true,
  autoplay:true,
  autoplaySpeed: 2500,   
       centerMode: true,
        centerPadding: '30px',
        slidesToShow: 1
      }
    }
  ]
});
    });
  </script>


<!--NORMAL JAVASCRIPT-->
<script>

function emptycart(){
    alert("Your cart is empty") ;
}

</script>

<!--AJAX-->
<script>

$(document).ready(function(){

    //Setting Cart Num
    function LoadCart(){
        $.ajax({
        url: 'fetchcatnum.php' ,
          success: function(data){
              $(".cartnum").html(data) ;
          }
        }) ;
    }

    LoadCart() ; 

//Click to remove from cart
    $(document).on("click" ,"#remove" , function(){
       var sku =  $(this).data("sku") ;
           //console.log(sku) ; 

      $.ajax({
          url: 'removeproduct.php' ,
          type: "GET" ,
          data: {  SKU:sku  } ,
          success: function(data){
             // alert(data) ;
             if(data == 1){
                $(".cartmessage").html("Product removed from your cart.") ;
                $(".cartmessage").fadeIn();
                LoadCart() ;
                setTimeout(() => {
                    $(".cartmessage").fadeOut("slow") ;
                     //this reloads the page
                    location.reload();

                }, 500);

             }else{
                $(".cartmessage").html("Technical Error. Please try again") ;
                $(".cartmessage").fadeIn();
                LoadCart() ;
                setTimeout(() => {
                    $(".cartmessage").fadeOut("slow") ;
                     
                }, 400);
              
             }
              
          }
      }) ;

    });


    



});


</script>

</body>
</html>