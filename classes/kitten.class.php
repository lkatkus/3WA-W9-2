<?php


    class Kitten {
        public $name; /* SETTING PROPERTY NAME */

        public function moew(){
            // $name = $this -> name;
            // echo $name.' says meow peow!'. "\n";

            echo $this->name.' says meow peow with global!'. "\n";
        }

        public function eat(){
            echo $this->name.' is eating'. "\n";
        }
    }

    $kitten1 = new Kitten(); /* CREATING NEW INSTANCE OF OBJECT */
    $kitten2 = new Kitten(); /* CREATING NEW INSTANCE OF OBJECT */
    $kitten3 = new Kitten(); /* CREATING NEW INSTANCE OF OBJECT */
    $kitten4 = new Kitten(); /* CREATING NEW INSTANCE OF OBJECT */

    $kitten1 -> name = 'Ginger'; /* SETTING PROPERTY 'NAME' VALUE */
    $kitten2 -> name = 'Lucille'; /* SETTING PROPERTY 'NAME' VALUE */
    $kitten3 -> name = 'Tiger'; /* SETTING PROPERTY 'NAME' VALUE */
    $kitten4 -> name = 'Misty'; /* SETTING PROPERTY 'NAME' VALUE */

    echo '=== SEPARATE ==='."\n";
    $kitten1 -> moew(); /* CALLING A FUNCTION DEFINED IN THE CLASS*/
    $kitten2 -> moew(); /* CALLING A FUNCTION DEFINED IN THE CLASS*/
    $kitten3 -> moew(); /* CALLING A FUNCTION DEFINED IN THE CLASS*/
    $kitten4 -> moew(); /* CALLING A FUNCTION DEFINED IN THE CLASS*/

    // $kitten -> eat(); /* CALLING A FUNCTION DEFINED IN THE CLASS*/

    echo '=== ARRAY ==='."\n";
    $cats = array($kitten1,$kitten2,$kitten3,$kitten4);

    foreach ($cats as $cat) {
        $cat -> moew();
    }

?>
