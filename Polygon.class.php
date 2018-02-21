<?php

    class Polygon extends Shape{
        public $p1;
        public $p2;
        public $p3;
        public $p4;

        public function draw(SvgRenderer $renderer){
            $renderer -> drawPolygon($this -> p1, $this -> p2, $this -> p3, $this -> p4, $this -> color);
        }

        public function setPoint1($x, $y){
            $this -> p1 = $x.' '.$y;
        }

        public function setPoint2($x, $y){
            $this -> p2 = $x.' '.$y;
        }

        public function setPoint3($x, $y){
            $this -> p3 = $x.' '.$y;
        }

        public function setPoint4($x, $y){
            $this -> p4 = $x.' '.$y;
        }
    }

?>
