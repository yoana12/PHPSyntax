<?php
    $N = 247;
    $numbers = array();
    for($i = 102; $i <= $N; $i++){
        $num = (string)$i;
        $first = $num[0];
        $second = $num[1];
        $third = $num[2];
        if ($first != $second && $second != $third && $first != $third){
            array_push($numbers, $i);
        }
    }
    if (sizeof($numbers)){
    echo join(', ', $numbers);
    } else { echo 'no'; }

