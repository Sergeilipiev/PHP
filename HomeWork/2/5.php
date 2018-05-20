<?php
//5. Дан массив $fruits.
//Каждому вложенному массиву добавить count - количество элементов в массиве (элементы с одинаковым name)
//Удалить дублирующиеся элементы
echo("<br><br>");
$fruits = [
    [
        "name"=> "apple",
        "color"=> "red"
    ],
    [
        "name"=> "orange",
        "color"=> "orange"
    ],
    [
        "name"=> "lemon",
        "color"=> "yellow"
    ],
    [
        "name"=> "apple",
        "color"=> "green"
    ],
    [
        "name"=> "plum",
        "color"=> "violet"
    ],
    [
        "name"=> "plum",
        "color"=> "violet"
    ],
    [
        "name"=> "apple",
        "color"=> "red"
    ],
    [
        "name"=> "lemon",
        "color"=> "yellow"
    ],
    [
        "name"=> "banana",
        "color"=> "yellow"
    ]
];
for ($i=0; $i < count($fruits); $i++) {
    $fruits[$i]['count'] = 1;
    for ($j = count($fruits) - 1; $j > $i; $j--) {
        if ($fruits[$i]['name'] == $fruits[$j]['name']) {
            $fruits[$i]['count'] += 1;
        }
        if ($fruits[$i]['name'] == $fruits[$j]['name'] && $fruits[$i]['color'] == $fruits[$j]['color']){
            array_splice($fruits, $j, 1);
        }
    }
}
var_dump($fruits);