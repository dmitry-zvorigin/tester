<!--
На вход подается строка целых уникальных (не повторяющихся) чисел, разделенных пробелами.

Найдите все возможные комбинации пар чисел и выведите их в любом порядке

Пример #1
Input
1 2 3
Output
1 2
1 3
2 1
2 3
3 1
3 2 

-->

<?php 

$line = '1 2 3';

/*
* Это мое решение
*/
function getNum($array)
{   
    $array = explode(' ', $array);
    $arr = [];
    foreach ($array as $value) {
        foreach ($array as $values) {
            if($value == $values){

            }else{
                $arr[] = $value . " " . $values;
            }
        }
    }
    foreach ($arr as $number ) {
        echo $number;
        echo "\n";
    }

}

getNum($line);




/*
* Это правильное решение
*/
$line = trim(fgets(STDIN));
$nums = explode(' ', $line);

foreach ($nums as $i => $num1) {
    foreach ($nums as $j => $num2) {
        if ($i === $j) {
            continue;
        }

        echo $num1 . ' ' . $num2 . PHP_EOL;
    }
}