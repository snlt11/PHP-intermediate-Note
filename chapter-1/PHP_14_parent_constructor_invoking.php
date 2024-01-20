<?php 

class test {

    var $a = "new A";
    public function __construct() {

        echo "This is Parent constructor";
    }

}
class child extends test{
    var $b = "new B";
    // public function __construct() {
    //     parent::__construct();
    //     echo "This is child Constructor";
    // }

}
$obj = new child();
echo "<br>";
echo $obj->a;
echo $obj->b;   







?>