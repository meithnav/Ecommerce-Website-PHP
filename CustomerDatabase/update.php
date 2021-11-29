<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update page</title>
    <link rel="stylesheet" href="update.css">
</head>
<body>
    
<div class="box">
<header> 
       
       <a href="RhydhmCustomerData.php">Home</a>
       <a href="AddData.php">Add</a> 
       <a href="edit.php">Edit</a> 
       <a href="delete.php">Delete</a>
</header>
   
   
<div class="datatable">
     <h1>Update Customer Records</h1>

<?php 
     include 'config.php';
     $C_Id = $_GET['id'];

     $sql = "SELECT * FROM `signup details` 
     WHERE Customer_Id = {$C_Id}" ;
    $result = mysqli_query($conn , $sql) or die("Query Failed");

if(mysqli_num_rows($result)> 0){
 while($row = mysqli_fetch_assoc($result)){
     
     
?>
    <div class="editbox">

    <form action="updatedata.php" method='post'>
        <input type="hidden" name="Cid" value="<?php echo $row['Customer_Id'] ?>">
    <div class="group">
        <label for="">Name</label>
        <input type="text" name="C_name" value="<?php echo $row['Name'] ?>" >
    </div>
    <div class="group">
        <label for="">Phone NO.</label>
        <input type="number" name="C_phone" value="<?php echo $row['PhoneNo'] ?>">
    </div>
    <div class="group">
        <label for="">Email</label>
        <input type="email" name="C_email" class="email" value="<?php echo $row['Email'] ?>">
    </div>
    <div class="group">
        <label for="">Address</label>
        <input type="text" name="C_address" value="<?php echo $row['Address'] ?>">
    </div>
        
    <input type="submit" class="update" name="update" value="UPDATE">
    </form>

 <?php }  }  ?>
</div>
</div>

</div>

</body>
</html>