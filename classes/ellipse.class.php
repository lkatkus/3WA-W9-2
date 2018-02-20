<?php
    class Ellipse {
        public $x;
        public $y;
        public $rx;
        public $ry;

        public function draw(){
            echo '<ellipse cx="'.$this->x.'" cy="'.$this->y.'" rx="'.$this->rx.'" ry="'.$this->ry.'" fill="'.$this->fill.'"/>';
        }
    }

    $ellipse = new Ellipse();
    $ellipse -> x = '700';
    $ellipse -> y = '300';
    $ellipse -> rx = '50';
    $ellipse -> ry = '100';
    $ellipse -> fill = 'rgba(0,255,100,0.5)';

    $ellipse->draw();
?>
