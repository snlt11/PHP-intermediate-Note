<?php 

// class PHP_11_destructor{
//     public $t;
//     public function __construct(){
//         echo"This is contructor"."<br>";
//     }

//     public function loopData(){
//         for($i = 0; $i < 100; $i++){
//             $this->t += $i;
//         }
//         echo "Loop Data is "  . $this->t . "<br>";
//     }

//     public function __destruct(){
//         echo "This is destructor";
//     }
    
// }
// $obj = new PHP_11_destructor();
// $obj->loopData();

class PHP_11_destructor{
    public $a;
    public function __construct(){
        echo"Constructor" . "<br>";
    }

    public function loop(){
        for($i = 0; $i < 5; $i++){
            $this->a += $i;
        }
        echo"loop data is " . $this->a . "<br>";
    }

    public function __destruct(){
        echo "Destructor";
    }
}
$obj = new PHP_11_destructor();
$obj->loop();












?>