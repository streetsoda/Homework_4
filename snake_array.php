<?php

function snakeArray($side) {
    $size = $side*$side;
    $arr = range(1, $size);
    $reverse = array_chunk($arr,$side);
	
    foreach ($reverse as $key =>& $value) {
        if ($key % 2 == 1) {
            $value = array_reverse($value);
        }
    }
    return $reverse;
}
function printArray($array) {
    foreach($array as $val) {
        foreach ($val as $number) {
            echo "$number ";
        }
        echo PHP_EOL;
    }
}

if(is_numeric($argv[1]) && $argv[1] >= 1 && $argv[1]%1 == 0) {
    printArray(snakeArray((int)$argv[1]));
} else {
    echo 'Please enter a valid number that is greater than 0';
}
