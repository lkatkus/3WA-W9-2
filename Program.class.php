<?php

    class Program {

        public function run(SvgRenderer $renderer){ /* CLASS INJECTION. CLASS NAME MUST BE SPECIFIED BEFORE PARAMETER NAME */

            $rectangle1 = new Rectangle();
            $rectangle1 -> setLocation(10,50);
            $rectangle1 -> setSize(100,100);
            $rectangle1 -> setColor('green');
            $rectangle1 -> setOpacity(0.5);
            $rectangle1 -> draw($renderer);

            $rectangle2 = new Rectangle();
            $rectangle2 -> setLocation(10,300);
            $rectangle2 -> setSize(300,50);
            $rectangle2 -> setColor('cyan');
            $rectangle2 -> setOpacity(0.5);
            $rectangle2 -> draw($renderer);

            $circle1 = new Circle();
            $circle1 -> setLocation(150,200);
            $circle1 -> setRadius(100);
            $circle1 -> setColor('blue');
            $circle1 -> setOpacity(0.5);
            $circle1 -> draw($renderer);

            $ellipse1 = new Ellipse();
            $ellipse1 -> setLocation(300,130);
            $ellipse1 -> setRadius(50,100);
            $ellipse1 -> setColor('orange');
            $ellipse1 -> setOpacity(0.5);
            $ellipse1 -> draw($renderer);

            $triangle1 = new Triangle();
            $triangle1 -> setPoint1(50,100);
            $triangle1 -> setPoint2(150,0);
            $triangle1 -> setPoint3(300,100);
            $triangle1 -> setColor('yellow');
            $triangle1 -> setOpacity(0.5);
            $triangle1 -> draw($renderer);

            $renderer->run();
        }

    };

?>
