<?php
    class Circle {
        public $x;
        public $y;
        public $radius;

        public function draw(){
            echo '<circle cx="'.$this->x.'" cy="'.$this->y.'" r="'.$this->radius.'" fill="'.$this->fill.'"/>';
        }
    }

    $circle = new Circle();
    $circle -> x = '300';
    $circle -> y = '300';
    $circle -> radius = '200';
    $circle -> fill = 'yellow';

    $circle->draw();
?>
