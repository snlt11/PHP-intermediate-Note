<?php

// class Member{

//     var $name ="u hla" . "<br>";
//     var $email = "testing@gmail.com";
//     public function getData(){
//         echo "This is testing " . $this->name . "<br>";
//     }
// }
// class PHP_12_inheritor extends Member{

// }

// class Alpine extends Member{

// }


// $obj = new PHP_12_inheritor();

// echo $obj->name;
// $obj->getData();

// $job = new Alpine();
// $job->getData();
// echo $job->email;




class Member{

    var $name = "Tun Shwe War";

    var $email = "email test";
    
    public function yo(){
        echo "yo yo";
    }

}

class PHP_12_inheritiance extends Member{

}

class Magic extends Member{

}


$obj = new PHP_12_inheritiance();
$job = new Magic();

echo $job->email;
$job->yo();
echo $obj->name;


















?>