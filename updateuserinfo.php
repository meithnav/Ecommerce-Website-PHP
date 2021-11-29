<?php  
session_start() ;
if(isset($_SESSION['Customer_ID'])){
    include 'config.php' ; 

$id = $_SESSION['Customer_ID'] ;
$username =$_GET['euname'] ;
$name =$_GET['ename'] ;
$phone = $_GET['ephone'] ;
$city =$_GET['ecity'] ;
$bod = $_GET['edob'] ;

$sql = "UPDATE `signup details` SET Customer_Id= '{$id}',Name='{$name}',  PhoneNo='{$phone}' , BOD='{$bod}' ,
        username='{$username}' ,City='{$city}'
        WHERE Customer_Id= '{$id}' " ;
$result = mysqli_query($conn , $sql) or die("fail");

header('Location:'.$hostname.'myProfile.php');


}else{
    header('Location:'.$hostname.'myProfile.php');

}
?>