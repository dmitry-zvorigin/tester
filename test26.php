<!-- Максимальное произведение двух целых чисел
EASY
На вход подается строка из чисел, разделенных пробелами.
Найдите максимальное произведение двух чисел из этой строки.

Пример #1
Input
1 2 3 4
Output
12 -->


<!-- 
Детали

Input:
-10 8 8 11 6 -10

Ожидаемый output:
100

Актуальный output:
88 
-->


<?php 

$line = '1 2 3 4';

function tester ($line)
{
    $result = [];
    
    $arr1 = explode(' ', $line);
    arsort($arr1);
    $max1 = max($arr1);
    array_shift($arr1);
    $max2 = max($arr1);
    $result[] = $max1 * $max2;


    $arr2 = explode(' ', $line);
    sort($arr2);
    $min1 = min($arr2);
    array_shift($arr2);
    $min2 = min($arr2);
    $result[] = $min1 * $min2;


    $arr3 = explode(' ', $line);
    arsort($arr3);
    $max3 = max($arr3);
    array_shift($arr3);
    sort($arr3);
    $min3 = min($arr3);
    $result[] = $max3 * $min3;

    return max($result);


}
echo tester($line);






/*
* Это правильное решение
*/

$line = trim(fgets(STDIN));

$nums = explode(' ', $line);

$max = $nums[0];
foreach($nums as $i => $num1) {
    foreach($nums as $j => $num2) {
        if ($i === $j) {
            continue;
        }
        $product = $num1 * $num2;
        if ($product > $max) {
            $max = $product;
        }
    }
}
echo $max;












/*
* Это решение если число только положительное.
*/
// function tester ($line)
// {
//     $arr = explode(' ', $line);
//     arsort($arr);
//     $max1 = max($arr);
//     array_shift($arr);
//     $max2 = max($arr);
//     echo $result = $max1 * $max2;
// }



tester($line);