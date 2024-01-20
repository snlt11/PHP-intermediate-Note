<?php






class Index{

    public function __call($method, $args){

        echo"There is no ur calling methods {$method}" . "<hr>" ;
        print_r($args);

    }


}

$obj = new Index();
$obj->asus("one","two","three");



class water{

    public static function __callStatic($method, $args){

        echo "your are call static method {$method} . there is no result " . "<hr>" .print_r( $args, true );

    }

}
water::book("three","two","one");




















































?>