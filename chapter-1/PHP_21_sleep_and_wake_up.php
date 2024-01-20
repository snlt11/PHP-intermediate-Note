<?php


class Index{

    public function __sleep(){
        echo "You are doing serialize " . "<hr>";
        return [];
    }

    public function __wakeup(){
        echo "You are doing unserialize " ;
    }

}

$obj = new Index();
$data = serialize($obj);
$data = unserialize($data);




































?>