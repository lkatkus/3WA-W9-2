<?php

    class Rectangle extends Shape{
        public $width;
        public $height;

        public function __construct(){

            parent::__construct();

            $this->width = 100;
            $this->height = 200;
        }

        public function draw(SvgRenderer $renderer){
            $renderer -> drawRectangle($this -> x, $this -> y, $this -> width, $this -> height, $this -> color, $this -> opacity);
        }

        public function setSize($width, $height){
            $this -> width = $width;
            $this -> height = $height;
        }
    }

?>
