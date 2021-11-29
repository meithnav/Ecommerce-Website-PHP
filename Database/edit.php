<?php 
include 'config.php';
session_start();

if(!isset($_SESSION['E_user'])){
    header('Location:'.$hostname.'Database/login.php');

}else{
    //Storing the sessions Data.
    
    $user_role = $_SESSION['E_role'] ;
    $user_id =  $_SESSION['E_Id'];
    $username = $_SESSION['E_user']  ;
    $E_name = $_SESSION['E_name'] ;    
    
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit page</title>
    <link rel="stylesheet" href="user.css">
    <link rel="stylesheet" href="post.css">
</head>
<body>
<div class="user">
<div class="username">
     <a href="logout.php">HELLO <?php echo $_SESSION['E_user'] ; ?></a>
</div>
<div class="group ">
     <a href="user.php">USER</a>
</div>
</div>

<div class="box">
<header> 
       
       <a href="post.php">Home</a>
       <a href="AddData.php">Add</a> 
       <a href="edit.php">Edit</a> 
       <a href="delete.php">Delete</a>
</header>
   


<div class="datatable">
<?php
$sku1 = '';
//Get sku from title bar.
if(isset($_GET['SKU'])){  $sku1 = $_GET['SKU'];  }

?>
     <h1>Update Product Data</h1>

    <form action="<?php $_SERVER['PHP_SELF']; ?>" method='post'>
    <div class="editbox">
<div class="group">
<label for="">SKU </label>
        <input type="text"  name="sku" value="<?php  echo $sku1 ; ?>">
</div>
       
    <input type="submit" class="update" name="Save" value="SHOW">
    </div>
</form>


<?php 
if(isset($_POST['Save'])){
include 'config.php';

$sku = $_POST['sku'];
//Now to check whether if he is not admin then he cant see others post.

$employee_role_sql = "SELECT Product_SKU , E_ID  FROM product
                      WHERE Product_SKU = '{$sku1}' " ;

$result_employee_role = mysqli_query($conn , $employee_role_sql ) OR die("Role Check Query Failed");

$row_employee_role =mysqli_fetch_assoc($result_employee_role) ; 
$Employee_id = $row_employee_role['E_ID'] ;

if( $user_role != 0){ 
    if($user_id != $Employee_id){
    header('Location:'.$hostname.'Database/post.php');
   
    }
}

//check for SQL

$sql_sku_check = "SELECT Product_SKU FROM  product " ;
$result_sku_check = mysqli_query($conn , $sql_sku_check ) OR die("SKU Query Failed");

//counter to tell whether Id is present or not
while($row_sku =mysqli_fetch_assoc($result_sku_check)){ 
    if($sku == $row_sku['Product_SKU'])
    { $skumatch = 'true';  break; /*so as not to compare with other SKU */ }
    else{ $skumatch = 'false' ;}

}
//echo $skumatch ;

if($skumatch){

$sql = "SELECT * FROM product p
        JOIN image i
        ON p.Product_SKU= i.SKU_code 
        JOIN user u
        ON p.E_ID= u.Employee_ID
        JOIN details d
        ON p.Product_SKU= d.SKU
        WHERE Product_SKU = '{$sku}' " ;

$result = mysqli_query($conn , $sql) or die("JOIN Query Failed");


if(mysqli_num_rows($result)> 0){
    while($row = mysqli_fetch_assoc($result)){

?>
<form action="updateproduct.php" method='post' enctype="multipart/form-data">
<div class="editbox">

<div class="group">

        <label for="">Product SKU</label>
        <input type="text" name="new_sku" value="<?php  echo $row['SKU'] ; ?>"  >
        <input type="hidden" name="sku" value="<?php  echo $row['SKU'] ; ?>"  >

    </div>
<!--Category options from database-->
<div class="group">
        <label for="">Product Category</label>
        <input type="hidden" name="old_category" value="<?php  echo $row['Category_Code'] ; ?>">
      <select name="category">
      <option value=""  disabled >Select the Category</option>

<?php include 'config.php';
    
    $category_sql = " SELECT * FROM category_table " ;
    $category_result = mysqli_query($conn , $category_sql) OR die("Category Query Failed");

if(mysqli_num_rows($category_result) >0){
    while($category_row = mysqli_fetch_assoc($category_result)){
        if($category_row['Cat-Code'] == $row['Category_Code'] ){ $active= "selected" ;  }
        else{$active= "" ;}
?>

          <option <?php echo $active ; ?> > <?php echo $category_row['C_Name'] ; ?></option>
          <?php } }?>
    </select>
    </div>

    <div class="group ">
        <label for="" class="textbox">Description</label>
        <textarea name="description"class="description" ><?php  echo $row['title'] ; ?></textarea>
    </div>


    <div class="group">
        <label for="">Price</label>
        <input type="number" name="real_price" min=1 value="<?php  echo $row['RealPrice'] ; ?>">
    </div>
    <div class="group">
        <label for="">Display Price</label>
        <input type="number" name="fake_price" min=1  value="<?php  echo $row['FakePrice'] ; ?>">
    </div>

    </div>

    <div class="editbox">
<!--
    <div class="group">
        <label for="">Material</label>
        <input type="text" name="Material" value="">
    </div>
 -->
    <div class="group">
        <label for="">Weight(in gms)</label>
        <input type="number" name="weight" value="<?php  echo $row['Weight'] ; ?>">
    </div>
    <div class="group">
        <label for="">Dimensions(in cm)</label>
        <input type="text" name="dimensions" value="<?php  echo $row['Dimensions'] ; ?>">
    </div>
    
    </div>
      

<div class="editbox">
<h1>Upload the Images</h1>
<div class="group">
    <input type="file" name="pic" class="file" > 
    </div>
    <div class="group">
    <input type="file" name="pic1" class="file"> 
    </div><div class="group">
    <input type="file" name="pic2" class="file"> 
    </div><div class="group">
    <input type="file" name="pic3" class="file"> 
    </div><div class="group">
    <input type="file" name="pic4" class="file"> 
    </div>
    <div class="group">
    <input type="file" name="pic5" class="file"> 
    </div>

<input type="submit" class="update" value="UPDATE">
</div> <!--Edit box close-->

</form>
<?php  } 

    }else{ echo '<h1> NO RECORD FOUND </h1>' ; }
}


}

include 'config.php';
mysqli_close($conn);

?>
</div>

</div>

</body>
</html>