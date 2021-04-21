<!-- На вход подается строка из чисел, разделенных пробелами.

Замените каждый элемент строки произведением всех других элементов.

Рассмотрим на примере строки "1 2 3".

Новое значение вместо "1" это "2 * 3 = 6". Для "2" это "1 * 3 = 3". Для "3" это "1 * 2 = 2"

Пример #1
Input
1 2 3
Output
6 3 2 -->

<?php

$line = '0 0 0';



/*
* Это мое решение
*/
function geTing ($line)
{
    $arrs = [];
    $arr = explode(' ', $line);
    foreach ($arr as $key => $value) {
        $result = [];
        foreach ($arr as $keys => $values) {
            if ($key == $keys)
            {

            }else{
                $result[] = $values;
            }
        }
        $arrs[] = array_product($result);
    }
    return implode(' ', $arrs);
}
echo geTing($line);






/*
* Это правильное решение
*/

$line = trim(fgets(STDIN));
$nums = explode(' ', $line);

$product = null;
$productWithoutZero = null;
$zerosCount = 0;
foreach ($nums as $i => $num) {
    if ($product === null) {
        $product = $num;
    } else {
        $product *= $num;
    }
    if ($num == 0) {
        $zerosCount++;
        continue;
    }
    if ($productWithoutZero === null) {
        $productWithoutZero = $num;
    } else {
        $productWithoutZero *= $num;
    }
}
if ($zerosCount > 1) {
    $productWithoutZero = 0;
}

foreach ($nums as $i => $num) {
    if ($num == 0) {
        echo $productWithoutZero . ' ';
        continue;
    }
    echo $product / $num . ' ';
}