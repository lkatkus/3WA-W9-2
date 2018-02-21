<?php

    class SvgRenderer{

        public $elements;

        // CONSTRUCTOR FUNCTION. FIRE AS SOON AS SVGRENDERER IS CREATED
        function __construct($width,$height,$color){
            $this->elements = [];
            $this->width = $width;
            $this->height = $height;
            $this->color = $color;
        }

        public function run(){
            $svg = '<svg width="'.$this->width.'" height="'.$this->height.'" style="background-color:'.$this->color.'">';
            $svg .= implode($this->elements);
            $svg .= '</svg>';
            echo $svg;
        }

        public function drawRectangle($x, $y, $width, $height, $color, $opacity){
            $svg = '<rect x="'.$x.'" y="'.$y.'" width="'.$width.'" height="'.$height.'" opacity="'.$opacity.'" fill="'.$color.'"/>';

            if($this->width < $width || $this->height < $height){
                throw new Exception('=== Element cannot set be outside '.$this->width.' px ===');
            }

            array_push($this->elements, $svg);
        }

        public function drawCircle($x, $y, $radius, $color){
            $svg = '<circle cx="'.$x.'" cy="'.$y.'" r="'.$radius.'" fill="'.$color.'"/>';
            array_push($this->elements, $svg);
        }

        public function drawEllipse($x, $y, $rx, $ry, $color){
            $svg = '<ellipse cx="'.$x.'" cy="'.$y.'" rx="'.$rx.'" ry="'.$ry.'" fill="'.$color.'"/>';
            array_push($this->elements, $svg);
        }

        public function drawTriangle($p1, $p2, $p3, $color){
            $svg = '<polygon points="'.$p1.' ,'.$p2.' ,'.$p3.'" fill="'.$color.'"/>';
            array_push($this->elements, $svg);
        }

        public function drawPolygon($p1, $p2, $p3, $p4, $color){
            $svg = '<polygon points="'.$p1.' ,'.$p2.' ,'.$p3.' ,'.$p4.'" fill="'.$color.'"/>';
            array_push($this->elements, $svg);
        }

        public function drawText($x, $y, $content) {
            $svg = '<text font-family="Arial" font-size="30" fill="red" transform="rotate(45)">'.$content.'</text>';

            array_push($this->elements, $svg);
        }

    }

?>
