<?php
function isPrime($num){
$prime="is prime";
for($i=($num-1);$i>1;$i--){
if($num%$i==0){
    $prime="is not prime";
    break;
}
}
echo "$num  $prime";
}
isPrime(31);


?>