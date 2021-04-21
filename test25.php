<!-- На вход подается строка из чисел, разделенных пробелами.

Переместите все нули в конец строки. Порядок остальных чисел должен сохраниться.

Пример #1
Input
7 0 39 0 282 2 4 0 45
Output
7 39 282 2 4 45 0 0 0 -->


<?php

$line = "7 0 39 0 282 2 4 0 45";


/*
* Мое решение
*/
$arr = explode(' ',$line);
function test ($arr)
{
    foreach ($arr as $key => $value) {
        if($value == 0)
        {
            unset($arr[$key]);
            array_push($arr,0);
        }
    }
    echo (implode( ' ', $arr ));
}

test($arr);


/*
* Правильное решение
*/
$line = trim(fgets(STDIN));
$nums = explode(' ', $line);

$zerosCount = 0;
foreach ($nums as $num) {
    if ($num == 0) {
        $zerosCount++;
    } else {
        echo $num . ' ';
    }
}

echo str_repeat('0 ', $zerosCount);