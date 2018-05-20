<?php
//Создайте массив, заполненный буквами от 'a' до 'j'.
//Сделайте из него массив с заглавными буквами.
//$arr = ['a','b',];
$arr=range('a','j');
$arr2 = [];
foreach($arr as $i) $arr2[]=strtoupper($i);
var_dump($arr2);
/**
 * Created by PhpStorm.
 * User: Serzh
 * Date: 04.05.2018
 * Time: 22:59
 */