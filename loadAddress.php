<?php  
session_start() ;
if(isset($_SESSION['Customer_ID'])){
    include 'config.php' ; 

$id = $_SESSION['Customer_ID'] ;
$output = '' ;

$address_sql = "SELECT * FROM  `address` WHERE CustomerID = '{$id}' " ;
  $address_result = mysqli_query($conn , $address_sql ) ;
  if(mysqli_num_rows( $address_result) > 0){
while($address = mysqli_fetch_assoc( $address_result)){
 $output .=  ' <div class="add">

    <div class="close removeadd" data-index="'.$address["Sr"].'"> X </div>
    <span>'.$address["FlatNo"].'  '.$address["Bldg"].',  </span>
    <span>'.$address["Lane"].' ,  </span>
    <span>'.$address["Town"].' - '.$address["PinCode"].', </span>
    <span>'.$address["City"].' .</span>
    <div class="editaddress" data-index="'.$address["Sr"].'"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></div> 
</div> '  ;

}

echo $output ;

}else{
 // echo '<span> No address added.<a onclick="addaddress()"> ADD+ </a></span>' ;
  echo "<h1 class='norecord' >No address added.<span> <a onclick='changeaddress()'> ADD+ </a></span></h1>" ;
}



}else{
    header('Location:'.$hostname.'myProfile.php');

}
?>