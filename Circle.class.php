<?php

    class Circle extends Shape{
        public $radius;

        public function draw(SvgRenderer $renderer){
            $renderer -> drawCircle($this -> x, $this -> y, $this -> radius, $this -> color);
        }

        public function setRadius($radius){
            $this -> radius = $radius;
        }
    }

?>
