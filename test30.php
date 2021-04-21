<!-- На вход подается строка целых чисел, разделенных пробелами.

Нужно найти последовательность подряд идущих чисел, у которой сумма элементов будет максимальной.

Например, для строки "-2 1 -3 4 -1 2 1 -5 4" решением будет последовательность "4 -1 2 1" с максимальной суммой элементов равной "6".

Вывести нужно максимальную сумму подряд идущих элементов.

Нужно учитывать, что последовательность может представлять собой лишь одно число (смотрите пример с отрицательными числами).

Пример #1
Input
-8 -3 -6 -2 -5 -4
Output
-2
Пример #2
Input
-2 1 -3 4 -1 2 1 -5 4
Output
6 -->

<?php

$line = '-8 -3 -6 -2 -5 -4';



/*
* Это мое решение
*/
function getLine ($line)
{
    $arr = explode(' ', $line);
    $lenght = count($arr);
    $array = $arr;
    $max[] = $arr[0];
    for ($i = 0; $i < $lenght; $i++) { 
        $result = [];
        for ($a=0; $a < count($array) ; $a++) { 
            $result[] = $array[$a];
            if (array_sum($result) > array_sum($max)){
                $max = $result;
            }
        }
        array_shift($array);
    }
    return array_sum($max);;
}


print_r (getLine($line));



/*
* Это правильное решение
*/
$line = trim(fgets(STDIN));
$nums = explode(' ', $line);

$numsCount = count($nums);

$maxSumCurrent = $nums[0];
$maxSumTotal = $nums[0];

for ($i = 1; $i < $numsCount; $i++) {
    $num = $nums[$i];

    $maxSumCurrent += $num;
    
    if ($maxSumCurrent < $num) {
        $maxSumCurrent = $num;
    }

    if ($maxSumCurrent > $maxSumTotal) {
        $maxSumTotal = $maxSumCurrent;
    }
}

// echo $maxSumTotal;