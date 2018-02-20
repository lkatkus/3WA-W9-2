<?php

    class Rectangle extends Shape{
        public $width;
        public $height;

        public function draw(SvgRenderer $renderer){
            $renderer -> drawRectangle($this -> x, $this -> y, $this -> width, $this -> height, $this -> color);
        }

        public function setSize($width, $height){
            $this -> width = $width;
            $this -> height = $height;
        }
    }

?>
