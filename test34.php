<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php 
if('POST' == $_SERVER['REQUEST_METHOD']){
    $num_str = $_POST['number'];
    echo getSort($num_str);
    }else{
        echo "<form method='post' action='$_SERVER[PHP_SELF]'>";
        echo "Введите числа: <input type='text' name='number'>";
        echo "<input type='submit' value='Отправить'>";
        echo "</form>";
    }

function getSort($num_str){
    $num_arr = str_split($num_str);
    sort($num_arr);
    return implode($num_arr);
}
?>




    
</body>
</html>