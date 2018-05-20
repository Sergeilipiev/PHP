<?php
//Дан массив с элементами ['<p>Some</p>', '<p>info</p>'].
//Создайте новый массив, в котором из элементов будут удалены теги.
$arr = ['<p>Some</p>', '<p>info</p>'];
$arr2 = [];
foreach ($arr as $val) {
    $arr2[]=strip_tags($val);
}
var_dump($arr2);
/**
 * Created by PhpStorm.
 * User: Serzh
 * Date: 06.05.2018
 * Time: 21:23
 */