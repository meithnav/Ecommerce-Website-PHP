<?php  //TO CHECK WHETHER THE USER IS LOGGED IN OR NOT.

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MN</title>
<!--SLICK SLIDER Plugin-->
<link rel="stylesheet" href="./Plugins/slick/slick-theme.css">
<link rel="stylesheet" href="./Plugins/slick/slick.css">
<link rel="stylesheet" href="stylesheet_mainpage.css">
<!--JQuery-->
<script type="text/javascript" src="./jQuery/jquery.js"></script>
<!--Font Awesome-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="https://fonts.googleapis.com/css2?family=Teko:wght@300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@500&family=Karla:ital,wght@1,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Signika:wght@600&display=swap" rel="stylesheet">
<!--Font used in header-->
<link href="https://fonts.googleapis.com/css2?family=Mukta:wght@500&display=swap" rel="stylesheet">

<script type="text/Javascript"></script>

</head>
<body id="body">
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
            <img src="Database/images/Bridal/Bridal13/pic.jpg" alt="">
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
    $_SESSION['UserName'] = $active_data_row['username']; 

    date_default_timezone_set('Asia/Calcutta');
    $time = date('H:i:s:f') ;
    $date = date("Y/m/d");
    $login_entry = "INSERT INTO `logindetails`(`Log_ID`, `Log_Name`, `Log_Username`, `loginStatus` , `Log_Date`, `loginTime`) 
                    VALUES ( '{$_SESSION['Customer_ID']}' , '{$_SESSION['Name']}' , '{$_SESSION['UserName']}' , 'LoginIn' ,'{$date}' , '{$time}' ) " ;

    $login_result = mysqli_query( $login_conn, $login_entry ) or die("Logout failed");
                

    //header('Location:http://localhost/Rhydhm Database/subpage.php');  
    //Method 2 of re-directing
    echo '<meta http-equiv="refresh" content="0; URL="http://localhost/Rhydhm Database/main-page.php">';
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



    </div>


    <div class="subbody">
        <div class="rhydhm">
    <h1>RHYDHM CREATIONS</h1>
    <h2>Radiance at your doorstep..</h2>

    <marquee behavior="scroll" > 
    <span>Offer!!</span> Buy now and get 10% off upto Rs.200 on shopping of more than Rs.2000. <span class="promo">PROMO CODE: "MEITH" .</span>
    <span>Hoolla!!</span> Happy Diwali to all!! Catch the Diwali Sale <span class="promo">PROMO CODE: "#DiwaliwithRhydhm" </span>
    </marquee>
        </div>
        <div class="slider">
        </div>

       <div class="quickaccess">
            <div class="search">
            <form action="search.php" method="get">
                   <input type="text"  class="searchbox" name="search" placeholder="Search Trendy Jewellery">
                   <div class="searchbtn">
                       <i class="fa fa-microphone"></i>
                      <button type="submit"><i class="fa fa-search"></i>  </button>                    
                   </div>
            </form>
           </div>
           <div class="currency">
               <select >
                   <option value=""><a href="#">  rupee</a></option>
                   <option value=""><a href="#">usd</a></option>
                   <option value=""><a href="#"> &euro; euro</a></option>
                   <option value=""><a href="#"><i class="fa fa-bitcoin"></i> bitcoin</a></option>
                   <option value=""><a href="#">rouble</a></option>
              </select>

          </div>
           
          <div class="tools">

              <a href="#"><i class="fa fa-filter"></i></a> 
              <a href="wishlist.php"><i class="fa fa-heart"></i></a> 
              <a href="#"><i class="fa fa-sort-alpha-asc"></i></a> 
              <a href="#"><i class="fa fa-barcode"></i></a> 
              <a href="#"><i class="fa fa-refresh" onclick="relod()"></i></a>



           </div>
        </div>
            
       <div class="grid">
        
            <div class="grid1">
                <h1>Shop by Category</h1>

                <div class="row">
                    <div class="items">
                        <a href="subpage.php?category=Necklace&CATEGORY=NEC"><img src="Database/images/Bridal/Bridal1/pic.jpg"> </a>
                            <h2><a href="subpage.php?category=Necklace&CATEGORY=NEC">Necklace</a></h2>
                        
                    
                    </div>
                    <div class="items">    
                        <a href="subpage.php?category=Bangle&CATEGORY=BAN"><img src="Database/images/Bangle/Bangle13/pic.jpg"> </a>
                        <h2><a href="subpage.php?category=Bangle&CATEGORY=BAN">Bangles</a></h2>
                        </div>
                    <div class="items">
                        <a href="subpage.php?category=Earring&CATEGORY=EAR"><img src="Database/images/Earring/Earring21/pic.jpg"> </a>
                        <h2> <a href="subpage.php?category=Earring&CATEGORY=EAR">Earrings</a></h2>
                    </div>
                    <div class="items">
                        <a href="subpage.php?category=Ring&CATEGORY=RIN"><img src="Database/images/Ring/Ring15/pic.jpg"> </a>
                        <h2><a href="subpage.php?category=Ring&CATEGORY=RIN">Ring</a></h2>
                </div>
            </div>

            <div class="row">
                <div class="items">
                    <a href="subpage.php?category=Bridal&CATEGORY=BRI"><img src="Database/images/Bridal/Bridal10/pic.jpg"> </a>
                    <div class="text">
                        <h2> <a href="subpage.php?category=Bridal&CATEGORY=BRI">Bridal Set</a></h2>
                    </div>
                
                </div>
                <div class="items">    
                    <a href="subpage.php?category=Combo&CATEGORY=COM"><img src="Database/images/Combo/Combo2/pic.jpg"> </a>
                    <h2> <a href="subpage.php?category=Combo&CATEGORY=COM">Combo</a></h2>
                    </div>
                <div class="items">
                    <a href="subpage.php?category=Celebrity&CATEGORY=CEL"><img src="Database/images/Celebrity/Celebrity9/pic.jpg"> </a>
                    <h2> <a href="subpage.php?category=Celebrity&CATEGORY=CEL">Celebrity</a></h2>
                </div>
                <div class="items">
                    <a href="subpage.php?category=Temple&CATEGORY=TEM"><img src="Database/images/Model/model2.jpg"> </a>
                    <h2>  <a href="subpage.php?category=Temple&CATEGORY=TEM">Temple Jewellery</a></h2>
                 </div>
        </div>
            </div>

        <div class="grid2">
            <h1>EXCLUSIVE WEDDING JEWELLERY</h1>

            <div class="row">
                <div class="items">
                    <a href="subpage.php?category=bridal&CATEGORY=BRI"><img src="Database/images/Bridal/bridal1/pic.jpg"> </a>
                    
                
                </div>
                <div class="items">    
                    <a href="subpage.php?category=bridal&CATEGORY=BRI"><img src="Database/images/Bridal/bridal13/pic.jpg"> </a>
                    </div>
                <div class="items">
                    <a href="subpage.php?category=bridal&CATEGORY=BRI"><img src="Database/images/Bridal/bridal2/pic.jpg"> </a>
                </div>
                <div class="items">
                    <a href="subpage.php?category=bridal&CATEGORY=BRI"><img src="Database/images/Bridal/bridal14/pic.jpg"> </a>
            </div>
            <div class="items">
                <a href="subpage.php?category=bridal&CATEGORY=BRI"><img src="Database/images/Bridal/bridal6/pic.jpg"> </a>
                
            </div>
            </div>
            <div class="row">
                <div class="items">
                    <a href="subpage.php?category=bridal&CATEGORY=BRI"><img src="Database/images/Bridal/bridal9/pic.jpg"> </a>
                    
                
                </div>
                <div class="items">    
                    <a href="subpage.php?category=bridal&CATEGORY=BRI"><img src="Database/images/Model/Model7.jpg"> </a>
                    </div>
                <div class="items">
                    <a href="subpage.php?category=bridal&CATEGORY=BRI"><img src="Database/images/Bridal/bridal8/pic.jpg"> </a>
                </div>
                <div class="items">
                    <a href="subpage.php?category=bridal&CATEGORY=BRI"><img src="Database/images/Bridal/bridal19/pic.jpg"> </a>
            </div>
            <div class="items">
                <a href="subpage.php?category=bridal&CATEGORY=BRI"><img src="Database/images/Bridal/bridal4/pic.jpg"> </a>
                
            </div>
            </div>

       </div>

        <div class="grid3">

        <h1>Offers</h1>

             <div class="row">
            <div class="items">
                <a href="mn_offer.html"><img src="Database/images/Extras/offer3.png"> </a>
                    <h2><a href="mn_offer.html">Super Saver</a></h2>
                
             </div>

             <div class="items ">
                <a href="mn_offer.html"><img src="Database/images/Extras/offer2.jpg"> </a>
                    <h2><a href="mn_offer.html">25% Off</a></h2>
                
             </div>

             <div class="items">
                <a href="mn_offer.html"><img src="Database/images/Extras/offer1.jpg"> </a>
                    <h2><a href="mn_offer.html">Festive Season Sale</a></h2>
                
             </div>





            </div>
        </div>
           
       </div>

       <div class="costumerassurance">
        <div class="parts">
              <img src="Database/images/Logo/trusted-icon.png">
              <div class="text">
              <h1 class="text1">Most trusted</h1> 
              <h2 class="text1">Jewellery Brand</h2>
              </div>
       </div>
       <div class="parts">
                  <img src="Database/images/Logo/exclusive-design-icon.png">
                  <div class="text">
                  <h1 class="text3"> Exclusive designs</h1>
                  <h2>5000 new designs</h2>
                  </div>
        </div>
       <div class="parts">
                      <img src="Database/images/Logo/warranty-icon.png">
                      <div class="text">
                      <h1 class="text2">6 months </h1> 
                      <h2 class="text2">warranty</h2>
                      </div>
      </div>
      <div class="parts">
                          <img src="Database/images/Logo/customers-icon.png">
                          <div class="text">
                          <h1> Happy Customers</h1>
                          <h2 >All across India</h2>
                          </div>
       </div>

      </div>

      <div class="categoryslider">

            <!--the arrows on the image-->
            <a class="prev"  id="prev" >&#10094;</a>
            <a class="next" > &#10095;</a>

        <div class="images">
          <div class="s_items carousel-cell" id="slide"><a href="subpage.php?category=temple&CATEGORY=TEM"><img alt="" src="Database/images/Temple/Temple1/pic.jpg" id="s_img1"></a>
            <a href="#"><button id="text1">TEMPLE JEWELLERY</button></a>
        </div>
          <div  class="s_items carousel-cell" id="slide"><a href="subpage.php?category=Oxidised&CATEGORY=OXI"><img src="Database/images/Oxidised/Oxidised1/pic.jpg" alt="" id="s_img2"></a>
            <a href="#"><button>OXIDISED JEWELLERY</button></a>

        </div>
          <div  class="s_items carousel-cell" id="slide"><a href="subpage.php?category=Kundan&CATEGORY=KUN"><img src="Database/images/Necklace/Necklace29/pic.jpg" alt="" id="s_img3"></a>
            <a href="#"><button>KUNDHAN JEWELLERY</button></a>

        </div>   
    
          <div  class="s_items carousel-cell" id="slide"><a href="subpage.php?category=Doli&CATEGORY=DOL"><img src="Database/images/Doli/Doli1/pic.jpg" alt=""></a>
            <a href="#"><button>DOLI JEWELLERY</button></a>
        </div>
          <div class="s_items carousel-cell" id="slide"><a href="subpage.php?category=Lehriya&CATEGORY=LEH"><img src="Database/images/Lehriya/Lehriya1/pic.jpg" alt=""></a>
            <a href="#"><button>LEHRIYA JEWELLERY</button></a>
            </div>
          <div  class="s_items carousel-cell" id="slide"><a href="subpage.php?category=Durga&CATEGORY=DUR"><img src="Database/images/Durga/Durga1/pic.jpg" alt=""></a>
            <a href="#"><button>DURGA JEWELLERY</button></a>
        </div>
      </div>
    </div>


       <div class="celebs">
        <div class="column1">
           <section><a href="subpage.php?category=celebrity&CATEGORY=CEL"><img src="Database/images/Model/model1.jpg" alt=""></a>
            <h1>Indian Fashion Jewelry Trends In 2020 : Mesmerizing Collection of Designer Jewellery
            </h1>
        </section>

         <section> <a href="subpage.php?category=Bridal&CATEGORY=BRI">  <img src="Database/images/Bridal/Bridal13/pic.jpg" alt="">  </a>
            <h1>What Does Your Jewellery Say About You?</h1>
        
        </section>
        </div>
       
        <div class="column2">
            <img src="Database/images/Extras/newyear.jpg" alt="">
            <h1>What to Wear for New Year’s Eve? A Guide for Every Body Shape</h1>
            <h2>The countdown has begun for the year’s grandest, funniest, craziest celebrations. 
                If you have not started shopping for your big 31st Night bash, do…</h2>
      </div>
        <div class="column3">
            <section> <a href="subpage.php?category=Necklace&CATEGORY=NEC">  <img src="Database/images/Bridal/Bridal11/pic.jpg" alt=""> </a>
                <h1>Exclusive BRIDAL TRADITIONAL JEWELLERY.
                </h1>
            </section>

             <section><a href="subpage.php?category=celebrity&CATEGORY=CEL"> <img src="Database/images/Model/model8.jpg" alt=""> </a>
                <h1>Sara Ali Khan is our new Fashion Muse</h1>
            
            </section>
        </div>

        </div>
    <!--trendy is display none for now-->
        <div class="trendy">
            <div class="trendylaptop">
                <div class="screen">
                   <div class="innerscreen">

                   </div> 
                   <div class="camera">.</div>
                </div>
            <div class="bottom"></div>
                
            </div>

            <div class="trendytext">
                <h1>CATCH ALL THE TRENDS HERE..</h1>
           <p> Trendy imitation jewellery never fails to impress a woman around the world. The imitation jewelry is
             considered as stylish designer jewelry that is adorned by the woman from all walks of life. This is
              mainly because they are affordable and you can easily try out the different styles that can provide 
              the woman with a different look. Fashion accessories always form an integral part of a woman’s dressing.
               It helps to provide a final touch to make the look complete.</p>
          <p> Imitation jewellery is also known as ‘fashion jewellery’ or ‘costume jewelry’.
             Nowadays, many women prefer to go for imitation jewelry rather than the precious jewellery as it fits
              their budget and is also the versatile solutions as it can go well with any kind of outfits like starting
               from a stylish palazzo suit to a designer top, or a short black dress.
            </p> 
            
            </div>
        </div>
               
        <div class="feedback">
            <h1>Past Experiences!</h1>

            <div class="feedbackslider">
                <div class="slider1"></div>
                <div class="slider2"></div>
                <div class="slider3"></div>
    
                 </div>

           
          <div class="feedbackcomments">
            <div class="feedbackinput">
                <h2>Share your Experience with us.</h2>

                <input type="text" placeholder="Name" class="input1">
                <input type="number" min="1" max="5" maxlength="1" placeholder="Rating(out of 5)" class="input3">
                <input type="date" placeholder="Date" class="input4">
                           <br><br>
                <textarea name="" id="" cols="30" rows="10" placeholder="Experience" class="input2"></textarea>
                <br>
                <div class="btn">
                <input type="file" class="file" >
                <input type="submit" class="submit" onclick="submit_feedback()">
                </div>  
               <div class="icons">
                <i class="fa fa-thumbs-up" ></i>
                <i class="fa fa-share"></i>
                <i class="fa fa-comment-o" ></i>   
                </div> 
            </div>
            <div class="advertise2">
                    <img src="Database/images/Logo/palashlogo1.jpg" alt=".">

            </div>

            
         </div>


        </div>  
        <div class="wheelslider">
            <h1>Our Trend-Setters and Upcoming Trends</h1>
            <div class="carousel_slider">
               
                    <div class="wheelitems"><a href="#"><img src="./Database/images/Extras/news1.png" alt="" ></a></div>
                    <div class="wheelitems"><a href="#"><img src="./Database/images/Extras/news2.jpg" alt="" ></a></div>
                    <div class="wheelitems"><a href="#"><img src="./Database/images/Extras/news4.jpg" alt="" ></a></div>
                    <div class="wheelitems"><a href="#"><img src="./Database/images/Extras/news3.jpg" alt="" ></a></div>
                    <div class="wheelitems"><a href="#"><img src="./Database/images/Extras/news5.jpg" alt="" ></a></div>
                    <div class="wheelitems"><a href="#"><img src="./Database/images/Extras/news6.jpg" alt="" ></a></div>
                    <div class="wheelitems"><a href="#"><img src="./Database/images/Extras/news7.jpg" alt="" ></a></div>
                    <div class="wheelitems"><a href="#"><img src="./Database/images/Extras/news8.jpg" alt="" ></a></div>
                    <div class="wheelitems"><a href="#"><img src="./Database/images/Extras/news9.jpg" alt="" ></a></div>
                    <div class="wheelitems"><a href="#"><img src="./Database/images/Extras/news10.jpg" alt="" ></a></div>
                


            </div>
            <div class="text">
             <!--   <h2>Latest Trends By Rhydhm Creations</h2>-->
                <p>  Fashion accessories always form an integral part of a woman’s 
                     dressing<br><br>
                    <b> "Jewellery is an object of permanence, something that transcends the
                      boundaries of age and time and that can be passed on from one generation to another." </b>
                        <br>
                     At <span>RHYDHM CREATIONS</span>, we ensure that the client is walked through the whole process of this discovery and 
                     create a beautiful object of adornment that echoes their sentiments.
                </p>
                <p>New designs of <strong>BRACELETES,</strong> <strong>EXCLUSIVE ITALIC RINGS</strong> and 
                    <strong>WEDDING TIARAS</strong> arriving soon.
               </p>
                     
            </div>
        </div>
        <div class="subscribe">
            <h1>SUBSCRIBE</h1>
            <h2>and get <span>10% OFF</span> on your next purchase. </h2>
            <h3>Sign up to our newsletter to get be informed with the various jewellery trends across the globe.</h3>
            <input type="email" class="email" placeholder="Your E-mail ID"> <button id="submit" onclick="submit_subscribe()">submit</button>
            <input type="checkbox" class="checkbox"> <h4>I accept the Privacy Policy</h4>
            <h5><a href="#">Read the Privacy Policy here</a></h5>

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
   
</div>

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

  <!--wheel carousel-->
<script type="text/javascript" src="./Plugins/wheel_caurosel/js/jquery.waterwheelCarousel.min.js" ></script>
<script type="text/javascript">
  $(document).ready(function() {
    $(".carousel_slider").waterwheelCarousel({
      // (use quotes only for string values, and no trailing comma after last option)
      // option: value,
      // option: value
    });
  });
</script>

</body>
<!--NORMAL JAVASCRIPT-->
<script>
    function open_palash(){
        window.open("https://amazon.in")
    }
    function submit_subscribe(){
    
        alert('Thanks for Subscribing...');
    } 
      
    
    function submit_feedback(){
    
    alert('Your review will be updated shortly. Thanks for your reviews.');
    }  
    
    function sidebar(){
        //document.getElementById('sidebar').classList.toggle('sidebar');
     
        document.getElementById('bar1').classList.toggle('bar1');
        document.getElementById('bar2').classList.toggle('bar2');
        document.getElementById('bar3').classList.toggle('bar3');
        var sidebar = document.getElementById('leftside') ;
        var m =   sidebar.style.width;
    
     if(m =="0px")
        {  sidebar.style.width="300px";
     //console.log(m);
     
    }
    else if(m =="300px")
        {  sidebar.style.width="0px";
    // console.log(m);
     
    }
    
    
    else{    
        sidebar.style.width="300px";
      //  console.log(m);
     
    }
    
    }
    
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
             window.open("signuppage.php");
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

    window.open("file:///C:/Users/Admin/Desktop/web%20dev/housie.html");

}

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



// CATEGORY SLIDER

// tried to create my owm slider which is equal to slick slider plugin.

/*
var imgIndex = 0;
changeSlide(imgIndex);

function plusSlide(n){
    imgIndex += n;
    console.log("before:" +imgIndex);
if( imgIndex >= 0){
    changeSlide( imgIndex);
    document.getElementById("prev").style.visibility="";

}
else{
    document.getElementById("prev").style.visibility="hidden";
    imgIndex = 0;
}

}  

/*
function changeSlide(){

var imgSlide = document.getElementsByClassName("s_items");
console.log(imgSlide);

for( var i=0; i<imgSlide.length; i++){

    imgSlide[i].style.display="none";
}  
 */
/*
if(imgIndex < 0 ){
    
    imgIndex =(-1)*(imgSlide.length - 1);
    console.log("the -ve side:" + imgIndex);

imgSlide[imgIndex -1].style.display="block";
imgSlide[imgIndex].style.display="block";
imgSlide[imgIndex + 1].style.display="block";


}

*/ /*

function changeSlide(n){

var imgSlide = document.getElementsByClassName("s_items");
//console.log(imgSlide);

for( var i=0; i<imgSlide.length; i++){

imgSlide[i].style.display="none";
}


imgSlide[imgIndex].style.display="block";

if(imgIndex >= imgSlide.length - 1){

    if(imgIndex == imgSlide.length - 1){
        imgSlide[0].style.display="block";
        //imgIndex = 0;

        }

}

else{imgSlide[imgIndex + 1].style.display="block"; }


if(imgIndex >= imgSlide.length - 2){
    if(imgIndex == imgSlide.length - 2){
        imgSlide[0].style.display="block";
        console.log("in");

        }

   else{ 
    imgSlide[1].style.display="block";    
     imgIndex = -1;         console.log("inside");


}

}

else{imgSlide[imgIndex + 2].style.display="block";
}

console.log("after:" +imgIndex);




}  

*/


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


});
</script>

</html>