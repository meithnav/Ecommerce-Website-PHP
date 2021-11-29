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
 //Not admin go back to post.php   
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
     <h1> Add User</h1>


<form action="<?php echo $_SERVER['PHP_SELF'] ;?>" method='post' >
<div class="editbox">

<div class="group">

        <label for="">First Name</label>
        <input type="text" name="fname">
</div>
<div class="group">

        <label for="">Last Name</label>
        <input type="text" name="lname">
    </div>
<div class="group">
     <label for="">Employee ID</label>
     <input type="text" name="EID" >
 </div>

<!--Category options from database-->
<div class="group">
        <label for="">User Role</label>
      <select name="role">
      <option value=""  selected disabled >Select your Role</option>

<?php include 'config.php';
    
    $role_sql = " SELECT * FROM user_category " ;
    $role_result = mysqli_query($conn , $role_sql) OR die("Category Query Failed");

if(mysqli_num_rows($role_result) >0){
    while($row = mysqli_fetch_assoc($role_result)){
?>

          <option><?php echo $row['User_Status'] ?></option>
          <?php }}?>
    </select>
    </div>

    <div class="group">
        <label for="">Username</label>
        <input type="text" name="username"  >
    </div>
    <div class="group">
        <label for="">Password</label>
        <input type="password" name="password" >
    </div>
    <input type="submit" class="update" name="ADD" value="ADD">

   



<?php 

if(isset($_POST['ADD'])){
 $fname =$_POST['fname'] ;
$lname =$_POST['lname'] ;
$EID =$_POST['EID'] ;
$new_role =$_POST['role'] ;
$username =$_POST['username'] ;
$password =$_POST['password'] ;

$error = array();
//check if EID is not repeated.  
$check_sql = "SELECT EMPLOYEE_ID FROM user
                WHERE EMPLOYEE_ID = '{$EID}' " ;

$check_result = mysqli_query($conn , $check_sql ) or die("Check query failed");

if(mysqli_num_rows($check_result) > 0){ 
    $error[] = "<h2 class='norecords'> The Employee ID is taken .</h2>" ; 
}


if(empty($error) == true){
$user_sql = "INSERT INTO  user(`Employee_ID`, `fname`, `lname`, `Username`, `Password`, `user_role`) 
             VALUES ( '{$EID}' , '{$fname}' , '{$lname}' , '{$username}' , '{$password}' , '{$new_role}' )  "  ;

$user_result = mysqli_query($conn , $user_sql) or die("Add query failed");

header('Location:'.$hostname.'Database/user.php');


}else{  print_r($error[0]); 
    //die();
}

}

mysqli_close($conn);
?>
      </div>
   </form>
</div>  
</body>
</html>