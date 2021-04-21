<!-- То есть, из (1,2,3,4) при циклическом сдвиге влево мы получим (2,3,4,1), 
а если сдвиг выполнялся вправо, то (4,1,2,3). -->


<?php

$arr = [1,2,3,4,5,6,7,8,9,10];

function shiftToRight ($arr, $n)
{
    $n = $n % count($arr);
    $slice = array_splice($arr, -$n);
    return array_merge($slice, $arr);
}

function shiftToLeft ($arr, $n)
{
    $n = $n % count($arr);
    $slite = array_splice($arr, $n);
    return array_merge($slite, $arr);
}

var_dump(shiftToRight($arr, 1));
echo '<br>';
var_dump(shiftToLeft($arr, 1));


