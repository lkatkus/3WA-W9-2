<?php

    class Ellipse extends Shape{
        public $rx;
        public $ry;

        public function draw(SvgRenderer $renderer){
            $renderer -> drawEllipse($this -> x, $this -> y, $this -> rx, $this -> ry, $this -> color);
        }

        public function setRadius($rx, $ry){
            $this -> rx = $rx;
            $this -> ry = $ry;
        }
    }

?>
