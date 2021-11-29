<?php  

include 'loginConfig.php'  ;
session_start() ; 

date_default_timezone_set('Asia/Calcutta');
$time = date('H:i:s') ;
$date = date("Y/m/d");
$Customer_ID = $_SESSION['Customer_ID'] ;
$username = $_SESSION['UserName'] ;
$name = $_SESSION['Name'] ;

$sql = "INSERT INTO `logindetails`(`Log_ID`, `Log_Name`, `Log_Username`, `loginStatus` , `Log_Date`, `loginTime`) 
        VALUES ( '{$Customer_ID}' , '{$name}' , '{$username}' , 'Logout','{$date}' , '{$time}' ) " ;

$result = mysqli_query( $login_conn, $sql) or die("Logout failed");

session_unset();
session_destroy();

header('Location:'.$hostname.'main-page.php') ;



?>