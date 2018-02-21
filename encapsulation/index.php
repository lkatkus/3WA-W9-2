<?php

    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL| E_STRICT);

    class A{
        public $pub = 'a1';
        private $priv = 'b1';
        protected $prot = 'c1';

        public function out(){
            echo 'A pub '.$this -> pub.'<br>';
            echo 'A priv '.$this -> priv.'<br>';
            echo 'A prot '.$this -> prot.'<br>';
        }
    }

    class B extends A{

        public function out(){
            echo 'B pub '.$this -> pub.'<br>';
            echo 'B priv '.$this -> priv.'<br>';
            echo 'B prot '.$this -> prot.'<br>';
        }

    }

    $a = new A;
    $b = new B;

    $a -> out();
    $b -> out();

    echo '<br>';
    echo 'A '.$a -> pub;
    echo '<br>';
    // echo $a -> priv;
    // echo '<br>';
    // echo $a -> prot;
    // echo '<br> B <br>';

    echo '<br>B OBJ<br>';
    echo 'B '.$b -> pub;
    echo '<br>';
    echo 'B '.$b -> priv;
    // echo '<br>';
    // echo 'B '.$b -> prot;


    echo '<pre>';
    var_dump($a);
    var_dump($b);
    echo '</pre>';
    //
    // echo $a -> pub;
    // echo $a -> priv;
    // echo $a -> prot;

    echo $b -> pub;
    echo $b -> priv;
    // echo $b -> prot;

?>
