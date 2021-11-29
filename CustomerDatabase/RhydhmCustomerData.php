<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rhydhm Customer Data</title>
    <link rel="stylesheet" href="RhydhmCustomerData.css">
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
     <h1>Customer Records</h1>
   
    <table cellspacing=0px >
    <tr>
    <th> Id</th>
    <th>Name</th>
    <th>Phone</th>
    <th>Email</th>
    <th>Address</th>
    <th>Changes</th>
    </tr>

<?php 

include 'config.php';

$sql = "SELECT * FROM `signup details` ";
$result = mysqli_query($conn , $sql) or die("Query Failed");

if(mysqli_num_rows($result)> 0){
    while($row = mysqli_fetch_assoc($result)){


?>
    <tr>
        <td><?php echo $row['Customer_Id'] ?></td>
        <td class="name"><?php echo $row['Name'] ?></td>
        <td><?php echo $row['PhoneNo'] ?></td>
        <td class="email"><?php echo $row['Email'] ?></td>
        <td><?php echo $row['Address'] ?></td>
        <td><a href="update.php?id=<?php echo $row['Customer_Id'] ?>" class="edit">Edit</a>  
        <a href="deletedata.php?id=<?php echo $row['Customer_Id'] ?>" class="delete">Delete</a> </td>
    </tr>


<?php   } 
}  else{ echo '<h1>No Record Found!';  }

mysqli_close($conn);

 ?>
</table>

 </div>
</div>   



</body>
</html>