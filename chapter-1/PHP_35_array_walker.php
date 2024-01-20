// $ary = ["1"=>"one","2"=>"two","3"=>"three"];

// function doIt($value, $key) {

//     echo "Key is ". $key ." Value is ". $value ."<hr>";

// }

// array_walk($ary,"doIt");

$num  = 20;
$ary = array("one"=>"1","two"=> "2","three"=> "3","four"=> "4",) ;
array_walk($ary,function($key,$value) use(&$num){
    $var = ++$num;
    echo "key is ".$key." Value is".$value. " next Value is {$var}". "<br>";
}
) ;


