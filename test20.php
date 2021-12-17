<!-- Числа Фибоначчи - это последовательность чисел, в которой первые два числа это 0 и 1, а каждое следующее число равно сумме двух предыдущих.

В этой задаче вам нужно написать код, который будет выводить первые n чисел этой последовательности.

STDIN:
n - количество чисел для вывода

STDOUT:
последовательность чисел, разделенная пробелами

Пример #1
Input
6
Output
0 1 1 2 3 5
Пример #2
Input
4
Output
0 1 1 2 -->

<?php 

/*
* Мой код
*/
$line = 1;

function fibonacci ($n, $prev1 = 0, $prev2 = 1){
    if($n == 0){
        return;
    }else{
        $current = $prev1;
        echo $current . " ";
        $current = $prev1 + $prev2;
        if ($n >1){
            fibonacci($n-1, $current, $prev1);
        }
    }
}
fibonacci($line);



/*
* Код правильного решения
*/

$n = 1;

if ($n === 0) {
    return;
}

if ($n === 1) {
    echo 0;
    return;
}

$fib = [0, 1];
for($i=1; $i < $n-1; $i++) {
    $fib[] = $fib[$i] + $fib[$i-1];
}

echo implode(' ', $fib);


function Fibbo ($n){
    $num1 = 0;
    $num2 = 1;

    $counter = 0;
    while ($counter < $n)
    {
        echo ' '.$num1;
        $num3 = $num2 + $num1;
        $num1 = $num2;
        $num2 = $num3;
        $counter = $counter + 1;
    }
}
