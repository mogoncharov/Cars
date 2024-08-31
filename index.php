<?php
    interface Functions {
        public function move();
        public function specialFunction(); 
        public function beep(); 
        public function wipersOn(); 
    }

    abstract class Tech implements Functions {
        private $type;
        private $color;
        private $salon;
        public function __construct($type, $color, $salon)
        {
            $this->type = $type;
            $this->color = $color;
            $this->salon = $salon;
        }
        public function info() {
            echo "Тип: $this->type.<br>";
            echo "Цвет: $this->color.<br>";
            echo "Салон: $this->salon.<br>";
        }
        abstract public function turn ();
    }

    class SpecialClass {
        public function special($object) {
            $object->move();
            $object->specialFunction();
        }
    }

    class Car extends Tech {
        public function move() {
            echo "Едем прямо.<br>";
        }
        public function turn () {
            echo "Поворот налево.<br>";
        }
        public function specialFunction() {
            echo "Закись Азота.<br>";
        }
        public function beep() {
            echo "Клаксон.<br>";
        }
        public function wipersOn() {
            echo "Включаем дворники.<br>";
        }
    }
    class Tank extends Tech {
        public function move() {
            echo "Едем прямо.<br>";
        }
        public function turn () {
            echo "Поворот направо.<br>";
        }
        public function specialFunction() {
            echo "Выстрел.<br>";
        }
        public function beep() {
            echo "Сирена.<br>";
        }
        public function wipersOn() {
            echo "Дворники отсутствуют.<br>";
        }
    }
    class Buldozer extends Tech {
        public function move() {
            echo "Едем прямо.<br>";
        }
        public function turn () {
            echo "Поворот наместе.<br>";
        }
        public function specialFunction() {
            echo "Ковш работает.<br>";
        }
        public function beep() {
            echo "Гудок.<br>";
        }
        public function wipersOn() {
            echo "Включаем дворники.<br>";
        }
    }
    $auto = new Car("Honda Accord", "Серебристый", "Алькантара");
    $auto->info();
    $auto->turn();
    $specialObject = new SpecialClass();
    $specialObject->special($auto);
    $tank = new Tank("Т-90", "Темно желтый", "Сталь");
    $tank->info();
    $tank->wipersOn();
    $specialObject->special($tank);
    $buldozer = new Buldozer("Caterpillar", "Синий", "Металл");
    $buldozer->info();
    $specialObject->special($buldozer);
?>	