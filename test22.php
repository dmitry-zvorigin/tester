<!-- Дана строка с числами, разделенными пробелом.

Найдите все четные числа и выведите их, разделяя пробелами. Порядок чисел должен быть таким же, как и на входе.

Пример #1
Input
1 2 3 4 5 6 7 8 9
Output
2 4 6 8 -->


<?php

$line = "1 2 3 4 5 6 7 8 9";


/*
* Мой код
*/
$line = explode(" ", $line);
    $lines = '';
    foreach ($line as $key => $value) {
        if ($value % 2 == 0){
            $lines .= $value . " ";
        }else{
            unset($value);
        }
    }
echo $lines;


/*
* Код правильного решения
*/

$line = trim(fgets(STDIN));
$nums = explode(' ', $line);
foreach($nums as $num) {
    if ($num % 2 === 0) {
        echo $num . ' ';
    }
}

