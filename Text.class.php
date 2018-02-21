<?php

    class Text extends Shape{
        public $content;
        public $x;
        public $y;

        public function setContent($content){
            $this->content = $content;
        }
        public function setLocation($x, $y){
            $this->x = $x;
            $this->y = $y;
        }

        public function draw(SvgRenderer $renderer) {
            $renderer -> drawText($this -> x,$this -> y,$this -> content);
        }
    }

?>
