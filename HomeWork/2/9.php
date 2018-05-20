<?php
//Создайте массив ['a'=>1, 'b'=2... 'j'=>10]
// из предыдущих массивов.

$keys = range('a','j');
$values = range(1, 10);
$array = array_combine($keys, $values);
var_dump($array);