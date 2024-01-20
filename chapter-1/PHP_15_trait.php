<?php 


// trait one{
//     var $yi = "Yi is one" . "<br>";
//     function one(){
//         echo "fucking one" . "<br>";
//     }

// }
// trait two {
//     var $er = "Er is two" . "<br>";
//     function two(){
//         echo "fucking two" . "<br>";
//     }
// }
// trait three{
//     var $san = "San is three" . "<br>";
//     function three(){
//         echo "fucking thee" . "<br>";
//     }
// }
// trait mama{
//     use one,two,three;
// }

// class PHP_15_trait{
//     use mama;

// }
// $obj = new PHP_15_trait;
// echo $obj->yi;
// echo $obj->er;
// echo $obj->san;
// $obj->one();
// $obj->two();
// $obj->three();




trait one{

    public function one(){
        echo "This is one";
    }
}

trait two{
    public function two(){
        echo "This is two";
    }
}

trait mama{
    use one,two;
}

class Shit{
    use mama;
}

$obj = new Shit;
$obj->one();
echo "<br>";
$obj->two();












?>