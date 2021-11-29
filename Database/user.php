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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MN Backend</title>
    <link rel="stylesheet" href="post.css">
</head>
<body>
<div class="user">
<div class="username">
     <a href="logout.php">HELLO <?php echo $_SESSION['E_user'] ; ?></a>
</div>
<div class="group ">
     <a href="post.php">POST</a>
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
     <h1>User Records</h1>
   
   

<?php 

include 'config.php';

if($user_role == 0){
    //Admin
    $sql = "SELECT * FROM `user` ";
}else{
    //Employee
    $sql = "SELECT * FROM `user` 
    WHERE Employee_ID = '{$user_id}' ";

}


$result = mysqli_query($conn , $sql) or die("Query Failed");

if(mysqli_num_rows($result)> 0){

?>

<table cellspacing=0px >
    <tr>
    <th> EID</th>
    <th>Name</th>
    <th>Username</th>
    <th>Role</th>
    <th>Changes</th>
    </tr>
<?php
    while($row = mysqli_fetch_assoc($result)){


?>
    <tr>
        <td><?php echo $row['Employee_ID'] ?></td>
        <td class="name"><?php echo $row['fname'].' '.$row['lname'] ?></td>
        <td><?php echo $row['Username']  ?></td>
        <td class="email"><?php echo $row['user_role'] ?></td>
        <td><a href="updateUser.php?EID=<?php echo $row['Employee_ID'] ?>" class="edit">Edit</a>  
        <a href="deleteDataUser.php?EID=<?php echo $row['Employee_ID'] ?>" class="delete">Delete</a> </td>
    </tr>


<?php   } 
}  else{ echo '<h2 class="norecords">No Record Found!</h2>';  }

mysqli_close($conn);

 ?>
</table>

 </div>
</div>    
</body>
</html>