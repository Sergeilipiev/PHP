<?php
//Создать массив, заполненный цифрами от '1' до '10'.
//Найдите сумму элементов данного массива
//Найдите произведение элементов данного массива
//Выведите на экран его элементы в следующем порядке: 1102837465.
$arr = [1,2,3,4,5,6,7,8,9,10];
$sumarr=0;
$multiarr=1;
foreach ($arr as $val) {
    $sumarr+=$val;
    $multiarr*=$val;
}
echo $sumarr.'<br/>';
echo $multiarr.'<br/>';
echo "$arr[0]$arr[9]$arr[1]$arr[7]$arr[2]$arr[6]$arr[3]$arr[5]$arr[4]";

/**
 * Created by PhpStorm.
 * User: Serzh
 * Date: 06.05.2018
 * Time: 21:12
 */