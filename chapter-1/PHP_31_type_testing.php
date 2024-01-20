<?php 
//is_int
// is_float
// is_string
// is_bool
// is_null


class Apple{
    public function showResult($num){
        if(is_null( $num )){
            echo "This is working";
        }else{
            echo "Try Again";
        }
    }
}

$obj = new Apple();
$obj->showResult(null);










?>