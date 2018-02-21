<?php

    class Square extends Rectangle{

        public function setSize($width, $height = 0){ /* SQUARE ONLY NEEDS ONE PARAMETER, SO WE SET HEIGHT TO 0 AND THEN RESET IT TO WIDTH */
            $this -> width = $width;
            $this -> height = $width;
        }
    }

?>
