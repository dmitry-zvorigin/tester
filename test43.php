<?php 

$menu = [
    [
        'label' => 'Yii framework',
        'url' => 'https://yiiframework.ru'
    ],
    [
        'label' => 'More frameworks',
        'items' => [
            ['label' => 'Laravel', 'url' => 'https://laravel.com/'],
            ['label' => 'Slim', 'url' => 'https://www.slimframework.com/']
        ],
    ],
    [
        'label' => 'Symfony',
        'url' => 'https://symfony.com/'
    ]
];





foreach ($menu as $key => $ul){
    echo "<ul>";
    if (is_array($ul['items'])) {
        echo "<li> {$ul['label']}";
        echo "<ul>";
        foreach ($ul['items'] as $k => $v) {
            echo "<li> {$v['label']} </li>"; 
            echo "<ul> {$v['url']} </ul>";
        }
        echo "</ul>";
        echo "</li>";
    } else {
        echo "<li> {$ul['label']} </li>"; 
        echo "<ul> {$ul['url']} </ul>";
    }
    echo "</ul>";
}



function buildMenu($menu) {
    $html = '<ul>';
    foreach ($menu as $li) {
        if (isset($li['items'])) {
            $html .= "<li>" . buildMenu($li['items']) . "</li>";
        }else{
            $html .= "<li><a href=\"{$li['url']}\">{$li['label']}</li>";
        }
    }
    return $html .= "</ul>";
}

echo buildMenu($menu);

?>
