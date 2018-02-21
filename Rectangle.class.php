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
            try{
                $renderer -> drawRectangle(
                    $this -> location -> x,
                    $this -> location -> y,
                    $this -> width,
                    $this -> height,
                    $this -> color,
                    $this -> opacity);
            } catch(Exception $error){
                echo $error->getMessage();
            }
        }

        public function setSize($width, $height){
            $this -> width = $width;
            $this -> height = $height;
        }
    }

?>
