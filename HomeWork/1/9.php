<?php
//В переменной n хранится натуральное трёхзначное число.
//Необходимо вычислить и вывести на экран сумму цифр числа n.
$n = 726;
echo floor($n/100)+floor($n/10)%10+$n%10;
/**
 * Created by PhpStorm.
 * User: Hall
 * Date: 29.04.2018
 * Time: 15:41
 */