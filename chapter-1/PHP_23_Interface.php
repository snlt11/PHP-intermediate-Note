<?php 

interface Fruit{
    public function apple();
    public function orange();
    public function mango();
    public function strawberry();

}

class Index implements Fruit{

    public function apple(){
        echo "This is apple" . "<hr>";
    }
    public function orange(){
        echo "This is orange" . "<hr>";
    }
    public function mango(){
        echo "This is mango" . "<hr>";
    }
    public function strawberry(){
        echo "This is strawberry" . "<hr>";
    }

}
$obj = new Index();
$obj->apple();
$obj->orange();
$obj->mango();
$obj->strawberry();


?>