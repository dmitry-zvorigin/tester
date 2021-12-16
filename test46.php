<?php 

//С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), где $val – заданное число, $pow – степень. 

function Power ($val, $pow) {

    if ($pow > 1){
        return $val * Power($val, $pow - 1);
    }
    return $val;
}

echo Power(5, 5);


function powerRecurs($val, $pow)
{
    if ($pow == 0){
        return 1;
    }else{
        return $val * powerRecurs($val, $pow - 1);
    } 
}
echo powerRecurs(5, 5);