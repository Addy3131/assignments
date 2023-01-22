<?php

$a = '1';
$b = &$a;
$b = "2$b";

echo "A value is: $a <br/>";
echo "B value is: $b <br/>";
	

?>

<!-- here a has value 1 in first line
    then in 2nd line $b variable is given reference to the variable $a so both share same memory
    the value of $b is reassigned to "2" concatenated with the current value of $b,
     So the value of $b becomes "21" 
    and $a also becomes "21" because thry both share same memory-->