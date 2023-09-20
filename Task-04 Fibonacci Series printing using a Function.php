<?php
function printFibonacciNumber($n){
    
    $first=0;
    $second=1;
    for($i = 0; $i < $n; $i++){
        $next=$first+$second;
        $first=$second;
        $second=$next;
        echo $next. " ";
    }
}

printFibonacciNumber(15);
