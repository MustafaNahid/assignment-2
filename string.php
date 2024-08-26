<?php

$strings = ["Hello", "World", "PHP", "Programming"];
$vowels = ["a", "e", "i", "o", "u"];

for ($i=0; $i<count($strings); $i++) {
    $count = 0;
    $arrayed_str = str_split($strings[$i]);
    for ($j=0; $j<count($arrayed_str); $j++) {
        if (in_array(strtolower($arrayed_str[$j]), $vowels)) {
            $count++;
        }
    };

    $reversed_str = strrev($strings[$i]);
    printf("Original String: $strings[$i], Vowel Count: $count, Reversed String: $reversed_str");
    echo PHP_EOL;
}
