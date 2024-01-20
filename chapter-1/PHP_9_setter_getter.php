<?php 


// class PHP_9_setter_getter{

//     private $data = "Screen cleaner";

//     public function setData($data){
//         $this->data = $data;
//     }
//     public function getData(){
//         return $this->data;

//     }
// }
// $obj = new PHP_9_setter_getter();
// $obj->setData("barmaso is good");
// echo $obj->getData();


class PHP_9_setter_getter{
    private $test = "Tun shwe war";

    public function setter($data){
        $this->test = $data;
    }
    public function getter(){
        return $this->test;
    }


}

$obj = new PHP_9_setter_getter();
$obj->setter("lovely Myanmar");
echo $obj->getter();

















?>