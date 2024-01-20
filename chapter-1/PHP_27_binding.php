<?php 

class One{

    public function className(){
        return __CLASS__;
    }
    public function callClassName(){
        echo static::className();
    }

}
class Two extends One{

    public function className(){
        return __CLASS__;
    }

}



$one = new One();
$one->callClassName();
echo "<hr>";
$two = new Two();
$two->callClassName();







?>