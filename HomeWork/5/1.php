<?php
//1. Создать фигуры: Circle, Rectangle, Triangle, у которых будут координаты.
// Все фигуры должны иметь методы, которые возвращают
// площадь и периметр (для окружности - длина окружности).

class Circle {
    private $coordinates = [];
    private $r;
    public function __construct(...$coordinates) {
        if (count($coordinates) == 2) {
            $this->coordinates = $coordinates;
            $this->r = sqrt(pow($coordinates[0][0]-$coordinates[1][0],2)+pow($this->coordinates[0][1]-$this->coordinates[1][1],2));
        }
        else return "Координаты окружности заданы не верно";
    }
    public function square () {
        return round(pi()*pow($this->r,2),2);
    }
    public function circumference () {
        return round(2*pi()*$this->r,2);
    }

}
$circle = new Circle([2,5],[5,8]);
echo $circle->square().'<br>';
echo $circle->circumference().'<br>';

class Triangle {
    private $coordinates = [];
    private $a;
    private $b;
    private $c;

    public function __construct(...$coordinates)
    {
        if (count($coordinates) == 3) {
            $this->coordinates = $coordinates;
            $this->a = [$coordinates[0][0], $coordinates[0][1]];
            $this->b = [$coordinates[1][0], $coordinates[1][1]];
            $this->c = [$coordinates[2][0], $coordinates[2][1]];
        } else return "Координаты треугольника заданы не верно";
    }

    public function square()
    {
            return abs(($this->a[0] * ($this->b[1] - $this->c[1])
                    + $this->b[0] * ($this->c[1] - $this->a[1])
                    + $this->c[0] * ($this->a[1] - $this->b[1])) / 2);
    }
    public function perimeter () {
        $ab = sqrt(pow($this->b[0]-$this->a[0],2) + pow($this->b[1]-$this->a[1],2));
        $bc = sqrt(pow($this->c[0]-$this->b[0],2) + pow($this->c[1]-$this->b[1],2));
        $ca = sqrt(pow($this->c[0]-$this->a[0],2) + pow($this->c[1]-$this->a[1],2));
        return $ab+$bc+$ca ;
    }
}
    $triangle = new Triangle([1,1],[10,15],[8,9]);
echo $triangle->square().'<br>';
echo $triangle->perimeter().'<br>';

class Rectangle {
    private $coordinates = [];
    private $a;
    private $b;
    private $c;

    public function __construct(...$coordinates)
    {
        if (count($coordinates) == 4) {
            $this->coordinates = $coordinates;
            $this->a = [$coordinates[0][0], $coordinates[0][1]];
            $this->b = [$coordinates[1][0], $coordinates[1][1]];
            $this->c = [$coordinates[2][0], $coordinates[2][1]];
        } else return "Координаты прямоугольника заданы не верно";
    }

    public function square()
    {
        return abs($this->a[0] * ($this->b[1] - $this->c[1])
                + $this->b[0] * ($this->c[1] - $this->a[1])
                + $this->c[0] * ($this->a[1] - $this->b[1]));
    }
    public function perimeter () {
        $ab = sqrt(pow($this->b[0]-$this->a[0],2) + pow($this->b[1]-$this->a[1],2));
        $bc = sqrt(pow($this->c[0]-$this->b[0],2) + pow($this->c[1]-$this->b[1],2));
        return $ab*2+$bc*2;
    }
}
$rectangle = new Rectangle([1,1],[1,5],[8,5],[8,1]);
echo $rectangle->square().'<br>';
echo $rectangle->perimeter().'<br>';