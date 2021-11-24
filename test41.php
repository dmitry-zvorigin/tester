<?php


// 1. Написать функцию, которая в зависимости от переданного 
// числа просклоняет слово программист и выведет строку 
// (1 программист, 2 программиста и тд). Надо чтобы любое число склонялось правильно

for ($i = 1; $i <= 100; $i++){
    $num = $i % 100;
    if ($num > 19) {
        $num = $num % 10;
    }
    if ($num == 1){
        echo "{$i} программист";
        echo '<br>';
    }
    elseif($num >= 11 && $num <= 19){
        echo "{$i} программистов";
        echo '<br>';
    }
    elseif($num >= 2 && $num <= 4){
        echo "{$i} программиста";
        echo '<br>';
    }else{
        echo "{$i} программистов";
        echo '<br>';
    }
}


function test ($num){
    $num = $num % 100;
    if($num > 19){
        $num = $num % 10;
    }
    if($num == 1){
        return "Программист";
    }elseif($num >= 11 && $num <= 19){
        return "Программистов";
    }
    elseif($num >= 2 && $num <= 4){
        return "Программиста";
    }else{
        return "Программистов";
    }
}


for($i = 1; $i <= 100; $i++){
    $result = test($i);
    echo "{$i} {$result}";
    echo "<br>";
}