<!-- На вход подается строка из чисел, разделенных пробелами.

Найдите все числа, встречающиеся 2 и более раз. Выведите их в любом порядке, разделяя пробелами.

Пример #1
Input
3 2 5 2 1 3
Output
2 3 -->


<?php 



$line = '3 2 5 2 1 3';


/*
* Это мое решение
*/
$arr = explode(' ', $line);
$result = array_count_values($arr);

$arr = [];
foreach ($result as $key => $value) {
    if($value > 1)
    {
        $arr[] = $key;
    }
}
echo implode(' ' ,$arr);




/*
* Это правильное решение
*/
$line = trim(fgets(STDIN));
$nums = explode(' ', $line);

$duplicatedValues2Count = [];
foreach ($nums as $num) {
    if (!isset($duplicatedValues2Count[$num])) {
        $duplicatedValues2Count[$num] = 1;
    } else {
        $duplicatedValues2Count[$num]++;
    }

    if ($duplicatedValues2Count[$num] === 2) {
        echo $num . ' ';
    }
}