<?php
//if task
//Дано
//$begin;
//$end;
//$num;
//
//Если $begin > $end - вывести об этом информацию на экран
//Вывести информацию на экран в зависимости от значения $num:
//$num в диапезоне ($begin, $end)
//$num равен $begin или $end
//$num вне диапезона $begin, $end

$begin = 4;
$end = 36;
$num = 6;

if ($begin > $num) echo '$begin > $num';
if ($num > $begin && $num < $end) echo "$num в диапезоне ($begin, $end)";
if ($num == $begin || $num == $end) echo "$num равен $begin или $end";
if ($num < $begin && $num > $end) echo "$num вне диапезона $begin, $end";
/**
 * Created by PhpStorm.
 * User: Hall
 * Date: 29.04.2018
 * Time: 15:52
 */