<?php

for ($i = 1; $i <= 5; $i++) {
    if ($i == 1 || $i == 5) {
        for ($j = 1; $j <= 5; $j++) {
            echo "*";
        }
    } else {
        for ($j = 1; $j <= 1; $j++) {
            echo "*";
        }
    }
    echo "<br>";
}

?>