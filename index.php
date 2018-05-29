<?php

function show_grade($score) {
    echo "<h1>Your Score: " . $score . "/100</h1>";
    if($score < 70) {
        echo "<h2>Your grade is D</h2>";
    } else if ( $score < 80 ) {
        echo "<h2>Your grade is C</h2>";
    } else if ( $score < 90 ) {
        echo "<h2>Your grade is B</h2>";
    } else {
        echo "<h2>Your grade is A</h2>";
    }
    echo "<hr />";
}

for($i = 1; $i <= 100; $i++) {
    $score = rand(50, 100);
    show_grade($score);
}
    