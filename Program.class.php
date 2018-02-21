<?php

    class Program {

        public function run(SvgRenderer $renderer){ /* CLASS INJECTION. CLASS NAME MUST BE SPECIFIED BEFORE PARAMETER NAME */

            // $rectangle1 = new Rectangle();
            // $rectangle1 -> setLocation(10,50);
            // $rectangle1 -> setSize(100,100);
            // $rectangle1 -> setColor('green');
            // $rectangle1 -> setOpacity(0.5);
            // $rectangle1 -> draw($renderer);
            //
            // $rectangle2 = new Rectangle();
            // $rectangle2 -> setLocation(10,300);
            // $rectangle2 -> setSize(300,50);
            // $rectangle2 -> setColor('cyan');
            // $rectangle2 -> setOpacity(0.5);
            // $rectangle2 -> draw($renderer);
            //
            // $square = new Square();
            // $square -> setLocation(300,400);
            // $square -> setSize(300);
            // $square -> setColor('lime');
            // $square -> setOpacity(0.5);
            // $square -> draw($renderer);
            //
            // $circle1 = new Circle();
            // $circle1 -> setLocation(150,200);
            // $circle1 -> setRadius(100);
            // $circle1 -> setColor('blue');
            // $circle1 -> setOpacity(0.5);
            // $circle1 -> draw($renderer);
            //
            // $ellipse1 = new Ellipse();
            // $ellipse1 -> setLocation(300,130);
            // $ellipse1 -> setRadius(50,100);
            // $ellipse1 -> setColor('orange');
            // $ellipse1 -> setOpacity(0.5);
            // $ellipse1 -> draw($renderer);
            //
            // $circle2 = new CircleFromEllipse();
            // $circle2 -> setLocation(450,250);
            // $circle2 -> setRadius(50);
            // $circle2 -> setColor('magenta');
            // $circle2 -> setOpacity(0.5);
            // $circle2 -> draw($renderer);

            // $triangle1 = new Triangle();
            // $triangle1 -> setPoint1(50,100);
            // $triangle1 -> setPoint2(150,0);
            // $triangle1 -> setPoint3(300,100);
            // $triangle1 -> setColor('yellow');
            // $triangle1 -> setOpacity(0.5);
            // $triangle1 -> draw($renderer);

            $polygon = new Polygon();
            $polygon -> setPoint1(0,150);
            $polygon -> setPoint2(0,250);
            $polygon -> setPoint3(700,100);
            $polygon -> setPoint4(700,0);
            $polygon -> setColor('yellow');
            $polygon -> setOpacity(0.5);
            $polygon -> draw($renderer);

            $text = new Text();
            $text->setLocation('0','50%');
            $text->setContent('Tekstukas Tekstukas Tekstukas Tekstukas Tekstukas Tekstukas');
            $text->draw($renderer);

            $renderer->run();
        }

    };

?>
