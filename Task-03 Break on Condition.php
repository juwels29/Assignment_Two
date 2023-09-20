<?php

$first=0;
$second=1;

for($i= 0; $i < 10; $i++){
    
    $next=$first+$second;
    $first=$second;
    $second=$next;

    if($next>100){
        break;
    }

    echo $next. " ";

}





















?>



