<?php
function SumOfDigits($num){
if(strlen($num)==5){
    $d5=$num%10;
    $d4=($num/10)%10;
    $d3=($num/100)%10;
    $d2=($num/1000)%10;
    $d1=($num/10000)%10;
    echo $d1+$d2+$d3+$d4+$d5;
}
}
SumOfDigits(54321);
?>