<?php
// Допустим, пользователь вводит названия городов через пробел.
// Вы их присваиваете переменной.
//Переставьте названия так, чтобы названия были упорядочены по алфавиту.

$towns = "Зеленогорск Кронштадт Сестрорецк Ломоносов";
$towns = explode(" ", $towns);
sort($towns);
$sortTowns = "";
foreach ($towns as $val) {
    $sortTowns .= "$val ";
};
echo trim($sortTowns);



/**
 * Created by PhpStorm.
 * User: Hall
 * Date: 04.05.2018
 * Time: 10:22
 */