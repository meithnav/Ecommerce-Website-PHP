<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
<!--CSS-->
<link href="myheader.css" rel="stylesheet">


<script type="text/Javascript"></script>

</head>
<body>
<header>
    <div class="innerheader">
        <div class="logo"><a href="main-page.html"><span>MN</span></a></div>
        <div class="sidebartbtn" onclick="sidebar()" >
            <div class="p">
            <p id="bar1"></p>
            <p id="bar2"></p>
            <p id="bar3">  </p>
        </div>
             </div>
        <nav>
         <div class="menu">
            <!--AT HOME PAGE we donot show HOME option*/

            <div class="home"><a href="main-page.html" >Home</a></div>   -->
            <div id="Catalogue"><a href="#">Catalogue</a></div>
            <div id="men"><a href="#" >men</a></div> 
            <!--DEAL OF THE DAY animation-->
            <div class="deal" id="deal">
                <a href="#">
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
            </a></div>
            <div id="wedding"> <a href="#" >Wedding Collection</a></div>
            <div class="store"><a href="store_locator.html">Store Locator</a></div>
            <div class="login" onclick="signin()"> <i class="fa fa-user-circle " ></i><a href="#" class="logintxt"> Login
            </a></div>
            <div class="icons">
                <a href="store_locator.html"><i class="fa fa-location-arrow" aria-hidden="true"></i></a>
                <a href="#"><i class="fa  fa-truck" ></i></a>
                <a href="#"><i class="fa fa-shopping-cart " ></i></a>
                <a href="#"><i class="fa fa-phone" aria-hidden="true"></i></a>
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
        <img src="bridal13.jpg" alt="">
    </div>
    
</div>

<!-- 1) MEN -->
<div class="hover_menu sub_men ">
        <div class="sub_menu1">
            <h1>Bracelets</h1>
           <a href="#"> <img src="men_braclet.jpg" style="margin-left: 10px;"></a>
        </div>
        <div class="sub_menu1">
          
         <h1>Chain and Pendant</h1>
        <a href="#"> <img src="men_pendant.jpg"  alt=""></a>

        </div>
        <div class="sub_menu1">
        <h1>Rings</h1> 
       <a href="#"> <img src="men_ring.jpg"  alt=""></a>
        </div>
        <div class="sub_menu1">
        <h1>Western Bracelets</h1>
       <a href="#"><img src="men_wedding.jpg"  alt=""></a> 
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
        <img src="offer1.jpg"  alt="">
    </div>
    
</div>


<!-- Now here we are creating sign-up login pop up.-->
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
    <form>
    <input type="text" placeholder="Username" id="username">
    <input type="password" placeholder="Password" id="Password"><i class="fa fa-eye" aria-hidden="true" id="eye" onclick="showpass()"></i>
   <div class="remember"> <input type="checkbox" name="" id="remember" onclick="rememberalert()"> <p>Remember me</p></div>
    <button><span>Sign In</span></button>
    <p class="forgot"><a href="#">Forgot Password? </a></p>
</form>
</div>

<div class="signup">
    <h2>Hello Friend!</h2>
    <h3>Not a member yet?<span>Sign Up and Join our community now.</span></h3>

    <button onclick="loginpage()"><span>Sign Up</span></button>
</div>

</div>

</body>
<!--NORMAL JAVASCRIPT-->
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



</script>
</html>

