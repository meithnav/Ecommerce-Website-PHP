<?php 

$sku = $_GET['sku'];

include 'config.php';

$cat_sql = "SELECT Type FROM   `product` 
            WHERE Product_SKU = '{$sku}' " ;

$cat_result = mysqli_query($conn , $cat_sql)  OR die('Product not found');
$cat_row = mysqli_fetch_assoc($cat_result);
echo $category_code = $cat_row['Type'];

$sql = "DELETE FROM `product`
        WHERE Product_SKU ='{$sku}' ; ";
 
 $sql .= "DELETE FROM `details`
 WHERE SKU='{$sku}' ; ";

 $sql .= "DELETE FROM `image`
 WHERE SKU_code ='{$sku}' ; ";

$sql .= "UPDATE `category_table` SET NumberOfType= NumberOfType -1 WHERE `Cat-Code` =  '{$category_code}' " ;

        
$result = mysqli_multi_query($conn , $sql)  OR die('Product not found');


header('Location:'.$hostname.'Database/post.php');
mysqli_close($conn);



?>