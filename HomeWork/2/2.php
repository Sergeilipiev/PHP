<?php
//switch task
//Дано:
//$day_num = (int) date("N");
//Вывести - рабочая неделя и выходные, в зависимости от дня недели
$day_num = 6;
switch ($day_num):
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo 'Будний день'; break;
    case 6:
    case 7:
        echo 'Выходной день'; break;
    default: echo "Это не день недели";
    endswitch;

/**
 * Created by PhpStorm.
 * User: Hall
 * Date: 29.04.2018
 * Time: 23:01
 */