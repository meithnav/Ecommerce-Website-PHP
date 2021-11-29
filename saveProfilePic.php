<?php 

session_start();
include 'config.php' ; 

 $UserID = $_SESSION['Customer_ID'] ;

    $image = $_FILES['image'] ;

         $image_name =  $image['name']; 
           $image_tmp =  $image['tmp_name'];
           $image_type =  $image['type'];
           $image_ext = strtolower(end(explode( '.' , $image_name))) ;
           $allowed_ext = array( "jpg" , "jpeg" , "png");
        
           //making an array named "error" to store the errors if any
           
           /*
           if($image_size > 2097152){
           
               $error[] = "File size should be less than 2MB."
           }
           */
   
           if(in_array($image_ext , $allowed_ext) === true){
           
              // $error[] = "File type should be either jpg , jpeg , png." ; 
              $pic_name = $UserID.'.'.$image_ext ; 
              $target = 'CustomerDatabase/ProfilePic/'.$pic_name ;
              move_uploaded_file($image_tmp  , $target) ; 

           }
   
 
           if(empty($error) == true){
        
        } 



    $sql = "UPDATE `signup details` SET Picture = '{$pic_name}' WHERE  Customer_Id = '{$UserID}' " ;
     $result = mysqli_query($conn , $sql) or die("fail");

 header('Location:'.$hostname.'myProfile.php');

 mysqli_close($conn);
           
           ?>































