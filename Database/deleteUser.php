<?php 
include 'config.php';
session_start();

if(!isset($_SESSION['E_user'])){
    header('Location:'.$hostname.'Database/login.php');

}else{
    //Storing the sessions Data.
    
    $user_role = $_SESSION['E_role'] ;
    $user_id =  $_SESSION['E_Id'];
    $username = $_SESSION['E_user']  ;
    $E_name = $_SESSION['E_name'] ;    
    
    }
if( $user_role != 0){
     header('Location:'.$hostname.'Database/user.php');
    
 }
       


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
, initial-scale=1.0">
    <title>Delete Data</title>
    <!--Since same format thus sharing css-->
    <link rel="stylesheet" href="user.css">
    <link rel="stylesheet" href="post.css">

</head>
<body>
<div class="user">
<div class="username">
     <a href="logout.php">HELLO <?php echo $_SESSION['E_user'] ; ?></a>
</div>
<div class="group ">
     <a href="user.php">USER</a>
</div>
</div>


<div class="box">
<header> 
       
       <a href="user.php">Home</a>
       <?php  
       
       if($user_role == 0){
       
       ?>
       <a href="AddUser.php">Add</a> 
       <a href="editUser.php">Edit</a> 
       <a href="deleteUser.php">Delete</a>
       <?php }?>   
  </header>

<div class="datatable">
     <h1>Delete User Record</h1>
<form action="deleteDataUser" method='get'>
<div class="editbox">
<!--Here I used method get as we used variable $_GET is getting the variable. -->
    <div class="group">
    <label for="">Employee ID</label>
        <input type="text"  class="cId" name="EID" >
    </div>
       
    <input type="submit" class="update" name="delete" value="DELETE">
    </div>
</form>
</div>  


</body>
</html>