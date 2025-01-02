<?php

// Input: s = "racecar", t = "carrace"

// Output: true

function checkIngram($str1, $str2) {

    if( count_chars($str1, 1) == count_chars($str2, 1)) {
        return 'true';
    }

    return 'false';
}


$str1 = "racecar"; 
$str2 = "carrace";
echo checkingram($str1, $str2);