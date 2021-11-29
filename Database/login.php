<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MN Login Page</title>
    <link rel="stylesheet" href="user.css">
</head>
<body>
    
<div class="datatable">
<form action="<?php $_SERVER['PHP_SELF']; ?>" method='post'>
<div class="editbox">
<div class="group">
<label for="">Username</label>
        <input type="text"  name="user" >
</div>
<div class="group">
<label for="">Password </label>
        <input type="password"  name="pass">
</div>
       
    <input type="submit" class="update" name="login" value="Login">
   
<?php 
if(isset($_POST['login'])){
include 'config.php' ;
$user = $_POST['user'] ;
$pass = $_POST['pass'] ;

$sql = "SELECT *  FROM user 
        WHERE Username = '{$user}' AND Password = '{$pass}' " ;
 
 $result = mysqli_query($conn , $sql) ;
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){

        session_start();
         $_SESSION['E_user'] =  $row['Username'];
         $_SESSION['E_Id'] = mysqli_real_escape_string($conn ,  $row['Employee_ID']);
         $fname = mysqli_real_escape_string($conn ,  $row['fname']);
         $lname = mysqli_real_escape_string($conn ,  $row['lname']);
         $_SESSION['E_name'] =   $fname.' '. $lname ;
         $_SESSION['E_role'] = mysqli_real_escape_string($conn ,  $row['user_role']);

header('Location:'.$hostname.'Database/post.php');
    }
}else{  echo '<h4 class="norecords">Enter Valid Credentials.</h4>' ; }

} //close if of isset

?>

 </div>
</div>
</form>
</div>

</body>
</html>