<?php

    class CircleFromEllipse extends Ellipse{

        public function setRadius($rx, $ry = 0){
            $this -> rx = $rx;
            $this -> ry = $rx;
        }
    }

?>
