<?php
function is_Power_of_two($n)
{
   if(($n & ($n - 1)) == 0)
    {
		echo "$n is power of 2";
    }
   else
    {
		echo "$n is not power of 2";
    }
}
is_Power_of_two(64);

?>