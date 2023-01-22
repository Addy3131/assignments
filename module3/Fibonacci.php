<?php
 
function Fibonacci($n)
{
    $n1 = 0;
    $n2 = 1;
    echo "Fibonacci-Series: " . $n1 . " " . $n2 . " ";
 
    for ($i = 2; $i < $n; $i++)
    {
        $n3 = $n1 + $n2;
        echo $n3 . " ";
        $n1 = $n2;
        $n2 = $n3;
    }
}
$n = 10;
Fibonacci($n);
 
?>