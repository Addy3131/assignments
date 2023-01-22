<?php
$num1 = 10;
$num2 = 20;
$num3 = 30;

$largest = ($num1 > $num2) ? (($num1 > $num3) ? $num1 : $num3) : (($num2 > $num3) ? $num2 : $num3);

echo "Largest number among $num1, $num2 and $num3 is $largest";
?>