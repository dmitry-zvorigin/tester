<!-- 
На вход подается строка целых чисел, разделенных пробелами.

Найдите максимальную разницу между двумя элементами строки при условии, что меньшее число должно находиться справа от большего.

Например, для строки "1 6 4 3" правильный ответ: "3" (6-3)

Пример #1
Input
1 6 4 3
Output
3 
-->

<?php 

$line = '1 6 4 3';


/*
* Это мое решение
*/
function getNumber($line)
{
    $arr = explode(' ', $line);
    $num = null;
    foreach ($arr as $key => $value) {
        unset($arr[$key]);
            foreach ($arr as $keys => $values) {
                $result = $value - $values;
                if($result > $num){
                    $num = $result;
                }
            }
    }
    return $num;
}

echo getNumber($line);




/*
* Это правильное решение
*/
$line = trim(fgets(STDIN));
$nums = explode(' ', $line);

$numsCount = count($nums);
$maxDiff = null;
foreach ($nums as $i => $num1) {
    for ($j = $i + 1; $j < $numsCount; $j++) {
        $num2 = $nums[$j];

        if ($num1 <= $num2) {
            continue;
        }
        
        if ($maxDiff === null) {
            $maxDiff = $num1 - $num2;
            continue;
        }

        $maxDiff = max($maxDiff, $num1 - $num2);
    }
}
echo $maxDiff;