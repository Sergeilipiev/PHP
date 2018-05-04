<?php
//В переменной $date лежит дата в формате '30-11-2017'.
// Преобразуйте эту дату в формат '2017.11.30'.
$date = strtotime('30-11-2017');
$date = date("Y.m.d", $date);
echo $date;
/**
 * Created by PhpStorm.
 * User: Hall
 * Date: 04.05.2018
 * Time: 20:24
 */