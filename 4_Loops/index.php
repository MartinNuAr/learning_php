<?php
    $sum = 1;
    $lastNumber = 0;
    $penNumber = 0;
    $i = 1;

    while ($sum <= 200) {
        echo '<p>' . $sum . '</p>';
        $penNumber = $lastNumber;
        $lastNumber = $sum;
        $sum = $lastNumber + $penNumber;
    }
?>