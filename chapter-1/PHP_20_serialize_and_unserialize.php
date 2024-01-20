<?php 



$ary = [
    ["one","two","three","four"],
    ["one","two","three","four"],
    ["one","two","three","four"],
    ["one","two","three","four"],
    ["one","two","three","four"],
];

$data = serialize($ary);
echo $data . "<hr>";
$normal = unserialize($data);
echo "<pre>". print_r($normal) ."</pre>";













?>