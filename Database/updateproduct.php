<?php  include 'config.php' ; 

$sku =  mysqli_real_escape_string( $conn , $_POST['sku']);
$new_sku =mysqli_real_escape_string( $conn , $_POST['new_sku']);
 $category_name =  mysqli_real_escape_string( $conn , $_POST['category']);

$name_sql = "SELECT * FROM `category_table` WHERE C_Name  = '{$category_name}' " ;
$name_result = mysqli_query( $conn , $name_sql ) OR die("sql failed"); 
$row = mysqli_fetch_assoc($name_result);
$category_code = $row['Cat-Code'];
$old_category_code = $_POST['old_category'];

$description =  mysqli_real_escape_string( $conn , $_POST['description']);
$real_price =  mysqli_real_escape_string( $conn , $_POST['real_price']);
$fake_price =  mysqli_real_escape_string( $conn , $_POST['fake_price']);
$weight =  mysqli_real_escape_string( $conn , $_POST['weight']);
$dimensions =  mysqli_real_escape_string( $conn , $_POST['dimensions']);
//$Material =  mysqli_real_escape_string( $conn , $_POST['Material']);
$date = date("d-M-Y");

//writing sql to get the no. of Products of the category 
$fileNo_sql = "SELECT `NumberOfType` FROM `category_table` WHERE `Cat-Code` = '{$category_code}' " ;
$fileNo_result =  mysqli_query( $conn , $fileNo_sql) OR die("File sql failed");
$fileNo_row = mysqli_fetch_assoc($fileNo_result);

$fileNo = $fileNo_row['NumberOfType'] +1;


/* When we add login so for that user info
session_start();
$user_id = $_SESSION['user_id'];
$username = $_SESSION['username'];

*/


//since we only need atleast  one image.
$a= 0 ;
for($i=0 ; $i<=5 ; $i++){ 
    if($i == 0){$a = '' ;}
     else{$a = $i ;}

    $image =  $_FILES['pic'.$a] ;

    /*if(isset($image) ){
   print_r($image) ;  */
   



    if($image['error'] == 0 ){

  //File info
  $image_name =  $image['name']; 
  $image_size =  $image['size'];
  $image_tmp =  $image['tmp_name'];
  $image_type =  $image['type'];
  $image_ext = strtolower(end(explode( '.' , $image_name))) ;
  //echo $image_ext ;
  //to put restriction on the type of file
  $allowed_ext = array( "jpg" , "jpeg" , "png");
  
  //making an array named "error" to store the errors if any
  
  /*
  if($image_size > 2097152){
  
      $error[] = "File size should be less than 2MB."
  }
  */

  if(in_array($image_ext , $allowed_ext) === false){
  
      $error[] = "File type should be either jpg , jpeg , png." ; 
  }

 echo $pic_name = 'pic'.$a.'.'.$image_ext;
 echo $filename = $category_name.$fileNo ;
  $target = 'images/'.$category_name.'/'.$filename.'/'.$pic_name;
  //when no mistakes/errors
  if(empty($error) == true){
  
      move_uploaded_file($image_tmp  , $target) ; 
  } 
}

} //for loop closes

$product_sql = "UPDATE `details` SET `SKU`='{$new_sku}',`title`='{$description}',`RealPrice`='{$real_price}',
                `FakePrice`='{$fake_price}', `Weight`='{$weight}',`Dimensions`='{$dimensions}' 
                WHERE SKU = '{$sku}' ; "  ;


//after login is made dont forget to add epm id name

$product_sql .= "UPDATE `product` SET `Product_SKU`='{$new_sku}' ,`Type`= '{$category_code}', `Date` = '{$date}'
                WHERE Product_SKU = '{$sku}' ; "  ;

         

if($old_category_code != $category_code){
$product_sql .="UPDATE `category_table` SET `NumberOfType`= NumberOfType +1 WHERE `Cat-Code` =  '{$category_code}'; " ;

$product_sql .="UPDATE `category_table` SET `NumberOfType`= NumberOfType -1 WHERE `Cat-Code` =  '{$old_category_code}'; " ;

}

$product_sql .= "UPDATE `image` SET `filename`='{$filename}', `SKU_code`='{$new_sku}' , `Category_Code`='{$category_code}' 
                 WHERE  `SKU_code` ='{$sku}'  " ;      

$product_result = mysqli_multi_query($conn , $product_sql) OR die("Final Query Failed");

mysqli_close($conn);
header('Location:'.$hostname.'Database/post.php');

?>