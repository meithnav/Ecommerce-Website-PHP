<?php  
session_start() ;
if(isset($_SESSION['Customer_ID'])){
    include 'config.php' ; 

$id = $_SESSION['Customer_ID'] ;

$index = $_GET['index'] ;

$sql = "DELETE FROM `address` WHERE Sr= '{$index}' " ;

if(mysqli_query($conn , $sql)){
    echo 1 ;
}else{
    echo -1 ;
}



}else{
    header('Location:'.$hostname.'myProfile.php');

}
?>