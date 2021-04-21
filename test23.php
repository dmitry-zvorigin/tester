<!-- На вход дана строка с числами, разделенными пробелами.

Удалите все повторы чисел. Выведите их в любом порядке, разделив пробелами.

Пример #1
Input
0 2 3 1 2
Output
0 1 2 3 
0 2 3 1 
-->

<?php

$line = "0 2 3 1 2";


/*
* Мой код
*/
// $arr = explode(' ', $line);
// $result = array_unique($arr);
// sort($result);
// echo (implode(" ", $result));




/*
* Код правильного решения
*/
$nums = explode(' ', $line);

$numsPrinted = [];
foreach ($nums as $num) {
    if (!isset($numsPrinted[$num])) {
        $numsPrinted[$num] = true;
        echo $num . ' ';
    }
}