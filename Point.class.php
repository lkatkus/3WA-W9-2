<?php

    class Point{

        public $x;
        public $y;

        public function __construct(){
            // DEFAULT VALUES
            $this -> x = 0;
            $this -> y = 0;
        }

        public function set($x, $y){
            $this -> x = $x;
            $this -> y = $y;
        }

    }

?>
