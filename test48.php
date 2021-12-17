<?php 

// 0, 1, 1, 2, 3, 5, 8, 13, 21, 34, 55, 89, 144, 233, 377, 610, 987, 1597, 2584, 4181, 6765, 10946, 17711
// Числа Фибоначчи

function fibonachiWhile($n) {
    $num1 = 0;
    $num2 = 1;
    $num3 = 0;

    $counter = 0;
    while ($counter < $n) {
        echo $num3 . " ";
        $num3 = $num1 + $num2;
        $num2 = $num1;
        $num1 = $num3;
        $counter = $counter +1;
    }
}

fibonachiWhile(15);

echo "\n";

$number = 15;
$prew1 = 0;
$prew2 = 1;
$prew3 = 0;

for($i = 0; $i < $number; $i++){
        echo $prew3 . " ";
        $prew3 = $prew1 + $prew2;
        $prew2 = $prew1;
        $prew1 = $prew3;
}

echo "\n";

function fibonachi ($n, $prev1 = 0, $prev2 = 1){
    if ($prev1 == 0){
        echo $prev1 . " ";
    }
    $current = $prev1 + $prev2;    
    echo $current . " ";
    if ($n > 2) {
        fibonachi($n - 1, $current, $prev1);
    }
}

fibonachi(15);