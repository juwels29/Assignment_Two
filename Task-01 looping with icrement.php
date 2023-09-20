<?php

//using for loop
function printEvenNumbersWithForLoop($start, $end, $step) {
    for ($i = $start; $i <= $end; $i += $step) {
        
            echo $i . " ";
    }
}

printEvenNumbersWithForLoop(2, 20, 2);

echo PHP_EOL;



//using while loop
function printEvenNumbersWithWhileLoop($start, $end, $step) {
    while ($start <= $end) {
        echo $start . " ";
        $start += $step;
    }
}


printEvenNumbersWithWhileLoop(2, 20, 2);

echo PHP_EOL;


//using do while loop

function printEvenNumbersWithDoWhileLoop($start, $end, $step) {
    do {
        echo $start . " ";
        $start += $step;
    } 
    while ($start <= $end);
}


printEvenNumbersWithDoWhileLoop(2, 20, 2);


























?>