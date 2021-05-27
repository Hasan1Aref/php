<?php
$num=5;
$factorial=1;
$count=$num;
while($count>1){
$d=($count-1);
$factorial=$factorial*$d;
$count--;
}
$result=$factorial*$num;
echo $result;




?>