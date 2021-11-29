<?php  
session_start() ;
if(isset($_SESSION['Customer_ID'])){
    include 'config.php' ; 

$id = $_SESSION['Customer_ID'] ;

$oldpass =$_GET['oldpass'] ;
$newpass =$_GET['newpass'] ;


$sql = "UPDATE `signup details` SET `Password` = '{$newpass}'  WHERE Customer_Id = '{$id}' " ;
//$result = mysqli_query($conn , $sql) or die("fail");

if(mysqli_query($conn , $sql)){
    echo 1 ;
    //echo 'Password successfully updated.' ;
    //header('Location:'.$hostname.'myProfile.php');
}else{
 //echo 'Password unsuccessful. Failed.' ;
    echo -1 ;
}



}else{
    header('Location:'.$hostname.'myProfile.php');

}
?>