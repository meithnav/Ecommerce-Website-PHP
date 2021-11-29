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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <!--Since same css thus using it-->
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
     <h1> Edit User Data</h1>

<form action="<?php echo $_SERVER['PHP_SELF'] ;?>" method='post' >
<div class="editbox">
<!--Here I used method get as we used variable $_GET is getting the variable. -->
    <div class="group">
    <label for="">Employee ID</label>
        <input type="text"  class="cId" name="EID" >
    </div>
       
    <input type="submit" class="update" name="update" value="UPDATE">
    </div>
</form>

<!--2nd Form over here-->
<?php 
if(isset($_POST['update'])){
  //ID of the user to edit
  $EID = $_POST['EID'] ; 

 //Bring all his info
 
 $user_sql1  = "SELECT * FROM user WHERE Employee_ID = '{$EID}'  " ;
 $user_result1 = mysqli_query($conn , $user_sql1) or die("Collecting User Data Failed"); 

 if(mysqli_num_rows($user_result1) > 0){
    while($row = mysqli_fetch_assoc($user_result1)){

?>

<form action="saveUpdateUser.php" method='post' >
<div class="editbox">

<div class="group">

        <label for="">First Name</label>
        <input type="text" name="fname" value="<?php echo $row['fname']  ;?>" >
</div>
<div class="group">

        <label for="">Last Name</label>
        <input type="text" name="lname"  value="<?php echo $row['lname'] ; ?>" >
    </div>
<div class="group">
     <label for="">Employee ID</label>
     <input type="text" name="EID1"  value="<?php echo $row['Employee_ID'] ; ?>" >
 </div>

<!--Category options from database-->
<div class="group">
<?php 

if($user_role == 0){
?>
        <label for="">User Role</label>
      <select name="role">
      <option  disabled >Select your Role</option>

<?php
    $role_sql = " SELECT * FROM user_category " ;
    $role_result = mysqli_query($conn , $role_sql) OR die("Category Query Failed");

if(mysqli_num_rows($role_result) >0){
    $active = "" ;
    while($row2 = mysqli_fetch_assoc($role_result)){
        if($row['user_role'] === $row2['Role']){ $active = "selected" ;}
            else{$active = "" ;}
?>

          <option  value="<?php echo $row2['Role'] ; ?>"  <?php echo $active ;  ?> > <?php echo $row2['User_Status'] ; ?></option>
          <?php }} }?>
    </select>
    </div>

    <div class="group">
        <label for="">Username</label>
        <input type="text" name="username" value="<?php echo $row['Username'] ; ?>"  >
    </div>
    <div class="group">
        <label for="">Password</label>
        <input type="password" name="password" value="<?php echo $row['Password'] ; ?>" >
    </div>

    <input type="submit" class="update" name="UPDATE" value="UPDATE">

    <?php }
        }  ?>

      </div>
   </form>
    <?php  }  ?>
</div>  <!--Box closes-->
</body>
</html>