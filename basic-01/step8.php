

<?php 
//8-a
$grocerry=["Eggs", "Milk", "Cheese", "Water Pack", "Tissues", "Watermelon"];
echo  "Hello Sir, do you have $grocerry[0], $grocerry[1], and $grocerry[2]? Also if you sell fruits can I find a $grocerry[5]?";
?>



<?php
//8-b
$grocerryGlobal=array (
    array("Eggs",'balade', 'mazere3'),
    array("Milk",'Fresh', 'Taanayel'),
    array("Water Pack",'Tanoureen', 'Reem')
  );
echo "<br >Hey Sir, Please I need 1 pack of " .$grocerryGlobal[0][1].$grocerryGlobal[0][0]." and 3 ". $grocerryGlobal[2][2]. $grocerryGlobal[2][0];

?>