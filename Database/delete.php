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
       
       <a href="post.php">Home</a>
       <a href="AddData.php">Add</a> 
       <a href="edit.php">Edit</a> 
       <a href="delete.php">Delete</a>
</header>
   


<div class="datatable">
     <h1>Delete Product Record</h1>
<form action="deletedata.php" method='get'>
<div class="editbox">
<!--Here I used method get as we used variable $_GET is getting the variable. -->
    <div class="group">
    <label for="">SKU</label>
        <input type="text"  class="cId" name="sku" >
    </div>
       
    <input type="submit" class="update" name="delete" value="DELETE">
    </div>
</form>
</div>  


</body>
</html>