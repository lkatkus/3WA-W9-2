<?php
    class Rectangle {
        public $x;
        public $y;
        public $width;
        public $height;

        public function draw(){
            echo '<rect x="'.$this->x.'" y="'.$this->y.'" width="'.$this->width.'" height="'.$this->height.'" fill="'.$this->fill.'"/>';
        }
    }

    $rectangle = new Rectangle();
    $rectangle -> x = '20';
    $rectangle -> y = '20';
    $rectangle -> width = '300';
    $rectangle -> height = '150';
    $rectangle -> fill = 'cyan';

    $rectangle->draw();
?>
