<?php
    class Polygon {
        public $p1;
        public $p3;
        public $p4;
        public $fill;

        public function draw(){
            echo '<polygon points="'.$this->p1.' ,'.$this->p2.' ,'.$this->p3.'" fill="'.$this->fill.'"/>';
        }
    }

    $polygon = new Polygon();
    $polygon -> p1 = '200,10';
    $polygon -> p2 = '200,200';
    $polygon -> p3 = '300,200';
    $polygon -> fill = 'rgba(255,100,100,0.5)';

    $polygon->draw();
?>
