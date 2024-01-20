<?php 

interface Inter{
    public function weapon($name);
}

class Index implements Inter{
    private $name;
    public function weapon($name){
        $this->name = "$name";
    }

    public function kill(){
        echo "Kill with : " . $this->name;
    }

}

$obj = new Index();
$obj->weapon("knife");
$obj->kill();

















