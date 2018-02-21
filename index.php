<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL| E_STRICT);

    spl_autoload_register(function ($class_name){
        include($class_name.'.class.php');
    });
?>

<?php
    // include 'Program.class.php';
    // include 'SvgRenderer.class.php';
    // include 'Shape.class.php';
    // include 'Rectangle.class.php';
    // include 'Square.class.php';
    // include 'Circle.class.php';
    // include 'Ellipse.class.php';
    // include 'CircleFromEllipse.class.php';
    // include 'Triangle.class.php';
    // include 'Polygon.class.php';
    // include 'Text.class.php';
    // include 'Point.class.php';
?>

<?php
    $program = new Program();
    $renderer = new SvgRenderer(600,600,'grey');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>PHP painter</title>
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <h1>PHP PAINTER</h1>

        <?php
            $program->run($renderer);
        ?>

    </body>
</html>
