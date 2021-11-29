<?php     include 'product_config.php' ;
$Category_name = $_GET['category'] ;
$Category_code = $_GET['CATEGORY'] ;
$sku = $_GET['SKU'] ;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MN/<?php echo $Category_name ?>/Product</title>
<!--StyleSheet-->
<link rel="stylesheet" href="product_page.css">
<link href="https://fonts.googleapis.com/css2?family=Cabin:wght@700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Fira+Sans+Extra+Condensed:ital@1&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@500&family=Karla:ital,wght@1,700&display=swap" rel="stylesheet">
<!--Font used in header-->
<link href="https://fonts.googleapis.com/css2?family=Mukta:wght@500&display=swap" rel="stylesheet">

  <!--jQuery plugin--> 
<script src="./jQuery/jquery.js"></script>

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
                <div class="home"><a href="main-page.php" >Home</a></div>  
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
                    include 'loginConfig.php'  ;
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
                            
                        }

                ?>
                <div class="login" <?php echo $onclick ; ?> ><i class="fa fa-user-circle " ></i><a class="underline" <?php echo $link ; ?> class="logintxt"> 
                <?php echo $active_name ; ?>
                </a></div>
                <div class="icons">
                    <a href="storelocator.php"><i class="fa fa-location-arrow" aria-hidden="true"></i></a>
                    <a href="trackingOrder.php"><i class="fa  fa-truck" ></i></a>
                    <a href="shopping-page.php" class="cart"><i class="fa fa-shopping-cart " ></i> <span class="cartnum">0</span></a>
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
<!--LOGINBOX-->
<?php  if(!isset($_SESSION['Customer_ID'])){  ?>
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
    $_SESSION['UserName'] = $active_data_row['username']; 

    
    date_default_timezone_set('Asia/Calcutta');
    $time = date('H:i:s:f') ;
    $date = date("Y/m/d");
    $login_entry = "INSERT INTO `logindetails`(`Log_ID`, `Log_Name`, `Log_Username`, `loginStatus` , `Log_Date`, `loginTime`) 
                    VALUES ( '{$_SESSION['Customer_ID']}' , '{$_SESSION['Name']}' , '{$_SESSION['UserName']}' , 'LoginIn' ,'{$date}' , '{$time}' ) " ;

    $login_result = mysqli_query( $login_conn, $login_entry ) or die("Logout failed");

    //header('Location:http://localhost/Rhydhm Database/subpage.php');  
    //Method 2 of re-directing
    $url = $hostname.'product_page.php?category='.$_GET["$category"].'&CATEGORY='.$_GET["CATEGORY"].'&sku='.$sku ;
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


<div class="mainbody" >

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
        <li><a href="sale.php?category=Sale&CATEGORY=SAL"><i class="fa fa-"></i>End of Season Sale!</a></li>
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

</div><!--leftside Closed. Subbody Start-->



     <div class="modalbox" id="modalbox">
       <!--Close Cross-->
        <div class="m_close" id="m_close" onclick="m_closelogin()"> <i class="fa fa-times" aria-hidden="true"></i>
        </div>
    <!--Image Box-->
        <div class="m_mainimg">
<?php 
include 'product_config.php' ;

    $product_sql = "  SELECT * FROM image i
                      LEFT JOIN details d 
                      ON i.SKU_code = d.SKU
                      LEFT JOIN category_table c
                      ON i.Category_Code = c.`Cat-Code`
                      WHERE i.SKU_code = '{$sku}' " ;
    
    $product_result = mysqli_query($conn , $product_sql) or die("Query Failed");
//saving the file name and it's info
   while($row = mysqli_fetch_assoc($product_result)){       
        $filename = $row['filename'];
        $title = $row['title'];
        $weight = $row['Weight'];
        $real_price = $row['RealPrice'];
        $fake_price = $row['FakePrice'];
        $dimensions =  $row['Dimensions'];
        $categorycode =  $row['Cat-Code'];
        $noOfImg =  $row['NO_of_Pics'];

   }

   for($i=0 ; $i<$noOfImg  ; $i++){  
    if($i == 0){$a = '';}else{$a = $i;}
?>

            <div class="m_slides">
                <a href="#"><img src="<?php echo 'Database/images/'.$Category_name.'/'.$filename.'/pic'.$a.'.jpg'; ?>" alt="" ></a> 
                </div>
            

   <?php }?>
            <!--the arrows on the image-->
            <a class="prev" onclick="m_plusSlide(-1)">&#10094;</a>
            <a class="next" onclick="m_plusSlide(1)">&#10095;</a>

            </div>
            
        <div class="m_gallery row">
            <?php 
            for($i=0 ; $i<$noOfImg  ; $i++){  
            if($i == 0){$a = '';}else{$a = $i;}
        ?> 
            <div class="m_column">
                <img src="<?php echo 'Database/images/'.$Category_name.'/'.$filename.'/pic'.$a.'.jpg'; ?>" alt="" class="m_pic" onclick="m_currentSlide(<?php echo $i+1; ?>)">
            </div>
            <?php  } ?>          

        </div>


         </div>
     
     <div class="product">
          <!--Message Box-->
        <div class="cartmessage"></div>

        <div class="left">
          <div class="mainimg">
        <?php  
    
        for($i=0 ; $i<$noOfImg ; $i++){  
            if($i == 0){$a = '';}else{$a = $i;}

        ?>
            <div class="slides" >
                <a onclick="modalimg()"><img src="<?php echo 'Database/images/'.$Category_name.'/'.$filename.'/pic'.$a.'.jpg'; ?>" alt="" class="image-zoom" ></a> 
             
                <h5>(To zoom hover mouse over the image.)</h5>
                <h5>(Click to open on new window)</h5>
                </div>
        <?php } ?>           
            

            <!--the arrows on the image-->
            <a class="prev" onclick="plusSlide(-1)">&#10094;</a>
            <a class="next" onclick="plusSlide(1)">&#10095;</a>

            </div>
            
        <div class="gallery row">
        <?php 
            for($i=0 ; $i<$noOfImg  ; $i++){  
            if($i == 0){$a = '';}else{$a = $i;}
        ?> 
            <div class="column">
                <img src="<?php echo 'Database/images/'.$Category_name.'/'.$filename.'/pic'.$a.'.jpg'; ?>" alt="" class="pic" onclick="currentSlide(<?php echo $i+1; ?>)">
            </div>
        <?php  } ?>
        </div>


         </div>
        


        <div class="right">
            <h1><span>MN </span><?php echo $title ; ?></h1>
            <h6>CODE:<?php echo $sku ; ?></h6>
            <div class="star">
                <i class="fa fa-star" aria-hidden="true"></i>      
                <i class="fa fa-star" aria-hidden="true"></i>
                <i class="fa fa-star" aria-hidden="true"></i>               
                <i class="fa fa-star" aria-hidden="true"></i>            
                <i class="fa fa-star-half-o" aria-hidden="true"></i>      
                  </div>
            <div class="price">
                <span>Rs.<?php echo $real_price ; ?></span>
                <h7>Rs.<?php echo $fake_price ; ?></h7>
                <?php     
                $difference = $fake_price - $real_price;
                $percentage = ceil(($difference /$real_price)*100 ) ;
                
                ?>
                <h5>Save Rs.<?php echo $difference ; ?> (<?php echo $percentage ; ?>% off)</h5>


            </div>

            <h2>Quantity : <input type="number" placeholder="QNTY" class="qnty" min="1" max="10"></h2>

            <?php  //if not logged in then login will prompt out else order will be placed.
            if(isset($_SESSION['Customer_ID'] )){
                $open = '' ;
                $buyhref = "href='buynow.php?category=".$Category_name."&CATEGORY=".$categorycode."&SKU=".$sku." '";
            }else{  //if not logged in.   
                $open = 'onclick="signin()"' ;
                 $buyhref = '';
            } 
            ?> 
          
          <a class="cart" name="addtocart" id="addtocart" data-sku="<?php echo $sku; ?>" data-category="<?php echo $Category_name; ?>" data-type="<?php echo $categorycode; ?>"  <?php echo $open; ?>>
                  <i class="fa fa-shopping-cart" ></i>  Add to Cart </a>

                  <a class="buy"  <?php echo $buyhref; ?>  <?php echo $open; ?>>
                  <i class="fa fa-cart-plus" ></i>  BUY NOW </a>

            <div class="links">
                <div class="logo instagram"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                <div class="logo twitter"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                <div class="logo google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i></div>
                <div class="logo pinterest "><i class="fa fa-pinterest-p" aria-hidden="true"></i></div>
                <div class="logo envelope"> <i class="fa fa-envelope" aria-hidden="true"></i></div>      

            </div>
            
         </div> 
       
    </div> 

    <div class="description">
        <h1>About this Product</h1>
        <h2>Description: This MN Eye-Catching Gold Plated Choker Necklace Set For Women. Women love jewellery;
             specially artificial jewellery adore a women. They wear it on different occasion. They have special
              importance on ring ceremony, wedding and festive time. They can also wear it on regular basis . 
              Make your moment memorable with this range. This jewellery features a unique one of a kind traditional 
              emblish with antic finish.
        </h2>


     </div>
    <div class="info">
        <h1>Details</h1>
        <table >
            <tr>
                <td>Brand</td>
                <td>Rhydhm Creations</td>

            </tr>
            <tr>
                <td>Product Type</td>
                <td><?php echo $Category_name ; ?></td>

            </tr>
            <tr>
                <td>SKU</td>
                <td><?php echo $sku ; ?></td>

            </tr>
            <tr>
                <td>Material</td>
                <td>Alloy</td>

            </tr>
            <tr>
                <td>Plating</td>
                <td>18kt Gold Plated</td>

            </tr> <tr>
                <td>Dimension</td>
                <td><?php echo $dimensions ; ?></td>

            </tr>
            <tr>
                <td>Weight</td>
                <td><?php echo $weight ; ?> gms</td>

            </tr>
        
        </table>

    </div> 

    <div class="warranty">
        <h1>Warranty</h1>
        <p>MN offers a full statutory warranty covering manufacturing and material defects for genuine branded
     MN products purchased from MN own stores (including Online) or authorized MN retailers for
     a period of 6 months from the date of purchase. The terms of the warranty may vary between markets and 
    regions. The warranty only covers damage that in the opinion of MN or an authorized MN retailer 
     is not caused by accident or inappropriate use, ordinary wear and tear, modification, attempted repair,
     negligence or by failure to follow MN special product Care Advice. Every item found to be defective
                under this warranty may be, at the discretion of MN or an authorized MN retailer: 1. Replaced 
                by an identical piece, if available: 2. Substituted with a piece of comparable value; or 3. Repaired
                 depending on the degree of damage to the warranted product as well as on the feasibility and the 
                 availability of replacement parts. The damaged product should be sent by post or courier. 
                 This warranty service is provided free of charge. Please retain the purchase or delivery receipt,
                  or order id (in case of online), the gift receipt or the certificate of authenticity in case you
                   have a warranty claim. The receipt or the certificate serves as proof of purchase and authenticity 
                   for products purchased and as evidence of entitlement to this warranty. These warranty conditions
                    apply if there are no specific warranty conditions granted for specific products. MN reserves 
                    the right to amend or adapt these warranty conditions with implications for the future at its 
     discretion at any time. This warranty does not affect your statutory rights.
    </p>
    </div>

    <div class="feedback">
        <h1>Past Experiences : 
             <div class="star">
            <i class="fa fa-star" aria-hidden="true"></i>      
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>               
            <i class="fa fa-star" aria-hidden="true"></i>            
            <i class="fa fa-star-half-o" aria-hidden="true"></i>      
              </div></h1>
       

       
       
      <div class="feedbackcomments">
        <div class="feedbackinput">
            <h2>Share your Experience with us.</h2>

            <input type="text" placeholder="Name" class="input1">
            <input type="text" placeholder="Rating(out of 5)" class="input3">
            <input type="date" placeholder="Date" class="input4">
                       <br><br>
            <textarea name="" id="" cols="30" rows="10" placeholder="Experience" class="input2"></textarea>
            <br>
            <div class="btn">
            <input type="file" class="file" >
            <input type="submit" class="submit">
            </div>  
           <div class="icons">
            <i class="fa fa-thumbs-up" ></i>
            <i class="fa fa-share"></i>
            <i class="fa fa-comment-o" ></i>   
            </div> 
        </div>
        <div class="reviews">
            <div class="trendylaptop">
                <div class="screen">
                   <div class="innerscreen">

                   </div> 
                   <div class="camera">.</div>
                </div>
            <div class="bottom"></div>
        </div>

        
     </div>


    </div>

   







      </div>

</div>



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
            <h1> NEED  ANY  Help?<span>.........</span></h1>
            <a href="#" >Terms and Condition</a>
            <a href="#" >Privacy Policy</a>
            <a href="#">Reviews</a>
            <a href="#">About us</a>

        </div>
        
        
        <div class="info">
            <h1>More<span>.........</span></h1>  
            <a href="#" >Partnering</a>
            <a href="#">Investment</a>
            <a href="#">Bulk Orders</a>
            <a href="#">Carrer</a>

        </div>
        <div class="info">
            <h1>Other Brands<span>.........</span></h1>  
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
   
</div>

</body>


<!--Product Zoom plugin-->
<script src="./Plugins/product-zoom/jquery.zoom.min.js"></script>

<script type="text/javascript">
$(document).ready(function(){
    $('.image-zoom')
    .wrap('<span style="display:inline-block"></span>')
    .css('display', 'block')
    .parent()
    .zoom({
      url: $(this).find('img').attr('data-zoom')
    });
  });

</script>

<!-- HEADER SUBMENU Javascript-->
<script>
    //HOVER OVER SUBMENU
var catalogue = document.getElementById('Catalogue');
var dealOfDay = document.getElementById('deal');
var men = document.getElementById("men");
var wedding = document.getElementById('wedding');

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
document.getElementsByClassName("home")[0].addEventListener( "mouseover" , function(){
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

</script> 

<!--Normal javascript-->
<script>

    // Login Box
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
    
    function loginpage(){
             window.open("signuppage.html");
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

    //SIDEBAR

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
    
    //GALLERY
    
    var slideIndex = 1;
    // calling over function slider(1)  here so as to have default image of 1st pic.
    slider(slideIndex);
    
    
    function plusSlide(n){
        slideIndex += n;
        slider(slideIndex);
    
    }
    
    function currentSlide(n){
        slideIndex = n;
        slider(slideIndex);
    }
    
    function slider(n){
        var slide = document.getElementsByClassName("slides");
    //console.log("slideNo : " +slide);
    var dots = document.getElementsByClassName("pic");
    
        if(n> slide.length){
            slideIndex = 1;
        }
        if(n < 1){
            slideIndex = slide.length;
        }
    
        for( var i=0 ; i<slide.length ; i++){
    
            slide[i].style.display="none";
            dots[i].classList.remove("active");

        }
       
        dots[slideIndex - 1].classList.add("active");  
       //dots[slideIndex-1].className += " active";
       slide[slideIndex - 1].style.display="block";
    
    }
    
    
    // MODAL WINDOW  //because of zoom plugin modal window is temporary closed.

    
    function modalimg(){
        document.getElementById("modalbox").style.display="block"; 
    }
    
/* Tried to open with the clicked img as main image.{FAILED}
    var img = getElementsByClassName("pic");
    var m_mainimg= getElementsByClassName("m_mainimg");
    img.click = function(){
        document.getElementById("modalbox").style.display="block"; 
        m_mainimg.src = this.src;
    }
    */
    function m_closelogin(){
       var modalbox = document.getElementById("modalbox");
    
       modalbox.style.display="none";  
    }
    
    //MODAL GALLERY  
    
    var m_slideIndex = 1;
    m_slider(m_slideIndex);
    
    
    function m_plusSlide(n){
        m_slideIndex += n;
        m_slider(m_slideIndex);
    
    }
    
    function m_currentSlide(n){
        m_slideIndex = n;
        m_slider(m_slideIndex);
    }
    
    function m_slider(n){
        var slide = document.getElementsByClassName("m_slides");
    //console.log("slideNo : " +slide);
    var dots = document.getElementsByClassName("m_pic");
    
        if(n> slide.length){
            m_slideIndex = 1;
        }
        if(n < 1){
            m_slideIndex = slide.length;
        }
    
        for( var i=0 ; i<slide.length ; i++){
    
            slide[i].style.display="none";
            dots[i].classList.remove("active");
        }
       
        dots[m_slideIndex - 1].classList.add("active");  
       //dots[slideIndex-1].className += " active";
       slide[m_slideIndex - 1].style.display="block";
    
    
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

//Click to add to cart
    $(document).on("click" ,"#addtocart" , function(){
       var sku =  $(this).data("sku") ;
       var category =$(this).data("category") ;
       var type = $(this).data("type") ;
      console.log(type) ; 

      $.ajax({
          url: 'addtocart.php' ,
          type: "GET" ,
          data: {  SKU:sku  , category:category , CATEGORY:type } ,
          success: function(data){
             // alert(data) ;
             if(data == -1){
                $(".cartmessage").html("Product already added to your cart.") ;
                $(".cartmessage").fadeIn();
                setTimeout(() => {
                    $(".cartmessage").fadeOut("slow") ;
                }, 2000);

             }else{
                LoadCart() ;
             }
              
          }
      }) ;

    });


    $(document).on("click" ,"#wishlist" , function(){
       var sku =  $(this).data("sku") ;
       var category =$(this).data("category") ;
       var type = $(this).data("type") ;
      console.log(type) ; 

      $.ajax({
          url: 'addtowishlist.php' ,
          type: "GET" ,
          data: {  SKU:sku  , category:category , CATEGORY:type } ,
          success: function(data){
             // alert(data) ;
             if(data == -1){
                $(".cartmessage").html("Product already added to your wishlist.") ;
                $(".cartmessage").fadeIn();
                setTimeout(() => {
                    $(".cartmessage").fadeOut("slow") ;
                }, 1500);

             }else{
                LoadCart() ;
             }
              
          }
      }) ;

    });



});


</script>

  
    </html>