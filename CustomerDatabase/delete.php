<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>Delete Data</title>
    <!--Since same format thus sharing css-->
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
     <h1>Delete Customer Records</h1>

<div class="CusId">
<!--Here I used method get as we used variable $_GET is getting the variable. -->
    <form action="deletedata.php" method='get'>
        <label for="">Customer Id</label>
        <input type="number"  class="cId" name="id" min=0>
    <input type="submit" class="submit" name="delete" value="DELETE">
    </form>
</div>

</div>  


</body>
</html>