<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit page</title>
    <link rel="stylesheet" href="edit.css">
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

<div class="CusId">
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method='post'>
        <label for="">Customer Id</label>
        <input type="number"  class="cId" name="Cid" min=0>
    <input type="submit" class="submit" name="Save" value="SHOW">
    </form>
</div>

<?php 
if(isset($_POST['Save'])){

include 'config.php';
$C_Id = $_POST['Cid'];

$sql_Id_check = "SELECT Customer_Id FROM `signup details` " ;
$result_Id_check = mysqli_query($conn ,$sql_Id_check) or die("Id Query Failed");

//counter to tellwhether Id is present or not
while($rowId =mysqli_fetch_assoc($result_Id_check)){
    if($C_Id == $rowId['Customer_Id']){ $Idmatch = true; break; }
    else{ $Idmatch = false;}

}

if($Idmatch){

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


</div>
<?php  } 
} 
}else{ echo '<h1> NO RECORD FOUND </h1>' ; }


}
include 'config.php';
mysqli_close($conn);

?>
</div>

</div>

</body>
</html>