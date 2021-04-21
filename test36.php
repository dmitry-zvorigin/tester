<!-- 
Сортировка многомерных массивов. 
Функция @array_multisort
Функция @array_column 
-->



<?php 

$ar1 = [
    ['Название' => 'Книга', 'Прайс' => 300],
    ['Название' => 'Машина', 'Прайс' => 12000],
    ['Название' => 'Шуба', 'Прайс' => 3500],
    ['Название' => 'Альбом', 'Прайс' => 100]
        ];


function getSortASC($arr){
    $volume  = array_column($arr, 'Название');
    array_multisort($volume, SORT_ASC , $arr);
    print_r ($arr);
}

getSortASC($ar1);

function getSortDESC($arr){
    $volume  = array_column($arr, 'Прайс');
    array_multisort($volume, SORT_DESC , $arr);
    print_r ($arr);
}

getSortDESC($ar1);

// Сокращение: array_multisort (array_column($arr, 'Прайс'), SORT_DESC, $arr);