<?php

    class SvgRenderer{

        public $elements;

        // CONSTRUCTOR FUNCTION. FIRE AS SOON AS SVGRENDERER IS CREATED
        function __construct(){
            $this->elements = [];
        }

        public function run(){
            $svg = '<svg width="500" height="500">';
            $svg .= implode($this->elements);
            $svg .= '</svg>';
            echo $svg;
        }

        public function drawRectangle($x, $y, $width, $height, $color){
            $svg = '<rect x="'.$x.'" y="'.$y.'" width="'.$width.'" height="'.$height.'" fill="'.$color.'"/>';
            array_push($this->elements, $svg);
        }

        public function drawCircle($x, $y, $radius, $color){
            $svg = '<circle cx="'.$x.'" cy="'.$y.'" r="'.$radius.'" fill="'.$color.'"/>';
            array_push($this->elements, $svg);
        }

        public function drawSquare($x, $y, $width, $color){
            $svg = '<rect x="'.$x.'" y="'.$y.'" width="'.$width.'" height="'.$width.'" fill="'.$color.'"/>';
            array_push($this->elements, $svg);
        }

        public function drawEllipse($x, $y, $rx, $ry, $color){
            $svg = '<ellipse cx="'.$x.'" cy="'.$y.'" rx="'.$rx.'" ry="'.$ry.'" fill="'.$color.'"/>';
            array_push($this->elements, $svg);
        }

    }

?>
