<?php 


// class PHP_4_Accessing_class_methods{

//     // var $test = "test1";
//     public function Another($name){
//         echo "This is another testing" . " And " . "$name";

//     }

// }

// $obj = new PHP_4_Accessing_class_methods();
// $obj->Another("this is testing one two three");


class Another{

    public function test($text){
        echo "This is tesing" . "$text";
    }
}
$obj = new Another();
$obj->test("hey what's up guys");








?>