<?php
    $sum = 1;
    $lastNumber = 0;
    $penNumber = 0;
    $limit = 200;

    while ($sum <= $limit) {
        echo '<p>' . $sum . '</p>';
        $penNumber = $lastNumber;
        $lastNumber = $sum;
        $sum = $lastNumber + $penNumber;
    }
?>