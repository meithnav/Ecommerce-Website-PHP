<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Balsamiq+Sans:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   
    <link rel="stylesheet" href = "signup.css">
    <script type="text/Javascript"></script>
    <!--JQuery-->
<script type="text/javascript" src="./jQuery/jquery.js"></script>
<!--Font Awesome-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="https://fonts.googleapis.com/css2?family=Teko:wght@300&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@500&family=Karla:ital,wght@1,700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Signika:wght@600&display=swap" rel="stylesheet">
   
    <title>mn_sign_up</title>
</head>
<body>
 
<header>
     <div class="logo">
        <h1><a href="main-page.php" class="brandlogo">mn</a></h1>  
    </div>
    <nav>
            <div><a href="main-page.php" >Home</a></div>
            <div><a href="#">Contact Us</a></div>
            <div><a href="#">Portfolio</a></div>
            <div ><a href="storelocator.php">Store Locator</a></div>
            <div class="login" ><a href="#">About</a></div>


    </nav>
   
</header>
    
<div class="mainbody">

<div class="bottom">
        <div class="left">
            <div class="imgtext" id="imgtext">
                <h3>Rhydhm Creations</h3>
                <p>The most trusted Jewellery Brand. 200 outlets across India. Exclusive Jewellery designs.</p>
                <p>Shop Now and get <span>Rs.2000 off</span> on your first order. <strong>PROMOCODE : newRhydhm</strong></p>
                 <p><a href="main-page.php">To Explore more...</a></p> 
             </div>
        <img src="Database/images/Bridal//Bridal13/pic.jpg" onmouseover="imgtexthover()" onmouseout="imgtextout()" alt="">
        
     </div>
        
    <div class="right">
           
            <div class="top">
                <h1>Create new Account</h1>
                <p>Come and join Rhydhm Creations! Set up your account here. Already have one? <a onclick ="signin()">Sign In here</a></p>
                </div>
           
            <form action="saveCustomerdata.php" method="post" >
                   <h1>Register With E-Mail</h1>
            <div class="row">
                   <label>Name</label>
                   <input type="text" name='c_name'>
                   <label>Mobile Number</label>
                   <input type="number" size="10" class="number" id="number" maxlength="10"  name='c_phone' > 
   
            </div> 
              
           
           <div class="row pass">
             <div class="rleft">
             <label for="">Email</label> <br>
               <input type="email"  name='c_email'><br>
               <label for="">Username</label> <br>
               <input type="text"  name='c_username'><br>
             <label for="">Password</label> <br>
               <input type="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
               title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or
                more characters"  name='c_password'>
               <i class="fa fa-eye" aria-hidden="true" id="eye" onclick="showpass1()"></i>
               <br>
             <label for="">Re-Enter Password</label> <br>
               <input type="password" id="re-password"  pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" >
               <i class="fa fa-eye" aria-hidden="true" id="eye" onclick="showpass2()"></i>

             </div>
             
             <div class="rleft">
             <label for="" class="labeladdress">Address</label>
           <textarea class="address"  name='c_address'> </textarea>
             </div>  
          </div>

           
           <div class="row">
               <input type="checkbox" required> <p>By clicking this you agree to our <a href="#">Terms & Conditions</a></p>
           </div> <br>
           <button>Sign Up</button>
          <!-- <input type="reset">-->

               </form>

            <div id="message" class="message">
                <h3>Password must contain the following:</h3>
                <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
                <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
                <p id="digit" class="invalid">A <b>number</b></p>
                <p id="length" class="invalid">Minimum <b>8 characters</b></p>
              </div>
            
            <div class="sociallinks">
                <h1> <span>OR</span>  Connect Us With :</h1>
                <div class="social">
                    <a href="#"><i class="fa fa-facebook"></i></a>
                    <a href="#"><i class="fa fa-instagram"></i></a>
                    <a href="#"><i class="fa fa-twitter"></i></a>
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
   
</div>
</body>


<!--This page Javascript-->
<script>
var pwd = document.getElementById("password")
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("digit");
var length = document.getElementById("length");
var messageBox = document.getElementById("message");
/*var password = pwd.value;
Note: if we use this password in the if condition then it does not process properly and thus doesnot show proper effect.
like all of getting the valid class together. So alway use .value seperately and not at the start.
Second Reason is that it stores value of the input at the start and is not called or updated with every keyup. So try to 
put this in the keyup function for any change.


*/

// When the user clicks on the password field, show the message box
pwd.onfocus = function() {
    messageBox.style.display = "block";
}

// When the user clicks outside of the password field, hide the message box
pwd.onblur = function() {
    messageBox.style.display = "none";
}

pwd.onkeyup = function() {
  // console.log("password:" + password);

  //Lowercase

  var lowercase = /[a-z]/g;
  if(pwd.value.match(lowercase)){
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
//UpperCase
var upperCaseLetters = /[A-Z]/g;
  if(pwd.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }
//Number
  var digit = /[0-9]/g;
  if(pwd.value.match(digit)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }


  if(pwd.value.trim().length >= 8){
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
  

}



function showpass1() {
   var pass= document.getElementById('password');
   var icon=  document.getElementById('eye');
    if(pass.type == "password"){
        pass.type="text";
       icon.classList.replace("fa-eye" , "fa-eye-slash");
    }
    else{pass.type = "password"
    icon.classList.replace("fa-eye-slash" , "fa-eye");

    
    }
}
function showpass2() {
   var pass= document.getElementById('re-password');
   var icon=  document.getElementById('eye');
    if(pass.type == "password"){
        pass.type="text";
       icon.classList.replace("fa-eye" , "fa-eye-slash");
    }
    else{pass.type = "password"
    icon.classList.replace("fa-eye-slash" , "fa-eye");

    
    }
}

var phone= document.getElementById('number');
/*
function phoneNumber(){
    var numberexp = /^[7-9][0-9]{9}/;
    console.log(phone.value.match(numberexp));
    if(phone.value.match(numberexp)){
      
       // return true
      // console.log('in true');

    }
    else{
      phone.style.color="red";
       //return false;
      // console.log('in false');

    }
   
}*/
//phone.addEventListener("onkeyup" , phoneNumber());

function validate(){
  /*  var numreply =  phoneNumber();

  //  var reply = numreply || passmatch ;
console.log(numreply);
    return numreply;
*/
}



/*  THIS was Alternative for IMGTEXT display on hover
function imgtexthover(){
    var a = document.getElementById('imgtext');
    a.style.display="block";
    a.style.transition="all 2s linear";


}

function imgtextout(){
    var a = document.getElementById('imgtext');
    a.style.display="none";
   a.style.transition="all 2s linear";

}

*/

</script>

</html>