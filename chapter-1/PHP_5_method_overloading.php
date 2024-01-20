<?php 

// class PHP_5_method_overloading{
   
//     public function doIt($default=10){
//         echo "This is testing and Number is " . $default;
//     }
// }

// $obj = new PHP_5_method_overloading();
// $obj->doIt(40);


class Another{
    public function test($d=10){
        echo "$d";
    }
}
$obj = new Another();
$obj->test("name");




?>