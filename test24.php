<!-- Одна строка является анаграммой другой строки, если из первой можно получить вторую путём перестановки символов.

Примеры анаграмм:

night - thing
cat - act
save - vase
stressed - desserts
Примеры: не являющиеся анаграммами:

save - sale (отличие в буквах v и l)
save - ave (отсутствие буквы s во втором слове)
saaa - ssaa (разное количество букв s и a в словах)
В этой задаче вам нужно написать код, который считает две строки из STDIN и выведет 'yes' если они являются анаграммами друг друга, и 'no' если не являются.

INPUT:
string1
string2

OUTPUT:
yes или no

Пример #1
Input
heart
earth

Output
yes

Пример #2
Input
kek
eke

Output
no -->

<?php


$string1 = 'cat';
$string2 = 'tac';

if (strlen($string1) !== strlen($string2)){
    echo 'NO';
    return;
}

$arr1 = [];
$arr2 = [];

$lenght = strlen($string1);

for ($i = 0; $i < $lenght; $i++) {
    if (isset($arr1[$string1[$i]])) {
        $arr1[$string1[$i]]++;
    } else {
        $arr1[$string1[$i]] = 1;
    }

    if (isset($arr2[$string2[$i]])) {
        $arr2[$string2[$i]]++;
    } else {
        $arr2[$string2[$i]] = 1;
    }
}

foreach ($arr1 as $key => $value) {
    if (!isset($arr2[$key]) || $arr2[$key] !== $value) {
        echo 'NO';
        return;
    }
}

echo "YES";



$test_arr = [1,2,3,4,5,6,7];
var_dump($test_arr);















// $line1 = trim(fgets(STDIN));
// $line2 = trim(fgets(STDIN));

// if (strlen($line1) !== strlen($line2)) {
//     echo 'no';
//     return;
// }

// $lineSymbols1 = [];
// $lineSymbols2 = [];

// $lenght = strlen($line1);
// for ($i = 0; $i < $lenght; $i++) {
//     if (isset($lineSymbols1[$line1[$i]])) {
//         $lineSymbols1[$line1[$i]]++;
//     } else {
//         $lineSymbols1[$line1[$i]] = 1;
//     }

//     if (isset($lineSymbols2[$line2[$i]])) {
//         $lineSymbols2[$line2[$i]]++;
//     } else {
//         $lineSymbols2[$line2[$i]] = 1;
//     }
// }

// foreach ($lineSymbols1 as $symbol => $count) {
//     if (!isset($lineSymbols2[$symbol]) || $lineSymbols2[$symbol] !== $count) {
//         echo 'no';
//         return;
//     }
// }

// echo 'yes';