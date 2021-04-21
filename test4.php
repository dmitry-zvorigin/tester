<?php
 
$data = [
    'Мастера' => [
        [
            'Никнейм'  => 'Nick',
            'Город'    => 'Москва',
            'Доставка' => 'Да'
        ],
        [
            'Никнейм'  => 'Чебурашка',
            'Город'    => 'Челябинск',
            'Доставка' => 'Нет'
        ],
        [
            'Никнейм'  => 'Black',
            'Город'    => 'Казань',
            'Доставка' => 'Нет'
        ]
    ],
    'Товары'  => [
        [
            'Наименование' => 'Бетон',
            'Цена'         => 100,
            'Мастер'       => 'Nick'
        ],
        [
            'Наименование' => 'Герб',
            'Цена'         => 150,
            'Мастер'       => 'Nick'
        ],
        [
            'Наименование' => 'Квадрат',
            'Цена'         => 799,
            'Мастер'       => 'Black'
        ]
    ]
];
 
?>
 
<!doctype html>
<html>
<head>
    <title>Document</title>
</head>
<body>
<?php foreach ($data as $key => $datum): ?>
    <h2><?= $key ?></h2>
    <?php $headers = array_keys($datum[0]); ?>
    <table>
        <tr>
            <?php foreach ($headers as $header): ?>
                <th><?= $header ?></th>
            <?php endforeach; ?>
        </tr>
        <?php foreach ($datum as $item): ?>
            <tr>
                <?php foreach ($item as $value): ?>
                    <td><?= $value ?></td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
    </table>
<?php endforeach; ?>
</body>
</html>