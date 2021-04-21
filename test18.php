<!-- 18. Практическая задача 3

Создайте функцию task17 с одним параметром $n

Внутри этой функции вам нужно сделать следующее:

1. Заведите переменную: $sum = 0; - сумма чисел делящихся на 5
2. В цикле от 0 до $n (включая) сделайте следующее (должно выполнится только одно из условий):

- если число делится без остатка на 3 – выведите это число, с помощью оператора echo (каждое число на отдельной строке)
- если число делится без остатка на 5 – прибавьте это число к переменной $sum
- если число делится и на 5 и на 3 – то вычтите из $sum единицу

Функция должна вернуть сумму в качестве результата своей работы.

Внимание!
// Для переноса строки используйте:
echo '<br>';
или константу PHP_EOL
echo PHP_EOL;


Для решении задачи запрещено использовать многие другие функции, анонимные функции, преобразование типов, классы, глобальные переменные -->



<?php 

$n = 10;

// function task17($n)
// {
//     $sum = 0;
//     $a = 0;
//     while ($a <= $n) {
//         if(($a % 3 == 0) && ($a % 5 == 0)){
//             $sum -= $a;
//         }elseif($a % 3 == 0){
//             echo $a;
//             echo "<br/>";
//         }elseif($a % 5 == 0){
//             $sum += $a;
//         }
//         ++$a;
//     }
//     return $sum;
// }

function task17($n)
{
    $sum = 0;
    for ($i=0; $i <= $n; $i++) { 
        if(($i % 3 == 0) && ($i % 5 == 0)){
            --$sum;
        }elseif($i % 3 == 0){
            echo $i;
            echo "<br>";
        }elseif($i % 5 == 0){
            $sum += $i;
        }
    }
    return $sum;
}

echo task17($n);
// echo task18($n);

