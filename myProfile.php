
<?php ?>

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
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@600&display=swap" rel="stylesheet">
<!--Font Left-->
<link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@600&display=swap" rel="stylesheet">
<!--Font Norecords-->
<link href="https://fonts.googleapis.com/css2?family=PT+Sans:wght@700&display=swap" rel="stylesheet">
<!--Font orderstatus-->
<link href="https://fonts.googleapis.com/css2?family=Mukta:wght@700&display=swap" rel="stylesheet">
<!--Font Info-->
<link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">


    <title>MN/My Profile</title>
    <link rel="stylesheet" href="myorder.css">
    <link rel="stylesheet" href="myProfile.css">

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
                            $Cartnum = 0 ;

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
    
    date_default_timezone_set('Asia/Calcutta');
    $time = date('H:i:s:f') ;
    $date = date("Y/m/d");
    $login_entry = "INSERT INTO `logindetails`(`Log_ID`, `Log_Name`, `Log_Username`, `loginStatus` , `Log_Date`, `loginTime`) 
                    VALUES ( '{$_SESSION['Customer_ID']}' , '{$_SESSION['Name']}' , '{$_SESSION['UserName']}' , 'LoginIn' ,'{$date}' , '{$time}' ) " ;

    $login_result = mysqli_query( $login_conn, $login_entry ) or die("Logout failed");
                

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
            <a href="#"><i class="fa fa-phone" aria-hidden="true"></i></a>
          
        </div>
     </div><!--SIDEBAR closed-->



</div> <!--closes leftside-->

<div class="subbody">
    <div class="proleft">

<?php 

$pic = 'none.png' ;
// get all the data of user from order table .
if(isset($_SESSION['Customer_ID'] )){
    include 'loginConfig.php' ;
    include 'product_config.php' ;

   $add_userId = $_SESSION['Customer_ID'] ;

$check_sql = "SELECT * FROM `signup details` WHERE Customer_Id = '{$add_userId}' " ;
$check_result = mysqli_query( $login_conn , $check_sql) OR die("check query Failed") ; 
//this we will also pass in place order so al products are stored in loop.

  while($row = mysqli_fetch_assoc($check_result)){
$pic = $row['Picture'];
$name =$row['Name'] ;
$phone = $row['PhoneNo'] ;
$email = $row['Email'] ;
$city =$row['City'] ;
$bod = $row['BOD'] ;
$username = $row['username'] ;
$oldpass = $row['Password'] ;

?> 
<h1>My Profile</h1>

        <div class="info">
            <div class="items">
                <label for="">Name</label>
                <input type="text" name="uname" id="uname" value="<?php echo $row['Name'] ;?>" readonly >
            </div>
            <div class="items">
                <label for="">UserName</label>
                <input type="text" name="uuname" id="uuname" value="<?php echo $row['username'] ;?>" readonly >
            </div>
            <div class="items">
                <label for="">Email</label>
                <input type="email" class="uemail" name="uemail" id="uemail" value="<?php echo $row['Email'] ;?>" readonly disabled> 
            </div>
            <div class="items">
                <label for="">Phone No. </label>
                <input type="number" name="uphone" id="uphone" value="<?php echo $row['PhoneNo'] ;?>" readonly>
            </div>
            <div class="items">
                <label for="">City</label>
                <input type="text" name="ucity" id="ucity" value="<?php echo $row['City'] ;?>"  readonly>
            </div>
            <div class="items">
                <label for="">Date Of Birth</label>
                <input type="date" name="udob" id="udob" value="<?php echo $row['BOD'] ;?>" readonly >
            </div>
           

        </div><!--Closes info-->

        <div class="buttons">
            <a id="editinfo"  onclick="editprofile()" > Edit Info</a>
            <a id="pass"  onclick="changepass()"> Change Password</a>

        </div>

        <h2>Address</h2>

        <div class="address" id="putaddress">


        </div><!--close address-->
        <div class="buttons" >
            <a id="addAddress" onclick="changeaddress()">+ Add Address</a>
            </div>
    <?php  
    }
            
            }else{ echo "<h1 class='norecord' >Please <span onclick='signin()'> login </span> to see see your CART. Not a member yet?<a href='signuppage.php'>  Sign UP..</a></h1>" ;}  //close isset sessions => if-else 
     ?>


        </div> <!--close proLEFT-->


        <div class="proright">
            <div class="profilepic">
                <img src="./CustomerDatabase/ProfilePic/<?php echo $pic ; ?>" alt="" name="profilePic">

               <?php if(isset($_SESSION['Customer_ID'])){  ?>
                <form  id="profilepic" action="saveProfilePic.php"  enctype="multipart/form-data" method="POST" >
                <input type="file" name="image" id="profile" value="Choose your Picture" required>
                <button id="saveProfilePic"> &#10003; </button>
                </form>
                <?php } ?>
            </div>
                
            <div class="account">
                <div><a href="shopping-page.php"> <i class="fa fa-shopping-cart"></i></a> </div>
                <div><a href="wishlist.php"> <i class="fa fa-heart"></i> </a></div>
                <div><a href="trackingOrder.php"> <i class="fa fa-truck"></i> </a></div>

            </div>
            <div class="gift">
                <h1><i class="fa fa-gift" aria-hidden="true"></i>   Refer & Earn</h1>

               <div class="giftbox" > 
                   <div class="ribbon"><img src="./Database/images/Extras/ribbon.png" alt=""></div>

                <p> <span>Invite your Friends !!</span> 
               When your friends sign up using your <b>Referral Code</b>, They get <b>Rs.100 off</b> and you get
               <b>Rs.100 off</b>
               <br>
               <?php if(isset($_SESSION['Customer_ID'])){ ?>
                <m><?php echo $_SESSION['Customer_ID'] ;  ?></m>
                  <a href="#"><i class="fa fa-bullhorn" aria-hidden="true"></i>  Send Invite</a> </p>

                  <?php } ?>

                </div> 

            </div>



            <div class="links">
                <div class="logo instagram"><i class="fa fa-instagram" aria-hidden="true"></i></div>
                <div class="logo twitter"><i class="fa fa-twitter" aria-hidden="true"></i></div>
                <div class="logo google-plus"><i class="fa fa-google-plus" aria-hidden="true"></i></div>
                <div class="logo pinterest "><i class="fa fa-pinterest-p" aria-hidden="true"></i></div>
                <div class="logo envelope"> <i class="fa fa-envelope" aria-hidden="true"></i></div>      

            </div>

        </div>
 
    </div> <!--closes SUBBODY-->

   <!--Edit profile Box-->
<div class="editprofile" id="editprofile">
    <form action="updateuserinfo.php" method="GET">
<div class="info">
            <div class="items">

            <div class="close " onclick="closeprofile()"> X </div>

                <label for="">Name</label>
                <input type="text" name="ename" id="ename" value="<?php echo $name ;?>"  >
            </div>
            <div class="items">
            <label for="">UserName</label>
                <input type="text" name="euname" id="euname" value="<?php echo $username ;?>"  >
            </div>

            <div class="items">
                <label for="">Email</label>
                <input type="email" class="uemail" name="eemail" id="eemail" value="<?php echo $email ;?>" readonly disabled> 
            </div>
            <div class="items">
                <label for="">Phone No. </label>
                <input type="number" name="ephone" id="ephone" value="<?php echo $phone ;?>" >
            </div>
            <div class="items">
                <label for="">City</label>
                <input type="text" name="ecity" id="ecity" value="<?php echo $city ;?>"  >
            </div>
            <div class="items">
                <label for="">Date Of Birth</label>
                <input type="date" name="edob" id="edob" value="<?php echo $bod ;?>"  >
            </div>

            <div class="buttons" id="eupdate"><button> UPDATE</button></div>

    </div>
               </div>
</form>
<!--Change Password Box-->
<div class="changepass" id="changepass" >
<div class="close" onclick="closeprofile()"> X </div>
<form >
<div class="items">
<label for="">Old Password </label>
 <input type="text" name="oldpass" id="oldpass"  required >

</div>

<div class="items">
<label for="">New Password </label>
 <input type="password" name="newpass" id="newpassword"  required >
</div>
<div class="items">
<label for="">Confirm Password </label>
 <input type="password" name="upass"  id="newpass1" required >

</div>

<div class="buttons" id="passsubmit" name="pass"><button >SUBMIT</button></div>
 </form>
</div>

<!--ADD address -->
<div class="changepass changeaddress" id="changeaddress" >
<div class="close" onclick="closeprofile()"> X </div>
<form >
<div class="items">
<label for="">Blg </label>
 <input type="text" name="bldgnum" id="bldgnum" placeholder="No." required >
 <input type="text" name="bldgname" id="bldgname" placeholder="Bldg Name" required >

</div>

<div class="items">
<label for="">Lane</label>
 <input type="text" name="lane" id="lane"  placeholder="Lane" required >
</div>
<div class="items">
<label for="">City</label>
 <input type="text" name="city"  id="city"placeholder="City" required >

</div>
<div class="items">
<label for="">Town</label>
 <input type="text" name="town"  id="town" placeholder="Town" required >

</div>
<div class="items">
<label for="">Pincode</label>
 <input type="number" min=4000000  name="pincode" placeholder="Pincode" id="pincode" required >

</div>


<div class="buttons" id="addresssubmit" name="pass"><button > + ADD</button></div>
 </form>
</div>

<!--EDIT address -->
<div class="changepass changeaddress addressbox" id="editaddress" >

</div>

<!--Message Box-->
<div class="updatemessage">Password updated</div>

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
                 <input type="file" class="file" class="file">
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

//console.log(sub_menu);
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

var p_quantity =1
document.getElementById('qnty').value = p_quantity ;

//console.log(typeof(p_quantity)) ;
function quantiy(n){
    
    p_quantity += n ;
    //console.log(p_quantity) ;

    if(p_quantity <1){  p_quantity = 1 ;} 
    if(p_quantity > 10){
        alert("Sorry you can't order more than 10 products of same kind") ; 
        p_quantity = 10 ;
    }
   // console.log(p_quantity) ;

    document.getElementById("qnty").value=p_quantity ;
}

function emptycart(){
    alert("Your cart is empty") ;
}

</script>

<!--This Page  JAVASCRIPT-->
<script> 

function editprofile(){

    document.getElementById("editprofile").style.display="block" ;
}

function closeprofile(){
document.getElementById("changepass").style.display="none" ;
document.getElementById("editprofile").style.display="none" ;
document.getElementById("changeaddress").style.display="none" ;

}


function changepass(){

document.getElementById("changepass").style.display="block" ;
}

function changeaddress(){

    document.getElementById("changeaddress").style.display="block" ;
}


</script>

<!--AJAX-->
<script>

$(document).ready(function(){

//close address box
$(document).on("click" , ".closeaddrerss" , function(){

    $("#editaddress").fadeOut();
});

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

   //Setting Cart Num
   function LoadAddress(){
        $.ajax({
        url: 'loadAddress.php' ,
          success: function(data){
              $("#putaddress").html(data) ;
          }
        }) ;
    }
    LoadAddress() ;

    $("#passsubmit").on("click" , function(e){
         //   e.preventDefault() ;
        var Useroldpass = <?php echo $oldpass; ?> ;
        var oldpass = $("#oldpass").val() ;
        var newpass = $("#newpassword").val();
        var newpass1 = $("#newpass1").val();
        //alert(Useroldpass) ;

        if(oldpass =='' || newpass=='' || newpass1 =='' ){
            alert("Please enter all the fields !! ") ;
        }else{ 

           if(oldpass == Useroldpass){
            if(newpass == newpass1){
                $.ajax({

                    url: 'updatepassword.php' ,
                    type: "GET" ,
                    data: {oldpass: oldpass , newpass : newpass} ,
                    success: function(data){
                    if(data == 1){
                    $(".updatemessage").html("Password changed.") ;
                    $(".updatemessage").fadeIn();
                    $("#changepass").fadeOut();
                    
                setTimeout(() => {
                    $(".updatemessage").fadeOut("slow") ;
                }, 2000);

             }else if(data == -1){
                    $(".updatemessage").html("Password change unsuccessful! ") ;
                    $(".updatemessage").fadeIn();
                setTimeout(() => {
                    $(".updatemessage").fadeOut("slow") ;
                }, 2000);
                
            }else{
                alert("wrong") ;
            }

                     
                    }//success closes
                });//closes ajax


           }else{ alert("New Password doesnot match to confirm password!") ;}
        
        }else{ alert("Your entered old Password doesnot match! Please enter a correct password.") ;   }
        
        }
 
    });//closes sumbit button


    $("#addresssubmit").on("click" , function(e){
         //   e.preventDefault() ;
        
        var bldgnum = $("#bldgnum").val();
        var bldgname = $("#bldgname").val();
        var lane = $("#lane").val();
        var city = $("#city").val();
        var pincode = $("#pincode").val();
        var town = $("#town").val();


        //alert(Useroldpass) ;

        if(bldgname =='' || lane=='' || pincode =='' ){
            alert("Please enter all the fields !! ") ;
        }else{ 

                $.ajax({

                    url: 'addaddress.php' ,
                    type: "GET" ,
                    data: { bldgno: bldgnum , bldgname : bldgname , lane:lane , city:city , pincode:pincode , town:town } ,
                    success: function(data){
                    if(data == 1){
                    $(".updatemessage").html("Address added successfully.") ;
                    $(".updatemessage").fadeIn();
                    $("#changepass").fadeOut();
                    
                setTimeout(() => {
                    $(".updatemessage").fadeOut("slow") ;
                }, 2000);

             }else if(data == -1){
                    $(".updatemessage").html("Address addition unsuccessful! ") ;
                    $(".updatemessage").fadeIn();
                setTimeout(() => {
                    $(".updatemessage").fadeOut("slow") ;
                }, 2000);
                
            }else{
                alert("warning") ;
             }

                     
         }//success closes
                });//closes ajax
        
        
        }

    });

$(document).on("click" , ".editaddress" , function(){

if(confirm("Do you want to edit the address?")){
   var index = $(this).data("index") ;
   // alert(index) ;

    $.ajax({
        url:'loadEditAddress.php' ,
        type: "GET" ,
        data :{sr : index} ,
        success: function(data){
            if(data == -1){
                alert("Query Failed") ;
            }else{
                $("#editaddress").html(data) ;
                $("#editaddress").fadeIn() ;


            }

        }

    }) ;

    
}
});

//EDIT address box save
$(document).on("click" , "#eaddresssubmit" , function(){
        var sr = $("#esr").val();
        var bldgno = $("#ebldgnum").val() ;
        var bldgname = $("#ebldgname").val();
        var lane = $("#elane").val();
        var city = $("#ecity").val();
        var pincode = $("#epincode").val();
        var town = $("#etown").val();
        //alert(sr) ;

        if(bldgname =='' || lane=='' || pincode =='' ){
            alert("Please enter all the fields !! ") ;
        }else{ 

                $.ajax({

                    url: 'editaddress.php' ,
                    type: "GET" ,
                    data: { sr:sr ,bldgno: bldgno , bldgname : bldgname , lane:lane , city:city , pincode:pincode , town:town } ,
                    success: function(data){
                    if(data == 1){
                    $(".updatemessage").html("Address editted successfully.") ;
                    $(".updatemessage").fadeIn();
                    $("#changepass").fadeOut();
                    
                setTimeout(() => {
                    $(".updatemessage").fadeOut("slow") ;
                }, 2000);

             }else if(data == -1){
                    $(".updatemessage").html("Address edit unsuccessful! ") ;
                    $(".updatemessage").fadeIn();
                setTimeout(() => {
                    $(".updatemessage").fadeOut("slow") ;
                }, 2000);
                
            }else{
                alert("warning") ;
             }

                     
         }//success closes
                });//closes ajax
        
        
        }

    });
$(document).on("click" , ".removeadd" , function(){

    if(confirm("Do you want to delete the address?")){
       var index= $(this).data("index") ;
        //alert(index) ;
     
      $.ajax({

            url: 'removeaddress.php' ,
            type: "GET" ,
            data: {index:index } ,
            success: function(data){
            if(data == 1){
            $(".updatemessage").html("Address deleted successfully.") ;
            $(".updatemessage").fadeIn();
            $("#changepass").fadeOut();
            LoadAddress() ;

            setTimeout(() => {
            $(".updatemessage").fadeOut("slow") ;
            }, 2000);

            }else if(data == -1){
            $(".updatemessage").html("Address deletion  unsuccessful! ") ;
            $(".updatemessage").fadeIn();
            setTimeout(() => {
            $(".updatemessage").fadeOut("slow") ;
            }, 2000);
            LoadAddress() ;


            }else{
            alert("warning") ;
            }

            
            }//success closes
            });//closes ajax 

                }

            });


                
            }); 


</script>

</body>
</html>