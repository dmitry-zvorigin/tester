<!-- 
Дано время в формате hh:mm. Найдите кратчайший угол между часовой и минутной стрелками на аналоговых часах.

Пример #1
Input
9:00
Output
90 

-->




<?

$line = '9:00';

function getTest($line)
{
    $arr = explode(':', $line);
    $hour = $arr[0];
    $minute = $arr[1];
    $angle = 360;
    $step = 6;
    // один шаг 6 градусов

    echo '<br>';
    print_r ($arr);
    echo '<br>';
    echo $hour;
    echo '<br>';
    echo $minute;
    echo '<br>';
    echo $angle;
    echo '<br>';
    if($hour )

}


getTest($line);
