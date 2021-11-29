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
     <h1>Product Records</h1>
   
   

<?php 

include 'config.php';

if($user_role == 0){
$sql = "SELECT * FROM product p
        JOIN image i
        ON p.Product_SKU= i.SKU_code 
        JOIN user u
        ON p.E_ID= u.Employee_ID";

}elseif($user_role == 1){
$sql = "SELECT * FROM product p
        JOIN image i
        ON p.Product_SKU= i.SKU_code 
        JOIN user u
        ON p.E_ID= u.Employee_ID
        WHERE E_ID = '{$user_id}'  ";

}   
$result = mysqli_query($conn , $sql) or die("Query Failed");

if(mysqli_num_rows($result)> 0){

?>

<table cellspacing=0px >
    <tr>
    <th>SKU</th>
    <th>File Name</th>
    <th>EID</th>
    <th>E Name</th>
    <th>Role</th>
    <th>Changes</th>
    </tr>
<?php
    while($row = mysqli_fetch_assoc($result)){


?>
    <tr>
        <td><?php echo $row['Product_SKU'] ?></td>
        <td class="name"><?php echo $row['filename'] ?></td>
        <td><?php echo $row['E_ID']  ?></td>
        <td class="name"><?php echo $row['fname'].' '.$row['lname'] ?></td>
        <td ><?php echo $row['user_role'] ?></td>
        <td><a href="edit.php?SKU=<?php echo $row['Product_SKU'] ?>" class="edit">Edit</a>  
        <a href="deletedata.php?sku=<?php echo $row['Product_SKU'] ?>" class="delete">Delete</a> </td>
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