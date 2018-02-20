<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL| E_STRICT);
?>

<?php include 'Program.class.php'; ?>
<?php include 'SvgRenderer.class.php'; ?>
<?php include 'Shape.class.php'; ?>
<?php include 'Rectangle.class.php'; ?>
<?php include 'Circle.class.php'; ?>
<?php include 'Ellipse.class.php'; ?>
<?php include 'Triangle.class.php'; ?>

<?php
    $program = new Program();
    $renderer = new SvgRenderer();
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
