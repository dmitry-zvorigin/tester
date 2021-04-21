<!-- На вход подается строка из чисел, разделенных пробелами.

Найдите наиболее часто встречающееся число в строке.

Пример #1
Input
1 2 3 2 4 4 2 5
Output
2 -->


<?php

$line = '1 2 3 2 4 4 2 5';



/*
* Это мое решение
*/

$arr = explode(' ', $line);
$result = array_count_values($arr);
arsort($result);
$result1 = array_key_first($result);
echo ($result1);





/*
* Это правильное решение
*/
$line = trim(fgets(STDIN));
$nums = explode(' ', $line);

$nums2Freq = [];
$currentMaxFreq = 1;
$currentMaxNum = $nums[0];
foreach ($nums as $num) {
    if (!isset($nums2Freq[$num])) {
        $nums2Freq[$num]=1;
    } else {
        $nums2Freq[$num]++;
    }
    if ($nums2Freq[$num] > $currentMaxFreq) {
        $currentMaxFreq = $nums2Freq[$num];
        $currentMaxNum = $num;
    }
}

echo $currentMaxNum;