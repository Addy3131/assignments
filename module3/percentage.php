<?php

        $Physics =79;
        $Chemistry =89;
        $Biology =90;
        $Mathematics =87;
        $Computer = 78;

$sum=$Physics+$Chemistry+$Biology+$Mathematics+$Computer;
$Percantage=( $sum/ 500.0 ) * 100;

if ($sum >= 90)
    $grade = "A";
else if ($sum >= 80 && $sum < 90)
    $grade = "B";
else if ($sum >= 70 && $sum < 80)
    $grade = "C";
else if ($sum >= 60 && $sum < 70)
    $grade = "D";
else
    $grade = "E";
echo "The Percentage    =" . $Percantage ."<br>";
echo "The Grade         ="  .$grade  ."<br>";


?>