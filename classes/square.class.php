<?php
    class Square {
        public $x;
        public $y;
        public $width;

        public function draw(){
            echo '<rect x="'.$this->x.'" y="'.$this->y.'" width="'.$this->width.'" height="'.$this->width.'" fill="'.$this->fill.'"/>';
        }
    }

    $square = new Square();
    $square -> x = '400';
    $square -> y = '300';
    $square -> width = '150';
    $square -> fill = 'red';

    $square->draw();
?>
