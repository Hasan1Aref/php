<?php
function palindrome($word){
    if($word==strrev($word)){
        echo "$word is palindrome";
    }else echo "$word is not palindrome";
}

palindrome("madam");

?>