<?php 

if(!isset($_GET['CATEGORY'])){

    //redirect back to main-page

    header('Location:http://localhost/Rhydhm Database/main-page.php');
}

 //Checking if PageNO not present(i.e visited for the first time)
 if(isset($_GET['page'])){
    $pageNO = $_GET['page'];
  }else{$pageNO = 1;}
  
 /* 
 //checking for message from addtocart
  if(isset($_GET['cart'])){
     $error = $_GET['cart'] ;
     // echo $_GET['cart'] ;
     if($error == 1){
      echo '<script type="text/Javascript"> console.log("hi") ;
      alert("Product already added in the cart") ; </script> ' ; 
     }elseif($error == 0){
       echo '<script type="text/Javascript"> alert("Product successfully added to the cart") ; </script> ' ;
       }
  }
   */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <!--JQuery-->
<script type="text/javascript" src="./jQuery/jquery.js"></script>
<!--Font Awesome-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="stylesheet_grid.css">
  
    <!--Font used in header-->
<link href="https://fonts.googleapis.com/css2?family=Mukta:wght@500&display=swap" rel="stylesheet">
<script type="text/Javascript"></script>

 <title>MN/<?php $category_name = $_GET['category']; echo strtoupper($category_name);?>
    </title>

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
                    <a href="#"><i class="fa  fa-truck" ></i></a>
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

   // header('Location:'.$hostname.'subpage.php?category='.$_GET['$category'].'&CATEGORY='.$_GET['CATEGORY']) ;
    //Method 2 of re-directing
    $url = $hostname.'subpage.php?category='.$_GET['$category'].'&CATEGORY='.$_GET['CATEGORY'] ;
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

<div class="mainbody">
    <!--Sidebar-->
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

            <li><a href="#"><i class="fa fa-user"></i>Profile</a></li>
            <li><a href="wishlist.php"><i class="fa fa-heart"></i>Wishlist</a></li>
            <li><a href="myorder.php"><i class="fa fa-shopping-cart"></i>My Orders</a></li>
            <li><a href="#"><i class="fa fa-gift"></i>Promo Code</a></li>
            <li><a href="#"><i class="fa fa-university"></i>Payment</a></li>
            <li><a href="#"><i class="fa fa-question "></i>FAQs</a></li>
            <li><a href="#"><i class="fa fa-truck "></i>Shipping</a></li>

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
<!--Sidebar Closed. Subbody Start-->

        <div class="subbody">
        <div class="quickaccess">
            <div class="search">
            <form action="search.php" method="post">
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
        </div> <!--Close quickAccess  -->
  <!--Message Box-->
    <div class="cartmessage">Product already added</div>
         <div  class="grid">
         <div class="row">


     <!--PHP-->            
    <?php 
    include 'product_config.php' ;
     $category_code = $_GET['CATEGORY'];
    
    //No of products to display on each page
      $limit = 12 ; //setting limit to 12 products per page.
      $offset = ($pageNO - 1)*$limit ;

    $sql = "SELECT * FROM `image` WHERE Category_Code = '{$category_code}'
            LIMIT {$offset} , {$limit} ";

    $result = mysqli_query($conn , $sql) or die("Query Failed");    
    if(mysqli_num_rows($result) >0){
        while($row = mysqli_fetch_assoc($result)){ 
    ?>
             
             <div class="items">

               <a href="product_page.php?category=<?php echo $category_name ;?>&CATEGORY=<?php echo $category_code;?>&SKU=<?php echo $row['SKU_code'];?>">
               <img src="Database/images/<?php echo $category_name.'/'.$row['filename'].'/'.'pic.jpg'; ?>"></a>
               <div class="buy">
               <a class="buybtn" href="buynow.php?category=<?php echo $category_name ;?>&CATEGORY=<?php echo $category_code;?>&SKU=<?php echo $row['SKU_code'];?>" ><h2>BUY NOW</h2></a>

                  <div class="imgicons">

            <?php  //if not logged in then login will prompt out else order will be placed.
            if(isset($_SESSION['Customer_ID'] )){
                $wishlisthref =  "href='addtowishlist.php?category=".$category_name."&CATEGORY=".$category_code."&SKU=".$row['SKU_code']."&subpage=subpage.php&page=".$pageNO." '" ;         
                $open = '' ;
            }else{  //if not logged in.   
                $open = 'onclick="signin()"' ;
                 
            } 
            ?> 
                  <a name="addtocart" id="addtocart" data-sku="<?php echo $row['SKU_code']; ?>" data-category="<?php echo $category_name; ?>" data-type="<?php echo $category_code; ?>"  <?php echo $open; ?>>
                  <i class="fa fa-shopping-cart" ></i> </a>

                  <a name="wishlist" id="wishlist"  data-sku="<?php echo $row['SKU_code']; ?>" data-category="<?php echo $category_name; ?>" data-type="<?php echo $category_code; ?>"  <?php echo $open; ?>>
                  <i class="fa fa-heart" ></i> </a>
                 
                    
                 </div>

                 </div> <!--Buy class closes-->
             </div>

        <?php }}  ?>
         </div> 
    <!--Pagination-->  
    <div class="pageno">
   
         <?php     
         $total_record_sql = "SELECT * FROM `image` WHERE Category_Code = '{$category_code}' ";

        $total_record_result = mysqli_query($conn , $total_record_sql) or die(" total_records_Query Failed");   

                $Total_items = mysqli_num_rows($total_record_result);  
                $NoOfPages = ceil($Total_items /  $limit) ;
                if($NoOfPages > 0){
                    for( $i=1 ; $i <=$NoOfPages ; $i++){
                        ?>

                    <span><a href="subpage.php?category=<?php echo $category_name ; ?>&CATEGORY=<?php echo $category_code; ?>&page=<?php echo $i; ?>"><?php echo $i; ?>
                        </a></span>
                   
        <?php  } } ?>           
    </div>
    <!--End Pagination-->

    </div> <!--End Grid-->

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



<!--Normal Script-->
<script>

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
document.getElementsByClassName("home")[0].addEventListener( "mouseover" , function(){
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
</body>
</html>