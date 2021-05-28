<?php
function sumOfDigits($num){
    $len=strlen($num);
    $sum=0;
    for($i=1;$i<=$len;$i++){
    $sum+=($num%10);
    $num=$num/10;
    }
    return $sum;
}
$var=9999;
echo sumOfDigits($var);



?>