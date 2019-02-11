<?php 

function printRhombus ($height) {
    $width = $height;
	
    for ($i = 1; $i <= $height; $i += 2) {
        echo str_repeat('  ', --$width), str_repeat(' #', $i), PHP_EOL;
    }
	
    for ($k = $height-=2; $k >= 0; $k -= 2) {
	    echo str_repeat('  ', ++$width), str_repeat(' #', $k), PHP_EOL;
    }
}

if($argv[1] <= 0 || $argv[1] % 2 == 0 || $argv[1] == NULL) {
    echo 'Please enter odd number that is greater than 0';
} else {
printRhombus($argv[1]);
}	