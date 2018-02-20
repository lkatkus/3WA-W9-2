<?php

    class Program {

        public function run(SvgRenderer $renderer){ /* CLASS INJECTION. CLASS NAME MUST BE SPECIFIED BEFORE PARAMETER NAME */


            $rectangle1 = new Rectangle();
            $rectangle1 -> setLocation(0,0);
            $rectangle1 -> setSize(100,100);
            $rectangle1 -> setColor('green');
            $rectangle1 -> setOpacity(0.5);
            $rectangle1 -> draw($renderer);

            // $renderer->drawRectangle(10,10,100,100,'red');
            // $renderer->drawSquare(150,220,100,'blue');
            // $renderer->drawCircle(120,170,100,'green');
            // $renderer->drawEllipse(300,170,100,50,'rgba(255,0,0,0.5)');

            $renderer->run();
        }

    };

?>
