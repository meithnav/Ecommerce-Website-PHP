<?php
//echo "hello" ;  
$C_id = $_POST['Cid'];
$C_name = $_POST['C_name'];
$C_phone = $_POST['C_phone'];
$C_email = $_POST['C_email'];
$C_address = $_POST['C_address'];

include 'config.php';

$sql = "UPDATE  `signup details`
        SET Name='{$C_name}',PhoneNo='{$C_phone}', Email='{$C_email}', City='{$C_address}'
        WHERE Customer_Id='{$C_id}' ";
$result = mysqli_query($conn , $sql)  or die('Query Failed');

header('Location: http://localhost/Rhydhm Database/CustomerDatabase/RhydhmCustomerData.php');
mysqli_close($conn);

?>