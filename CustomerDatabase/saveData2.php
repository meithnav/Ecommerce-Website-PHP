<?php  
//echo 'hello';

$c_name = $_POST['c_name'];
$c_phone = $_POST['c_phone'];
$c_address = $_POST['c_address'];
$c_email = $_POST['c_email'];

include 'config.php';
$sql = "INSERT INTO `signup details`(`Name`, `PhoneNo`, `Email`, `City`, `Password`)
 VALUES ('{$c_name}' ,'{$c_phone}','{$c_email}','{$c_address}','{$c_password}')";
        
$result = mysqli_query($conn , $sql) or die("Query Failed");

header('Location: http://localhost/Rhydhm Database/CustomerDatabase/RhydhmCustomerData.php');

mysqli_close($conn);

?>