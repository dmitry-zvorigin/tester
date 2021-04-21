<?php
/** Это шаблон для ясности. В таком виде его не стоит объявлять
* Так будет достаточно
* $data = [];
*/
$data['nick'] = [
    'sity' => '',
    'dostavka' => '',
    'tovars' => [
        'tovar_name' => '',
        'tovar_prise' => '',
    ]
];
 
 
function exists_master($nick, $test_exists = false){
    return $test_exists;
}
function add_master($nick, $sity, $dostavka){
    global $data;
    if(!exists_master($nick)){
        $tovar = [];
        $data[$nick]['sity'] = $sity;
        $data[$nick]['dostavka'] = $dostavka;
        $data[$nick]['tovars'] = [];
    }
}
 
function add_tovar($nick, $name, $prise){
    global $data;
    if(exists_master($nick, true)){
        $data[$nick]['tovars'] = ['tovar_name' => $name, 'tovar_prise' => $prise];
    } else {
        echo 'Мастер отключен в связи с прошедшими праздниками или находится еще там - в празднике';
    }
}
 
add_master('Master_nick', "Minsk", "Да");
add_tovar('Master_nick', "Рога", "100.00");
add_tovar('Master_nick', "Копыта", "25.00");

print_r($data);
