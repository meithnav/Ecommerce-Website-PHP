<?php include 'config.php'  ;

$fname = $_POST['fname'] ;
$lname =  $_POST['lname'] ;
$EID1 =  $_POST['EID1'] ;
$username = $_POST['username'] ;
 $password = $_POST['password'] ;
 $new_role =  $_POST['role'] ;
/*
if($_POST['role'] == 'Employee'){
$new_role =  1 ; 
}else{ $new_role =  0; }
*/
$error = array();
//check if EID is not repeated.  
$check_sql = "SELECT EMPLOYEE_ID FROM user
                WHERE EMPLOYEE_ID = '{$EID1}' " ;

$check_result = mysqli_query($conn , $check_sql ) or die("Check query failed");
$check_row = mysqli_fetch_assoc($check_result) ;
$check_ID = $check_row['EMPLOYEE_ID'] ;
if( $check_ID != $EID1){
    if(mysqli_num_rows($check_result) > 0){ 

    $error[] = "<h2 class='norecords'> The Employee ID is taken .</h2>" ; 
    }

}
if(empty($error) == true){

$user_sql2 = " UPDATE `user` SET  `Employee_ID` ='{$EID1}' , `fname` = '{$fname}' , `lname` = '{$lname}' ,  `Username` = '{$username}' , 
            `Password` = '{$password}' , `user_role` = '{$new_role}' 
             WHERE `Employee_ID` = '{$check_ID}' ";         
$user_result2 = mysqli_query($conn , $user_sql2) or die("Update query failed");

header('Location:'.$hostname.'Database/user.php');

}else{  print_r($error[0]); 
    //die();
}


mysqli_close($conn);
?>