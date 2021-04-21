<?php 

// 15. Напишите требуемую функцию


// Создайте функцию с названием countBasket, с одним параметром - массив позиций в корзине.

// Функция должна посчитать и вернуть сколько всего в корзине товаров (в одной позиции корзины может быть несколько товаров - поле quantity).

// В вашу функцию будут передавать массив следующей структуры:


$basket = [
    [
        'position'=> 'Книга по php',
        'quantity' => 1,
    ],
    [
        'position'=> 'Мышь беспроводная',
        'quantity' => 1,
    ],
    [
        'position'=> 'Процессор',
        'quantity' => 1,
    ],
    [
        'position'=> 'Духи',
        'quantity' => 1,
    ],
];



function countBasket($basket)
{
    $result = 0;
    foreach ($basket as $key => $value) {
        $result += $value['quantity'];
    }
    return $result;
}
echo countBasket($basket);

