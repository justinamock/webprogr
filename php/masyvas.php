<?php

$arr = ["abcd", "abc", "de", "hjjj", "g", "wer"];

$max = 0;
$min = 99999;

//ilgiausias elementas
foreach ($arr as $value) {
if (strlen($value)> $max){
        $maxItem = $value;
        $max = strlen($value);
    } }

    //trumpiausias elementas
    foreach ($arr as $value) {
        if(strlen($value) < $min){
            $minItem = $value;
            $min = strlen($value);
        }
    }

    echo "MAX: ". $maxItem;
    echo "<br>MIN: ". $minItem;
 ?>
