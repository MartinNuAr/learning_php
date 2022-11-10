<?php

    $min = 1;
    $max = 50;
    $guess = 25; // Change this value to test
    $num = rand($min, $max); // Generates the number to guess

    $answer = '<p>The number you entered is out of range.</p>';
    if ($guess >= $min && $guess <= $max){
        $answer = match (true) {
            ($guess < $num) => '<p>The guessed number is smaller than the correct number.</p>',
            ($guess > $num) => '<p>The guessed number is greater than the correct number.</p>',
            default => '<p>You guessed!</p>',
        };
    }

    echo $answer;
    echo '<p>The correct number is: ' . $num . '</p>';

?>