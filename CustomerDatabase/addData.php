<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Data</title>
    <!--Since same css thus using it-->
    <link rel="stylesheet" href="edit.css">
</head>
<body>
    
<div class="box">
<header> 
       
       <a href="RhydhmCustomerData.php">Home</a>
       <a href="AddData.php">Add</a> 
       <a href="edit.php">Edit</a> 
       <a href="delete.php">Delete</a>
</header>
   


<div class="datatable">
     <h1> Add Customer Data</h1>

     <div class="editbox">

<form action="saveData2.php" method='post'>
        <input type="hidden" name="Cid">
    <div class="group">
        <label for="">Name</label>
        <input type="text" name="c_name">
    </div>
    <div class="group">
        <label for="">Phone NO.</label>
        <input type="number" name="c_phone" >
    </div>
    <div class="group">
        <label for="">Email</label>
        <input type="email" name="c_email" class="email">
    </div>
    <div class="group">
        <label for="">Address</label>
        <input type="text" name="c_address">
    </div>
        
    <input type="submit" class="update" value="ADD">
    </form>


</div>

</div>  

</body>
</html>