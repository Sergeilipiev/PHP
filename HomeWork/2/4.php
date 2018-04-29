<?php
//arrays task
//Дано
//$arr = [3, 1, 6, 0, 4, 5]
//
//С помощью цикла foreach найти сумму квадратов элементов этого массива
//Увеличить значение каждого элемента на 1
$sum = 0;
$arr = [3, 1, 6, 0, 4, 5];
foreach ($arr as &$val) {
    $sum+=$val**2;
    $val++;
}
unset($val);
echo $sum.'<pre>';
print_r($arr);

/**
 * Created by PhpStorm.
 * User: Hall
 * Date: 29.04.2018
 * Time: 23:16
 */