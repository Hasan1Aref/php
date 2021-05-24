<?php
function greaterFn($num){
    if($num>30){
        echo "$num is grater than 30 <br>";
    }
    if($num>20){
        echo "$num is grater than 20  <br>";
    }
    if($num>10){
        echo "$num is grater than 10  <br>";
    }else  echo "$num is less than 10  <br>";
  }

greaterFn(40); 
greaterFn(21); 
greaterFn(12); 
greaterFn(8); 



?>