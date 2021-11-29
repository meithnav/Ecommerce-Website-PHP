<?php  
session_start();
if(isset($_SESSION['Customer_ID'])){
    include 'config.php' ; 

$id = $_SESSION['Customer_ID'] ;
$sr = $_GET['sr'] ;
$bldgnum =  $_GET['bldgno'];
$bldgname = $_GET['bldgname'];
$lane = $_GET['lane'];
$city = $_GET['city'];
$town = $_GET['town'];
$pincode = $_GET['pincode'];

include 'config.php';

$sql = "UPDATE `address` SET `FlatNo`='{$bldgnum}',`Bldg`='{$bldgname}', `Lane`='{$lane}',`City`='{$city}',
        `Town`='{$town}',`PinCode`='{$pincode}'  WHERE CustomerID='{$id}' AND Sr='{$sr}'" ;
        
if(mysqli_query($conn , $sql)){
    echo 1 ;
}else{
    echo -1 ;
}


mysqli_close($conn);

}else{
    header('Location:'.$hostname.'myProfile.php');

}
?>