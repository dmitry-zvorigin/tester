<!-- Дана входная строка со словами. Измените порядок слов в обратном порядке. Словом считается любая последовательность НЕпробельных символов.

Входная строка не содержит пробелов в начале и конце. Каждое слово отделено от другого одним пробелом.

Пример #1
Input
hello world
Output
world hello -->


<?php
/*
* Мой код
*/

$line = "Word";
$result = explode(" ", $line);
if(count($result) == 1){
    echo $line;
}else{
    echo $result[1] . " " . $result[0];
}

/*
* Код правильного решения
*/

$line = "Word";
$words = explode(' ', $line);
while ($words !== []) {
    echo array_pop($words);
    echo ' ';
}