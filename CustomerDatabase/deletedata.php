<?php 

$C_id = $_GET['id'];

include 'config.php';


$sql = "DELETE FROM `signup details`
        WHERE Customer_Id='{$C_id}' ";
        
$result = mysqli_query($conn , $sql)  or die('Query Failed');

header('Location: http://localhost/Rhydhm Database/CustomerDatabase/RhydhmCustomerData.php');
mysqli_close($conn);



?>