<?php  
//echo 'hello';
include 'loginConfig.php';

$c_name = $_POST['c_name'];
$c_phone = $_POST['c_phone'];
$c_password = $_POST['c_password'];
$c_address = $_POST['c_address'];
$c_email = $_POST['c_email'];
$c_username = $_POST['c_username'];



//check if customer ID does not match
$check_sql = "SELECT `Customer_Id` FROM `signup details` " ;
$check_result = mysqli_query($login_conn , $check_sql) or die("Query Failed");

//Make Customer ID
$cusID = 'MN'.substr($c_name , 0 , 4).rand(0,1000) ;
while($row = mysqli_fetch_assoc($check_result)){
  //  echo $row['Customer_Id'].'<br >';
    if($cusID == $row['Customer_Id']){

        $cusID = 'MN'.substr($c_name , 0 , 4).rand(0,1000) ;
    }
}



$sql = "INSERT INTO `signup details`( `Customer_Id`  , `Name`, `PhoneNo`,  `username` , `Email`, `City` , `Password`)
 VALUES ( '{$cusID}' ,'{$c_name}' ,'{$c_phone}', '{$c_username}' ,'{$c_email}','{$c_address}','{$c_password}')";
        
$result = mysqli_query($login_conn , $sql) or die("Query Failed");

//Login him as account is created

session_start();
$_SESSION['Customer_ID'] = $cusID ;
$_SESSION['Name'] = $c_name ;
$_SESSION['username'] = $c_email ;


header('Location: http://localhost/Rhydhm Database/main-page.php');

mysqli_close($login_conn);

?>