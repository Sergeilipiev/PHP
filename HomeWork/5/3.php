<?php
//3. Дом строится со следующими характеристиками:
//Что из низ задается через конструктор, а что потом - решайте сами
//1. какое-то количество подъездов
//2. какое-то количество этажей
//3. какое-то количество квартир на этаже
//4. адрес
//У дома должна быть возможность сообщить, сколько в нем квартир - метод
//У дома должна быть возможность показать адрес - метод
//У дома должна быть возможность сообщить, сколько людей в нем живет - метод
//
//Есть очередь людей (массив с объектами класса Human),
//каждый хочет заселиться в дом , но у каждого есть пожелание - этажность дома!
//
//Одновременно в дом можно заселить троих.
//house.add(); при вызове этого метода можно заселить только 3х людей
//
//Людей из списка можно заселять в дом (по квартире на человека),
//если в нем есть еще свободные квартиры
//и если их пожелание можно учесть (желаемый этаж должен быть в доме).
//
//Если человека нельзя поселить, потому что его пожелание не выполняется,
//он перемещяется в конец очереди.
//Если не хватило места - остается на прежнем месте, ждать нового дома

class House {
    private $address;
    private $entrances;
    private $floors;
    private $flats;
    private $totalSettled = 0;
    private $totalFlats;
    private $queue = [];



    public function __construct($address, $entrances = 4, $floors = 9, $flatsOnFloor = 4)
    {
        $this->address = $address;
        $this->entrances = $entrances;
        $this->floors = $floors;
        $this->flats = $flatsOnFloor;
        $this->totalFlats = $this->entrances * $this->floors * $this->flats;
        $count = 1;
        for ($i = 1; $i <= $this->entrances; $i++){
            for ($j = 1; $j <= $this->floors; $j++){
                for ($k = 1; $k <= $this->flats; $k++){
                    $this->queue["entrance#$i"]["floor#$j"]["flat#$count"] = 0;
                    $count++;
                }
            }
        }
    }
    public function showTotalFlats ()
    {
        return $this->totalFlats;
    }
    public function showAddress() {
        return $this->address;
    }
    public function showSettled() {
        return $this->totalSettled;
    }
    public function showQueue() {
        return $this->queue;
    }
    public function add (&$humans)
    {
        $c = 0;
        foreach ($humans as $keyHuman => $human) {
            if ($c == 3) return;
            $settled = false;
            foreach ($this->queue as $keyent => $ent) {
                foreach ($ent as $keyfloor => $floor) {
                    if ($keyfloor === "floor#$human->desiredFloor") {
                        foreach ($floor as $keyflat => $flat) {
                            if ($flat === 0) {
                                $this->queue[$keyent][$keyfloor][$keyflat] = $human->humanName;
                                $this->totalSettled++;
                                $settled = true;
                                unset($humans[$keyHuman]);
                                break 3;
//                                echo $this->totalFlats[$keyent][$keyfloor][$keyflat];
//                                unset($humans[$keyhuman]);
//                                break;

                            }
                        }
                    }
                }
            }
            $c++;
            if (!$settled)  {
                array_push($humans, $humans[$keyHuman]);
                unset($humans[$keyHuman]);
            }
        }
    }

}

class Human {
    public $desiredFloor;
    public $humanName;

    public function __construct($humanName,$desiredFloor)
    {
        $this->humanName = $humanName;
        $this->desiredFloor = $desiredFloor;
    }
}

$house = new House("Санкт-Петербург, пр. Королева 68",2,5,4);
$house2 = new House("Санкт-Петербург, пр. Королева 68 корп. 2",2,5,4);
echo "<pre>";

for ($i = 1; $i <= 40; $i++) $humans[]= new Human("Human#$i",rand(1,5));
echo "Адрес: ".$house->showAddress().'<br>';
echo "Общее количество квартир: ".$house->showTotalFlats().'<br>';


$house->add($humans);
$house->add($humans);
$house->add($humans);
$house->add($humans);
$house->add($humans);
$house->add($humans);
$house->add($humans);
$house->add($humans);
$house->add($humans);
$house->add($humans);

echo "Заселено: ".$house->showSettled().'<br>';

print_r( $house->showQueue());
print_r($humans);

echo "Адрес: ".$house2->showAddress().'<br>';
echo "Общее количество квартир: ".$house2->showTotalFlats().'<br>';
$house2->add($humans);
$house2->add($humans);
$house2->add($humans);
$house2->add($humans);
$house2->add($humans);
$house2->add($humans);
$house2->add($humans);
$house2->add($humans);
$house2->add($humans);
$house2->add($humans);

echo "Заселено: ".$house2->showSettled().'<br>';

print_r( $house2->showQueue());
print_r($humans);