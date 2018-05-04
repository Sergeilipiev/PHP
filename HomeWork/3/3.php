<?php
//Написать функцию - конвертер строки.
//Возможности:
//перевод всех символов в верхний регистр,
//перевод всех символов в нижний регистр,
//перевод всех символов в нижний регистр и первых символов слов в верхний регистр.
//Это должна быть одна функция

function convert ($str, $command) {
    if ($command == "upper") return strtoupper($str);
    else if ($command == "lower") return strtolower($str);
    else if ($command == "uclower") return ucwords(strtolower($str));
    else echo "Не верная комманда";
};
echo (convert("helLO wORlD!!!","uclower"));

/**
 * Created by PhpStorm.
 * User: Hall
 * Date: 04.05.2018
 * Time: 11:48
 */