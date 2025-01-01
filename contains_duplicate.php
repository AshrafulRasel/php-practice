<?php

//Input: nums = [1, 2, 3, 3]

//Output: true

// Input: nums = [1, 2, 3, 4]

// Output: false

function matchCheck($num){

    $count = count($num);

    $match = 0;

    for ($i=0; $i < $count ; $i++) {
        for ($j= $i+1; $j < $count ; $j++) { 

            if ($num[$i] == $num[$j]) {
                echo 'true';
                return;
            }
        }

    }

    echo 'false';
    return;

}

$num = [1, 2, 3, 4];

matchCheck($num);






