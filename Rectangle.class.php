<?php

    class Rectangle{
        public $x;
        public $y;
        public $width;
        public $height;
        public $color;
        public $opacity;

        public function draw(SvgRenderer $renderer){
            $renderer -> drawRectangle($this -> x, $this -> y, $this -> width, $this -> height, $this -> color);
        }

        public function setLocation($x, $y){
            $this -> x = $x;
            $this -> y = $y;
        }

        public function setSize($width, $height){
            $this -> width = $width;
            $this -> height = $height;
        }

        public function setColor($color){
            $this -> color = $color;
        }

        public function setOpacity($opacity){
            $this -> opacity = $opacity;
        }

    }

?>
