<?php
//Рассчитать скорость движения машины и вывести её в удобочитаемом виде.
//Вывод в км/ч, м/c.
//Исходные данные: Пройденный путь - S; Время движения - t.
$s = 177; //км
$t = 290; //минут
$v1 = round($s/($t/60), 2);
$v2 = round($s*1000/($t*60),2);
echo "$v1 км/ч и $v2 м/с";
/**
 * Created by PhpStorm.
 * User: Hall
 * Date: 29.04.2018
 * Time: 14:55
 */