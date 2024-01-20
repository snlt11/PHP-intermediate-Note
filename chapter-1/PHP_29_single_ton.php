<?php

class indexx{
    
    private static $name ="testing";
    private static $instance;
    private function __construct(){
        self::$name = "new teting";
    }
    public static function getInstance(){
        if(self::$instance == null){
            self::$instance = new indexx();
        }
        return self::$instance;
    }
    public function getName(){
        return self::$name;
    }
}

$obj = new indexx();
echo $obj->getInstance();











