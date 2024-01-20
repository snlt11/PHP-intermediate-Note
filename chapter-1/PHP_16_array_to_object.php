<?php

$ary = [
    "one"=> "test1",
    "two"=> "test2",
    "three"=> "test3",
    "four"=> "test4",
];
var_dump($ary);
echo $ary["two"];

$obj = (object) $ary;


echo $obj->one;


?>