<?php  

session_start();
if(isset($_SESSION['Customer_ID'])){
    include 'config.php' ; 
    $sr =$_GET['sr'];


$output ='<div class="close closeaddrerss" onclick="closeprofile()"> X </div> ';

$address_sql1 = "SELECT * FROM  `address` WHERE Sr= '{$sr}' " ;
 $address_result1 = mysqli_query($conn , $address_sql1 ) ;
if(mysqli_num_rows( $address_result1) > 0){
while($address = mysqli_fetch_assoc( $address_result1)){

  $output .=  '<form >
    <div class="items">
    <label for="">Blg </label>
    <input type="hidden" name="esr" id="esr" value="'.$sr.'" >
     <input type="text" name="bldgnum" id="ebldgnum" value="'.$address["FlatNo"].'" required >
     <input type="text" name="bldgname" id="ebldgname"  value="'.$address["Bldg"].'" required >
    
    </div>
    
    <div class="items">
    <label for="">Lane</label>
     <input type="text" name="elane" id="elane"   value="'.$address["Lane"].'" required >
    </div>
    <div class="items">
    <label for="">City</label>
     <input type="text" name="ecity"  id="ecity" value="'.$address["City"].'" required >
    
    </div>
    <div class="items">
    <label for="">Town</label>
     <input type="text" name="etown"  id="etown"  value="'.$address['Town'].'" required >
    
    </div>
    <div class="items">
    <label for="">Pincode</label>
     <input type="number" min=4000000  name="epincode"  value="'.$address["PinCode"].'" id="epincode" required >
    
    </div>
    
    
    <div class="buttons" id="eaddresssubmit" name="epass"><button > EDIT </button></div>
     </form> ' ;
    

}

echo $output ;

}else{ echo -1 ;}


}else{    header('Location:'.$hostname.'myProfile.php');    }

?>