<?php
//Создайте массив. Объедините все элементы массива в строку и выведите её на экран.
$arr = [45, "test", 68, "test2"];
foreach ($arr as $val) {
    $str.= "$val ";
}
echo trim($str);
/**
 * Created by PhpStorm.
 * User: Hall
 * Date: 04.05.2018
 * Time: 20:22
 */