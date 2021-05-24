<?php
function isArmestrong($num){
$d3=$num%10;
$d2=($num/10)%10;
$d1=($num/100)%10;
if(($d1**$d3)+($d2**$d3)+($d3**$d3)===$num){
    echo "is armestrong";
}else echo "not armestrong";
}
isArmestrong(153);
?>