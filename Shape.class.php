<?php

    class Shape{
        public $x;
        public $y;
        public $color;
        public $opacity;

        public function __construct(){
            $this -> x = 0;
            $this -> y = 0;
            $this -> color = 'black';
            $this -> opacity = 1;
        }

        public function setLocation($x, $y){
            $this -> x = $x;
            $this -> y = $y;
        }

        public function setColor($color){
            $this -> color = $color;
        }

        public function setOpacity($opacity){
            $this -> opacity = $opacity;
        }
    }

?>
