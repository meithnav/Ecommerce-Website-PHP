<?php 
include 'config.php';
session_start();

if(!isset($_SESSION['E_user'])){
    header('Location:'.$hostname.'Database/login.php');

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <!--Since same css thus using it-->
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
     <h1> Add Product Data</h1>


<form action="saveproduct.php" method='post' enctype="multipart/form-data">
<div class="editbox">

<div class="group">

        <label for="">Product SKU</label>
        <input type="text" name="sku">
    </div>
<!--Category options from database-->
<div class="group">
        <label for="">Product Category</label>
      <select name="category">
      <option value=""  selected disabled >Select the Category</option>

<?php include 'config.php';
    
    $category_sql = " SELECT * FROM category_table " ;
    $category_result = mysqli_query($conn , $category_sql) OR die("Category Query Failed");

if(mysqli_num_rows($category_result) >0){
    while($row = mysqli_fetch_assoc($category_result)){
?>

          <option><?php echo $row['C_Name'] ?></option>
          <?php }}?>
    </select>
    </div>

    <div class="group ">
        <label for="" class="textbox">Description</label>
        <textarea name="description"class="description">  </textarea>
    </div>


    <div class="group">
        <label for="">Price</label>
        <input type="number" name="real_price" min=1 >
    </div>
    <div class="group">
        <label for="">Display Price</label>
        <input type="number" name="fake_price" min=1 >
    </div>

    </div>

    <div class="editbox">

    <div class="group">
        <label for="">Material</label>
        <input type="text" name="Material">
    </div>
    <div class="group">
        <label for="">Weight(in gms)</label>
        <input type="number" name="weight" min=1>
    </div>
    <div class="group">
        <label for="">Dimensions(in cm)</label>
        <input type="text" name="dimensions">
    </div>
    
    </div>
      

<div class="editbox">
<h1>Upload the Images</h1>
<div class="group">
    <input type="file" name="pic" class="file"> 
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

<input type="submit" class="update" value="ADD">
</div> <!--Edit box close-->

</form>
</div>  

</body>
</html>