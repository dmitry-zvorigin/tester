<?php 

/**
* 7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
*22 часа 15 минут
*21 час 43 минуты
*/


$data = date('H:i');
list($hour, $min) = explode(':', $data);

// $hour = '21';
// $min = '43';

$arr_str_hour = ['часов', 'часа', 'час'];
$arr_str_min = ['минут', 'минуты', 'минута'];

function format_by_count($count, $arr)
{
    $str = $arr[0];
    $count = abs($count) % 100;
    $lcount = $count % 10;
    if ($count >= 11 && $count <= 19){
        $str = $arr[0];
    }elseif($lcount >= 2 && $lcount <= 4) {
        $str = $arr[1];
    }elseif($lcount == 1){
        $str = $arr[2];
    }
    return $str;
}

echo "$hour " . format_by_count($hour, $arr_str_hour) . " $min " . format_by_count($min, $arr_str_min);