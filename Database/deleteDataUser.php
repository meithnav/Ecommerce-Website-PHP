<?php  

include 'config.php' ;
$EID = $_GET['EID'] ;

$sql = "DELETE FROM user WHERE EMPLOYEE_ID = '{$EID}' "  ;

$result = mysqli_query($conn , $sql)  ;

header('Location:'.$hostname.'Database/user.php');
mysqli_close($conn);

?>